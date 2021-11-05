        <?php

        var_dump($_POST);
        
            $link=new mysqli('localhost','root','','novin');
            $link->set_charset("utf8");
            $sql="INSERT INTO message(fulname,email,title,bigtext) VALUES('{$_POST['fulname']}', '{$_POST['email']}',
            '{$_POST['title']}','{$_POST['bigtext']}' )";
                
        $result=$link->query($sql);
        $link ->close();
        ?>
        
       
