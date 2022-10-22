<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
  <link rel="stylesheet" href="style.css">
  <style>
      .cg h5,p{
    color: white;
}
.cg button{
         background-color: black;
        position: relative;
        text-align: center;
        width: 90px;
        padding: 10px;
        font-size: 15px;
        color: #15f4ee;
        font-family: poppins;
        /* font-weight: 100; */
        border: 3px solid #15f4ee;
         text-transform: uppercase;
        /*letter-spacing: 5px; */
        cursor: pointer;
        border-radius: 15px;
        transition: 1s;
        text-decoration: none;}

    .cg button:hover{ color: #15f4ee;
        box-shadow: 0 1px 10px 0 #15f4ee inset, 0 1px 10px 0 #15f4ee,
                    0 1px 10px 0 #15f4ee inset, 0 1px 10px 0 #15f4ee;
                    /* box-shadow: 0 1px 10px 0 purple inset, 0 1px 10px 0 purple,
                    0 1px 10px 0 purple inset, 0 1px 10px 0 purple; */
                  
                }            
    </style>
    <title>HACKATHON</title>
</head>
<body>
  <?php
    require("header.php");
    include("db_connect.php");
    ?>
  <div id="carouselExampleDark" class="carousel carousel-dark slide" data-bs-ride="carousel">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner ">
      <div class="carousel-item active" data-bs-interval="10000">
        <<a href="event_register.php">img src="https://th.bing.com/th/id/OIP.471</a>S2BsrLA69eVnMFjtkaAHaFj?w=235&h=180&c=7&r=0&o=5&dpr=1.5&pid=1.7" class="d-block w-100" alt="..." height="550px">
        <div class="carousel-caption d-none d-md-block cg">
          <h5>HACK-A-THON</h5>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Esse, eius.</p>
        <a href="event_register.php">< <button class="button1">REGISTER</button></a>
        </div>
      </div>
      <div class="carousel-item" data-bs-interval="2000">
        <img src="https://jumpwhere.com/wp-content/uploads/2020/08/Screenshot_20200806_111304-1024x618.jpg" class="d-block w-100" alt="..." height="550px">
        <div class="carousel-caption d-none d-md-block cg">
          <h5 style="color:white ;">TIME</h5>
          <p style="color:white ;" >19th March </p>
          <h5 style="color:white ;">PARTICIPATION POINTS</h5>
          <p stylehttps://th.bing.com/th/id/OIP.471S2BsrLA69eVnMFjtkaAHaFj?w=235&h=180&c=7&r=0&o=5&dpr=1.5&pid=1.7 POINTS</p>
        </div>
      </div>
      <div class="carousel-item">
        <img src="media/hackathon1.jpg" class="d-block w-100" alt="..." height="55px">
        <div class="carousel-caption d-none d-md-block cg">
          <h5 >DEADLINE</h5>
          <p>24th march 2023</p>
        </div>
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
 
</body>
</html>