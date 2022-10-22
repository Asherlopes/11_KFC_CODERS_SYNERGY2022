
    <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>event register </title>
    <link rel="stylesheet" href="styole2.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
<style>
    body{
   background-color:black;
    }
</style>
</head>

<body>
<?php

require("header.php");
include("db_connect.php");
?>

<?php

 /*   if($_SERVER['REQUEST_METHOD']=='POST'){
  $id=$_POST['id'];
  $name= $_POST['name'];
  $event= $_POST['event'];
  $roll_no= $_POST['roll_no'];
  $class=$_POST['class']
 // $desc = $_POST['thread_desc'];
 //  echo"$id";
 //$sql=" INSERT INTO `comment` ( `comment`, `thread_id`) VALUES ( '$comment','$id')";
 $sql="INSERT INTO `event_register` ( `name`,`roll_no`,`event`, `id`,`class`) VALUES ('$name','$roll_no','$event','$class')";

//$sql=" INSERT INTO `explore` ( 'thread_cat_id',`thread_name`, `thread_desc`) VALUES ('$cat_id','$title', '$desc')";
$result = mysqli_query($conn,$sql);
if($result){
    echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
    <strong>Success!</strong> Comment Posted Succesfully!!.
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>';
   
}else{
    echo "not submitted".mysqli_error($conn);
}
}
*/

?>








    <div class="contanier">
        
        
    <section class="">
           <p class="cent">Register</p>
    </section>
    <section class="fo">
        <form action="event_register.php" class="yo">
            <div>

                <label for="route"> Roll number</label>
           <input type="text" placeholder="eg.9321" class="in" name="roll_no">
            </div>
            <div>

                <label for="stop">Name</label><br>
                <input type="text" placeholder=" eg. Harry" class="in" name="name">
            </div>
            <div>
                
                <label for="bus">Class:</label><br>
                <select name="class" id="bus">
                    <option value="TE CS">TE CS</option>
                    <option value="TE AIDS">TE AIDS</option>
                    <option value="TE ECS">TE ECS</option>
                    <option value="TE MECH">TE MECH</option>
                    
                </select>
            </div>
            <div>
                
                <label for="bus">EVENT:</label><br>
                <select name="event" id="bus">
                    <option value="ELEX-A-THON">ELEX-A-THON</option>
                    <option value="HACK-A-THON">HACK-A-THON</option>
                    <option value="MECH-A-THON">MECH-A-THON</option>
                 
                    
                </select>
            </div>
            <br>
            
            <div class="sub">
               <P> <input type="submit" value="Register"></P>
            </div>
        </form>
        
    </section>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
<script src="script.js"></script>
</body>
</html>
