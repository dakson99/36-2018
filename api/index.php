<?php
require 'flight/Flight.php';
require_once '../student/StudentDAO.php';


Flight::route('/', function(){
    echo 'Pozdrav!';
});


Flight::route('GET /studenti/@prosek', function($prosek){
    $dao = new StudentDAO();
    echo json_encode($dao->getVeciProsek($prosek));
});

Flight::route('GET /studenti/@smer', function($smer){
    $dao = new StudentDAO();
    echo json_encode($dao->getProsekSmer($smer));
});

Flight::start();
