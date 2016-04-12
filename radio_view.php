<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

if(isset($_POST["gender"]) && $_POST["gender"] == "man" || $_POST["gender"] == "woman"){
    print "性別<br>";
    print $_POST["gender"];
    print "<BR>";
    
}
else{
    print "性別を選択しろよな";
}