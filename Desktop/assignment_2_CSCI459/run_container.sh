# Change into the mysql directory and build the sample image
pushd mysql #changes to the mysql dir
docker build -t mysqlcsci . #build image
popd


# Run the container starting the database
docker run --rm --name mydatabase -d mysqlcsci #sm container. mysql sample image

sleep 5

# Create a non-root user
docker exec -i mydatabase mysql -uuser1 -puser1 < mysql/createuser.sql

# Create the sample database and a table in the database. Load some data
docker exec -i mydatabase mysql -ucsci459 < mysql/createdata.sql

# Print the contents of the database
docker exec -i mydatabase mysql -ucsci459 -e "select * from testdb.testtab;"

# Change into the webserver directory and build the sample image
pushd php
docker build -t phpcsci .
popd

# Run the container starting the webserver
docker run --rm --name phpserver --link mydatabase:mysql -p 8080:80 -d phpcsci
#sample-database container