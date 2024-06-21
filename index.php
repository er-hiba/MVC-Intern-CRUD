<?php

require_once 'controller/internController.php';

if (isset($_GET['action'])) {
    $action = $_GET['action'];

    switch ($action) {
        case 'create':
            createAction();
            break;

        case 'list':
            indexAction();
            break;

        case 'destroy':
            destroyAction();
            break;

        case 'delete':
            deleteAction();
            break;

        case 'edit':
            editAction();
            break;

        case 'save':
            saveAction();
            break;

        case 'update':
            updateAction();
            break;
    }
}
