<?php

$title = 'Edit Intern';

ob_start();

?>

<form action="index.php?action=update" method="POST">
    <input type="hidden" name="id" value="<?= $intern->id; ?>">
    <label for="lname" class="form-label"> Last Name : </label>
    <input type="text" id="lname" name="lname" class="form-control" value="<?= $intern->lastName ?>" required>
    <br>
    <label for="fname" class="form-label"> First Name : </label>
    <input type="text" id="fname" name="fname" class="form-control" value="<?= $intern->firstName ?>" required>
    <br>
    <label for="age" class="form-label">Age :</label>
    <input type="number" class="form-control" name="age" value="<?= $intern->age ?>" required>
    <br>
    <label for="login" class="form-label"> Login : </label>
    <input type="text" id="login" name="login" class="form-control" value="<?= $intern->login ?>" required>
    <br>
    <label for="password" class="form-label"> Password : </label>
    <input type="password" id="password" name="pwd" class="form-control" value="<?= $intern->password ?>" required>
    <br>
    <button type="submit" name="Edit" class="btn btn-secondary">Edit</button>
</form>

<?php $content = ob_get_clean() ?>

<?php include_once 'views/layout.php'; ?>
