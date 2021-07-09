<!DOCTYPE html>
<html>
    <head>
        <title>Basic Banking System</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="style.css">
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
                          <a class="nav-link text-uppercase text-white px-4 py-3" href="#service">Services</a>
                        </li>        
                        <li class="nav-item">
                          <a class="nav-link text-uppercase text-white px-4 py-3" href="#footer">Contact</a>
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

        <div id="bank" class="carousel slide" data-ride="carousel" data-pause="false">
            <div class="carousel-inner">
              <div class="carousel-item">
                <img src="virtual.jpg">
                <div class="carousel-caption">
                  <h2 class="display-4 text-uppercase">Virtual Banking</h2>
                  <p style="font-size: 1.1rem;">Customers can make deposits, tranfer money to other users, check the current balance via a mobile app or through the website of the virtual bank, thus saving time due without having the need to visit a bank.</p>
                  <a class="btn text-uppercase rounded" style="padding: 10px 50px;" href="#">Learn more</a>
                </div>
              </div>
              <div class="carousel-item">
                <img src="opencover.jpg">
                <div class="carousel-caption">
                  <h2 class="display-4 text-uppercase float-left">Our portal</h2>
                  <p class="d-flexbox float-left">We are open 24/7. Our portal is convenient and all services can be performed online. Banking services can be accessed anywhere, anytime.</p>
                  <a class="btn text-uppercase rounded float-left" href="#">Connect yourself</a>
                </div>
              </div>
              <div class="carousel-item active">
                <img src="new.jpg">
                <div class="carousel-caption">
                  <h2 class="display-4 text-uppercase float-right">New experience</h2>
                  <p class="d-flexbox float-right">Virtual banking provides customer transaction and transfers with an ease. It is set to unleash a new era of digital banking experience.</p>
                  <a class="btn text-uppercase rounded float-right" href="#">Explore awesome</a>
                </div>
              </div>
            </div>
        </div>

        <section id="service" class="service py-5">
            <div class="heading text-center">
                <h1 class="text-uppercase text-success py-4">Services</h1>
            </div>
            <div class="container py-4">
            <div class="card-deck">
              <div class="card">
                <img class="card-img-top" src="viewc.jpg">
                <div class="card-body text-center">
                  <h4 class="card-title text-uppercase pt-3">View all Customers</h4>
                  <p class="card-text">You can view all the customer details along with their current balance.</p>
                  <a class="btn text-uppercase rounded mb-5" href="customers.php">View customers</a>
                </div>
              </div>
              <div class="card">
                <img class="card-img-top" src="tr-money.jpg">
                <div class="card-body text-center">
                  <h4 class="card-title text-uppercase pt-3">Transfer money</h4>
                  <p class="card-text">You can transfer money between multiple users with an ease.</p>
                  <a class="btn text-uppercase rounded mb-5" href="transaction.php">Transact money</a>
                </div>
              </div>
              <div class="card">
                <img class="card-img-top" src="transactions.jpg">
                <div class="card-body text-center">
                  <h4 class="card-title text-uppercase pt-3">Transaction history</h4>
                  <p class="card-text">You can check your latest and recent transactions in transaction history.</p>
                  <a class="btn text-uppercase rounded mb-5" href="transactionhistory.php">Check history</a>
                </div>
              </div>
            </div>
            </div>
        </section>

        <footer id="footer" class="page-footer text-center text-white mt-5 py-5">
            <h1 class="font-weight-bold text-white pb-5"><span style="color: rgb(235, 28, 62);">Virtual</span>BANK</h1>
            <div class="container">
                <hr color="white">
                <div class="row">
                    <div class="col-lg-4">
                        <ul class="list-unstyled">
                        <li>Feel free to contact us!</li>
                        <li><i class="material-icons" style="font-size: small;">location_on</i><small> Haryana, India</small></li>
                        <li><i class="fa fa-mobile-phone"></i><small> Phone: 9643349215</small></li>
                        <li><i class="fas fa-envelope" style="font-size: small;"></i><small> Email: manpreetsinghhunjan06@gmail.com</small></li>
                        </ul>
                    </div>
                    <div class="col-lg-4">
                        <ul class="list-unstyled">
                        <li>About Virtual Bank</li>
                        <li><small>Become a client</small></li>
                        <li><small>Get a new digital experience</small></li>
                        </ul>
                    </div>
                    <div class="col-lg-4">
                        <ul class="list-unstyled">
                        <li>Help desk</li>
                        <li><small>FAQs</small></li>
                        <li><small>Blog</small></li>
                        </ul>
                    </div>
                </div>
                <hr color="white">
                <p>Copyright ©2021 All rights reserved | Made by Manpreet Singh</p>
            </div>
        </footer>
    </body>
</html>