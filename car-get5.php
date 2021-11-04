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
                                    while ($row = $result-> fetch_assoc()) {
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
