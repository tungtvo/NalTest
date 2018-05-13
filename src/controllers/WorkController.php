<?php

namespace Src\Controllers;
require_once('src/models/TodoList.php');
use Src\Models\TodoList;

class WorkController {
    public function index() {
        $works = TodoList::listAllWork();
        require_once('src/views/list_work.php');
    }

    public function view() {
        $work = TodoList::view($_GET['id']);
        require_once('src/views/detail_work.php');
    }

    public function add() {
        if (count($_POST) > 0) {
            TodoList::addWork($_POST);
            $msg = 'Add work success !!!';
        }
        require_once('src/views/add_work.php');
        // header("Location:index.php");
    }

    public function edit() {
        if (count($_POST) > 0) {
            TodoList::editWork($_POST, $_GET['id']);
            $msg = 'Edit work success !!!';
        }

        // get current work data
        $work = TodoList::view($_GET['id']);
        require_once('src/views/edit_work.php');
    }

    public function delete() {
        if (isset($_GET['id'])) {
            // Delete id
            $works = TodoList::deleteWork($_GET['id']);
            header("Location:index.php");
        } else {
            echo 'no-id';
        }
    }
}