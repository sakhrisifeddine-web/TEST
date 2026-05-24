<?php
    function showBrands(){
        $brands = array("Audi", "Volkswagen", "Toyota", "Mercedes-Benz", "BMW", "Tesla");
        echo "<div class='brands'>
                <div calss='h2'>
                    <h2>our Brands</h2>
                </div>
                <div>";
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
        $categories = array("Coupe", "Hatchback", "Pickup", "Sedan", "SUV");
        echo "<div class='categories'>
                <div calss='h2'>
                    <h2>our categories</h2>
                </div>
                <div>";
        foreach($categories as $category){
            echo"
                <a href='cars.php?&category={$category}'>
                    <div class='category-name'>
                        <img src='https://placehold.co/120x90?text={$category}' alt='{$category}'>
                    </div>
                </a>
            ";
        }
        "</div></div>";
    }
    
    function showCarInfo($id){
        include('database_connection.php');
        $sql = "select * from car_info where id = {$id}};";
        $result = mysqli_query($conn, $sql);
        $row = mysqli_fetch_assoc($result);
        
        $used_name      = $row['brand'] .' ' . $row['name'];
        $image          = "image/" . $row['image'];
        $description    = $row['description'];
        $color          = $row['color'];
        $brand          = $row['brand'];
        $color          = $row['color'];
        $category       = $row['category'];
        $modle          = $row['modle'];
        $year           = $row['year'];
        $price          = number_format($row['value']);
        echo"
            <div>
                <div class='car-info-img' style='float: left; width: 30%; padding: 50px;'>
                    <h1>{$used_name}</h1>
                    <img src='{$image}' alt='$used_name'>
                    <span style='font-size: 22px; color: #555;'>description</span>
                    <p style='font-size: 18px; color: #777;'>{$description}</p>
                </div>


                    <div class='car-info-details' style='float: right; margin: 80px;'>
                    <table style='width: 100% ;'>
                        <tr>
                            <th style='border: 1px solid #ddd; padding: 8px; text-align: left;'>Caractéristique</th>
                            <th style='border: 1px solid #ddd; padding: 8px; text-align: left;'>Détails</th>
                        </tr>
                        <tr>
                            <td style='border: 1px solid #ddd; padding: 8px;'>Moteur</td>
                            <td style='border: 1px solid #ddd; padding: 8px;'>V6 biturbo de 3,5 litres</td>
                        </tr>
                        <tr>
                            <td style='border: 1px solid #ddd; padding: 8px;'>color</td>
                            <td style='border: 1px solid #ddd; padding: 8px;'>{$color}</td>
                        </tr>
                        <tr>
                            <td style='border: 1px solid #ddd; padding: 8px;'>brand</td>
                            <td style='border: 1px solid #ddd; padding: 8px;'>{$brand}</td>
                        </tr>
                        <tr>
                            <td style='border: 1px solid #ddd; padding: 8px;'>category</td>
                            <td style='border: 1px solid #ddd; padding: 8px;'>{$category}</td>
                        </tr>
                        <tr>
                            <td style='border: 1px solid #ddd; padding: 8px;'>carburant</td>
                            <td style='border: 1px solid #ddd; padding: 8px;'>Essence</td>
                        </tr>
                        <tr>
                            <td style='border: 1px solid #ddd; padding: 8px;'>Prix</td>
                            <td style='border: 1px solid #ddd; padding: 8px;'>{$price}</td>
                        </tr>
                    </table>
                    <div class='car-actions' style='margin-top: 20px;'>
                        qte: <input type='number' value='1' min='1' style='width: 60px; padding: 5px; margin-right: 10px;'>
                        <button style='padding: 10px 20px; background-color: #007BFF; color: white; border: none; border-radius: 5px; cursor: pointer;'>Ajouter au Panier</button>
                        <button style='padding: 10px 20px; background-color: #28A745; color: white; border: none; border-radius: 5px; cursor: pointer;'>Acheter Maintenant</button>
                    </div>
                </div>
            </div>";
        
        
        $conn->close();
    }

    function displayCar($row){
        $id         = $row['id'];
        $used_name  = $row['brand'] . ' ' . $row['name'];
        $image      = "image/" . $row['image'];
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
                    <span>{$year}</span>
                </div>
                <div class='car-price'>
                    <span class='car-name'>{$used_name}</span><br>
                    <span class='car-amt'>{$price}</span>
                </div>
                    <span class='go'>Voir Détails →</span>
                </div>
            </a>";
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

?>