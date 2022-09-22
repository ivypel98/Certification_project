<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- Bootstrap CSS -->
    <link href="./css/bootstrap.min.css" rel="stylesheet" />
    <!-- font awesome -->
    <script
      src="https://kit.fontawesome.com/f3a211bc0c.js"
      crossorigin="anonymous"
    ></script>
    <!-- jquery -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" integrity="sha512-bLT0Qm9VnAYZDflyKcBaQ2gg0hSYNQrJ8RilYldYQ1FxQYoCLtUjuuRuZo+fjqhx/qtq/1itJ0C2ejDxltZVFg==" 
    crossorigin="anonymous"></script>
    <!-- CSS -->
    <link href="./CSS/style2.css" rel="stylesheet" />
    <title>Dress</title>
  </head>
  <body>
    <!-- Debut Navbar -->
      <?php
        require './php/navbar.php'
      ?>
    <!-- Debut Navbar -->

    <div class="card text-center dress">
        <div class="card text-center shop-card"><h1>Dress</h2></div>
      <div class="card-header">
        
        <ul class="nav nav-tabs card-header-tabs">
          <li class="nav-item">
            <a class="nav-link" href="index.php">
              <i class="fas fa-home text-dark" style="font-size:25px;"></i>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link active" href=""><span class="display-6">Dress </span></a>
          </li>
          <li class="nav-item ">
            <a class="nav-link " href="bags.php"><span class="display-6">Bags</span></a>
          </li>
          
        </ul>
      </div>

      <div class="container p-5">
            <div class="row">
              <div class="container col-12 col-md-12 col-lg-4 mb-4 image">
                <!-- debut popup -->
                <div class="multi-button">
                  <button class="fas fa-heart" id="btnPopup"></button> 
                </div>
                <div id="overlay" class="overlay ">
                    <div class="carte text-center">
                        <div id="popup" class="popup text-center">
                            <span id="btnClose" class="btnClose">&times;</span>
                            <h3 class="pt-4">My wish List</h3>
                            <p class="py-2">Log in to manage your lists</p>
                            <button class="col-5 mb-4 p-3 login">Login</button><br>
                            <button class="create col-5 p-3">Create an account</button>
                        </div>
                    </div>
                </div>
                <!-- fin popup -->
                <div class="card text-light text-center ">
                    <div class="card-body">
                      <div class="img-area">
                        <img src="./image/dresses/FendiFW224.png" alt="" class="img-fluid">
                      </div>
                    </div>
                </div>
              </div>
  
              <div class="col-12 col-md-12 col-lg-4 mb-4 image">
                <div class="multi-button">
                  <!--Don't need to say how many buttons there will be, handled on lines 42-93-->
                <button class="fas fa-heart"></button>
                </div>
                <div class="card text-light text-center">
                    <div class="card-body">
                      <div class="img-area">
                        <img src="./image/dresses/FendiFW223.png" alt="" class="img-fluid">
                      </div>
                    </div>
                </div>
              </div>
  
              <div class="col-12 col-md-12 col-lg-4 mb-4 image">
                <div class="multi-button">
                  <!--Don't need to say how many buttons there will be, handled on lines 42-93-->
                <button class="fas fa-heart"></button>
                </div>
                <div class="card text-light text-center ">
                    <div class="card-body">
                      <div class="img-area">
                        <img src="./image/dresses/FendiFW2212.png" alt="" class="img-fluid">
                      </div>
                    </div>
                </div>
              </div>
            </div>

            <div class="row">
              <div class="col-12 col-md-12 col-lg-4 mb-4 image">
                <div class="multi-button">
                  <!--Don't need to say how many buttons there will be, handled on lines 42-93-->
                <button class="fas fa-heart"></button>
                </div>
                <div class="card text-light text-center ">
                    <div class="card-body">
                      <div class="img-area">
                        <img src="./image/dresses/FendiFW223.png" alt="" class="img-fluid">
                      </div>
                    </div>
                </div>
              </div>
  
              <div class="col-12 col-md-12 col-lg-4 mb-4 image">
                <div class="multi-button">
                  <!--Don't need to say how many buttons there will be, handled on lines 42-93-->
                <button class="fas fa-heart"></button>
                </div>
                <div class="card text-light text-center">
                    <div class="card-body">
                      <div class="img-area">
                        <img src="./image/dresses/FendiFW224.png" alt="" class="img-fluid">
                      </div>
                    </div>
                </div>
              </div>
  
              <div class="col-12 col-md-12 col-lg-4 mb-4 image">
                <div class="multi-button">
                  <!--Don't need to say how many buttons there will be, handled on lines 42-93-->
                <button class="fas fa-heart"></button>
                </div>
                <div class="card text-light text-center ">
                    <div class="card-body">
                      <div class="img-area">
                        <img src="./image/dresses/FendiFW2212.png" alt="" class="img-fluid">
                      </div>
                    </div>
                </div>
              </div>
            </div>

            <div class="row">
              <div class="col-12 col-md-12 col-lg-4 mb-4 image">
                <div class="multi-button">
                  <!--Don't need to say how many buttons there will be, handled on lines 42-93-->
                  <button class="fas fa-heart"></button>
                </div>
                <div class="card text-light text-center ">
                    <div class="card-body">
                      <div class="img-area">
                        <img src="./image/dresses/FendiFW223.png" alt="" class="img-fluid">
                      </div>
                    </div>
                </div>
              </div>
  
              <div class="col-12 col-md-12 col-lg-4 mb-4 image">
                <div class="multi-button">
                  <!--Don't need to say how many buttons there will be, handled on lines 42-93-->
                <button class="fas fa-heart"></button>
                </div>
                <div class="card text-light text-center">
                    <div class="card-body">
                      <div class="img-area">
                        <img src="./image/dresses/FendiFW2212.png" alt="" class="img-fluid">
                      </div>
                    </div>
                </div>
              </div>
  
              <div class="col-12 col-md-12 col-lg-4 mb-4 image">
                <div class="multi-button">
                  <!--Don't need to say how many buttons there will be, handled on lines 42-93-->
                <button class="fas fa-heart"></button>
                </div>
                <div class="card text-light text-center ">
                    <div class="card-body">
                      <div class="img-area">
                        <img src="./image/dresses/FendiFW223.png" alt="" class="img-fluid">
                      </div>
                    </div>
                </div>
              </div>
            </div>

            <div class="row">
              <div class="col-12 col-md-12 col-lg-4 mb-4 image">
                <div class="multi-button">
                  <!--Don't need to say how many buttons there will be, handled on lines 42-93-->
                <button class="fas fa-heart"></button>
                </div>
                <div class="card text-light text-center ">
                    <div class="card-body">
                      <div class="img-area">
                        <img src="./image/dresses/FendiFW224.png" alt="" class="img-fluid">
                      </div>
                    </div>
                </div>
              </div>
  
              <div class="col-12 col-md-12 col-lg-4 mb-4 image">
                <div class="multi-button">
                  <!--Don't need to say how many buttons there will be, handled on lines 42-93-->
                <button class="fas fa-heart"></button>
                </div>
                <div class="card text-light text-center">
                    <div class="card-body">
                      <div class="img-area">
                        <img src="./image/dresses/FendiFW223.png" alt="" class="img-fluid">
                      </div>
                    </div>
                </div>
              </div>
  
              <div class="col-12 col-md-12 col-lg-4 mb-4 image">
                <div class="multi-button">
                  <!--Don't need to say how many buttons there will be, handled on lines 42-93-->
                <button class="fas fa-heart"></button>
                </div>
                <div class="card text-light text-center ">
                    <div class="card-body">
                      <div class="img-area">
                        <img src="./image/dresses/FendiFW224.png" alt="" class="img-fluid">
                      </div>
                    </div>
                </div>
              </div>
            </div>

            <div class="row">
              <div class="col-12 col-md-12 col-lg-4 mb-4 image">
                <div class="multi-button">
                  <!--Don't need to say how many buttons there will be, handled on lines 42-93-->
                <button class="fas fa-heart"></button>
                </div>
                <div class="card text-light text-center ">
                    <div class="card-body">
                      <div class="img-area">
                        <img src="./image/dresses/FendiFW223.png" alt="" class="img-fluid">
                      </div>
                    </div>
                </div>
              </div>
  
              <div class="col-12 col-md-12 col-lg-4 mb-4 image">
                <div class="multi-button">
                  <!--Don't need to say how many buttons there will be, handled on lines 42-93-->
                <button class="fas fa-heart"></button>
                </div>
                <div class="card text-light text-center">
                    <div class="card-body">
                      <div class="img-area">
                        <img src="./image/dresses/FendiFW224.png" alt="" class="img-fluid">
                      </div>
                    </div>
                </div>
              </div>
  
              <div class="col-12 col-md-12 col-lg-4 mb-4 image">
                <div class="multi-button">
                  <!--Don't need to say how many buttons there will be, handled on lines 42-93-->
                <button class="fas fa-heart"></button>
                </div>
                <div class="card text-light text-center ">
                    <div class="card-body">
                      <div class="img-area">
                        <img src="./image/dresses/FendiFW2212.png" alt="" class="img-fluid">
                      </div>
                    </div>
                </div>
              </div>
            </div>

            <div class="row">
              <div class="col-12 col-md-12 col-lg-4 mb-4 image">
                <div class="multi-button">
                  <!--Don't need to say how many buttons there will be, handled on lines 42-93-->
                <button class="fas fa-heart"></button>
                </div>
                <div class="card text-light text-center ">
                    <div class="card-body">
                      <div class="img-area">
                        <img src="./image/dresses/FendiFW224.png" alt="" class="img-fluid">
                      </div>
                    </div>
                </div>
              </div>
  
              <div class="col-12 col-md-12 col-lg-4 mb-4 image">
                <div class="multi-button">
                  <!--Don't need to say how many buttons there will be, handled on lines 42-93-->
                <button class="fas fa-heart"></button>
                </div>
                <div class="card text-light text-center">
                    <div class="card-body">
                      <div class="img-area">
                        <img src="./image/dresses/FendiFW223.png" alt="" class="img-fluid">
                      </div>
                    </div>
                </div>
              </div>
  
              <div class="col-12 col-md-12 col-lg-4 mb-2 image">
                <div class="multi-button">
                  <!--Don't need to say how many buttons there will be, handled on lines 42-93-->
                <button class="fas fa-heart"></button>
                </div>
                <div class="card text-light text-center ">
                    <div class="card-body">
                      <div class="img-area">
                        <img src="./image/dresses/FendiFW224.png" alt="" class="img-fluid">
                      </div>
                    </div>
                </div>
              </div>
            </div>
      </div>
          <div class="row justify-content-center mb-4 pb-3">
            <a class="btn see-more col-2">Load more dress </a>
          </div>
          <script>
            $(document).ready(function(){
              $(".image").slice(0,9).fadeIn();
              $(".see-more").click(function(){
                $(".image").slice(0, 15).fadeIn();
                $(".see-more").click(function(){
                  $(".image").slice(0, 25).fadeIn();
                  $(this).fadeOut();
              });
              });
            });
          </script>
      </div>
    </div>

<!-- section footer-->
  <?php
  require './php/footer.php'?>
  
<script src="./js/script.js"></script>
  </body>
</html>
