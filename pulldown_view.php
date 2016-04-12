<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>pulldown view</title>
    </head>
    <body>
        <?php
        // put your code here
            if(isset($_POST["blood"])){
                if( $_POST["blood"] == "A" || $_POST["blood"] == "B" 
                    ||    $_POST["blood"] == "O" || $_POST["blood"] == "AB"){
                    print "血液型は";
                    print $_POST["blood"];
                }
                else{
                    print "選択しろって";
                }
            }
            else{
                print "選択しろ";

            }
        ?>
    </body>
</html>
