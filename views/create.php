<?php

$title = 'Add an Intern';

$currentPage = 'add';

ob_start();

?>

<form action="index.php?action=save" method="POST">
    <label for="lname" class="form-label"> Last Name : </label>
    <input type="text" id="lname" name="lname" class="form-control" required>
    <br>
    <label for="fname" class="form-label"> First Name : </label>
    <input type="text" id="fname" name="fname" class="form-control" required>
    <br>
    <label for="age" class="form-label">Age :</label>
    <input type="number" class="form-control" name="age" required>
    <br>
    <label for="login" class="form-label"> Login : </label>
    <input type="text" id="login" name="login" class="form-control" required>
    <br>
    <label for="password" class="form-label"> Password : </label>
    <input type="password" id="password" name="pwd" class="form-control" required>
    <br>
    <button type="submit" name="add" class="btn btn-dark">Add</button>
</form>

<?php $content = ob_get_clean() ?>

<?php include_once 'views/layout.php'; ?>
