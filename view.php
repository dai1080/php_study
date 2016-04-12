<HTML>
    <HEAD>
        <TITLE>
            PHPのテスト
        </TITLE>
    </HEAD>
    <body>
        <?php
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
            print htmlspecialchars($_POST["mail_to"]);
            print "<br>";
            print htmlspecialchars($_POST["mail_subject"]);
            print "<br>";
            print nl2br(htmlspecialchars($_POST["mail_body"]));
            print "<br>";
        ?>
    </body>

