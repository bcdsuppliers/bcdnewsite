<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>BCD Suppliers</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  </head>
  <body data-bs-spy="scroll">
    <nav class="navbar bg-body-tertiary" id="navbar">
        <div class="container-fluid" id="top">
          <a class="navbar-brand" href="#">
            <img src="logo.png" alt="Logo" width="30" height="24" class="d-inline-block align-text-top">
            <b style="color: black;">B</b><b style="color: rgb(145, 113, 0);">C</b><b style="color: rgb(255, 145, 0);">D</b> Suppliers
          </a>
          <a class="navbar-brand about-us" href="about-us">About Us</a>
        </div>
      </nav>
      <ul class="nav justify-content-center">
        <li class="nav-item">
            <div class="dropdown">
                <a class="btn btn-bg-light dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Lights
                </a>
              
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="#led-bulb" >LED Bulb</a></li>
                  <li><a class="dropdown-item" href="#panel-lights">Panel Lights</a></li>
                  <li><a class="dropdown-item" href="#tube-lights">Tube Lights</a></li>
                  <li><a class="dropdown-item" href="#strip-lights">Strip Lights</a></li>
                  <li><a class="dropdown-item" href="#flood-lights">Flood Lights</a></li>
                </ul>
              </div>
        </li>
        <li class="nav-item">
            <div class="dropdown">
                <a class="btn btn-bg-light" href="#wires" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Wire
                </a>
              </div>
        </li>
        <li class="nav-item">
            <div class="dropdown">
                <a class="btn btn-bg-light dropdown-toggle" href="#socket" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Socket
                </a>
              
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="#socket">1 Gang</a></li>
                  <li><a class="dropdown-item" href="#socket">2 Gang</a></li>
                </ul>
            </div>
        </li>
        <li class="nav-item">
            <div class="dropdown">
                <a class="btn btn-bg-light dropdown-toggle" href="#switch" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Switch
                </a>
              
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="#switch">1 Gang</a></li>
                  <li><a class="dropdown-item" href="#switch">2 Gang</a></li>
                  <li><a class="dropdown-item" href="#switch">4 Gang</a></li>
                  <li><a class="dropdown-item" href="#switch">6 Gang</a></li> 
                </ul>
            </div>
        </li>
        <li class="nav-item">
          <div class="dropdown">
            <a class="btn btn-bg-light dropdown-toggle" href="#cyber" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Cyber
            </a>
          
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="#cyber">Print</a></li>
              <li><a class="dropdown-item" href="#cyber">Online Form</a></li>
              <li><a class="dropdown-item" href="#cyber">Graphic Design</a></li>
            </ul>
          </div>
        </li>
        <li class="nav-item">
          <div class="dropdown">
              <a class="btn btn-bg-light dropdown-toggle" href="#printer" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Printer
              </a>
            
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="#printer">Printer Repair</a></li>
                <li><a class="dropdown-item" href="#printer">Toner Refill</a></li>
                <li><a class="dropdown-item" href="#printer">Ink Refill</a></li>
              </ul>
          </div>
      </li>
      <li class="nav-item">
        <div class="dropdown">
          <a class="btn btn-bg-light dropdown-toggle" href="" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Laser Craft
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="">Leaf Engrvaing</a></li>
            <li><a class="dropdown-item" href="">Wooden Clock</a></li>
            <li><a class="dropdown-item" href="">Wooden Craft</a></li>
          </ul>
        </div>
      </li>
      </ul>

      <!-- Carousel -->
<div id="demo" class="carousel slide" data-bs-ride="carousel">

  <!-- Indicators/dots -->
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#demo" data-bs-slide-to="0" class="active"></button>
    <button type="button" data-bs-target="#demo" data-bs-slide-to="1"></button>
    <button type="button" data-bs-target="#demo" data-bs-slide-to="2"></button>
  </div>

  <!-- The slideshow/carousel -->
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="Like &.jpg" alt="slider1" class="d-block w-100">
    </div>
    <div class="carousel-item">
      <img src="Shop Now.jpg" alt="slider2" class="d-block w-100">
    </div>
    <div class="carousel-item">
      <img src="slider3.png" alt="slider3" class="d-block w-100">
    </div>
  </div>

  <!-- Left and right controls/icons -->
  <button class="carousel-control-prev" type="button" data-bs-target="#demo" data-bs-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#demo" data-bs-slide="next">
    <span class="carousel-control-next-icon"></span>
  </button>
