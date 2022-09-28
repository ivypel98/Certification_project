<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- Bootstrap CSS -->
    <link href="./css/bootstrap.min.css" rel="stylesheet" />
    <!-- <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css" rel="stylesheet"> -->
    <!-- font awesome -->
    <script src="https://kit.fontawesome.com/f3a211bc0c.js" crossorigin="anonymous"></script>
    <!-- Swipper CSS -->
    <link rel="stylesheet" href="css/swiper-bundle.min.css" />
    <!-- CSS -->
    <link href="./css/style.css" rel="stylesheet" />

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>

   <!-- title -->
    <title>Noelie Mode E-Shop</title>
  </head>

  <body>
    <?php
      require './php/navbar.php';
    ?>
    <!-- section 1 Accueil -->
    <section>
      <div class="container mt-lg-5 align-items-center">
        <div class="row">
          <div class="col-lg-5 col-md-12 col-12 pt-5">
            <div class="about-text">
              <h1>
                Imposez votre <br /><span class="elegance text-nowrap"
                  >Elégance</span
                ><br />
                Sophisticité
              </h1>
              <p class="pt-5 pb-5" style="color: #4f4f4f">
                Lorem ipsum dolor sit, amet consectetur adipisicing elit. Rem
                nemo quia cumque odio, consequatur? Quisquam a beatae
                dignissimos.
              </p>
            </div>
            <div class="about-button">
              <button class="btn cta fw-normal col-7 py-2 mb-4" ><a href="#find" style="text-decoration:none">Find our new products</a></button>
            </div>
          </div>
          <div class="about-img col-lg-7 col-md-12 col-12">
            <img
              src="./image/FendiFW22.jpeg"
              alt=""
              class="img-fluid rounded-3"
            />
            <div class="more">
              <img src="./image/explore.png" alt="" class="img-fluid" />
            </div>
          </div>
          </div>
          <div class="row mx-auto">
            <button class="btn now col-2 ms-auto shop"><a href="./user/login.php">Shop now</a></button>
          </div>
        </div>
      </div>
    </section>

    <section class="category section-padding">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="section-header mb-4">
              <h2 class="text-category fw-medium">Lorem ipsum dolor</h2>
              <p>Find every dress you need for your go-way on our catalogue</p>
            </div>
          </div>
        </div>
    
      <div class="row radio-btns" role="radiogroup">

        <div class="col-12 col-md-12 col-lg-3">
          <div class="card-one text-center pb-2 rounded-3 mb-4  radio-btns__btn">
            <div class="card-body"
            role="radio"
            aria-checked="false"
            tabindex="-1"
            aria-label="Select image one">
              <img src="./image/emojione-monotone_dress.png" class="img-fluid my-3 " alt>
              <p class="fw-semibold">
                Classic dress
              </p>
            </div>
          </div>
        </div>
          
        <div class="col-12 col-md-12 col-lg-3">
          <div class="card-two text-center pb-2 rounded-3 mb-4  radio-btns__btn">
            <div class="card-body"
            role="radio"
            aria-checked="false"
            tabindex="-1"
            aria-label="Select image one">
              <img src="./image/casual.png" class="img-fluid my-3" alt="Classic-dress">
              <p class="fw-semibold">
                Casual dress
              </p>
            </div>
          </div>
        </div>

        <div class="col-12 col-md-12 col-lg-3">
          <div class="card-three text-center pb-2 rounded-3 mb-4 radio-btns__btn">
            <div class="card-body"
            role="radio"
            aria-checked="false"
            tabindex="-1"
            aria-label="Select image one">
              <img src="./image/creative.png" class="img-fluid my-3" alt>
              <p class="fw-semibold">
                Creative wear
              </p>
            </div>
          </div>
        </div>

        <div class="col-12 col-md-12 col-lg-3">
          <div class="card-four text-center pb-2 rounded-3 mb-4  radio-btns__btn">
            <div class="card-body"
            role="radio"
            aria-checked="false"
            tabindex="-1"
            aria-label="Select image one">
              <img src="./image/bag.png" class="img-fluid my-3" alt>
              <p class="fw-semibold">
                Bags
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
    </section>

    <!-- section fits -->
    <section id="find" class="fits section-padding">
      <div class="container">
          <div class="row">
            <div class="col-md-12 mb-4">
              <div class="section-header mt-5">
                <h2 class="text-category fw-medium" >Find your fits</h2>
              </div>
            </div>
          </div>
          <?php
            include('blog.php');
          ?>
          <!-- <div class="row">
            <div class="col-lg-4 mb-4 dcc ">
              <div class="card text-center chile" style="width:21rem">
                    <div class="img">
                      <img src="./image/dresses/FendiFW224.png" alt="" class="img-fluid">
                    </div>
                    <div class="info-image">
                    <h2>Jane Doe</h2>
                    <p>Ideal for convention and koinonia</p>
                    <a href="./detail.php" class="btn see mx-4 mt-2 mb-4" >See details</a>
                  </div>
              </div>
            </div>

            <div class="col-lg-4 mb-4">
              <div class="card text-center chile" style="width:21rem">
                    <div class="img">
                      <img src="./image/dresses/FendiFW223.png" alt="" class="img-fluid">
                    </div>
                    <div class="info-image ">
                    <h2>Jane Doe</h2>
                    <p>Ideal for convention and koinonia</p>
                    <a href="./detail.php" class="btn see mx-4 mt-2 mb-4" >See details</a>
                  </div>
              </div>
            </div>

            <div class="col-lg-4 mb-4">
              <div class="card text-dark text-center chile"style="width:21rem">
                    <div class="img">
                      <img src="./image/dresses/FendiFW2212.png" alt="" class="img-fluid">
                    </div>
                    <div class="info-image text-dark">
                    <h2>Jane Doe</h2>
                    <p>Ideal for convention and koinonia</p>
                    <a href="./detail.php" class="btn see mx-4 mt-2 mb-4" >See details</a>
                  </div>
              </div>
            </div>
          </div>

          <div class="row">
            <div class="col-lg-4 mb-4">
              <div class="card text-dark text-center chile"style="width:21rem">
                    <div class="img">
                      <img src="./image/dresses/FendiFW224.png" alt="" class="img-fluid">
                    </div>
                    <div class="info-image text-dark">
                    <h2>Jane Doe</h2>
                    <p>Ideal for convention and koinonia</p>
                    <a href="./detail.php" class="btn see mx-4 mt-2 mb-4" >See details</a>
                  </div>
              </div>
            </div>

            <div class="col-lg-4 mb-4">
              <div class="card text-dark text-center chile"style="width:21rem" >
                    <div class="img">
                      <img src="./image/dresses/FendiFW223.png" alt="" class="img-fluid">
                    </div>
                    <div class="info-image ">
                    <h2>Jane Doe</h2>
                    <p>Ideal for convention and koinonia</p>
                    <a href="./detail.php" class="btn see mx-4 mt-2 mb-4" >See details</a>
                  </div>
                    
              </div>
            </div>

            <div class="col-lg-4 mb-4">
              <div class="card text-dark text-center chile" style="width:21rem">
                    <div class="img">
                      <img src="./image/dresses/FendiFW2212.png" alt="" class="img-fluid">
                    </div>
                    <div class="info-image text-dark">
                    <h2>Jane Doe</h2>
                    <p>Ideal for convention and koinonia</p>
                    <a href="./detail.php" class="btn see mx-4 mt-2 mb-4" >See details</a>
                  </div>
              </div>
            </div>
          </div> -->
          <div class="row mx-auto">
            <button class="btn now col-3 ms-auto mb-5 mt-2 shop"><a href="dress.php">Explore more</a></button>
          </div>
      </div>
    </section>
    <!-- section proof -->
      <section class="proof">
        <div class="container">
            <div class="row ">
              <div class="col-md-12 mb-4">
                <div class="section-header mt-5">
                  <h2 class="text-category fw-medium">Shop from everywhere</h2>
                </div>
              </div>
            </div>
            <div class="row proof-items">
              <div class="col-12 col-md-12 col-lg-4 mb-2">
                <div class="card text-center proof-quality">
                    <div class="card-body d-flex justify-content-center">
                      <div class="img-area proof-quality-icon rounded-circle">
                        <img src="./image/proof/quality.png" alt="">
                      </div>
                    </div>
                    <div class="proof-text">
                      <h6 class="text-dark align-content-center mb-sm-4">Quality</h6>
                    </div>
                </div>
              </div>
  
              <div class="col-12 col-md-12 col-lg-4 mb-2">
                <div class="card text-center proof-manu-qualite mb-1">
                    <div class="card-body d-md-flex">
                      <div class="img-area proof-manu rounded-circle">
                        <img src="./image/proof/manufacturer.png" alt="" class="img-fluid">
                      </div>
                      <div class="proof-text">
                        <h6 class="text-dark">From the manufacturer</h6>
                      </div>
                    </div>
                </div>

                <div class="card text-center proof-manu-qualite">
                  <div class="card-body d-flex">
                    <div class="img-area proof-manu rounded-circle ">
                      <img src="./image/proof/qualite.png" alt="" class="img-fluid">
                    </div>
                    <div class="proof-text">
                      <h6 class="text-dark">Qualities</h6>
                    </div>
                  </div>
              </div>
              </div>
  
              <div class="col-12 col-md-12 col-lg-4 mb-4">
                <div class="card text-center proof-security">
                    <div class="card-body d-flex justify-content-center">
                      <div class="img-area proof-security-icon rounded-circle">
                        <img src="./image/proof/security.png" alt="" class="img-fluid">
                      </div>
                    </div>
                    <div class="proof-text">
                      <h6 class="text-dark align-content-center mb-sm-2">Highly Secured payment system for transaction</h6>
                    </div>
                </div>
              </div>
            </div>
  
    </section>

