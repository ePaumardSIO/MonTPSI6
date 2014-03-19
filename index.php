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
        <style>
        </style>
    </head>
    <body>
        <form action="index.php" method="post">
        X:<input type="text" name="x" style="width: 50px">
        Y:<input type="text" name="y" style="width: 50px">
        Hauteur:<input type="text" name="h" style="width: 50px">
        Largeur:<input type="text" name="l" style="width: 50px">
        Couleur bordure:<input type="text" name="cb" style="width: 50px">
        Couleur fond:<input type="text" name="cf" style="width: 50px">
        <input type="submit" value="Valider">
        </form>
        <?php
        require('rectangle.php');
        require('Point.php');
        $p=new rectangle($_POST["x"],$_POST["y"],$_POST["cb"],$_POST["h"],$_POST["l"],$_POST["cf"]);
        //$p=new Point(200,200,"red");
        $p->afficher();
        
        ?>
       
    </body>
</html>