</div>
<div class="container">
<div class="row align-items-center d-flex gap-3">
  <div class="card mx-auto p-2" style="width: 18rem;" id="led-bulb">
    <img src="LED Bulbs.png" class="card-img-top" alt="Image">
    <div class="card-body">
      <h5 class="card-title d-flex justify-content-around">LED Bulbs <a class="btn btn-primary " data-bs-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
        Details
      </a></h5>
      <div class="collapse" id="collapseExample">
        <div class="card card-body">
          <p class="card-text">
            Wattage Avilable: 1W, 3W, 5W, 7W, 9W, 11W, 12W, 18W, 20W, 25W, 30W, 35W, 40W, 45W, 55W 
            <br> Brand:- Vishal, Wega, Wagi, Wezan,Brilliant, Rajhdhani, Wagi</p>
        </div>
      </div>
    </div>
  </div>
  <div class="card mx-auto p-2" style="width: 18rem;">
    <img src="LED Panel lights.jpg" class="card-img-top" alt="Image">
    <div class="card-body">
      <h5 class="card-title d-flex justify-content-around">Panel Lights<a class="btn btn-primary " data-bs-toggle="collapse" href="#collapseExample1" role="button" aria-expanded="false" aria-controls="collapseExample">
        Details
      </a></h5>
      <div class="collapse" id="collapseExample1">
        <div class="card card-body">
          <p class="card-text">
            <b>1. Concealed LED Panel
              2. Surface LED Panel
              3. Cob LED light
            </b>
            Wattage Avilable: 1W, 3W, 5W, 7W, 9W, 11W, 12W, 18W, 20W, 25W, 30W, 35W, 40W, 45W, 55W 
            Brand:- Vishal, Wega, Wagi, Wezan,Brilliant, Rajhdhani, Wagi</p>
        </div>
      </div>
    </div>
  </div>
  <div class="card mx-auto p-2" style="width: 18rem;">
    <img src="tubelight.jpg" class="card-img-top" alt="Image">
    <div class="card-body">
      <h5 class="card-title d-flex justify-content-around">Panel Lights<a class="btn btn-primary " data-bs-toggle="collapse" href="#collapseExample1" role="button" aria-expanded="false" aria-controls="collapseExample">
        Details
      </a></h5>
      <div class="collapse" id="collapseExample1">
        <div class="card card-body">
          <p class="card-text">
            Wattage Avilable: 18w, 20w, 30W
        <br> Brand:- Vishal, Hemptra, Fl Plus</p>
        </div>
      </div>
    </div>
  </div>
</div>
</div>

<!-- old design -->
<!-- <hr class="divider">
  <div class="container-fluid border-bottom">
