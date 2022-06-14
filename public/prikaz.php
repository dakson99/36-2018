<?php

    require_once '../student/StudentDAO.php';

    if(!isset($_SESSION)) session_start();
    if($_SESSION['student']!=''){
        $studenti = $_SESSION['student'];
        //var_dump($studenti);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prikaz</title>
</head>
<body>
    Spisak studentata <br><br>
    <table border="1">
        <tr>
            <th>Id</th>
            <th>Smer</th>
            <th>BrIndeksa</th>
            <th>Prosek</th>
        </tr>

    <?php foreach($studenti as $s) {?>
        <tr>
            <td><?=$s['id'] ?></td>
            <td><?=$s['smer'] ?></td>
            <td><?=$s['brIndexa'] ?></td>
            <td><?=$s['prosek'] ?></td>
        </tr>
    <?php } ?>
    </table>
    <a href="../?action=logout">Logout</a>
</body>
</html>
<?php
            
    }else{
        header('Location: ../index.php');
    }

?>