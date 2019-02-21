<?php include '../view/header.php'; ?>
<main>

    <h2>Animal List</h2>
    <table>
        <tr>
            <th>Type</th>
            <th>Age</th>
            <th>Name</th>
            <th>&nbsp;</th>
        </tr>
        <?php foreach ($animals as $animal) : ?>
        <tr>
            <td><?php echo htmlspecialchars($animal['animal']); ?></td>
            <td><?php echo htmlspecialchars($animal['age']); ?></td>
            <td><?php echo htmlspecialchars($animal['name']); ?></td>
            <td><form action="." method="post">
                <input type="hidden" name="action" value="display_animal" />
                <input type="hidden" name="id"
                       value="<?php echo htmlspecialchars($animal['id']); ?>" />
                <input type="submit" value="Select" />
            </form></td>
        </tr>
        <?php endforeach; ?>
    </table>

</main>
<?php include '../view/footer.php'; ?>