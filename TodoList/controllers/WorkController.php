<?php

require_once('TodoList/models/TodoList.php');

class WorkController {
    public function index() {
        $works = TodoList::listAllWork();
        require_once('TodoList/views/listwork.php');
    }

    public function add() {
        require_once('TodoList/views/add_work.php');
        // header("Location:index.php");
        if (count($_POST) > 0) {
            TodoList::addWork($_POST);
        }
    }
    public function edit() {
        if (count($_POST) > 0) {
            TodoList::editWork($_POST, $_GET['id']);
        }

        // get current work data
        $work = TodoList::view($_GET['id']);
        require_once('TodoList/views/edit_work.php');
        print_r($work);
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