<?php

include_once "inc/header.php";
require "class.admin.php";

?>




<p><section>
    <div class="container">
<div class="uk-child-width-1-4@m uk-grid-small uk-grid-match" uk-grid>
<?php 
          $ad = new Admin();
          $stmt = $ad->runQuery("select * from events");
          $stmt->execute();
          $row = $stmt->fetchAll(PDO::FETCH_ASSOC);

          foreach ($row as $key => $value) {
           $time = explode(" ",$value["date"]);
            
          
          ?>
    <div>
    <a href="event.register.php?event=<?php echo $value['name']?>"> <div class="uk-card uk-card-default uk-card-body">
            <h3 class="uk-card-title uk-text-danger"><?php echo $value["name"]?></h3>
            <hr class="text-danger">
            <h5 class="text-danger">Date:</h5>
            <h6 > <?php echo $time[0]."  "?> - <?php echo "  ".$time[1]?></h6><br>
            <h5><?php echo $value["description"]?></h5>
        </div></a>
    </div>
    <?php
          }
    ?>
</div>
</div>
</section></p>