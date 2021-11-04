<?php

    include 'header.php';
    ?>

<?php       
    $host = "localhost:3307";
    $dbusername = "root";
    $dbpassword = "root";
    $dbname = "cardatabase";
    $conn = mysqli_connect($host, $dbusername, $dbpassword, $dbname);
    $prand = filter_input(INPUT_POST, 'prand');
    $car_name= filter_input(INPUT_POST, 'car name	');
    $Engine_capacity= filter_input(INPUT_POST, 'Engine capacity	');
    $Horse_power	 = filter_input(INPUT_POST, 'Horse power	');
    $Top_speed	 = filter_input(INPUT_POST, 'Top speed	');
    $Acceleration1	 = filter_input(INPUT_POST, 'Acceleration1	');
    $Gears = filter_input(INPUT_POST, 'Gears');
    $Transimtion1 = filter_input(INPUT_POST, 'Transimtion1');
    $model_Year	 = filter_input(INPUT_POST, 'model Year	');
    $Fuel=filter_input(INPUT_POST, 'Fuel');
    $Liter_100km = filter_input(INPUT_POST, 'Liter/100km	');
    $made_in=filter_input(INPUT_POST, 'made in	');
    $Assembly=filter_input(INPUT_POST, 'Assembly');
    $Length1=filter_input(INPUT_POST, 'Length1');
    $Width1=filter_input(INPUT_POST, 'Width1');
    $Height1=filter_input(INPUT_POST, 'Height1');
    $Height_from_the_ground=filter_input(INPUT_POST, 'Height from the ground');
    $Wheel_base1=filter_input(INPUT_POST, 'Wheel base1	');
    $Trunk_capacity1=filter_input(INPUT_POST, 'Trunk capacity1	');
    $No_seats1=filter_input(INPUT_POST, 'No.seats1	');
    $Fuel_tank_capacity1=filter_input(INPUT_POST, 'Fuel tank capacity 1	');
    $drivetrain=filter_input(INPUT_POST, 'drivetrain');
    $Torque1=filter_input(INPUT_POST, 'Torque1');
    $img = filter_input(INPUT_POST, 'img');
    $img1 = filter_input(INPUT_POST, 'img1');
    $img2 = filter_input(INPUT_POST, 'img2');
    $img3 = filter_input(INPUT_POST, 'img3');
    $img4 = filter_input(INPUT_POST, 'img4');
    $img5 = filter_input(INPUT_POST, 'img5');
    $img6 = filter_input(INPUT_POST, 'img6');
    $img7 = filter_input(INPUT_POST, 'img7');
    $img8 = filter_input(INPUT_POST, 'img8');
    $img9 = filter_input(INPUT_POST, 'img9');


?>                 