<div class="container-fluid">
  <div class="row p-3">
    <h1 class="justify-content-center">Lights</h1>
    <div class="col-md-6">
      <img src="LED Bulbs.png" class="img-fluid">
    </div>
    <div class="col-md-6" id="led-bulb">
      <h2>LED Bulbs</h2>
      <p>Wattage Avilable: 1W, 3W, 5W, 7W, 9W, 11W, 12W, 18W, 20W, 25W, 30W, 35W, 40W, 45W, 55W 
        <br> Brand:- Vishal, Wega, Wagi, Wezan,Brilliant, Rajhdhani, Wagi</p>
    </div>
  </div>
  <br>
  <hr class="divider">
  <div class="container-fluid border-bottom">
  </div>
  <div class="row p-3">
    <div class="col-md-6">
      <h2>Panel Lights</h2>
      <h3>1. Concealed LED Panel
        <br>2. Surface LED Panel
        <br>3. Cob LED light
      </h3>

      <p>Wattage Avilable: 3w,6w,9w, 12w, 18W, 24W
        <br> Brand:- Vishal, Wega, Rajhdhani, Wagi,Solo </p>
    </div>
    <div class="col-md-6"  id="panel-lights">
      <img src="LED Panel lights.jpg" class="img-fluid">
    </div>
  </div>
  <hr class="divider">
  <div class="container-fluid border-bottom">
  </div>
    <div class="row p-3" id="tube-lights">
      <div class="col-md-6">
        <img src="tubelight.jpg" class="img-fluid">
      </div>
      <div class="col-md-6" id="led-bulb">
        <h2>Tube Lights</h2>
      <p>Wattage Avilable: 18w, 20w, 30W
        <br> Brand:- Vishal, Hemptra, Fl Plus</p>
    </div>
  </div>
  <hr class="divider">
  <div class="container-fluid border-bottom">
  </div>
  <div class="row p-3" id="strip-lights">
    <div class="col-md-6">
      <h2>Strip Lights</h2>
      <p>Avilable: 3mm, 6mm, 8mm, 10mm
        <br> Brand:- Vishal, Bright Nepal, Wega </p>
    </div>
    <div class="col-md-6">
      <img src="strip ligjt.jpg" class="img-fluid">
    </div>
  </div>
  <hr class="divider">
  <div class="container-fluid border-bottom">
  </div>
  <div class="row p-3" id="flood-lights">
    <div class="col-md-6">
      <img src="Flood Light.jpg" class="img-fluid">
    </div>
    <div class="col-md-6">
      <h2>Flood Lights</h2>
      <p>Wattage Avilable: 40W, 50W, 100W, 400W, 600W
        <br> Brand:- Vishal, Bright Nepal, Wega </p>
    </div>
  </div>
  <hr class="divider">
  <div class="container-fluid border-bottom">
  </div>
  <div class="row p-3" id="wires">
    <div class="col-md-6">
      <h2>Wire</h2>
      <p>Size Avilable: 1mm, 1.5mm, 2mm, 2.5mm, 3.5mm, 6mm, 10mm
        -(90m)in Roll
        <br> Brand:- Rathi, Trishakti, Poineer, Janata </p>
    </div>
    <div class="col-md-6">
      <img src="wires.jpg" class="img-fluid">
    </div>
  </div>
  <hr class="divider">
  <div class="container-fluid border-bottom">
  </div>
  <div class="row p-3" id="socket">
    <div class="col-md-6">
      <img src="Power socket.jpg" class="img-fluid">
    </div>
    <div class="col-md-6">
      <h2>Socket</h2>
      <p>Avilable: 1 gang, 2 gang, Plain Socket, Male-Female
        <br> Brand:- Rajdhani, Prakash, Vishal </p>
    </div>
  </div>Prakash, VishalPrakash, VishalPrakash, ViPrakash, VishalPrakash, Vishalshal
  <hr class="divider">
  <div class="container-fluid border-bottom">
  </div>
  <div class="row p-3" id="switch">
    <div class="col-md-6">
      <h2>Switch</h2>
      <p>Avilable: 1 gang, 2 gang, 4 gang, 6 gang, 4 Gang Switch + Socket, 6 Gang Switch + Socket
        <br> Brand:- Rajdhani, Prakash, Vishal </p>
    </div>
    <div class="col-md-6">
      <img src="switch.jpg" class="img-fluid">
    </div>
  </div>
  <hr class="divider">
  <div class="container-fluid border-bottom">
  </div>
  <div class="row p-3" id="cyber">
    <div class="col-md-6">
      <img src="cyber services.jpg" class="img-fluid">
    </div>
    <div class="col-md-6">
      <h2>Cyber</h2>
      <p>1. Online Forms Filled Up:
        <br> NID, Passport, Death Registration, Birth Registration, Migration, Marriage Registration, Loak Sewa Ayog, Shishek Sewa Ayog
        <br>2. Electricity Bill / Water Bill /traffic Fine Online Payment
        <br>3. Graphic Designs
        <br>4. Website Design
        <br>5. Money Trasnfer and Withdraw</p>
    </div>
  </div>
  <hr class="divider">
  <div class="container-fluid border-bottom">
  </div>
  <div class="row p-3" id="printer">
    <div class="col-md-6">
      <h2>Printer</h2>
      <p>1. Printer Repair
        <br> 2. Ink Refill in color printer
      <br>3. Toner Refill : Toner Refill in all types of Printers. Canon/ Hp/ Samsumg/ Pantum/ Brother
      <br>4. Printing Services: Colour Print / Photocopy/ Black & White Print</p>
      <img src="printer rep.jpeg" class="img-fluid" w-70>
    </div>
    <div class="col-md-6">
      <img src="Printer Repair.jpg" class="img-fluid">
    </div>
  </div>
  <hr class="divider">
  <div class="container-fluid border-bottom">
  </div> -->
