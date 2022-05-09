
    <?php
        try{
            $pdo= new PDO('mysql:host=localhost;dbname=stagaires','root','123456');
        }
        catch(PDOException $e){
            echo "<p>Erreur:.$e-> getmessage();
            die() ;
        }

    ?>