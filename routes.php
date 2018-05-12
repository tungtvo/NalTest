<?php
  function call($controller, $action) {
    // require the file that matches the controller name
    require_once('TodoList/controllers/' . $controller . '.php');

    // create a new instance of the needed controller
    switch($controller) {
      case 'WorkController':
        $controller = new WorkController();
      break;
    }

    // call the action
    $controller->{ $action }();
  }

  call($controller, $action);
?>