<?php
    
    require_once 'studentController.php';
    $action = isset($_REQUEST['action'])?$_REQUEST['action']:'';

    switch($_SERVER['REQUEST_METHOD']){
        case 'GET':
            switch($action){
                case 'forma':
                    include_once '../public/studentForm.php';
                    break;
                case 'logout':
                    $sc = new studentController();
                    $sc->logout();
                    break;
            }
            break;
        case 'POST':
            switch ($action) {
                case 'Posalji':
                    $sc = new studentController();
                    $sc->posalji();
                    break;
            }
    }

?>