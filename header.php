<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        
.button2{
                    position: relative;
                    text-align: center;
                    width: 90px;
                    padding: 3px;
                    margin: 3px;
                    font-size: 10px;
                    color: #15f4ee;
                    font-family: poppins;
                    /* font-weight: 100; */
                    border: 3px solid #15f4ee;
                     text-transform: uppercase;
                    /*letter-spacing: 5px; */
                    background-color:black;
                    cursor: pointer;
                    border-radius: 15px;
                    transition: 1s;
                    text-decoration: none;
                }
.button2:hover{ color: #15f4ee;
                    box-shadow: 0 1px 10px 0 #15f4ee inset, 0 1px 10px 0 #15f4ee,
                                0 1px 10px 0 #15f4ee inset, 0 1px 10px 0 #15f4ee;
                                /* box-shadow: 0 1px 10px 0 purple inset, 0 1px 10px 0 purple,
                                0 1px 10px 0 purple inset, 0 1px 10px 0 purple; */
                              
                            }
    </style>
</head>
<body>
    
<nav class="navbar navbar-dark bg-dark fixed-top">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">STUCO</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasDarkNavbar" aria-controls="offcanvasDarkNavbar">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="offcanvas offcanvas-end text-bg-dark" tabindex="-1" id="offcanvasDarkNavbar" aria-labelledby="offcanvasDarkNavbarLabel">
        <div class="offcanvas-header">
          <h5 class="offcanvas-title" id="offcanvasDarkNavbarLabel">Crescendo</h5>
          <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body">
          <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="index.php">Home</a>
            </li>
            <li class="nav-item">
           
         <a href="register.php"> <button class="button2">register</button></a>  <br>
          <a href="login.php"> <button class="button2">login</button></a> 
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Contact us</a>
            </li>
          </ul>
          <form class="d-flex mt-3" role="search">
            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-success" type="submit">Search</button>
          </form>
        </div>
      </div>
    </div>
  </nav>
  </body>
</html>