<!-- section logos -->
  <section>
    <div class="container slider-logo align-content-lg-center">
      <div class="slider-track">
        <div class="logo">
          <img src="./image/logos/adidas.svg" height="150" width="150" alt="">
        </div>

        <div class="logo">
          <img src="./image/logos/bershka.svg" height="150" width="150" alt="">
        </div>

        <div class="logo">
          <img src="./image/logos/Chanel-Logo.wine-svg.svg" height="150" width="150" alt="">
        </div>

        <div class="logo">
          <img src="./image/logos/mango.svg" height="150" width="150" alt="">
        </div>

        <div class="logo">
          <img src="./image/logos/reebok.svg" height="150" width="150" alt="">
        </div>

        <div class="logo">
          <img src="./image/logos/stradivarius.svg" height="150" width="150" alt="">
        </div>

        <div class="logo">
          <img src="./image/logos/zara.svg" height="150" width="150" alt="">
        </div>
      </div>
    </div>
  </section>

<!-- section avis -->
    <div class="testimony ">
      <div class="slide-container swiper">
        <div class="slide-content">
          <div class="card-wrapper swiper-wrapper">
            <div class="card swiper-slide">
              <div class="image-content">
                <span class="overlay"></span>
                <div class="card-image">
                  <img src="./image/carimages/profile2.png" alt="" class="card-img" />
                </div>
                <div class="nameprof">
                  <h2 class="nameprof1">Arlene McCoy</h2>
                  <span class="country">Brazil</span><br />
                  <span class="date">February 11, 2014</span>
                </div>
              </div>
              <div class="card-content">
                <p class="description">
                  “ Pseudopes polylig. Diastik muligen. Tilig dibytäl. Kroling
                  dåsev. Vyst trikare. Ningar benimude. Bedide. Irulig
                  antibangar. Mikrovis pretyp. “
                </p>
              </div>
            </div>

            <div class="card swiper-slide">
              <div class="image-content">
                <span class="overlay"></span>
                <div class="card-image">
                  <img src="./image/carimages/profile1.png" alt="" class="card-img" />
                </div>
                <div class="nameprof">
                  <h2 class="nameprof1">Arlene McCoy</h2>
                  <span class="country">Brazil</span><br />
                  <span class="date">February 11, 2014</span>
                </div>
              </div>
              <div class="card-content">
                <p class="description">
                  “ Pseudopes polylig. Diastik muligen. Tilig dibytäl. Kroling
                  dåsev. Vyst trikare. Ningar benimude. Bedide. Irulig
                  antibangar. Mikrovis pretyp. “
                </p>
              </div>
            </div>

            <div class="card swiper-slide">
              <div class="image-content">
                <span class="overlay"></span>
                <div class="card-image">
                  <img src="./image/carimages/profile3.png" alt="" class="card-img" />
                </div>
                <div class="nameprof">
                  <h2 class="nameprof1">Arlene McCoy</h2>
                  <span class="country">Brazil</span><br />
                  <span class="date">February 11, 2014</span>
                </div>
              </div>
              <div class="card-content">
                <p class="description">
                  “ Pseudopes polylig. Diastik muligen. Tilig dibytäl. Kroling
                  dåsev. Vyst trikare. Ningar benimude. Bedide. Irulig
                  antibangar. Mikrovis pretyp. “
                </p>
              </div>
            </div>

            <div class="card swiper-slide">
              <div class="image-content">
                <span class="overlay"></span>
                <div class="card-image">
                  <img src="./image/carimages/profile4.png" alt="" class="card-img" />
                </div>
                <div class="nameprof">
                  <h2 class="nameprof1">Arlene McCoy</h2>
                  <span class="country">Brazil</span><br />
                  <span class="date">February 11, 2014</span>
                </div>
              </div>
              <div class="card-content">
                <p class="description">
                  “ Pseudopes polylig. Diastik muligen. Tilig dibytäl. Kroling
                  dåsev. Vyst trikare. Ningar benimude. Bedide. Irulig
                  antibangar. Mikrovis pretyp. “
                </p>
              </div>
            </div>

            <div class="card swiper-slide">
              <div class="image-content">
                <span class="overlay"></span>
                <div class="card-image">
                  <img src="./image/carimages/profile5.png" alt="" class="card-img" />
                </div>
                <div class="nameprof">
                  <h2 class="nameprof1">Arlene McCoy</h2>
                  <span class="country">Brazil</span><br />
                  <span class="date">February 11, 2014</span>
                </div>
              </div>
              <div class="card-content">
                <p class="description">
                  “ Pseudopes polylig. Diastik muligen. Tilig dibytäl. Kroling
                  dåsev. Vyst trikare. Ningar benimude. Bedide. Irulig
                  antibangar. Mikrovis pretyp. “
                </p>
              </div>
            </div>

            <div class="card swiper-slide">
              <div class="image-content">
                <span class="overlay"></span>
                <div class="card-image">
                  <img src="./image/carimages/profile1.png" alt="" class="card-img" />
                </div>
                <div class="nameprof">
                  <h2 class="nameprof1">Arlene McCoy</h2>
                  <span class="country">Brazil</span><br />
                  <span class="date">February 11, 2014</span>
                </div>
              </div>

              <div class="card-content">
                <p class="description">
                  “ Pseudopes polylig. Diastik muligen. Tilig dibytäl. Kroling
                  dåsev. Vyst trikare. Ningar benimude. Bedide. Irulig
                  antibangar. Mikrovis pretyp. “
                </p>
              </div>
            </div>
            <div class="card swiper-slide">
              <div class="image-content">
                <span class="overlay"></span>
                <div class="card-image">
                  <img src="./image/carimages/profile2.png" alt="" class="card-img" />
                </div>
                <div class="nameprof">
                  <h2 class="nameprof1">Arlene McCoy</h2>
                  <span class="country">Brazil</span><br />
                  <span class="date">February 11, 2014</span>
                </div>
              </div>

              <div class="card-content">
                <p class="description">
                  “ Pseudopes polylig. Diastik muligen. Tilig dibytäl. Kroling
                  dåsev. Vyst trikare. Ningar benimude. Bedide. Irulig
                  antibangar. Mikrovis pretyp. “
                </p>
              </div>
            </div>

            <div class="card swiper-slide">
              <div class="image-content">
                <span class="overlay"></span>
                <div class="card-image">
                  <img src="./image/carimages/profile3.png" alt="" class="card-img" />
                </div>
                <div class="nameprof">
                  <h2 class="nameprof1">Arlene McCoy</h2>
                  <span class="country">Brazil</span><br />
                  <span class="date">February 11, 2014</span>
                </div>
              </div>
              <div class="card-content">
                <p class="description">
                  “ Pseudopes polylig. Diastik muligen. Tilig dibytäl. Kroling
                  dåsev. Vyst trikare. Ningar benimude. Bedide. Irulig
                  antibangar. Mikrovis pretyp. “
                </p>
              </div>
            </div>
          </div>
        </div>
        <div class="swipper-button">
          <div class="swiper-button-next swiper-navBtn"></div>
          <div class="swiper-button-prev swiper-navBtn"></div>
          <div class="swiper-pagination"></div>
        </div>
      </div>
    </div>

<!-- section footer-->
  <?php
  require './php/footer.php'?>

    <!-- <script>
      $(document).ready(function(){
        $('col-lg-4').hover(
          //trigger when mouse hover
          function(){
            $(this).animate({
                marginTop: "-=1%",

          },200);
          },
          //trigger when mouse out
          function(){
            $(this).animate({
              marginTop:"0%",
            },200);
          }
        );
      });

    </script> -->
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <!-- <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js" integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous"></script>    Swipper JS -->
    <script src="js/swiper-bundle.min.js"></script>
    <!-- Javascript -->
    <script src="js/car.js"></script>
  </body>
</html>
