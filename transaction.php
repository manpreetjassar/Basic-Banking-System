<!DOCTYPE html>
<html>
    <head>
        <title>Basic Banking System</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://fonts.googleapis.com/css2?family=Kaushan+Script&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="transact-style.css">
    </head>
    <body>
        <header>
            <div class="headersection">
            <div class="container">
                <div class="row pt-5 pb-3">
                    <div class="col-lg-8">
                       <h1 class="font-weight-light">WELCOME TO <span class="font-weight-bold" style="color: rgb(235, 28, 62);">Virtual</span><span class="font-weight-bold">BANK</span></h1>
                    </div>
                    <div class="col-lg-4 mt-2">
                       <div class="input-group">
                        <input type="text" class="form-control rounded-0" placeholder="Enter text here"> 
                        <div class="input-group-append">
                        <button class="btn btn-dark text-uppercase rounded-0 px-4 border-0" type="submit">Search</button>
                        </div>
                       </div>
                    </div>
                </div>

                <nav class="navbar navbar-expand-lg bg-dark navbar-dark p-0">
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
                      <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="collapsibleNavbar">
                      <ul class="navbar-nav">
                        <li class="nav-item active">
                          <a class="nav-link text-uppercase text-white px-4 py-3" href="index.php">Home</a>
                        </li>
                        <li class="nav-item">
                          <a id="myBtn" class="nav-link text-uppercase text-white px-4 py-3" href="transactionhistory.php">Transaction History</a>
                        </li>        
                        <li class="nav-item">
                          <a class="nav-link text-uppercase text-white px-4 py-3" href="#contact">Contact</a>
                        </li>    
                      </ul>
                      <div class="ml-auto" id="sec">
                        <ul class="navbar-nav">
                          <li class="nav-item">
                            <a class="nav-link text-uppercase text-white px-4 py-3" href="#"><i class="fab fa-twitter"></i></a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link text-uppercase text-white px-4 py-3" href="#"><i class="fab fa-facebook-f"></i></a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link text-uppercase text-white px-4 py-3" href="#"><i class="fab fa-google-plus-g"></i></a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link text-uppercase text-white px-4 py-3" href="#"><i class="fa fa-youtube"></i></a>
                          </li> 
                          <li class="nav-item">
                            <a class="nav-link text-uppercase text-white px-4 py-3" href="https://www.linkedin.com/in/manpreet-singh-495b34213/"><i class="fab fa-linkedin-in"></i></a>
                          </li>     
                        </ul>
                    </div> 
                    </div>  
                </nav>
            </div>
            </div>
        </header>

            <div style="background: linear-gradient(rgba(0,0,0,0.1), #009688), url(tr-money.jpg);
                        background-size: cover;
                        background-position: center;
                        width: 100%;
                        height: 100%;">
            <h2 class="text-center py-5 text-white" style="font-family: 'Kaushan Script', cursive;">Transfer money</h2>
            </div>
            <div class="container mt-5">
            <div class="row">
                <div class="col">
                    <div class="table-responsive-sm">
                    <table class="table table-hover table-sm table-striped table-condensed">
                        <thead class="thead-dark">
                            <tr>
                            <th scope="col" class="py-2 pl-2">S No.</th>
                            <th scope="col" class="py-2">Name</th>
                            <th scope="col" class="py-2">Email-id</th>
                            <th scope="col" class="py-2">Current Balance</th>
                            <th scope="col" class="py-2">Account-ID</th>
                            <th scope="col" class="py-2">Operation</th>
                            </tr>
                        </thead>
                        <tbody>
                <?php 
                    include 'config.php';
                    $sql = "SELECT * FROM userinfo";
                    $result = mysqli_query($conn,$sql);
                    while($rows=mysqli_fetch_assoc($result)){
                ?>
                    <tr style="color : black;">
                        <td class="py-2"><?php echo $rows['SNo'] ?></td>
                        <td class="py-2"><?php echo $rows['Name']?></td>
                        <td class="py-2"><?php echo $rows['Email-id']?></td>
                        <td class="py-2"><?php echo $rows['CurrentBalance']?></td>
                        <td class="py-2"><?php echo $rows['Account-ID']?></td>
                        <td><a href="selecteduser.php?id=<?php echo $rows['SNo'];?>"><button class="btn my-2" style="border-radius: 30px;">Transact</button></a></td> 
                    </tr>
                <?php
                    }
                ?>
            
                        </tbody>
                    </table>
                    </div>
                </div>
            </div> 
         </div>

         <footer class="page-footer text-center text-white">
          <p><i class="far fa-copyright"></i> All rights reserved | Design by Manpreet Singh</p>
        </footer>
    </body>
</html>
