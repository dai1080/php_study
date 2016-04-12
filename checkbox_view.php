<html>
    
    <head>
        <title>チェックボックスView</title>
    </head>
    <body>
<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

if(isset($_POST["hobby"])){
    $hobby = implode("と",$_POST["hobby"]);
    print "趣味は";
    print $hobby;
    print "<br>";
}
else{
    print "無趣味";
}

?>
</body>
</html>