</div>



<!-- footer -->
<!-- Remove the container if you want to extend the Footer to full width. -->
<div class="container my-5">
  <!-- Footer -->
  <footer>
    <!-- Grid container -->
    <div class="container p-4 pb-0">
      <!-- Section: Links -->
      <section class="">
        <!--Grid row-->
        <div class="row">
          <!-- Grid column -->
          <div class="col-md-3 col-lg-3 col-xl-3 mx-auto mt-3 bg-body-tertiary">
            <h6 class="text-uppercase mb-4 font-weight-bold">
              BCD Suppliers
            </h6>
            <p class="justify-content-center">
              At BCD Suppliers, we are passionate about technology and committed to providing exceptional customer service.
              We pride ourselves on offering competetitive prices, flexiable payment options and prompt delivery to ensure
              a seamless services experiences.
            </p>
          </div>
          <!-- Grid column -->

          <hr class="w-100 clearfix d-md-none" />
          <!-- Grid column -->
          <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mt-3">
            <h6 class="text-uppercase mb-4 font-weight-bold">Contact</h6>
            <p><i class="fas fa-home mr-2"></i>Kalimati, Kathmandu, Nepal</p>
            <p><i class="fas fa-envelope mr-2"></i> bcdsuppliers@gmail.com</p>
            <p><i class="fas fa-phone mr-2"></i> + 977 9761795579</p>
            <p><i class="fas fa-phone mr-2"></i> + 977 9702046747</p>
            <p><i class="btn btn-bg-primary"><a href="#top">Back to Top</a></i></p>
          </div>
          <!-- Grid column -->
        </div>
        <!--Grid row-->
      </section>
      <!-- Section: Links -->

      <hr class="my-3">

      <!-- Section: Copyright -->
      <section class="p-3 pt-0">
        <div class="row d-flex align-items-center">
          <!-- Grid column -->
          <div class="col-md-7 col-lg-8 text-center text-md-start">
            <!-- Copyright -->
            <div class="p-3">
              © 2024 Copyright
              <a class="text-white" href="https://www.BCDSuppliers.com/"
                 >BCDSuppliers.com</a
                >
            </div>
            <!-- Copyright -->
          </div>
          <!-- Grid column -->

          <!-- Grid column -->
          <div class="col-md-6 col-lg-4 ml-lg-0 text-center text-md-end">
            <!-- Whatsapp -->
            <a href="https://wa.me/message/MGBBQQAQGR5BA1" class="whatsapp p-2">
              <img height="35" width="35" src="whatsapp-logo.png" alt="">
            </a>
            <!-- Facebook -->
            <a href="https://www.facebook.com/bcdsuppliers" class="facebook p-2">
              <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-facebook" viewBox="0 0 16 16">
                <path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951"/>
              </svg>
            </a>
            <!-- Google -->
            <!-- <a href="bcdsuppliers@gmail.com">
              <img height="30" width="30" src="includes/gmail-logo.png" alt="">
            </a> -->

            <!-- Instagram -->
            <a href="https://www.instagram.com/bcd_suppliers?igsh=MTU0cnVlZXJvY2g2ZQ==" class="instagram p-2">
              <img height="30" width="30" src="instagram-logo.png" alt="">
            </a>
            <!-- youtube -->
            <a href="https://youtube.com/@BcdTech2310?si=MwsoLofb0NBMXeS_" class="youtube p-2">
              <img height="30" width="30" src="youtube-logo.png" alt="">
            </a>
          </div>
          <!-- Grid column -->
        </div>
      </section>
      <!-- Section: Copyright -->
    </div>
    <!-- Grid container -->
  </footer>
  <!-- Footer -->
</div>
<!-- End of .container -->
<!-- script -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html></a>
