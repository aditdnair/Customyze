<?php
    // Initialize the session
    session_start();
    require_once "configure1.php";
    $mcpu="select * from mobile_cpu";
    $mcpuquery=mysqli_query($link,$mcpu);

    $mbatt="select * from mobile_battery";
    $mbattquery=mysqli_query($link,$mbatt);

    $mstor="select * from mobile_storage";
    $mstorquery=mysqli_query($link,$mstor);

    $mgpu="select * from mobile_gpu";
    $mgpuquery=mysqli_query($link,$mgpu);
?>   
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Project Customyze</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="../svg/logo.svg" type="image/gif" sizes="16x16"> 
    <link href="https://fonts.googleapis.com/css?family=Montserrat:200,400,600" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/index.css">
</head>
<body class="container-fluid">

    <nav class="navbar nav-bar row">
        <a href="../html/home.php"><img src="../svg/name_logo.svg" class="logo"></a>        
        <button type="button" class="navbar-toggle nav-toggle side-button" data-toggle="collapse" data-target="#my-nav"></button>
        <div class="lg-menu" id="my-nav">
            <ul class="mr-auto pc-list">
                <li><a href="../html/welcome.php" class="nav-links">Home</a></li>
                <li><a href="../html/logout.php" class="nav-links">Logout</a></li>
                <li class="nav-links"><img class="mx-1" src="../svg/user.svg"><?php echo $_SESSION["email"]; ?></li>
            </ul>
        </div>
    </nav>

    <div class="spacer"></div>  

    <div class="row d-flex flex-column">        
        <div class="d-flex">
            <div class="d-flex flex-column col-md-4 align-self-start">
                <div class="d-flex flex-row my-5 mr-md-n5">
                    <select name="cpu" class="custom-select d-flex align-self-center mx-4">
                        <option selected>CPU</option>
                        <?php
                            while($row1=$mcpuquery->fetch_assoc())
                            {
                                $mob_cpu1=$row1['Name'];
                                $mob_cpu2=$row1['Clock Speed (Ghz)'];
                                $mob_cpu3=$row1['Price (USD)'];
                                $mob_cpu4=$row1['Category'];
                                echo "<option value=\'cpu\'>$mob_cpu1 "." $mob_cpu2 "." $mob_cpu3 "." $mob_cpu4</option>";
                            }
                        ?>
                    </select>
                    <img src="../svg/cpu.svg">
                </div>
    
                <div class="d-flex flex-row my-5">
                    <select name="storage" class="custom-select d-flex align-self-center mx-4">
                        <option selected>Storage</option>
                        <?php
                            while($row2=$mstorquery->fetch_assoc())
                            {
                                $mob_stor1=$row2['Capacity (GB)'];
                                $mob_stor2=$row2['Category'];
                                echo "<option value='\storage\'>$mob_stor1  "."   $mob_stor2</option>";
                            }
                        ?>
                    </select>
                    <img src="../svg/storage.svg">
                </div>
            </div>
            
            <div class="d-flex flex-column h-75 mt-4">
                <img class="p-2 w-100 mx-1" src="../svg/phone_menu.svg">
            </div>
            
            <div class="d-flex flex-column col-md-4 align-self-start py-2">
                <div class="d-flex flex-row my-5 ml-md-n5">
                    <img src="../svg/gpu.svg">     
                    <select name="gpu" class="custom-select d-flex align-self-center mx-4">
                        <option selected>GPU</option>
                        <?php
                            while($row3=$mgpuquery->fetch_assoc())
                            {
                                $mob_gpu1=$row3['Name'];
                                $mob_gpu2=$row3['Speed (GFLOPS)'];
                                $mob_gpu3=$row3['Price (USD)'];
                                $mob_gpu4=$row3['Category'];
                                echo "<option value='\gpu\'>$mob_gpu1  "."   $mob_gpu2 GFLOPS "."$$mob_gpu3   "."  $mob_gpu4</option>";
                            }
                        ?>
                    </select>
                </div>
    
                <div class="d-flex flex-row my-5">
                    <img src="../svg/battery.svg">
                    <select name="battery" class="custom-select d-flex align-self-center mx-4">
                        <option selected>Battery</option>
                        <?php
                            while($row4=$mbattquery->fetch_assoc())
                            {
                                $mob_batt1=$row4['Category'];
                                $mob_batt2=$row4['Capacity (mAh)'];
                                echo "<option value='\battery\'>$mob_batt1 "." $mob_batt2</option>";
                            }
                        ?>
                    </select>
                </div>
            </div>
        </div>
    </div>
    <div class="row d-flex flex-column justify-content-center my-2 col-4 offset-4">
        <span class="d-flex align-self-center">Details here</span>
        <div class="d-flex justify-content-center my-2">
            <a href="../html/computer-checkout.php" class="submit-button"><div class="button-inlay text-center">Checkout</div></a>
        </div>  
    </div>

    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="../js/bootstrap.min.js"></script>
</body>
</html>
