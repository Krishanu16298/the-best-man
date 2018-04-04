<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/animate.css">
  <link rel="stylesheet" href="css/style.css">
  <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
  <title>Best Man Services</title>
</head>
<body>
  <nav class="animated fadeIn navbar navbar-expand-md navbar-dark fixed-top" id="navbar">
    <div class="container">
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarsExampleDefault">
        <ul class="navbar-nav mr-auto">
          <a href="#" class="navbar-brand">Best Man Service</a>
        </ul>
        <ul class="nav navbar-nav navbar-right">
          <li class="nav-item active">
            <a href="#" class="nav-link"><i class="fas fa-home"></i> Home</a>
          </li>
          <li class="nav-item">
            <a href="services.html" class="nav-link"><i class="fab fa-hubspot"></i> Services</a>
          </li>
          <li class="nav-item">
            <a href="contact.html" class="nav-link"><i class="fas fa-envelope"></i> Contact</a>
          </li>
          <li class="nav-item">
            <a href="about.html" class="nav-link"><i class="fas fa-users"></i> About Us</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <section id="showcase">
    <div class="cov">
      <div class="container">
        <div class="row text-center text-white">
          <div class="col content animated fadeInUp">
            <h1>Best Man Services For You</h1>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ducimus nihil blanditiis hic repellat, non dolor, magni deserunt asperiores excepturi, culpa quis! Unde possimus voluptas minima delectus distinctio laudantium dolorem autem.</p>
            <a href="#desc" id="redirect" class="btn btn-outline-primary">Read More</a>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section id="boxform">
    <div class="row">
      <div class="col-lg-8 align-self-center">
        <div class="row">
          <div class="col-lg-2"><img style="border-radius: 100px;" src="img/2.gif"></div>
          <div class="col-lg-10">
            <h1>Hello</h1>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quibusdam quaerat amet necessitatibus sunt ea, vitae possimus veniam, nisi commodi nostrum labore saepe nobis esse aperiam voluptas. Repellendus doloremque nobis id.</p>
          </div>
        </div>
      </div>
      <div class="col-lg-4 align-self-center">
        <div class="row">
          <div class="col-lg-5">
            <h3 style="color:teal">New User</h3>
            <button type="button" class="btn btn-success" data-toggle="modal" data-target="#exampleModalCenter">
              Sign up
            </button>
          </div>
          <div class="col-lg-7" style="border-left:1px black solid">
            <h3 style="color:teal">Existing user</h3>
            <button type="button" class="btn btn-success" data-toggle="modal" data-target="#exampleModalCenter2">
              Sign in
            </button>
          </div>
        </div>
        <!-- Modal -->
        <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
          <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h1 class="text-primary">Sign Up</h1>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                <form class="form-group" action="login.php" method="post">
                  <label>Name</label>
                  <input type="text" class="form-control">
                  <label>Email Id</label>
                  <input type="email" class="form-control">
                  <label>Mobile no.</label>
                  <input type="text" pattern="[7-9]{1}[0-9]{9}" class="form-control">
                  <label>Password</label>
                  <input type="password" class="form-control">
                  <label>Confirm Password</label>
                  <input type="password" class="form-control">
                  <br>
                  <div class="text-center">
                    <button type="submit" class="btn btn-success form-control">Sign Up</button>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
        <div class="modal fade" id="exampleModalCenter2" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
          <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h1 class="text-primary">Sign In</h1>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                <form class="form-group">
                  <label>Name</label>
                  <input type="text" class="form-control">
                  <label>Password</label>
                  <input type="password" class="form-control">
                  <br>
                  <input type="checkbox">
                  <label>Remember me</label>
                  <div class="text-center">
                    <button type="submit" class="btn btn-success form-control">Sign in</button>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section id="desc">
    <div class="container">
      <div class="row">
        <div class="col-lg-4 text-center">
          <img src="img/7.gif">
        </div>
        <div class="col-lg-8 align-self-center">
          <h1>Customer Friendly</h1>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cupiditate repellendus magnam aliquid autem odit inventore reiciendis maxime delectus consectetur praesentium quidem, ipsam, beatae explicabo qui eius fugit harum obcaecati iure!</p>
        </div>
      </div>
      <div class="row" style="padding-bottom:100px;">
        <div class="col-lg-4 text-center align-self-end">
          <h1>24 Hour Sevice</h1>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Assumenda dolor itaque fugiat quia quaerat nesciunt nostrum omnis minima alias nisi hic quidem, dolorem nihil ipsum, distinctio recusandae quisquam tempore veritatis.</p>
        </div>
        <div class="col-lg-4 text-center">
          <img src="img/6.gif">
        </div>
        <div class="col-lg-4 text-center align-self-end">
          <h1>7 Days of week</h1>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Veniam voluptas, quos facilis? Officiis, veniam at provident facere numquam consequuntur repudiandae perferendis dignissimos consectetur pariatur animi quasi sunt voluptatem, modi, corporis.</p>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-8 align-self-center text-right">
          <h1>Quality Service</h1>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quidem modi non earum et amet placeat quae vero nisi iure laudantium autem, blanditiis assumenda, libero inventore perferendis, doloremque voluptatem, alias provident?</p>
        </div>
        <div class="col-lg-4 text-center"><img src="img/1.gif"></div>
      </div>
    </div>
  </section>
  <section id="achieve">
    <div class="con">
      <div class="container">
        <div class="row">
          <div class="ico col-lg-6 align-self-center text-center">
            <i class="fas fa-chart-line"></i>
          </div>
          <div class="col-lg-6 align-self-center">
            <h1 style="color:tomato">40K+ People Affected</h1>
            <br>
            <h1 class="text-success">Satisfied Customers</h1>
            <br>
            <h3>We provide BestMan for each and every job..</h3>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section id="features">
    <div class="container">
      <div class="row">
        <div class="box col-lg-4">
          <i class="fas ico text-primary fa-hand-holding-usd"></i>
          <h2>Low-Cost Services</h2>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Libero est perferendis, repellendus dolore quos quo alias numquam nesciunt animi quae!</p>
        </div>
        <div class="box col-lg-4">
          <i class="fas ico text-success fa-shipping-fast"></i>
          <h2>Fast Service delivery</h2>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Libero est perferendis, repellendus dolore quos quo alias numquam nesciunt animi quae!</p>
        </div>
        <div class="box col-lg-4">
          <i class="far ico text-danger fa-comments"></i>
          <h2>Quick Response</h2>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Libero est perferendis, repellendus dolore quos quo alias numquam nesciunt animi quae!</p>
        </div>
      </div>
    </div>
  </section>
  <section id="links">
    <div class="container">
      <div class="row">
        <div class="col-lg-4 align-self-center">
          <p>Site menu</p>
          <p><a href="#"><i class="fab fa-hubspot"></i> Services</a></p>
          <p><a href="contact.html"><i class="fas fa-phone"></i> Contact</a></p>
          <p><a href="#"><i class="fas fa-users"></i> About Us</a></p>
        </div>
        <div class="col-lg-4 align-self-center">
          <p>Popular services</p>
          <p><a href="#"><i class="fas fa-briefcase-medical"></i> Medical</a></p>
          <p><a href="#"><i class="fas fa-pencil-alt"></i> Speech Writing</a></p>
          <p><a href="#"><i class="fab fa-schlix"></i> Home Decoration</a></p>
          <p><a href="#"><i class="fas fa-utensils"></i> Caterer</a></p>
          <p><a href="#"><i class="fas fa-list"></i> More..</a></p>
        </div>
        <div class="col-lg-4 align-self-center">
          <p>Follow us on...</p>
          <p><a href="#"><i class="fab fa-facebook-square"></i> Facebook</a></p>
          <p><a href="#"><i class="fab fa-twitter"></i> Twitter</a></p>
          <p><a href="#"><i class="fab fa-linkedin"></i> Linkedin</a></p>
        </div>
      </div>
    </div>
  </section>
  <footer id="footer" class="text-center text-white">
    <p>CopyRight &copy; 2018 | Best Man services</p>
  </footer>



  <script src="js/jquery-3.3.1.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/fontawesome-all.js"></script>
  <script>
    window.onscroll = function(){myFunction()};

    var navbar = document.getElementById('navbar');
    var showcase = document.getElementById('boxform')

    var colchange = showcase.offsetTop - 60;

    function myFunction(){
      if(window.pageYOffset >= colchange){
        navbar.classList.remove('navbar-dark');
        navbar.classList.add('navbar-light');
        navbar.classList.add('lighten');
      }
      else{
        navbar.classList.add('navbar-dark');
        navbar.classList.remove('navbar-light');
        navbar.classList.remove('lighten');
      }
    }
  </script>
  <script>
    $(document).ready(function () {
      $("a,button").on('click', function (event) {
        if (this.hash !== "") {
          event.preventDefault();
          var hash = this.hash;
          $('html, body').animate({
            scrollTop: $(hash).offset().top
          }, 800, function () {
            window.location.hash = hash;
          });
        }
      });
    });
  </script>
</body>
</html>
<!--  -->
