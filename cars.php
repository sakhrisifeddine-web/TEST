<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="stylx.css">
    <link href="https://fonts.googleapis.com/css2?family=Permanent+Marker&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Anton+SC&family=Climate+Crisis:YEAR@1979&display=swap" rel="stylesheet">
    <title>Document</title>
</head>

<body>
    <?php 
    include("functions.php");
    include("navbar.php")?>


 <div class="filter">
    <h1> choose the right for you </h1>
    <div class='label-alpha'>
      <div class="label-body">
      <form action="cars.php" method="post" id='fm'>
      <div class="label-i">
        <label>choise your filter</label>
        <select name="filter_type" id="filter_type">
          <?php
          if     (isset($_POST['filter_type'])){ displayFilterTypes($_POST['filter_type']);}
          else if(isset($_GET['category'])){     displayFilterTypes('category'); }
          else if(isset($_GET['brand'])){        displayFilterTypes('brand');}
          else{                                  displayFilterTypes("none");}
          ?>
        </select> 
      </div>
      <!-- ######################################## -->
      <div class="label-i2">
        <?php 
          // to display the secend filter select
          if(!empty($_POST['filter_type'])){
            if(isset($_POST['filter_value'])){
              filter_value($_POST['filter_type'], $_POST['filter_value']);
              }else{
              filter_value($_POST['filter_type'], 'none');
            }
          }else if(isset($_GET['category'])){
            filter_value('category', $_GET['category']);
          }
          else if(isset($_GET['brand'])){
            filter_value('brand', $_GET['brand']);
          }
      ?>
      </div>
      <input type="submit" name="submit" id="show-cars-btn">
      </form>
        <div id="cars-list"></div>
</div> 
  </div>     
</div>
  <section>
        <div class="CARS">
          <h2>our cars</h2>
          <?php 
            if(isset($_GET['category'])){
              displayCarsWithFilter('category', $_GET['category'], 1);
            }else if(isset($_GET['brand'])){
              displayCarsWithFilter('brand', $_GET['brand'], 1);
            }
            else if(isset($_POST['filter_type']) && isset($_POST['filter_value'])){
              displayCarsWithFilter($_POST['filter_type'], $_POST['filter_value'], isset($_POST['submit']));
            }else{
              displayCarsWithFilter("", "", 0);
            }
            
            ?>
        </div>
  </section>

  <?php include("footer.php");?>

  </body>
  </html>