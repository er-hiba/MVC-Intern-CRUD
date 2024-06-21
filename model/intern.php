<?php
function createPDOConnection()
{
    $password = 'your_password';
    $username = 'your_username';
    return new PDO('mysql:host=localhost; dbname=ofppt', $username, $password);
}

function listInterns()
{
    $pdo = createPDOConnection();
    return $pdo->query("SELECT * FROM intern ORDER BY id DESC")->fetchAll(PDO::FETCH_OBJ);
}

function create($lname, $fname, $age, $login, $pwd)
{
    $pdo = createPDOConnection();
    $sqlState = $pdo->prepare('INSERT INTO intern VALUES (null, ?, ?, ?, ?, ?)');
    return $sqlState->execute([$lname, $fname, $age, $login, $pwd]);
}

function edit($id, $lname, $fname, $age, $login, $pwd)
{
    $pdo = createPDOConnection();
    $sqlState = $pdo->prepare('UPDATE intern SET lastName = ?, firstName = ? , age = ?, login = ?, password = ? WHERE id = ?');
    return $sqlState->execute([$lname, $fname, $age, $login, $pwd, $id]);
}

function destroy($id)
{
    $pdo = createPDOConnection();
    $sqlState = $pdo->prepare('DELETE FROM intern WHERE id = ?');
    return $sqlState->execute([$id]);
}

function view($id)
{
    $pdo = createPDOConnection();
    $sqlState = $pdo->prepare('SELECT * FROM intern WHERE id = ?');
    $sqlState->execute([$id]);
    return $sqlState->fetch(PDO::FETCH_OBJ);
}
