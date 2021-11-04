<?php

include 'header.php';
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <link href="../css/car-makers-car2.css" rel="stylesheet">
    </head>
    <body>
        <?php
            $servername = "localhost";
            $username = "root";
            $password = "root";
            $dbname = "cardatabase";
            $port = "3307";

            // Create connection
            $conn = new mysqli($servername, $username, $password, $dbname,$port);
            // Check connection
            if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
            }

            $sql = "SELECT * FROM prand where id=".$_GET['id'];
            $result = $conn->query($sql);

                if ($result->num_rows > 0) {
                // output data of each row
                while($row = $result->fetch_assoc()) 
                {
                    echo
                         "<div class='logo1'>
                            <div class='img-logo'>
                                <img src = ". $row["prand_image"]. " alt = " . $row["prand_name"]. "> 
                            </div>
                            <br>
                            <div class='text-img'>
                                <a>" . $row["prand_name"]. "</a>
                            </div>
                        </div>";
                }
            } 
            else
            {
            echo "0 results";
            }
            $conn->close();
        ?>  
        
        <!--start rating-->
        <div class="car">
            <div class="container">
                <div class="rating-car1">
                    <div class="rating-car">
                        
                            <?php
                            
                            $host = "localhost:3307";
                            $dbusername = "root";
                            $dbpassword = "root";
                            $dbname = "cardatabase";
                            $conn = mysqli_connect($host, $dbusername, $dbpassword, $dbname);
                            $prand = filter_input(INPUT_POST, 'prand');
                            $img = filter_input(INPUT_POST, 'img');
                            $car_name = filter_input(INPUT_POST, 'car name');
                            $Trunk_capacity1 = filter_input(INPUT_POST, 'Trunk capacity1');
                            $model_year = filter_input(INPUT_POST, 'model Year');

                            $sql = "SELECT * from car where idprand=".$_GET['id'];
                            $result = $conn-> query($sql);
                            
                            if ($result-> num_rows > 0) 
                            {
                                while ($row = $result-> fetch_assoc()) {
                                echo"<div class='car1' >
                                    <img src = '" .$row["img"]."'>
                                    <a href='caaar.php?id=" .$row["id"]."' class='combany'>
                                    ". $row["prand"]."
                                    </a>
                                    <br>
                                    <a class='name' href='caaar.php?id=" .$row["id"]."'>
                                    ". $row["car name"]."
                                    </a>
                                    <br>
                                    <div class='info'>
                                        <a href='caaar.php?id=" .$row["id"]."' class='gear'> ". $row["Trunk capacity1"]."</a>
                                        <a href='caaar.php?id=" .$row["id"]."' class='chear'> ". $row["model Year"]."</a>
                                    </div>
                                    </div>";
                                }
                            }
                                ?>    
                        
                    </div>
                </div>
            </div>  
        </div>
        <!--end rating-->   
        <?php

            include 'footer.php';
        ?>
 
    </body>
</html>
