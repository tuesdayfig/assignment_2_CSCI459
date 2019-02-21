<?php
require('../model/database.php');
require('../model/animal_db.php');

$action = filter_input(INPUT_POST, 'action');
if ($action === NULL) {
    $action = filter_input(INPUT_GET, 'action');
    if ($action === NULL) {
        $action = 'search_animals';
    }
}

//instantiate variable(s)
$animals = array();

if ($action == 'search_animals') {   
    include('animal_search.php');
} else if ($action == 'animal_display') {
    $last_name = filter_input(INPUT_POST, 'last_name');
    $customers = get_customers_by_last_name($last_name);
    include('animal_search.php');
} else if ($action == 'animal_display'){
    $id = filter_input(INPUT_POST, 'id', FILTER_VALIDATE_INT);
    $animal = get_animal($id);
    include('animal_display.php');
} else if ($action == 'update_animal') {
    $id = filter_input(INPUT_POST, 'id', FILTER_VALIDATE_INT);
    $animal = filter_input(INPUT_POST, 'animal');
    $age = filter_input(INPUT_POST, 'age');
    $name = filter_input(INPUT_POST, 'name');

    
    update_animal($id, $animal, $age, $name);

    include('animal_search.php');
}
?>