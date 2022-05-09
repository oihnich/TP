<?php 
if(isset($_POST['supprimer'])){
    require_once 'database.php';
    $id=$_POST['id'];
    $sqlState= $pdo->prepare('DELETTE FROM stagaires WHERE id=?');
                $sqlState->execute([$id]);
                header('location: index.php');


}
?>