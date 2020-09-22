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
        <button type="button" class="navbar-toggle nav-toggle side-button" data-toggle="colpcse" data-target="#my-nav"></button>
        <div class="lg-menu" id="my-nav">
            <ul class="mr-auto pc-list">
                <li><a href="../html/welcome.php" class="nav-links">Home</a></li>
                <li><a href="../html/logout.php" class="nav-links">Logout</a></li>
                <li class="nav-links"><img class="mx-1" src="../svg/user.svg"><?php echo $_SESSION["email"]; ?></li>
            </ul>
        </div>
    </nav>

    <div class="spacer"></div>

    <div class="row">
        <div class="card mx-auto shadow login-form p-4 m-4 w-50">
            <div class="pb-2 font-weight-bold h1 d-flex flex-row justify-content-start">
                <img src="../svg/cart.svg"> 
                <span class="px-1">Cart</span>
            </div>
            <div class="pb-2">
                <div class="p-2 d-flex flex-row justify-content-between">
                    <img src="../svg/cpu.svg" class="mx-2" width="50">
                    <span class="d-flex align-self-center mx-2">i7 1065G7</span>
                    <div class="d-flex align-self-center mx-2">
                        <span class="d-flex">$</span>
                        <span class="d-flex pl-1">426</span>
                    </div>
                </div>
                <div class="p-2 d-flex flex-row justify-content-between">
                    <img src="../svg/gpu.svg" class="mx-2" width="50">
                    <span class="d-flex align-self-center mx-2">RTX 2080 Ti</span>
                    <div class="d-flex align-self-center mx-2">
                        <span class="d-flex">$</span>
                        <span class="d-flex pl-1">1000</span>
                    </div>
                </div>
                <div class="p-2 d-flex flex-row justify-content-between">
                    <img src="../svg/ram.svg" class="mx-2" width="50">
                    <span class="d-flex align-self-center mx-2">Vengance 16GB DDR4</span>
                    <div class="d-flex align-self-center mx-2">
                        <span class="d-flex">$</span>
                        <span class="d-flex pl-1">75</span>
                    </div>
                </div>
                <div class="p-2 d-flex flex-row justify-content-between">
                    <img src="../svg/motherboard.svg" class="mx-2" width="50">
                    <span class="d-flex align-self-center mx-2">Iga1151G GIGABYTE</span>
                    <div class="d-flex align-self-center mx-2">
                        <span class="d-flex">$</span>
                        <span class="d-flex pl-1">500</span>
                    </div>
                </div>
                <div class="p-2 d-flex flex-row justify-content-between">
                    <img src="../svg/storage.svg" class="mx-2" width="50">
                    <span class="d-flex align-self-center mx-2">Samsung 1TB SSD</span>
                    <div class="d-flex align-self-center mx-2">
                        <span class="d-flex">$</span>
                        <span class="d-flex pl-1">150</span>
                    </div>
                </div>
                <div class="p-2 d-flex flex-row justify-content-between">
                    <img src="../svg/psu.svg" class="mx-2" width="50">
                    <span class="d-flex align-self-center mx-2">EVGA 1600E</span>
                    <div class="d-flex align-self-center mx-2">
                        <span class="d-flex">$</span>
                        <span class="d-flex pl-1">450</span>
                    </div>
                </div>
            </div> 

            <div class="p-2 d-flex flex-row justify-content-between border-top">
                <div></div>
                <span class="d-flex align-self-center ml-5 font-weight-bold">Total</span>
                <div class="d-flex align-self-center mx-2">
                    <span class="d-flex font-weight-bold">$</span>
                    <span class="d-flex pl-1 font-weight-bold">2601</span>
                </div>
            </div>
            <div class="row d-flex flex-column justify-content-center my-2">
                <div class="d-flex w-50 align-self-center justify-content-center">
                    <button class="submit-button"><div class="button-inlay text-center">Checkout</div></button>
                </div>  
            </div>
        </div>
    </div>
    
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="../js/bootstrap.min.js"></script>
</body>
</html>