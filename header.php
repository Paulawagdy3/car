<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <link href="../css/body.css" rel="stylesheet">
        <script src="https://kit.fontawesome.com/b99e675b6e.js"></script>
    </head>
    <body>
        <!--start header-->
        <div class="nav-bar">
            <div class="container">
                <div class="logo">
                    <a >AZ <span>car</span></a>
                </div>

                <div class="max-weight">
                    <div class="wrapper1">
                        <div class="toggle-btn1" onclick="toggleSidebar1(this)">
                            <div class="span">
                                <span></span>
                                <span></span>
                                <span></span>
                            </div>
                        </div>
                        <div class="sidebar1" id="sidebar1">
                            <ul>
                                <li><a href="home.php"><i class="fas fa-blog"></i>Home</a></li>
                                <li><a href="caaaar.php" ><i class="fas fa-blog"></i>Car Makers</a></li>
                                <li><a href="car-get5,php"><i class="fas fa-blog"></i>car-get5</a></li>
                                <li class="sarch1">
                                    <form method="post" action="search.php">
                                        <input type="text" name="search" />
                                        <input type="submit" value="Search"/>
                                    </form>
                                </li>
                            </ul>  
                        </div>
                    </div>
                </div>
                <nav class="bar">
                    <ul>
                        <li><a href="home.php">Home</a></li>
                        <li><a href="caaaar.php">Car Makers</a></li>
                        <li><a href="car-get5.php">car-get5</a></li>
                        <li class="sarch1">
                            <form method="post" action="search.php">
                                <input type="text" name="search" />
                                <input type="submit" value="Search"/>
                            </form>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>

        <!--end header-->
        

        <script src="../js/nav-ym3n.js"></script>
    </body>
</html>
