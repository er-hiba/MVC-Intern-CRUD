<?php
require_once 'model/intern.php';

function indexAction()
{
    $interns = listInterns();
    require_once 'views/listInterns.php';
}

function createAction()
{
    require_once 'views/create.php';
}

function saveAction()
{
    $lname = $_POST['lname'];
    $fname = $_POST['fname'];
    $age = $_POST['age'];
    $login = $_POST['login'];
    $pwd = $_POST['pwd'];
    $isCreated = create($lname, $fname, $age, $login, $pwd);
    header('location: index.php?action=list');
}

function editAction()
{
    $id = $_GET['id'];
    $intern = view($id);
    require_once 'views/edit.php';
}

function updateAction()
{
    $lname = $_POST['lname'];
    $fname = $_POST['fname'];
    $age = $_POST['age'];
    $login = $_POST['login'];
    $pwd = $_POST['pwd'];
    $id = $_POST['id'];
    edit($id, $lname, $fname, $age, $login, $pwd);
    header('location: index.php?action=list');
}

function deleteAction()
{
    $id = $_GET['id'];
    require_once 'views/delete.php';
}

function destroyAction()
{
    destroy($_GET['id']);
    header('location: index.php?action=list');
}
