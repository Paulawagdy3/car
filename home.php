<?php

    include 'header.php';
    ?>


<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <link href="../css/car2.css" rel="stylesheet">
    </head>
    <body>
        <!--start header-title-->
        <div class="text">
            <div class="container">
                <div class="title">
                    <p>Find Your Good Car</p>
                    <a>Existing car <span>1000</span></a>
                </div>
            </div>
        </div>
        <!--end header-title-->

        <!--start makers-->
        <div class="popular-makers">
            <div class="container">
                <div class="text2">
                    <p>Popular Makers</p>
                    <a>Choose</a>
                </div>
                <div class="makers">
                    <?php
                        $host = "localhost:3307";
                        $dbusername = "root";
                        $dbpassword = "root";
                        $dbname = "cardatabase";
                        $conn = mysqli_connect($host, $dbusername, $dbpassword, $dbname);
                        $prand_name = filter_input(INPUT_POST, 'prand_name');
                        $prand_image = filter_input(INPUT_POST, 'prand_image');

                        $sql = "SELECT * from prand";
                        $result = $conn-> query($sql);

                        if ($result-> num_rows > 0) 
                        {
                            for ($x = 0; $x <= 1; $x++)
                                { $row = $result->fetch_assoc()
                                ;
                                echo"<div>
                                <img src = ". $row["prand_image"]. " alt = " . $row["prand_name"]. "> 
                                    <a href='caar.php?id=" .$row["id"]." '>" . $row["prand_name"]. "</a>
                                </div>";
                                        
                        }
                        }
                        else
                        {
                            echo"0 result";
                        }
                        $conn-> close();

                    ?>
                </div>
            </div>    
        </div>    
        <!--end makers-->

        <!--start Advertising-->
        <div class="Advertising">
            <div class="container">
                <a></a>
            </div>
        </div>
        <!--end Advertising-->

        <!--start rating-->
        <div class="car">
            <div class="container">
                <div class="rating">
                    <div class="rating-text">
                        <a>Cars got 5 stars in the rating from people</a>
                    </div>
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
                            $rat = filter_input(INPUT_POST, 'rat');

                            $sql = "SELECT * from car WHERE rat='5'";
                            $result = $conn-> query($sql);

                            
                            if ($result-> num_rows > 0) 
                            { 
                                for ($x = 0; $x <= 8; $x++)
                                { $row = $result->fetch_assoc()
                                ;
                                    echo" <div class='car1' >
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
                            <div class='car1'>
                                <div class="more">
                                    <a href='car-get5.php'>More</a>
                                </div>  
                            </div>                
                        </div>
                    </div>
                </div>
            </div>    
        </div>    
        <!--end rating-->
    </body>
</html>

<?php

    include 'footer.php';
    ?>
