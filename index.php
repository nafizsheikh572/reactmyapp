<?php
if(isset($_POST["name"])){
  $server= "localhost";
  $username = "root";
  $password = "";

  $con = mysqli_connect($server,$username,$password);

  if(!$con){
      die('connection data base failed'.mysqli_connect_error());
  }

  $name= $_POST["name"];
  $age = $_POST["age"];
  $gender = $_POST["gender"];
  $phone = $_POST["phone"];
  $email = $_POST["email"];
  $desc = $_POST["desc"];


 $sql =  "INSERT INTO `dhaka-trip`.`trip` (`name`, `age`, `gender`, `phone`, `email`, `information`, `date`) VALUES ('$name', '$age', '$gender', '$phone', '$email', '$desc', CURRENT_TIMESTAMP());";

  if($con->query($sql) == true ){
      echo 'succesfull';
  }else{
      echo "error: $sql <br> $con->error";
  }

  $con->close();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Wellcome travel form</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
</head>
<body>
    <div class="container-sm text-center bg-info p-3 ">
        <h3>Wellcome To Travel From Dhaka Trip</h3>
        <p>Enter Your detail to confirm your participation in the trip</p>

        <form action="index.php" method="get" class="p-3 ">
           <input type="text" name="name" placeholder="Enter Your name" class="form-control mb-3"/>
           <input type="text" name="age" id='age'  placeholder="Enter Your age" class="form-control mb-3"/>
           <input type="text" name="gender" id='gender'  placeholder="Enter Your gender" class="form-control mb-3"/>

           <input type="number" name="phone" id='phone'  placeholder="Enter Your Phone Number" class="form-control mb-3"/>
           <input type="email" name="email" id='email'  placeholder="Enter Your email" class="form-control mb-3"/>
           <textarea name="desc" id="desc" cols="30" rows="10" placeholder="Enter Your Information Here" class="form-control"></textarea>
           <button class="form-control mt-3 btn-danger">submit</button>


        </form>
    </div>

    <script src="php.js"></script>
</body>
</html>



