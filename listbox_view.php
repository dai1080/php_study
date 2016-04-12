<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>listbox view</title>
    </head>
    <body>
        <?php
        
            if(isset($_POST["hobby"])){
                print "私の趣味は以下<BR>";
                foreach( $_POST["hobby"] as $hobby ){
                    print $hobby;
                    print "<BR>";
                }
            }
            else{
                print "無趣味";
            }
        ?>
    </body>
</html>
