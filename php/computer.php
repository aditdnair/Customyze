<?php
    // Initialize the session
    session_start();
    require_once "configure1.php";

    $pccpu="select * from pc_cpu";
    $pccpuquery=mysqli_query($link,$pccpu);

    $pcgpu="select * from pc_gpu";
    $pcgpuquery=mysqli_query($link,$pcgpu);

    $pcram="select * from pc_ram";
    $pcramquery=mysqli_query($link,$pcram);

    $pcstor="select * from pc_storage";
    $pcstorquery=mysqli_query($link,$pcstor);

    $pcmotherboard="select * from pc_motherboard";
    $pcmotherboardquery=mysqli_query($link,$pcmotherboard);

    $pcpsu="select * from pc_psu";
    $pcpsuquery=mysqli_query($link,$pcpsu);
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

    <form action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method="post">
    <div class="row d-flex flex-column">        
        <div class="d-flex">
            <div class="d-flex flex-column col-md-4 align-self-center">
                <div class="d-flex flex-row my-5 mr-md-n5">
                    <select name="cpu" class="custom-select d-flex align-self-center mx-2"  onchange="getOption()">
                        <option selected>CPU</option>
                        <?php
                            while($row1=$pccpuquery->fetch_assoc())
                            {
                                $pc_cpu1=$row1['Name'];
                                $pc_cpu2=$row1['Price (USD)'];
                                $pc_cpu3=$row1['Clock speed (GHz)'];
                                $pc_cpu4=$row1['Category'];
                                echo "<option value=\"$pc_cpu1\">$pc_cpu1 -"." $pc_cpu4 -"." $pc_cpu3 GHz -"." $$pc_cpu2 </option>";
                            }
                        ?>
                    </select>
                    <img src="../svg/cpu.svg">
                </div>
                <div class="d-flex flex-row my-5">
                    <select name="ram" class="custom-select d-flex align-self-center mx-2">
                        <option selected>RAM</option>
                        <?php
                            while($row2=$pcramquery->fetch_assoc())
                            {
                                $pc_ram1=$row2['Name'];
                                $pc_ram2=$row2['Price (USD)'];
                                $pc_ram3=$row2['Category'];
                                echo "<option value=\"$pc_ram1\">$pc_ram1 -"." $pc_ram3 -"." $$pc_ram2 "."</option>";
                            }
                        ?>
                    </select>
                    <img src="../svg/ram.svg">
                </div>
                <div class="d-flex flex-row my-5 mr-md-n5">
                    <select name="storage" class="custom-select d-flex align-self-center">
                        <option selected>Storage</option>
                        <?php
                            while($row3=$pcstorquery->fetch_assoc())
                            {
                                $pc_stor1=$row3['Name'];
                                $pc_stor2=$row3['Price (USD)'];
                                $pc_stor3=$row3['Speed (GBps)'];
                                $pc_stor4=$row3['Category'];
                                echo "<option value=\"$pc_stor1\">$pc_stor1 -"." $pc_stor4 -"." $pc_stor3 GBps -"." $$pc_stor2 </option>";
                            }
                        ?>
                    </select>
                    <img src="../svg/storage.svg">
                </div>
            </div>
            
            <div class="d-flex flex-column h-75 mt-4">
                <img class="p-2 w-100 mx-1" src="../svg/pc_menu.svg">
            </div>
            
            <div class="d-flex flex-column col-md-4 align-self-center">
                <div class="d-flex flex-row my-5 ml-md-n5">
                    <img src="../svg/gpu.svg">     
                    <select name="gpu" class="custom-select d-flex align-self-center mx-2">
                        <option selected>GPU</option>
                        <?php
                            while($row4=$pcgpuquery->fetch_assoc())
                            {
                                $pc_gpu1=$row4['Name'];
                                $pc_gpu2=$row4['Price (USD)'];
                                $pc_gpu3=$row4['Flops (TFlops)'];
                                $pc_gpu4=$row4['Category'];
                                echo "<option value=\"$pc_gpu1\">$pc_gpu1 -"." $pc_gpu4 -"." $pc_gpu3 TFlops     -"." $$pc_gpu2 </option>";
                            }
                        ?>
                    </select>
                </div>
                <div class="d-flex flex-row my-5">
                    <img src="../svg/motherboard.svg">
                    <select name="motherboard" class="custom-select d-flex align-self-center mx-2">
                        <option selected>Motherboard</option>
                        <?php
                            while($row5=$pcmotherboardquery->fetch_assoc())
                            {
                                $pc_board1=$row5['Name'];
                                $pc_board2=$row5['Price (USD)'];
                                $pc_board3=$row5['No. of USB ports'];
                                echo "<option value=\"$pc_board1\">$pc_board1 -"."  $pc_board3 Ports -"." $$pc_board2 </option>";
                            }
                        ?>
                    </select>
                </div>
                <div class="d-flex flex-row my-5 ml-md-n5">
                    <img src="../svg/psu.svg">
                    <select name="psu" class="custom-select d-flex align-self-center mx-2">
                        <option selected>PSU</option>
                        <?php
                            while($row6=$pcpsuquery->fetch_assoc())
                            {
                                $pc_psu1=$row6['Name'];
                                $pc_psu2=$row6['Price (USD)'];
                                $pc_psu3=$row6['Max Power (W)'];
                                $pc_psu4=$row6['Category'];
                                echo "<option value=\"$pc_psu1\">$pc_psu1 -"." $pc_psu4 -"." $pc_psu3 W -"." $$pc_psu2 </option>";
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
            <a href="../html/checkout-pc.html" class="submit-button"><div class="button-inlay text-center">Checkout</div></a>
        </div>  
    </div>                         
    </form> 
    
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="../js/bootstrap.min.js"></script>
    <?php
        if(isset($_POST["submit"]))
        {
            $_SESSION['ccpu']=$_POST['cpu'];
            $_SESSION['cgpu']=$_POST['gpu'];
            $_SESSION['cstorage']=$_POST['storage'];
            $_SESSION['cmotherboard']=$_POST['motherboard'];
            $_SESSION['cram']=$_POST['ram'];
            $_SESSION['cpsu']=$_POST['psu'];
        }
    ?>                            
</body>
</html>