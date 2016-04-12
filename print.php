<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

    print "こんにちは";
    $hello = "Hello World!";
    print "<BR>";
    print $hello;
    
    $filelist = `ls -la`;
    print "<PRE>";
    print $filelist;
    print "</PRE>";
    
    $list = ["月","火","水","木","金","土","日"];
    for( $i = 0; $i < 7; $i++ ){
        print $list[$i] . "<BR>";
    }
    
    $dict = ["name" => "Dai", "age" => 40, "Tall" => 178];
    foreach( $dict as $key => $value){
        print $key . " = " . $value . "<BR>";
    }
?>

