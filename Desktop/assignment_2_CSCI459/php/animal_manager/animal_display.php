<?php include '../view/header.php'; ?>
<main>
    <h2>View/Update Animal</h2>
    <form action="." method="post" id="aligned">
        <input type="hidden" name="action" value="update_animal">
        <input type="hidden" name="id" 
               value="<?php echo htmlspecialchars($animal['id']); ?>">

        <label>Animal Type:</label>
        <input type="text" name="animal" 
               value="<?php echo htmlspecialchars($animal['animal']); ?>"><br>

        <label>Age:</label>
        <input type="text" name="age" 
               value="<?php echo htmlspecialchars($animal['age']); ?>"><br>

        <label>Name:</label>
        <input type="text" name="name" 
               value="<?php echo htmlspecialchars($animal['name']); ?>" 
               size="50"><br>

        <label>&nbsp;</label>
        <input type="submit" value="Update Animal"><br>
    </form>
    <p><a href="animal_search.php">Search Animals</a></p>
</main>
<?php include '../view/footer.php'; ?>