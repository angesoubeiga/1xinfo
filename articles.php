<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Article</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style1.css" rel="stylesheet">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link rel="" type="" href="css/navbar.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" integrity="undefined" crossorigin="anonymous">
         <style>
.center1 {
    width: 70%;
    margin-right: auto;
    margin-left: auto;
}

.articles {
    display: flex;
   flex-wrap:wrap;
   align-content: space-around;
}


         </style>


    </head>
    <body>
    <div class="center1"><br><br><br>
    <h1>NOS ARTICLE</h1><br><br>
    <div class="articles">

    <?php
        
        require_once("admin/includes/database.php");
        $req=$db->prepare('SELECT * FROM articles');/*
        on se connecte et on selectionne tout dans les articles de labase de donnés*/
        $req->execute();
        /**
         * tant que la reponse est celui de la requet demandé 
         * nous retounons les données sousforme d'objet
         */

        while ($reponse=$req->fetch(PDO::FETCH_OBJ)) { ?>
        


        <div class="card" style="width: 18rem;">
            <img src="admin/images/<?php echo $reponse->image_name?> " class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title"><?php echo $reponse->titre?></h5>
                 <p class="card-text"><?php echo substr($reponse->contenu,0,100) /**/?></p>
                 <a href="plus.php?title=<?php echo $reponse->titre ?> &contenu=<?php echo $reponse->contenu?>&image_name=<?php echo $reponse->image_name ?>" class="btn btn-primary">Plus</a>
             </div>
         </div>  
       <?php   }
        ?>
         
        </div>
    </div>
    
    </body>
</html>
  