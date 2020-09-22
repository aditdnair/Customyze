<?php
    // Initialize the session
    session_start();
    require_once "configure1.php";

    $lapcpu="select * from pc_cpu";
    $lapcpuquery=mysqli_query($link,$lapcpu);

    $lapram="select * from pc_ram";
    $lapramquery=mysqli_query($link,$lapram);

    $lapstor="select * from pc_storage";
    $lapstorquery=mysqli_query($link,$lapstor);

    $lapgpu="select * from pc_gpu";
    $lapgpuquery=mysqli_query($link,$lapgpu);

    $lapmotherboard="select * from pc_motherboard";
    $lapmotherboardquery=mysqli_query($link,$lapmotherboard);

    $lapbatt="select * from laptop_battery";
    $lapbattquery=mysqli_query($link,$lapbatt);
?>  
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Project Customyze</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="../svg/logo.svg" type="image/gif" sizes="16x16"> 
    <link href="https://fonts.googleapis.com/css?family=Montserrat:200,400,600" rel="stylesheet">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
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
            <div class="d-flex flex-column col-md-4 align-self-center">
                <div class="d-flex flex-row my-5 mr-md-n5">
                    <select name="cpu" class="custom-select d-flex align-self-center mx-4">
                        <option selected>CPU</option>
                        <?php
                            while($row1=$lapcpuquery->fetch_assoc())
                            {
                                $lap_cpu1=$row1['Name'];
                                $lap_cpu2=$row1['Price (USD)'];
                                $lap_cpu3=$row1['Clock (GHz)'];
                                $lap_cpu4=$row1['Category'];
                                echo "<option value=\'cpu\'>$lap_cpu1 "." $lap_cpu2 "." $lap_cpu3 "." $lap_cpu4</option>";
                            }
                        ?>
                    </select>
                    <img src="../svg/cpu.svg">
                </div>
                <div class="d-flex flex-row my-5">
                    <select name="ram" class="custom-select d-flex align-self-center mx-4">
                        <option selected>RAM</option>
                        <?php
                            while($row2=$lapramquery->fetch_assoc())
                            {
                                $lap_ram1=$row2['Name'];
                                $lap_ram2=$row2['Price (USD)'];
                                $lap_rama3=$row2['Category'];
                                echo "<option value=\'ram\'>$lap_ram1 "." $lap_ram2 "." $lap_ram3 "."</option>";
                            }
                        ?>
                    </select>
                    <img src="../svg/ram.svg">
                </div>
                <div class="d-flex flex-row my-5 mr-md-n5">
                    <select name="storage" class="custom-select d-flex align-self-center mx-4">
                        <option selected>Storage</option>
                        <?php
                            while($row3=$lapstorquery->fetch_assoc())
                            {
                                $lap_stor1=$row3['Name'];
                                $lap_stor2=$row3['Price (USD)'];
                                $lap_stor3=$row3['Speed (GBps)'];
                                $lap_stor4=$row3['Category'];
                                echo "<option value='\storage\'>$lap_stor1  "."   $lap_stor2 "."  $lap_stor3"."  $lap_stor4</option>";
                            }
                        ?>
                    </select>
                    <img src="../svg/storage.svg">
                </div>
            </div>
            
            <div class="d-flex flex-column h-75 mt-4">
                <img class="p-2 w-100 mx-1" src="../svg/laptop_menu.svg">
            </div>
            
            <div class="d-flex flex-column col-md-4 align-self-center">
                <div class="d-flex flex-row my-5 ml-md-n5">
                    <img src="../svg/gpu.svg">     
                    <select name="gpu" class="custom-select d-flex align-self-center mx-4">
                        <option selected>GPU</option>
                        <?php
                            while($row4=$lapgpuquery->fetch_assoc())
                            {
                                $lap_gpu1=$row4['Name'];
                                $lap_gpu2=$row4['Price (USD)'];
                                $lap_gpu3=$row4['Flop (TFlops)'];
                                $lap_gpu4=$row4['Category'];
                                echo "<option value='\gpu\'>$lap_gpu1  "." $$lap_gpu2  "."$lap_gpu3   "."  $lap_gpu4</option>";
                            }
                        ?>
                    </select>
                </div>
                <div class="d-flex flex-row my-5">
                    <img src="../svg/motherboard.svg">
                    <select name="motherboard" class="custom-select d-flex align-self-center mx-4">
                        <option selected>Motherboard</option>
                        <?php
                            while($row5=$lapmotherboardquery->fetch_assoc())
                            {
                                $lap_board1=$row5['Name'];
                                $lap_board2=$row5['Price (USD)'];
                                $lap_board3=$row5['No. of USB ports'];
                                echo "<option value='\motherboard\'>$lap_board1  "." $$lap_board2  "."$lap_board3 </option>";
                            }
                        ?>
                    </select>
                </div>
                <div class="d-flex flex-row my-5 ml-md-n5">
                    <img src="../svg/battery.svg">
                    <select name="battery" class="custom-select d-flex align-self-center mx-4">
                        <option selected>Battery</option>
                        <?php
                            while($row6=$lapbattquery->fetch_assoc())
                            {
                                $lap_batt1=$row6['Name'];
                                $lap_batt2=$row6['Capacity (mAh)'];
                                $lap_batt3=$row6['No. of Cells'];
                                $lap_batt4=$row6['Price (USD)'];
                                echo "<option value='\battery\'>$lap_batt1 "." $lap_batt2"." $lap_batt3"." $$lap_batt4</option>";
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