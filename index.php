<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">

    <link rel="stylesheet" href="style.css">
    <title>home</title>
</head>
<body>
<?php
    require("header.php");
    include("db_connect.php");
    ?>


    <div class="container1" >
    
    <video width="720" height="300"  autoplay loop muted plays-inline id="video" >
        <source src="media/hackathon.mp4" type="video/mp4">
    </div>

    <div class="row my-5 " >
        <div class="col-sm-4 mb-5">
          <div class="card glow" >
            <img src="media/mechhackathon.jpeg" class="card-img-top" alt="..." height="250px">
            <div class="card-body">
              <h5 class="card-title">MECH-A-THON</h5>
              <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quibusdam sed odio iure.</p>
              <a href="mechathon.php" class="button">Know more</a>
            </div>
          </div>
        </div>
        <div class="col-sm-4 mb-5">
          <div class="card glow" >
            <img src="media/hackathon.jpeg" class="card-img-top" alt="..." height="250px">
            <div class="card-body">
              <h5 class="card-title">HACK-A-THON</h5>
              <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quibusdam sed odio iure.</p>
              <a href="hackathon.php" class="button">Know more</a>
            </div>
          </div>
        </div>
        <div class="col-sm-4 mb-5">
            <div class="card glow" >
                <img src="media/elex.jpeg" class="card-img-top" alt="..." height="250px">
              <div class="card-body">
                <h5 class="card-title">ELEX-A-THON</h5>
                <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quibusdam sed odio iure.</p>
                <a href="elexathon.php" class="button">Know more</a>
              </div>
            </div>
          </div>
       
      </div>



      <div class="row my-5 " >
        <div class="col-lg-6 mb-5">
          <div class="card glow" >
            <img src="https://media.istockphoto.com/photos/immersive-war-game-in-virtual-reality-with-futuristic-3dglasses-picture-id906339498?k=20&m=906339498&s=612x612&w=0&h=akCamgGqedkoXSourIuIX15CVYW5unH0tRyBitK0_RU=" class="card-img-top" alt="..." height="250px">
            <div class="card-body">
              <h5 class="card-title">E-SPORTS</h5>
              <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Illum, ipsum.</p>
              <a href="e_sports.php" class="button">Know more</a>
            </div>
          </div>
        </div>
        <div class="col-lg-6 mb-5">
          <div class="card glow" >
            <img src="https://i.pinimg.com/originals/69/1b/2f/691b2fbaf4441993d8041f9d538eeacf.gif" class="card-img-top" alt="..." height="250px">
            <div class="card-body">
              <h5 class="card-title">TECH-MECH</h5>
              <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quibusdam sed odio iure.</p>
              <a href="techmech.php" class="button">Know more</a>
            </div>
          </div>
        </div>
        </div>
        </div>




      





<?php
require("footer.php")
?>



      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
 
</body>
</html>