include 'newsletter.php';
include 'send_email.php';
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio</title>
    <link rel="icon" type="image/x-icon" href="images/favicon.ico">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="style.css">
    
</head>
<body>
    <!-- **** Navbar Started ***** -->
    <header>
    <nav class="navbar navbar-expand-lg bg-white px-4 border-bottom fixed-top">
        <div class="container-fluid">
          <a class="navbar-brand fs-2" href="index.html">DESIG<span class="text-primary">NEXS</span></a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0 fs-5 text-center">
              <li class="nav-item">
                <a class="nav-link active text-primary" aria-current="page" href="#">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#about">About</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Services
                </a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="#services">Web Design</a></li>
                  <li><a class="dropdown-item" href="#services">WordPress</a></li>
                  <li><a class="dropdown-item" href="#services">Web Hosting</a></li>
                </ul>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#team">Team</a>
              </li>
              <button class="btn btn-outline-primary fs-5" type="button" href="#contact">Contact</button>
            </ul>
          </div>
        </div>
      </nav>
    </header>
    <!-- **** Navbar Ended ***** -->
    <!-- **** HeroSlider Start ***** -->
    <section>
        <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
              <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
              <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
              <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img src="images/Hero/1.jpg" class="d-block w-100 img-fluid" alt="...">
                <div class="carousel-caption d-md-block">
                  <h1 class="text-primary">Web Design & Development</h1>
                  <p class="text-dark">Some representative placeholder content for the first slide.</p>
                </div>
              </div>
              <div class="carousel-item">
                <img src="images/Hero/2.jpg" class="d-block w-100 img-fluid" alt="...">
                <div class="carousel-caption d-md-block">
                  <h1 class="text-primary">WordPress Website Design</h1>
                  <p class="text-dark">Some representative placeholder content for the first slide.</p>
                </div>
              </div>
              <div class="carousel-item">
                <img src="images/Hero/3.jpg" class="d-block w-100 img-fluid" alt="...">
                <div class="carousel-caption d-md-block">
                  <h1 class="text-primary">Domain & Web Hosting</h1>
                  <p class="text-dark">Some representative placeholder content for the first slide.</p>
                </div>
              </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
            </button>
          </div>
    </section>
    <!-- **** HeroSlider End ***** -->
    <!-- **** About Section Start ***** -->
    <section class="about my-5" data-aos="zoom-in" data-aos-offset="200">
        <div class="container">
            <div class="text-center" >
                <h1 id="about">About <span class="text-primary">Us</span></h1>
                <hr class="w-25 m-auto mb-5"/>
            </div>
                <div class="row">
                    <div class="col-12 col-lg-6">
                       <h1>What do you <span class="text-primary">know about us?</span></h1>
                       <p class="py-3">Our team of experts combines design, technology and digital strategy to build custom websites tailored to your specific business needs and goals, ensuring a seamless experience for your audience.</p>
                       
                       <div class="progress my-3" role="progressbar" aria-label="Success example" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100">
                        <div class="progress-bar bg-success" style="width: 70%">Web Design & Development</div>
                      </div>
                      <div class="progress my-3" role="progressbar" aria-label="Info example" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100">
                        <div class="progress-bar bg-info text-dark" style="width: 80%">WordPress Website</div>
                      </div>
                      <div class="progress my-3" role="progressbar" aria-label="Warning example" aria-valuenow="95" aria-valuemin="0" aria-valuemax="100">
                        <div class="progress-bar bg-warning text-dark" style="width: 95%">Domain % Hosting</div>
                      </div>
                      <div class="progress my-3" role="progressbar" aria-label="Danger example" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">
                        <div class="progress-bar bg-danger" style="width: 50%">SEO</div>
                      </div>

                       <button type="button" class="btn btn-primary mt-3">More About Us</button>
                    </div>
                    <div class="col-12 col-lg-6 m-auto text-lg-end text-center text-sm-center my-3 my-lg-0 my-sm-3">
                        <img src="images/extra/1.jpg" class="img-fluid img-thumbnail">
                    </div>
                </div>
        </div>
    </section>
    <!-- **** About Section End ***** -->
    <!-- **** Services Section Start ***** -->
    <section class="services py-3 bg-light" id="services">
        <div class="container">
            <div class="text-center">
                <h1>Our <span class="text-primary">Services</span></h1>
                <hr class="w-25 m-auto mb-5"/>
            </div>
            <div class="row">
                <div class="col-12 col-lg-4 mt-3 mt-sm-3 mt-lg-0">
                    <div class="card">
                        <div class="card-body">
                          <i class="fa-solid fa-code py-3 px-3 bg-primary text-white rounded"></i>
                          <h5 class="card-title mt-3">Web Design & Dev</h5>
                          <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Minima ex laudantium veritatis eum! Nesciunt praesentium eius.</p>
                          <a href="#" class="btn btn-primary">Contact</a>
                        </div>
                      </div>
                </div>
                <div class="col-12 col-lg-4 mt-3 mt-sm-3 mt-lg-0">
                    <div class="card bg-primary">
                        <div class="card-body">
                          <i class="fa-brands fa-wordpress-simple py-3 px-3 bg-white text-dark rounded"></i>
                          <h5 class="card-title text-white mt-3">WordPress Website</h5>
                          <p class="card-text text-white">Lorem ipsum dolor sit amet consectetur adipisicing elit. Minima ex laudantium veritatis eum! Nesciunt praesentium eius.</p>
                          <a href="#" class="btn btn-light">Contact</a>
                        </div>
                      </div>
                </div>
                <div class="col-12 col-lg-4 mt-3 mt-sm-3 mt-lg-0">
                    <div class="card">
                        <div class="card-body">
                          <i class="fa-solid fa-globe py-3 px-3 bg-primary text-white rounded"></i>
                          <h5 class="card-title mt-3">Domain & Hosting</h5>
                          <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Minima ex laudantium veritatis eum! Nesciunt praesentium eius.</p>
                          <a href="#" class="btn btn-primary">Contact</a>
                        </div>
                      </div>
                </div>
            </div>
           
            <div class="row mt-3">
              <div class="col-12 col-lg-4 mt-sm-3 mt-lg-0">
                  <div class="card">
                      <div class="card-body">
                        <i class="fa-solid fa-code py-3 px-3 bg-primary text-white rounded"></i>
                        <h5 class="card-title mt-3">Web Design & Dev</h5>
                        <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Minima ex laudantium veritatis eum! Nesciunt praesentium eius.</p>
                        <a href="#" class="btn btn-primary">Contact</a>
                      </div>
                    </div>
              </div>
              <div class="col-12 col-lg-4 mt-3 mt-sm-3 mt-lg-0">
                  <div class="card bg-primary">
                      <div class="card-body">
                        <i class="fa-brands fa-wordpress-simple py-3 px-3 bg-white text-dark rounded"></i>
                        <h5 class="card-title text-white mt-3">WordPress Website</h5>
                        <p class="card-text text-white">Lorem ipsum dolor sit amet consectetur adipisicing elit. Minima ex laudantium veritatis eum! Nesciunt praesentium eius.</p>
                        <a href="#" class="btn btn-light">Contact</a>
                      </div>
                    </div>
              </div>
              <div class="col-12 col-lg-4 mt-3 mt-sm-3 mt-lg-0">
                  <div class="card">
                      <div class="card-body">
                        <i class="fa-solid fa-globe py-3 px-3 bg-primary text-white rounded"></i>
                        <h5 class="card-title mt-3">Domain & Hosting</h5>
                        <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Minima ex laudantium veritatis eum! Nesciunt praesentium eius.</p>
                        <a href="#" class="btn btn-primary">Contact</a>
                      </div>
                    </div>
              </div>
          </div>

        </div>
    </section>
    <!-- **** Services Section End ***** -->

    <!-- ******* NewsLetter Section Started ********* -->
    <section class="newsletter mt-5 mt-sm-5 mt-lg-5">
      <div class="container">
      <div class="row">
      <div class="col-sm-12">
        <div class="content">
          <h2 class="text-white">SUBSCRIBE TO OUR NEWSLETTER</h2>
        <div class="input-group">
               <input type="email" class="form-control" placeholder="Enter your email" id="nw_input">
               <span class="input-group-btn">
               <button class="btn btn bg-white text-dark ms-2 ms-sm-2 ms-lg-2" type="button" id="nw_btn" onclick="newsletter();">Subscribe Now</button>
               </span>
        </div>
        <p id="newsletter_message"></p>
        </div>
      </div>
      </div>
      </div>
      </section>
    <!-- ******* NewsLetter Section Ended ********* -->

    <!-- *** Our Team Section Start-->
    <section class="ourteam mt-5" data-aos="zoom-out" data-aos-offset="300" id="team">
      <div class="container">
        <div class="text-center">
          <h1>Our <span class="text-primary">Team</span></h1>
          <hr class="w-25 m-auto mb-5"/>
      </div>
      <div class="row">
        <div class="col-12 col-lg-4 mt-3 mt-sm-3 mt-lg-0">
          <div class="card bg-primary">
            <div class="card-body text-center">
              <img src="images/extra/2.jpg" class="img-fluid rounded-circle border border-white p-1">
              <h5 class="card-title text-white mt-3">Saqib SK</h5>
              <p class="card-text text-white">Developer</p>
              <a href="#" class="btn btn-light">Contact Here</a>
            </div>
          </div>
        </div>
        <div class="col-12 col-lg-4 mt-3 mt-sm-3 mt-lg-0">
          <div class="card bg-primary">
            <div class="card-body text-center">
              <img src="images/extra/2.jpg" class="img-fluid rounded-circle border border-white p-1">
              <h5 class="card-title text-white mt-3">Saqib SK</h5>
              <p class="card-text text-white">Developer</p>
              <a href="#" class="btn btn-light">Contact Here</a>
            </div>
          </div>
        </div>
        <div class="col-12 col-lg-4 mt-3 mt-sm-3 mt-lg-0">
          <div class="card bg-primary">
            <div class="card-body text-center">
              <img src="images/extra/2.jpg" class="img-fluid rounded-circle border border-white p-1">
              <h5 class="card-title text-white mt-3">Saqib SK</h5>
              <p class="card-text text-white">Developer</p>
              <a href="#" class="btn btn-light">Contact Here</a>
            </div>
          </div>
        </div>
      </div>
      </div>
    </section>
    <!-- *** Our Team Section End-->
    <!-- *** contact Section Start-->
    <section class="contact-us mt-5">
     <div class="container" id="contact">
      <div class="text-center">
        <h1>Contact <span class="text-primary">Us</span></h1>
        <hr class="w-25 m-auto mb-5"/>
    </div>
    <div class="row">
      <div class="col-12 col-lg-6">
        <form class="row g-3" id="contactForm">
          <div class="col-md-6">
            <label class="form-label">Name</label>
            <input type="input" class="form-control" id="name">
          </div>
          <div class="col-md-6">
            <label class="form-label">Contact No</label>
            <input type="number" class="form-control" id="number">
          </div>
          
          <div class="col-12">
            <label class="form-label">Subject</label>
            <input type="input" class="form-control" id="subject" placeholder="Type your subject">
          </div>
          
          <div class="col-12">
            <label class="form-label">Email</label>
            <input type="email" class="form-control" id="email" placeholder="example@gmail.com">
          </div>
          <div class="col-12">
            <label class="form-label">Message</label>
          <textarea class="form-control" placeholder="Leave a message here" id="message" style="height: 150px" spellcheck="false"></textarea>
          </div>
          <div class="col-12">
            <button type="submit" class="btn btn-primary" id="submit_btn" onclick="submitForm(event)">Send Message</button>
          </div>
        </form>
        <p class="text-center text-primary" id="email_message"></p>
      </div>
      <div class="col-12 col-lg-6 m-auto text-center text-lg-end text-sm-center mt-3 mt-sm-3 mt-lg-4">
        <img src="images/extra/3.jpg" class="img-fluid img-thumbnail">
      </div>
    </div>
     </div>
    </section>
    <!-- *** contact Section End-->
     <!-- *** Footer Section Start-->

    <footer class="mt-5">
      <div class="custom-shape-divider-bottom-1691434057">
        <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
            <path d="M321.39,56.44c58-10.79,114.16-30.13,172-41.86,82.39-16.72,168.19-17.73,250.45-.39C823.78,31,906.67,72,985.66,92.83c70.05,18.48,146.53,26.09,214.34,3V0H0V27.35A600.21,600.21,0,0,0,321.39,56.44Z" class="shape-fill"></path>
        </svg>
    </div>
      <div class="container-fluid">
        <div class="row" style="height: 20vh;">
          <div class="col-12 col-lg-12 bg-primary align-bottom text-center text-white" style="height: inherit; line-height: 20vh;">
            &copy; portfolio website design - 2023
          </div>
        </div>
      </div>
    </footer>
    <!-- *** Footer Section End-->
<!-- ************** JS Script **************** -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.min.js" integrity="sha384-Rx+T1VzGupg4BHQYs2gCW9It+akI2MM/mndMCy36UVfodzcJcF0GGLxZIzObiEfa" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="main.js"></script>
    <script>
      AOS.init();
    </script>
  </body>
</html>