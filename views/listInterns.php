<?php

$title = 'List of Interns';

$currentPage = 'index';

ob_start();

?>

<table class="table mt-4 mb-4" style='text-align:center'>
    <thead>
        <tr>
            <th> ID </th>
            <th> Last Name </th>
            <th> First Name </th>
            <th> Age </th>
            <th> Login </th>
            <th> Actions </th>
        </tr>

    </thead>
    <tbody>
        <?php foreach ($interns as $intern): ?>
            <tr>
                <td><?= $intern->id ?></td>
                <td><?= $intern->lastName ?></td>
                <td><?= $intern->firstName ?></td>
                <td><?= $intern->age ?></td>
                <td><?= $intern->login ?></td>
                <td>
                    <a class="btn btn-dark" href="index.php?action=edit&id=<?= $intern->id ?>">Edit</a>
                    <a class="btn btn-dark" href="index.php?action=delete&id=<?= $intern->id ?>">Delete</a>
                </td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>

<a href="index.php?action=create" class="btn btn-dark">Add</a>

<?php $content = ob_get_clean() ?>

<?php include_once 'views/layout.php'; ?>
