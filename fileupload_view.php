<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>fileupload_view</title>
    </head>
    <body>
        <?php
            $filepath = "/opt/lampp/htdocs/image/";
            if(isset($_FILES["uploadfile"]["name"])){
                $filepath = $filepath . $_FILES["uploadfile"]["name"];
                if(move_uploaded_file($_FILES["uploadfile"]["tmp_name"], $filepath)){
                    print "アップロードが完了しました";
                    print "<BR>";
                    print $filepath;
                    print "<BR>";
                    $image = "/image/" . $_FILES["uploadfile"]["name"];
                    print "<img src=" . $image . ">";
                    print $_POST["comment"] . "<br>";
                }
                else{
                    print "ファイルの移動に失敗しましたい";
                }
            }
            else{
                print "ファイルが指定されてなかとです";
            }
        ?>
    </body>
</html>
