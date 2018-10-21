<?php
  $con = mysqli_connect('localhost', 'root', 'root', 'portfolio_database');

  if(!$con) {
    die('Database not found. If this is your website, fix it :)'); 
  }


?>

<!DOCTYPE html>
<html lang='en'>

  <head>

    <meta charset='utf-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1, shrink-to-fit=no'>
    <meta name='description' content=''>
    <meta name='author' content=''>

    <title>Brianna Garcia - Portfolio</title>

    <!-- Bootstrap core CSS -->
    <link href='vendor/bootstrap/css/bootstrap.min.css' rel='stylesheet'>
    <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">    

    <!-- Custom fonts for this template -->
    <link href='vendor/fontawesome-free/css/all.min.css' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>

    <!-- Custom styles for this template -->
    <link href='css/agency.css' rel='stylesheet'>

  </head>

  <body id='page-top'>

    <!-- Navigation -->
    <nav class='navbar navbar-expand-lg navbar-dark fixed-top' id='mainNav'>
      <div class='container'>
        
        <button class='navbar-toggler navbar-toggler-right' type='button' data-toggle='collapse' data-target='#navbarResponsive' aria-controls='navbarResponsive' aria-expanded='false' aria-label='Toggle navigation'>
          Menu
          <i class='fas fa-bars'></i>
        </button>
        <div class='collapse navbar-collapse' id='navbarResponsive'>
          <ul class='navbar-nav text-uppercase ml-auto'>
          <li class='nav-item'>
              <a class='nav-link js-scroll-trigger' href='#team'>About</a>
            </li>
            <li class='nav-item'>
              <a class='nav-link js-scroll-trigger' href='#services'>Skills</a>
            </li>
            <li class='nav-item'>
              <a class='nav-link js-scroll-trigger' href='#portfolio'>Portfolio</a>
            </li>
            <li class='nav-item'>
              <a class='nav-link js-scroll-trigger' href='#contact'>Contact</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <!-- Header -->
    <header class='masthead'>
      <div class='container'>
        <div class='intro-text'>
          <div class='intro-lead-in'></div>
          <div class='intro-heading text-uppercase'>Hello, My name is <strong id='title-name'>Brianna Garcia</strong> <br> I'm a web developer and designer.</div>
          <a id='viewMyWorkButton' class='btn btn-primary btn-xl text-uppercase js-scroll-trigger' href='#services'>View my work</a>
        </div>
      </div>
    </header>

    <!-- Team -->
    <section class='bg-light' id='team'>
      <div class='container'>
        <div class='row'>
          <div class='col-lg-12 text-center'>
            <h2 class='section-heading text-uppercase'>About Me</h2>
            <h3 class='section-subheading text-muted'></h3>
          </div>
        </div>
        <div class='row'>
          <div class='col-sm-4 offset-sm-4'>
            <div class='team-member'>
              <img class='mx-auto rounded-circle' src='./img/Bri3.jpg' alt=''>
              <h4>Brianna Garcia</h4>
              <p class='text-muted'>Web Developer + Designer </p>
              <ul class='list-inline social-buttons'>
                <li class='list-inline-item'>
                  <a href='#'>
                    <i class='fab fa-twitter'></i>
                  </a>
                </li>
                <li class='list-inline-item'>
                  <a href='#'>
                    <i class='fab fa-instagram'></i>
                  </a>
                </li>
                <li class='list-inline-item'>
                  <a href='#'>
                    <i class='fab fa-linkedin-in'></i>
                  </a>
                </li>
              </ul>
            </div>
          </div>
        </div>
        <div class='row'>
          <div class='col-lg-8 mx-auto text-center'>
            <p class='large text-muted'> I am currently a front-end web developer and graphic designer. I also enjoy Harry Potter marathons and long walks with my dog Dallas. :)  </p>
          </div>
        </div>
      </div>
    </section>

    <!-- Services -->
    <section id='services'>
      <div class='container'>
        <div class='row'>
          <div class='col-lg-12 text-center'>
            <h2 class='section-heading text-uppercase'>Skills</h2>
            
          </div>
        </div>
        <div class='row text-center'>
          <div class='col-md-4'>
            <span class='fa-stack fa-4x'>
              <i class='fas fa-circle fa-stack-2x text-primary'></i>
              <i class='fas fa-journal-whills fa-stack-1x fa-inverse'></i>
            </span>
            <h4 class='service-heading'>Digital Storyteller</h4>
            <p class='text-muted'>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima maxime quam architecto quo inventore harum ex magni, dicta impedit.</p>
          </div>
          <div class='col-md-4'>
            <span class='fa-stack fa-4x'>
              <i class='fas fa-circle fa-stack-2x text-primary'></i>
              <i class='fas fa-laptop fa-stack-1x fa-inverse'></i>
            </span>
            <h4 class='service-heading'>Responsive Design</h4>
            <p class='text-muted'>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima maxime quam architecto quo inventore harum ex magni, dicta impedit.</p>
          </div>
          <div class='col-md-4'>
            <span class='fa-stack fa-4x'>
              <i class='fas fa-circle fa-stack-2x text-primary'></i>
              <i class='fas fa-lock fa-stack-1x fa-inverse'></i>
            </span>
            <h4 class='service-heading'>Web Security</h4>
            <p class='text-muted'>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima maxime quam architecto quo inventore harum ex magni, dicta impedit.</p>
          </div>
        </div>
      </div>
    </section>

    <!-- Portfolio Grid -->
    <section class='bg-light' id='portfolio'>
      <div class='container'>
        <div class='row'>
          <div class='col-lg-12 text-center'>
            <h2 class='section-heading text-uppercase'>Portfolio</h2>
            <h3 class='section-subheading text-muted'>Take a look at my projects</h3>
          </div>
        </div>
        <div class='row'>
          <div class='col-md-4 col-sm-6 portfolio-item'>
            <a class='portfolio-link' data-toggle='modal' href='#portfolioModal1'>
              <div class='portfolio-hover'>
                <div class='portfolio-hover-content'>
                  <i class='fas fa-plus fa-3x'></i>
                </div>
              </div>
              <img class='img-fluid' src='https://upload.wikimedia.org/wikipedia/commons/4/41/Left_side_of_Flying_Pigeon.jpg'>
            </a>
            <div class='portfolio-caption'>
              <h4>$title</h4>
              <p class='text-muted'>$body</p>
            </div>
          </div>
          <div class='col-md-4 col-sm-6 portfolio-item'>
            <a class='portfolio-link' data-toggle='modal' href='#portfolioModal2'>
              <div class='portfolio-hover'>
                <div class='portfolio-hover-content'>
                  <i class='fas fa-plus fa-3x'></i>
                </div>
              </div>
              <img class='img-fluid' src='https://upload.wikimedia.org/wikipedia/commons/4/41/Left_side_of_Flying_Pigeon.jpg'>
            </a>
            <div class='portfolio-caption'>
              <h4>$title</h4>
              <p class='text-muted'>$body</p>
            </div>
          </div>
          <div class='col-md-4 col-sm-6 portfolio-item'>
            <a class='portfolio-link' data-toggle='modal' href='#portfolioModal3'>
              <div class='portfolio-hover'>
                <div class='portfolio-hover-content'>
                  <i class='fas fa-plus fa-3x'></i>
                </div>
              </div>
              <img class='img-fluid' src='https://upload.wikimedia.org/wikipedia/commons/4/41/Left_side_of_Flying_Pigeon.jpg'>
            </a>
            <div class='portfolio-caption'>
              <h4>$title</h4>
              <p class='text-muted'>$body</p>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Contact -->
    <section id='contact'>
      <div class='container'>
        <div class='row'>
          <div class='col-lg-12 text-center'>
            <h2 class='section-heading text-uppercase'>Say Hello!</h2>
            <h3 class='section-subheading text-muted'>Lorem ipsum dolor sit amet consectetur.</h3>
          </div>
        </div>
        <div class='row'>
          <div class='col-lg-12'>
            <form id='contactForm' name='sentMessage' novalidate='novalidate'>
              <div class='row'>
                <div class='col-md-6'>
                  <div class='form-group'>
                    <input class='form-control' id='name' type='text' placeholder='Your Name *' required='required' data-validation-required-message='Please enter your name.'>
                    <p class='help-block text-danger'></p>
                  </div>
                  <div class='form-group'>
                    <input class='form-control' id='email' type='email' placeholder='Your Email *' required='required' data-validation-required-message='Please enter your email address.'>
                    <p class='help-block text-danger'></p>
                  </div>
                  <div class='form-group'>
                    <input class='form-control' id='phone' type='tel' placeholder='Your Phone *' required='required' data-validation-required-message='Please enter your phone number.'>
                    <p class='help-block text-danger'></p>
                  </div>
                </div>
                <div class='col-md-6'>
                  <div class='form-group'>
                    <textarea class='form-control' id='message' placeholder='Your Message *' required='required' data-validation-required-message='Please enter a message.'></textarea>
                    <p class='help-block text-danger'></p>
                  </div>
                </div>
                <div class='clearfix'></div>
                <div class='col-lg-12 text-center'>
                  <div id='success'></div>
                  <button id='sendMessageButton' class='btn btn-primary btn-xl text-uppercase' type='submit'>Send Message</button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </section>

    <!-- Footer -->
    <footer>
      <div class='container'>
        <div class='row'>
          <div class='col-md-4'>
            <span class='copyright'>Copyright &copy; 2018 Brianna Garcia </span>
          </div>
          <div class='col-md-4'>
            <ul class='list-inline social-buttons'>
              <li class='list-inline-item'>
                <a href='#'>
                  <i class='fab fa-twitter'></i>
                </a>
              </li>
              <li class='list-inline-item'>
                <a href='#'>
                  <i class='fab fa-facebook-f'></i>
                </a>
              </li>
              <li class='list-inline-item'>
                <a href='#'>
                  <i class='fab fa-linkedin-in'></i>
                </a>
              </li>
            </ul>
          </div>
          <div class='col-md-4'>
            <ul class='list-inline quicklinks'>
            
            
            </ul>
          </div>
        </div>
      </div>
    </footer>

    <!-- Portfolio Modals -->

    <!-- Modal 1 -->
    <div class='portfolio-modal modal fade' id='portfolioModal1' tabindex='-1' role='dialog' aria-hidden='true'>
      <div class='modal-dialog'>
        <div class='modal-content'>
          <div class='close-modal' data-dismiss='modal'>
            <div class='lr'>
              <div class='rl'></div>
            </div>
          </div>
          <div class='container'>
            <div class='row'>
              <div class='col-lg-8 mx-auto'>
                <div class='modal-body'>
                  <!-- Project Details Go Here -->
                  <h2 class='text-uppercase'>Weather App</h2>
                  <p class='item-intro text-muted'>An App that helps you find the weather in a given city.</p>
                  <img class='img-fluid d-block mx-auto' src='img/portfolio/01-full.jpg' alt=''>
                  <p>Use this area to describe your project. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est blanditiis dolorem culpa incidunt minus dignissimos deserunt repellat aperiam quasi sunt officia expedita beatae cupiditate, maiores repudiandae, nostrum, reiciendis facere nemo!</p>
                  <ul class='list-inline'>
                    <li>Date: January 2017</li>
                    <li>Client: Threads</li>
                    <li>Category: Illustration</li>
                  </ul>
                  <button class='btn btn-primary' data-dismiss='modal' type='button'>
                    <i class='fas fa-times'></i>
                    Close Project</button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Modal 2 -->
    <div class='portfolio-modal modal fade' id='portfolioModal2' tabindex='-1' role='dialog' aria-hidden='true'>
      <div class='modal-dialog'>
        <div class='modal-content'>
          <div class='close-modal' data-dismiss='modal'>
            <div class='lr'>
              <div class='rl'></div>
            </div>
          </div>
          <div class='container'>
            <div class='row'>
              <div class='col-lg-8 mx-auto'>
                <div class='modal-body'>
                  <!-- Project Details Go Here -->
                  <h2 class='text-uppercase'>Project Name</h2>
                  <p class='item-intro text-muted'>Lorem ipsum dolor sit amet consectetur.</p>
                  <img class='img-fluid d-block mx-auto' src='img/portfolio/02-full.jpg' alt=''>
                  <p>Using the open weather map API, the weather app is capable of telling you the weather of any city in realtime.<br>
                  Technologies Used: <br>
                    AJAX<br>
                    PHP<br>
                    jQuery<br>
                  </p>
                  <ul class='list-inline'>
                    <li>Date: January 2017</li>
                    <li>Client: Explore</li>
                    <li>Category: Graphic Design</li>
                  </ul>
                  <button class='btn btn-primary' data-dismiss='modal' type='button'>
                    <i class='fas fa-times'></i>
                    Close Project</button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Modal 3 -->
    <div class='portfolio-modal modal fade' id='portfolioModal3' tabindex='-1' role='dialog' aria-hidden='true'>
      <div class='modal-dialog'>
        <div class='modal-content'>
          <div class='close-modal' data-dismiss='modal'>
            <div class='lr'>
              <div class='rl'></div>
            </div>
          </div>
          <div class='container'>
            <div class='row'>
              <div class='col-lg-8 mx-auto'>
                <div class='modal-body'>
                  <!-- Project Details Go Here -->
                  <h2 class='text-uppercase'>Project Name</h2>
                  <p class='item-intro text-muted'>Lorem ipsum dolor sit amet consectetur.</p>
                  <img class='img-fluid d-block mx-auto' src='img/portfolio/03-full.jpg' alt=''>
                  <p>Use this area to describe your project. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est blanditiis dolorem culpa incidunt minus dignissimos deserunt repellat aperiam quasi sunt officia expedita beatae cupiditate, maiores repudiandae, nostrum, reiciendis facere nemo!</p>
                  <ul class='list-inline'>
                    <li>Date: January 2017</li>
                    <li>Client: Finish</li>
                    <li>Category: Identity</li>
                  </ul>
                  <button class='btn btn-primary' data-dismiss='modal' type='button'>
                    <i class='fas fa-times'></i>
                    Close Project</button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    

    <!-- Bootstrap core JavaScript -->
    <script src='vendor/jquery/jquery.min.js'></script>
    <script src='vendor/bootstrap/js/bootstrap.bundle.min.js'></script>

    <!-- Plugin JavaScript -->
    <script src='vendor/jquery-easing/jquery.easing.min.js'></script>

    <!-- Contact form JavaScript -->
    <script src='js/jqBootstrapValidation.js'></script>
    <script src='js/contact_me.js'></script>

    <!-- Custom scripts for this template -->
    <script src='js/agency.min.js'></script>

  </body>

</html>
