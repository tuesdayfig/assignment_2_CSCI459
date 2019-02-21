<?php
function get_animals() {
    global $db;
    $query = 'SELECT * FROM mydatabase';
    $statement = $db->prepare($query);
    $statement->execute();
    $animals = $statement->fetchAll();
    $statement->closeCursor();
    return $animals;
}

function get_animal($id) {
    global $db;
    $query = 'SELECT * FROM mydatabase
              WHERE id = :id';
    $statement = $db->prepare($query);
    $statement->bindValue(':id', $id);
    $statement->execute();
    $animal = $statement->fetch();
    $statement->closeCursor();
    return $animal;
}

function delete_animal($id) {
    global $db;
    $query = 'DELETE FROM mydatabase
              WHERE id = :id';
    $statement = $db->prepare($query);
    $statement->bindValue(':id', $id);
    $statement->execute();
    $statement->closeCursor();
}

function add_animal() {
    global $db;
    $query = 'INSERT INTO mydatabase
                 (animal, age, name)
              VALUES
                 (:animal, :age, :name)';
    $statement = $db->prepare($query);
    $statement->bindValue(':animal', $animal);
    $statement->bindValue(':age', $age);
    $statement->bindValue(':name', $name);
    $statement->execute();
    $statement->closeCursor();
}

function update_animal($id, $animal, $age, $name) {
    global $db;
    $query = 'UPDATE mydatabase
              SET animal = :animal,
                  age = :age,
                  name = :name
              WHERE id = :id';
    $statement = $db->prepare($query);
    $statement->bindValue(':animal', $animal);
    $statement->bindValue(':age', $age);
    $statement->bindValue(':name', $name);
    $statement->bindValue(':id', $id);
    $statement->execute();
    $statement->closeCursor();
}
?>