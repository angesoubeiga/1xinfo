<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Article</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link rel="" type="" href="css/navbar.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" integrity="undefined" crossorigin="anonymous">

         <style>
         
          .center1 {
    width: 60%;
    margin-right: auto;
    margin-left: auto;
}

.articles {
    display: flex;
    flex-wrap: wrap;
    align-content: space-around;
}

.card {
    margin-right: 50px;
}
         </style>





    </head>
    <body>
<div class="center1"><br><br><br>
    <h1>Details</h1><br><br>
<div class="articles">
    <div class="card mb-3" style="max-width: 100%;">
  <div class="row g-0">
    <div class="col-md-4">
      <img src="admin/images/<?php echo $_GET['image_name'] ;?>"class="card-img" alt="...">
    </div>
    <div class="col-md-8">
      <div class="card-body">
        <h5 class="card-title"><?php echo $_GET['title'] ?></h5>
        <p class="card-text"><?php echo $_GET['contenu'] ?></p>
        <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
      </div>
    </div>
  </div>
</div>
</div>
</div>
       
</div>
    
    </body>
</html>