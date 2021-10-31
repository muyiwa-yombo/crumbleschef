<?php

require "class.admin.php";
$ad = new Admin();


if (isset($_GET["submit"])) {
    $eventn = $_GET["event"];
    echo "<script>alert('$eventn')</script>";
   
    $names =  $_GET["firstname"]." ".$_GET["firstname"];
    $email =  $_GET["email"];
    $phone =  $_GET["phone"];
    $attending =  $_GET["attending"];


    try{
        $stmt = $ad->runQuery("insert into registry(eventn,name,email,phone,attending) values (:event_title,:name,:email,:phone,:attending)");
        $stmt->bindParam(":event_title",$eventn);
        $stmt->bindParam(":name",$names);
        $stmt->bindParam(":email",$email);
        $stmt->bindParam(":phone",$phone);
        $stmt->bindParam(":attending",$attending);
        $stmt->execute();   
  
        if($stmt->rowCount() > 0){
            echo "it has successfully entered";
        }
      }catch(Exception $e){
        echo  $e->getMessage();    
      }
  
  
}
?>
<link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

<form action="event.register.php" method="get">

    <div class="container">
        <div class="container-fluid">
            <div class="form-row d-flex">
                <div class="col-5">
                    <input class="form-control " type="text" name="firstname" placeholder="Firstname" required>
                </div>
                <div class="col-5">
                    <input class="form-control" type="text" name="lastname" placeholder="Lastname" required>
                </div>
            </div><br>
            <div class="form-row d-flex">
                <div class="col-5">
                    <input class="form-control" type="Email" name="email" placeholder="Email" required>
                </div>
                <div class="col-5">
                    <input class="form-control" type="text" name="phone" placeholder="Phone Number" required>
                </div>
            </div><br>
            <div class="col-5">
                <input class="form-control" type="number" name="attending" placeholder="Attending" required><br>
            </div>
           
            <button type="get" class="btn btn-outline-danger" name="submit" >Reister</button>
        </div>
    </div>

</form>