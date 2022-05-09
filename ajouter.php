<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ajouter</title>
</head>
<style>

</style>
<body>
    <?php
        require_once 'database.php';
        include_once 'nav.php';
    ?>

<div class="container">
    <?php
        if(isset($_POST['ajouter'])){
            $nom=htmlspecialchars( $_POST['nom']);
            $prenom=htmlspecialchars($_POST['prenom']) ;
            $age=htmlspecialchars ($_POST['age']);

            
            if(!empty($nom) && !empty($prenom) && !empty($age)){
                $sqlState= $pdo->prepare('INSERT INTO stagaires VALUES(null, ?, ?, ?)');
                $sqlState->execute([$nom,$prenom,$age]);
                header('location: index.php');
            }else{
                ?>
                    <div class="alert alert-danger" role="alert">
                        toute les champs obligatoire!!!
                    </div>
                <?php
            }
        }
    ?>
    <form>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Nom:</label>
            <input type="text" class="form-control" name="nom">
        </div>
        <div class="mb-3">
            <label class="form-label">Prenom:</label>
            <input type="text" class="form-control" name="prenom" >
        </div>
        <div class="mb-3 ">
            <label  class="form-label">Age:</label>
            <input type="number" class="text" name="age" > 
        </div>
        <button type="submit" class="btn btn-primary" name="ajouter">ajouter stagiaire</button>
        </form>
</div>


</body>
</html>