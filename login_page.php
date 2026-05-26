<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="stylx.css?v=1"> 
   <link href="https://fonts.googleapis.com/css2?family=Permanent+Marker&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Anton+SC&family=Climate+Crisis:YEAR@1979&display=swap" rel="stylesheet">
    <title>Document</title>
</head>
<body id="log-body"> 
    <?php
        include('functions.php');
        session_start();
        $Invalid = false;
        if (isset($_SESSION['user_data']) && !isset($_POST['submit'])){
            $_SESSION = array();
        }
        if(isset($_POST['submit'])){
            $username = $_POST['username'];
            $password = $_POST['password'];
            $user_id = loginID($username, $password);
            $Invalid = false;
            if($user_id != -1){
                $_SESSION['user_data'] = [
                    'userID' => $user_id
                ];
                header("Location: index.php");
                exit();
            }else{
                $Invalid = true;
            }
        }
    ?>
    <section>
        <div id="reg-btn">
            <a href="index.php">← ACCUIL </a>
        </div>
        <h3 id="log-sec">login</h3>
        <form action="login_page.php" method="post" id="log-form">
            <div class="log-user">
                <label>Username:</label>
                <input type="text" name="username" id="required" required>
            </div>
            <div class="log-user"></div>
                <label>Password:</label>
                <input type="password" name="password" id="required" required>
            </div><br><br>
            <input type="submit" name="submit" value="Login">
        </form>
        <div id= 'register-link'>
            <?php if($Invalid) echo "Invalid username or password<br>";?>
            <p>Don't have an account? <a href="register.php">Register here</a>.</p>
        </div>
    </section>

</body>

</html>