<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <link href="../css/caaar2.css" rel="stylesheet">
    </head>
    <body>
                <?php
                    $sql = "SELECT * from car where id=".$_GET['id'];
                    $result = $conn-> query($sql);
                    if ($result-> num_rows > 0) 
                    {
                        while ($row = $result-> fetch_assoc()) 
                        {
                            
                            echo"
                                <div class='img'>
                                    <!--image slider start-->
                                    <div class='slider'>
                                        <div class='slides'>
                                            <!--radio buttons start-->
                                            <input type='radio' name='radio-btn' id='radio1'>
                                            <input type='radio' name='radio-btn' id='radio2'>
                                            <input type='radio' name='radio-btn' id='radio3'>
                                            <input type='radio' name='radio-btn' id='radio4'>
                                            <input type='radio' name='radio-btn' id='radio5'>
                                            <input type='radio' name='radio-btn' id='radio6'>
                                            <input type='radio' name='radio-btn' id='radio7'>
                                            <input type='radio' name='radio-btn' id='radio8'>
                                            <input type='radio' name='radio-btn' id='radio9'>
                                            <input type='radio' name='radio-btn' id='radio10'>
                                            <!--radio buttons end-->

                                            <!--slide images start-->
                                            <div class='slide first'>
                                            <img src='" .$row["img"]."' alt='" .$row["car name"]."'>
                                            </div>
                                            <div class='slide'>
                                            <img src='" .$row["img1"]."' alt='" .$row["car name"]."'>
                                            </div>
                                            <div class='slide'>
                                            <img src='" .$row["img2"]."' alt='" .$row["car name"]."'>
                                            </div>
                                            <div class='slide'>
                                            <img src='" .$row["img3"]."' alt='" .$row["car name"]."'>
                                            </div>
                                            <div class='slide'>
                                            <img src='" .$row["img4"]."' alt='" .$row["car name"]."'>
                                            </div>
                                            <div class='slide'>
                                            <img src='" .$row["img5"]."' alt='" .$row["car name"]."'>
                                            </div>
                                            <div class='slide'>
                                            <img src='" .$row["img6"]."' alt='" .$row["car name"]."'>
                                            </div>
                                            <div class='slide'>
                                            <img src='" .$row["img7"]."' alt='" .$row["car name"]."'>
                                            </div>
                                            <div class='slide'>
                                            <img src='" .$row["img8"]."' alt='" .$row["car name"]."'>
                                            </div>
                                            <div class='slide'>
                                            <img src='" .$row["img9"]."' alt='" .$row["car name"]."'>
                                            </div>
                                            <!--slide images end-->
                                            <!--automatic navigation start-->
                                            <div class='navigation-auto'>
                                            <div class='auto-btn1'></div>
                                            <div class='auto-btn2'></div>
                                            <div class='auto-btn3'></div>
                                            <div class='auto-btn4'></div>
                                            <div class='auto-btn5'></div>
                                            <div class='auto-btn6'></div>
                                            <div class='auto-btn7'></div>
                                            <div class='auto-btn8'></div>
                                            <div class='auto-btn9'></div>
                                            <div class='auto-btn10'></div>
                                            </div>
                                            <!--automatic navigation end-->
                                        </div>
                                        <!--manual navigation start-->
                                        <div class='navigation-manual'>
                                            <label for='radio1' class='manual-btn'></label>
                                            <label for='radio2' class='manual-btn'></label>
                                            <label for='radio3' class='manual-btn'></label>
                                            <label for='radio4' class='manual-btn'></label>
                                            <label for='radio5' class='manual-btn'></label>
                                            <label for='radio6' class='manual-btn'></label>
                                            <label for='radio7' class='manual-btn'></label>
                                            <label for='radio8' class='manual-btn'></label>
                                            <label for='radio9' class='manual-btn'></label>
                                            <label for='radio10' class='manual-btn'></label>
                                        </div>
                                        <!--manual navigation end-->
                                    </div>
                                    <!--image slider end-->
                                </div>  


                                <div class='back'>
                                    <div class='h'>
                                        <h1><a>" .$row["car name"]." </a></h1>
                                    </div>
                                    <div class='content-table'>
                                        <table class='table1'>
                                            <tbody>
                                                <tr>
                                                    <td>car name:</td>
                                                    <td>" .$row["car name"]."</td>
                                                </tr>
                                                <tr>
                                                    <td>Brand:</td>
                                                    <td>" .$row["prand"]."</td>
                                                </tr>

                                                <tr>
                                                    <td>model Year:</td>
                                                    <td>" .$row["model Year"]."</td>
                                                </tr>

                                                <tr>
                                                    <td>Engine capacity:</td>
                                                    <td>" .$row["Engine capacity"]."</td>
                                                </tr>

                                                <tr>
                                                    <td>Horse power:	</td>
                                                    <td>" .$row["Horse power"]." </td>
                                                </tr>

                                                <tr>
                                                    <td>Top speed:</td>
                                                    <td>" .$row["Top speed"]."</td>
                                                </tr>

                                                <tr>
                                                    <td>Acceleration:</td>
                                                    <td>" .$row["Acceleration1"]."</td>
                                                </tr>
                                            
                                                <tr>
                                                    <td>Gears:</td>
                                                    <td>" .$row["Gears"]."</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                        <table class='table2'>
                                            <tbody>
                                                <tr>
                                                    <td>Transimtion	:</td>
                                                    <td>" .$row["Transimtion1"]." </td>
                                                </tr>
                                            
                                                <tr>
                                                    <td>model Year:	</td>
                                                    <td>" .$row["model Year"]."</td>
                                                </tr>

                                                <tr>
                                                    <td>Fuel:</td>
                                                    <td>" .$row["Fuel"]."</td>
                                                </tr>

                                                <tr>
                                                    <td>Liter/100km	:</td>
                                                    <td>" .$row["Liter/100km"]."</td>
                                                </tr>

                                                <tr>
                                                    <td>Assembly	:</td>
                                                    <td>" .$row["Assembly"]."</td>
                                                </tr>

                                                <tr>
                                                    <td>Length:</td>
                                                    <td>" .$row["Length1"]."</td>
                                                </tr>

                                                <tr>
                                                    <td>Width:</td>
                                                    <td> " .$row["Width1"]."</td>
                                                </tr>

                                                <tr>
                                                    <td>Height:</td>
                                                    <td>" .$row["Height1"]."</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                        <table class='table3'>
                                            <tbody>
                                                <tr>
                                                    <td>Height from the ground:	</td>
                                                    <td>" .$row["Height from the ground"]."</td>
                                                </tr>

                                                <tr>
                                                    <td>Wheel base:</td>
                                                    <td>" .$row["Wheel base1"]."</td>
                                                </tr>   
                                                
                                                <tr>
                                                    <td>Trunk capacity:</td>
                                                    <td>" .$row["Trunk capacity1"]."</td>
                                                </tr>

                                                <tr>    
                                                    <td>No.seats	:</td>
                                                    <td>" .$row["No.seats1"]."</td>
                                                </tr>

                                                <tr>
                                                    <td>Fuel tank capacity :</td>
                                                    <td>" .$row["Fuel tank capacity 1"]."</td>
                                                </tr>

                                                <tr>    
                                                    <td>drivetrain:</td>
                                                    <td>" .$row["drivetrain"]."</td>
                                                </tr>

                                                <tr>
                                                    <td>Cylinders:</td>
                                                    <td>" .$row["Cylinders1"]."</td>
                                                </tr>

                                                <tr>
                                                    <td>Torque:</td>
                                                    <td>" .$row["Torque1"]."</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                        <div class='star-rating'>
                                            <h3>rat car</h3>
                                            <input type='radio' name='rating' value='1' id='star-1'>
                                                <label for='star-1'></label>
                                            <input type='radio' name='rating'  value='2' id='star-2'>
                                                <label for='star-2'></label>
                                            <input type='radio' name='rating'  value='3' id='star-3'>
                                                <label for='star-3'></label>
                                            <input type='radio' name='rating'  value='4' id='star-4'>
                                                <label for='star-4'></label>
                                            <input type='radio' name='rating' value='5' id='star-5'>
                                                <label for='star-5'></label>
                                        </div>
                                    </div>
                                </div>    

                            ";
                        }
                    }
                    else
                    {
                        echo"0 result";
                    }
                    $conn-> close();
                ?><!--end table4 -->
            <script type="text/javascript">
    var counter = 1;
    setInterval(function(){
      document.getElementById('radio' + counter).checked = true;
      counter++;
      if(counter > 10){
        counter = 1;
      }
    }, 5000);
    </script>
    </body>
</html>        

<?php

    include 'footer.php';
?>



