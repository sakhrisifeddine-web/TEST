<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="stylx.css?v=1"> 
  <link href="https://fonts.googleapis.com/css2?family=Permanent+Marker&display=swap" rel="stylesheet">
  <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Anton+SC&family=Climate+Crisis:YEAR@1979&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css" integrity="sha512-2SwdPD6INVrV/lHTZbO2nodKhrnDdJK9/kg2XD1r9uGqPo1cUbujc+IYdlYdEErWNu69gVcYgdxlmVmzTWnetw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<link href="https://fonts.googleapis.com/css2?family=Goblin+One&display=swap" rel="stylesheet">
</head>

<body>
  <?php 
      include("functions.php");
      include("navbar.php");
      include("database_connection.php");
    ?>

  <section id='od-sec'>
  <h1> Your orders captain</h1>
  </section>
  
  <section>
    <?php 
      $sql = "select * from orders where user_id = {$_SESSION['user_data']['userID']}";
      $result = mysqli_query($conn, $sql);
      while($row = mysqli_fetch_assoc($result)){
        if(isset($_POST["confirm{$row['id']}"])){
          confirmOrder($row['id']);
        }
        if(isset($_POST["delete{$row['id']}"])){
          deleteOrder($row['id']);
        }
      }
      displayOrders($_SESSION['user_data']['userID']);
    ?>
  </section>

  <?php include("footer.php");?>

  </body>
  </html>
