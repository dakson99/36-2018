<?php
    require_once '../student/StudentDAO.php';

    $dao = new StudentDAO();
    var_dump($dao->getProsekSmer('RI'));
    //var_dump($dao->getVeciProsek(6.50));
?>