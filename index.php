<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        // put your code here
        
        if(!isset($_SESSION["USR"])){
            
        
       
        ?>
        
        <form action="valida.php" method="POST">
            <input type="text" name="nomusu">
            <input type="password" name="claveusu">
            <input type="submit" name="Acceder">
          
        </form>
        <?php
        }
            
        ?>
    </body>
</html>
