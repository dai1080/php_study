<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>session</title>
    </head>
    <body>
        <?php
            session_start();
            
            if(isset($_SESSION["counter"])){
                $_SESSION["counter"]++;
                print "あなたは";
                print $_SESSION["counter"];
                print "回目の訪問です";
            }
            else{
                print "あなたは初めての訪問です";
                $_SESSION["counter"] = 1;
            }
        ?>
    </body>
</html>
