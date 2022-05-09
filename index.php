<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>


<?php
    require_once 'database.php';
    include_once 'nav.php';
    $sqlState= $pdo->query('SELECT * FROM stagaires');
    $stagaires= $sqlState->fetchAll(PDO::FETCH_ASSOC);
   // echo"<pre>";
   // print_r($stagaires); 
   // echo"</pre>";
?>
<div class="container">
    <a href="ajouter.php" class="link float-end btn btn-primary btn-sm">ajouter</a>
<table class="table table-info">
<thead>
    <tr>
        <th scope="col">#</th>
        <th scope="col">nom</th>
        <th scope="col">prenom</th>
        <th scope="col">age</th>
        <th scope="col">actions</th>

        
    </tr>
</thead>
<tbody>
    <?php
    foreach($stagaires as $stagaire){
        ?>
        <tr>
            <td><?=$stagaires['id']?></td>
            <td><?=$stagaires['nom']?></td>
            <td><?=$stagaires['prenom']?></td>
            <td><?=$stagaires['age']?></td>
            <td>
                <form methode="post" action="supprimer.php">
                    <input type="hidden" name="id" value="<?php echo $stagaires->id?>">
                    <input class="btn btn-warning btn-sm" type="submit" value="modifier" name="modifier">
                    <input class="btn btn-danger btn-sm" type="submit" value="supprimer" name="supprimer"onclik="return confirm('voulez vous supprimer le stagaire')>

                </form>

            </td>
        </tr>
        <?php
    }
        ?>
</tbody>
</table>
</div>  
</body>
</html>