<?php
    function showBrands(){
        $brands = array("Audi", "Volkswagen", "Toyota", "Mercedes-Benz", "BMW", "Tesla");
        echo "<div class='brands'>
                <div calss='h2'>
                    <h2>our Brands</h2>
                </div>
                <div class='brands-i'>";
        foreach($brands as $brand){
            echo"
                <a href='cars.php?brand={$brand}'>
                    <div class='brands-logo'>
                        <img src='https://placehold.co/120x90?text={$brand}' alt='{$brand}'>
                    </div>
                </a>
            ";
        }
        echo"</div></div>";
    }
    
    function showCategories(){
        // to create an array of avilable categories
        include("database_connection.php");
        $sql = "select distinct category from car_info;";
        $result = mysqli_query($conn, $sql);    
        $categories = array();
        while($row = mysqli_fetch_assoc($result)){
            array_push($categories, $row['category']);
        }

        echo "<div class='categories'>
                <div calss='h2'>
                    <h2>our categories</h2>
                </div>
                <div class='category-1'>";
        foreach($categories as $category){
            echo"
                <a href='cars.php?&category={$category}'>
                    <div class='category-name'>
                        <img src='https://placehold.co/120x90?text={$category}' alt='{$category}'>
                    </div>
                </a>
            ";
        }
        echo"</div></div>";
    }
    


    function addCarToCart($id, $user_id, $quantity){
        include("database_connection.php");
        $sql = "insert into orders (user_id, car_id, quantity) values ({$user_id}, {$id}, {$quantity});";
        mysqli_query($conn, $sql);
        $quantity = (int)$quantity;
        $sql = "update car_info set quantity = quantity - {$quantity} where id = {$id} ;";
        mysqli_query($conn, $sql);
    }

    function showCarInfo($id){
        include('database_connection.php');
        $sql = "select * from car_info where id = {$id};";
        $result = mysqli_query($conn, $sql);
        $row = mysqli_fetch_assoc($result);
        
        $used_name      = $row['brand'] .' ' . $row['name'];
        $image          = "images/cars/" . $row['image'];
        $description    = $row['description'];
        $color          = $row['color'];
        $brand          = $row['brand'];
        $color          = $row['color'];
        $category       = $row['category'];
        $modle          = $row['modle'];
        $year           = $row['year'];
        $price          = number_format($row['value']);
        $quantity       = $row['quantity'];
        if(!isset($_SESSION)){
            session_start();
        }
        if(isset($_POST['add']) || isset($_POST['buy'])){
            if(isset($_SESSION['user_data'])){
                $user_id = $_SESSION['user_data']['userID'];
                if(isset($_POST['quantity'])){
                    addCarToCart($id, $user_id, $_POST['quantity']);
                    $_POST = array();
                }
                if(isset($_POST['buy'])){
                    header("Location: order.php");
                    exit();
                }
            }else{
                header("Location: login_page.php");
                exit();
            }
        }


        echo"
            <div>
                <div class='car-info-img' style='float: left; width: 30%; padding: 50px;'>
                    <h1>{$used_name}</h1>
                    <img src='{$image}' alt='$used_name'>
                    <span style='font-size: 22px; color: #555;'>description</span>
                    <p style='font-size: 18px; color: #777;'>{$description}</p>
                </div>


                    <div class='car-info-details' style='float: right; margin: 80px;'>
                    <table style='width: 100% ; border-radius: 10px'>
                        <tr>
                            <th>Caractéristique</th>
                            <th>Détails</th>
                        </tr>
                        <tr>
                            <td>Moteur</td>
                            <td>V6 biturbo de 3,5 litres</td>
                        </tr>
                        <tr>
                            <td>color</td>
                            <td>{$color}</td>
                        </tr>
                        <tr>
                            <td>brand</td>
                            <td>{$brand}</td>
                        </tr>
                        <tr>
                            <td>category</td>
                            <td>{$category}</td>
                        </tr>
                        <tr>
                            <td>carburant</td>
                            <td>Essence</td>
                        </tr>
                        <tr>
                            <td>Prix</td>
                            <td>{$price}</td>
                        </tr>
                    </table>


                    <div class='car-actions' style='margin-top: 20px;'>
                        <form action='car_info.php?id={$id}' method='post'>
                            <p>qte:{$quantity}</p>
                            <input type='number' name='quantity' value='0' min='1' max='{$quantity}' id='quantity'>
                            <input type='submit' name='add' value='Ajouter au Panier' style='padding: 10px 20px; background-color: #007BFF; color: white; border: none; border-radius: 5px; cursor: pointer;' id='btn'>
                            <input type='submit' name='buy' value='Acheter Maintenant' style='padding: 10px 20px; background-color: #28A745; color: white; border: none; border-radius: 5px; cursor: pointer;' id='btn'>
                        </form>
                        <div id= 'register-link'>
                        </div>
                    </div>
                </div>
            </div>
        ";
        
        $conn->close();
    }

    function displayCar($row){
        $id         = $row['id'];
        $used_name  = $row['brand'] . ' ' . $row['name'];
        $image      = "images/cars/" . $row['image'];
        $year       = $row['year'];
        $price      = number_format($row['value']);
        $brand      = $row['brand'];
        $category   = $row['category'];
        $modle      = $row['modle'];
        echo "
            <a href='car_info.php?id={$id}'>
                <div class='car-card'>
                    <div class='car-body'>
                        <img src='{$image}' alt='{$used_name}'>
                    </div>
                    <div class='car-meta'>
                    <div class='car-meta-i'>
                        <span   class='car-name'>{$used_name}</span>
                        <span   class='car-year'>{$year}</span>
                    </div>
                    <div class='car-price'>
                        <span class='car-amt'>{$price}</span>
                    </div>
                </div>
                <span class='go'>see more</span>
                </div>
            </a>";
    }

    function displaySimilarCars($id){
        include('database_connection.php');
        $sql = "select * from car_info
                    where brand = (select brand from car_info where id = {$id})
                    order by value desc
                    limit 4;";
        $result = mysqli_query($conn, $sql);
        
        while($row = mysqli_fetch_assoc($result)){
            displayCar($row);
        }
       
    }




    function displayCarsWithFilter($filter_type, $filter_value, $filter_triger){
        include('database_connection.php');
        if(isset($filter_type) && $filter_type != 'none' && isset($filter_value) && $filter_triger){
            if($filter_type != 'price'){
                $sql = "select * from car_info where {$filter_type} = '{$filter_value}'";
            }else{
                switch ($filter_value){
                    case 0:
                        $sql = "select * from car_info order by value desc";
                        break;
                    case 1:
                        $sql = "select * from car_info order by value asc";
                        break;
                    case 2:
                        $sql = "select * from car_info where value between 10000 and 30000";
                        break;
                    case 3:
                        $sql = "select * from car_info where value between 30000 and 60000";
                        break;
                    case 4:
                        $sql = "select * from car_info where value between 60000 and 90000";
                        break;
                    case 5:
                        $sql = "select * from car_info where value > 90000";
                        break;
                    default:
                        $sql = "select * from car_info";
                }
            }
        }else{
            $sql = "select * from car_info";
        }
        $result = mysqli_query($conn, $sql);
        while($row = mysqli_fetch_assoc($result)){
            displayCar($row);
        }
    }
    function showTopCars(){
        include('database_connection.php');
        $sql = "select * from car_info order by sales desc limit 4;";
        $result = mysqli_query($conn, $sql);
        echo"<div class='DEALS'>
             <div calss='h2'>
                <h2>Meilleures Offres</h2>
             </div>
             <div>";

        while($row = mysqli_fetch_assoc($result)){ 
            displayCar($row);
        }
        echo"</div></div>";
    }





    function displayFilterTypes($selected_filter_type){
        $Filter_types = array("none", "brand", "category", "engine_type", "color", "year", "price");        
        foreach($Filter_types as $FT){
            echo "<option value='{$FT}' " . ($FT === $selected_filter_type ? 'selected' : '') . ">
                {$FT}
            </option>";
        }
    }                 


    function displayFilterOptions($filter_type, $selected_filter_type){
        include("database_connection.php");
        $sql = "select distinct {$filter_type} from car_info";
        $result = mysqli_query($conn, $sql);
        while($row = mysqli_fetch_assoc($result)){
            $value = $row[$filter_type];
            echo"<option value='{$value}' " . ($value === $selected_filter_type ? 'selected' : '') . ">
                {$value}
            </option>";
        }
    }

    function filter_value($filter_type, $selected_filter_type){
        if($filter_type != "none"){
            echo"<label>filter value</label> <br>
                <select name='filter_value' id='filter_type'>";
            if($filter_type == 'price'){
                
                $ranges = array("desc" ,"asc", "10000 - 30000", "30000 - 60000", "60000 - 90000", "90000 +");
                for($i = 0; $i < count($ranges); $i++){
                    echo"<option value='{$i}'" . ((string)$i === (string)$selected_filter_type ? 'selected' : '') .">
                        {$ranges[$i]}
                    </option>";
                }
                
            }
            else{
                displayFilterOptions($filter_type, $selected_filter_type);
            }    
            echo"</select> ";
        }
    }




    function loginID($username, $password){
        include("database_connection.php");
        $id = -1;
        $username = stripslashes(trim(htmlspecialchars($username)));
        $password = hash('sha256',$password);

        $sql = "select id, user_name, password from users_data ;";
        $result = mysqli_query($conn, $sql);

        while($row = mysqli_fetch_assoc($result)){
            if($username == $row['user_name'] && $password == $row['password']){
                $id = $row['id'];
            }
        }
        return $id;
    }

    function registerUser($username, $firstname, $lastname, $birtheday, $country, $email, $password, $confirm_password){
        include("database_connection.php");
        $sql = "select * from users_data;";
        $result = mysqli_query($conn, $sql);
        $errors = array("exist" => 0, "birtheday" => 0, "password" => 0);
        //user informations
        $username =         stripslashes(trim(htmlspecialchars($username)));
        $firstname =        stripslashes(trim(htmlspecialchars($firstname)));
        $lastname =         stripslashes(trim(htmlspecialchars($lastname)));
        $email =            stripslashes(trim(htmlspecialchars($email)));
        $password =         hash('sha256',$password);
        $confirm_password = hash('sha256',$confirm_password);
        if (date('d-m-Y') <= $birtheday){
            $errors['birtheday'] = 1;
            return $errors;
        }
        
        while($row = mysqli_fetch_assoc($result)){
            if ($row['email'] == $email || $row['user_name'] == $username) {
                $errors['exist'] = 1;
                break;
            }
        }
        if(!$errors['exist']){
            if($password != $confirm_password){
                $errors['password'] = 1;
            }else{
                $sql = "insert into users_data(user_name, first_name, last_name, birtheday, country, email, password) values('$username', '$firstname', '$lastname', '$birtheday', '$country', '$email', '$password');";
                mysqli_query($conn, $sql);
                header("Location: login_page.php");
                exit();
                 
            }
        }
        return $errors;
    }



    function displayOrders($id){
        include("database_connection.php");
        $sql = "select * from orders where user_id = {$id} and done = 0;";
        $result = mysqli_query($conn, $sql);
        while($row = mysqli_fetch_assoc($result)){
            $sql = "select * from car_info where id = {$row['car_id']};";
            $row2 = mysqli_fetch_assoc(mysqli_query($conn, $sql));
            $used_name  = $row2['brand'] . ' ' . $row2['name'];
            $image      = "images/cars/" . $row2['image'];
            $year       = $row2['year'];
            $price      = number_format($row2['value']);
            $brand      = $row2['brand'];
            $category   = $row2['category'];
            $modle      = $row2['modle'];
            echo"
            <div id='od-card'>
                <div id='od-body'>
                    <img src='{$image}' alt='{$used_name}'>
                </div>
                <div id='od-text'>
                    <div id='od-name'>
                        <h1> {$used_name} </h1>
                        <div id='od-meta'>
                            <span> qte :{$row['quantity']} </span>
                            <span> prix : {$price}</span>
                            <form action='order.php' method='post'>
                                <input type='submit' name='confirm{$row['id']}' id='btn-con' value='conferm it'>
                                <input type='submit' name='delete{$row['id']}' id='btn-del' value='delte it'>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            ";
        }
        
    }

    function confirmOrder($orderID){
        include("database_connection.php");
        $sql = "update orders set done = 1 where id = {$orderID};";
        mysqli_query($conn, $sql);
    }
    function deleteOrder($orderID){
        include("database_connection.php");
        $sql = "select * from orders where id = {$orderID};";
        $row = mysqli_fetch_assoc(mysqli_query($conn, $sql));
        $sql = "delete from orders where id = {$orderID};";
        mysqli_query($conn, $sql);
        $sql = "update car_info set quantity = quantity + {$row['quantity']} where id = {$row['car_id']};";
        mysqli_query($conn, $sql);
    }

?>