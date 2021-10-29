<?php

require "dbConfig.php";

class Admin
{
    private $con;
    public function __construct()
    {

        $database = new Database();

        $db = $database->getConnection();

        $this->con = $db;
    }
    function login($email, $password)
    {
        $pass = md5($password);
        $stmt = $this->con->prepare("select * from admin where email=:email and password=:password");

        $stmt->bindParam(":email", $email);
        $stmt->bindParam(":password", $pass);

        $stmt->execute();
        if ($stmt->rowCount() == 1) {

            $_SESSION['adminEmail'] = $email;
            $_SESSION['loginTime'] = new DateTime('now');
            header("location:dashboard.php");
        }

        return $stmt;
    }
    public function deleteAdmin($id){
        $stmt= $this->con->prepare("delete from admin where id=:id");
        $stmt->bindParam(":id",$id);
        $stmt->execute();

        if($stmt->rowCount()){
            echo "inserted";
        }
        return $stmt;
    }
    public function addEvent($name,$start,$end,$description){
        $stmt = $this->con->prepare("INSERT into events(name,start,end,description)values (:name,:start,:end,:description)");
        $stmt->bindParam(":name", $name);
        $stmt->bindParam(":start", $start);
        $stmt->bindParam(":end", $end);
        $stmt->bindParam(":description", $description);
        $stmt->execute();
        if ($stmt->rowCount() > 0) {
            echo "inserted";
        }
        return $stmt;
    }

    public function addTeam($teamname, $teamtitle, $teamdescription, $teamtwitter, $teaminstagram, $teamfacebook, $teamlinkedin,$youtube ,$image)
    {
        $stmt = $this->con->prepare("INSERT into team(name,title,description,twitter,instagram,facebook,linkedin,youtube,image)values (:name,:title,:description,:twitter,:instagram,:facebook,:linkedin,:youtube,:image)");
        $stmt->bindParam(":name", $teamname);
        $stmt->bindParam(":title", $teamtitle);
        $stmt->bindParam(":image", $image);
        $stmt->bindParam(":description", $teamdescription);
        $stmt->bindParam(":twitter", $teamtwitter);
        $stmt->bindParam(":instagram", $teaminstagram);
        $stmt->bindParam(":facebook", $teamfacebook);
        $stmt->bindParam(":linkedin", $teamlinkedin);
        $stmt->bindParam(":youtube", $youtube);
        $stmt->execute();
        if ($stmt->rowCount() > 0) {
            echo "inserted";
        }
        return $stmt;
    }

    public function sliderDescription($description, $title, $image, $linkto, $linktext)
    {
        $stmt = $this->con->prepare("INSERT into bannerDetails(description,title,image,linkto,linkText) values (:description,:title,:image,:linkto,:linkText)");

        $stmt->bindParam(":description", $description);
        $stmt->bindParam(":title", $title);
        $stmt->bindParam(":image", $image);
        $stmt->bindParam(":linkto", $linkto);
        $stmt->bindParam(":linkText", $linktext);
        $stmt->execute();

        if ($stmt->rowCount() > 0) {
            echo "inserted";
        }
        return $stmt;
    }

    

    public function RegisterAdmin($email, $password)
    {
        $pass = md5($password);
        $stmt = $this->con->prepare("insert into admin(email,password) values (:email,:password)");
        $stmt->bindParam(":email", $email);
        $stmt->bindParam(":password", $pass);

        $stmt->execute();
        if ($stmt->rowCount() > 0) {
            echo "registered";
        }
        return $stmt;
    }
    public function runQuery($sql)
    {
        $query = $this->con->prepare($sql);
        return $query;
    }
    public function isLogged()
    {
        if (isset($_SESSION['adminEmail'])) {
            return true;
        }
    }

    public function logOut()
    {
        session_destroy();
        $_SESSION['adminEmail'] = false;
    }

    public function send_mail($message,$mailto,$subject){
        
    }
}
