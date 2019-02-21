# Create the user
create user 'user1' identified by 'user1';

# Allow it to do anything
grant all privileges on *.* to 'user1';
