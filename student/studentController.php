<?php
    require_once 'StudentDAO.php';
    session_start();
    class studentController{

        function posalji(){

            $smer = isset($_POST['smer'])?$_POST['smer']:'';

            if(!empty($smer)){
                
                $dao = new StudentDAO();
                $prosekSmera = $dao->getProsekSmer($smer); //{ ["avg"]=> string(8) "7.090000" }
                $veciProsek = $dao->getVeciProsek($prosekSmera['avg']);

                $_SESSION['student'] = $veciProsek;
                
                include_once '../public/prikaz.php';
            
            }else{
                $msg = 'Morate popuniti smer!';
                include_once '../public/studentForm.php';
            }

        }

        function logout(){
            if(isset($_SESSION['student'])){
                session_unset();
                session_destroy();
                include_once '../index.php';
            }
        }

    }
?>