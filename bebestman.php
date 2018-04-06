<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/animate.css">
  <link rel="stylesheet" href="css/bebestman.css">
  <title>The Best Man | Be Best Man </title>
</head>
<body>
  <nav class="navbar navbar-expand-md navbar-light fixed-top" id="navbar">
    <div class="container-fluid">
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarsExampleDefault">
        <ul class="navbar-nav mr-auto">
          <a href="#" class="navbar-brand animated fadeInRight"><i class="fas fa-user"></i> Hello, John Doe</a>
        </ul>
        <ul class="nav navbar-nav navbar-right animated fadeInLeft">
          <li class="nav-item active">
            <a href="#" class="nav-link">Home</a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">Services</a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">Contact</a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">About Us</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

    <section id="showcase">
      <div class="container-fluid">
          <div class="row">
            <div class="col content animated fadeInDown">
              <h1>Be <span class="text-light" style="text-decoration:underline;">The Best</span> Man</h1>
              <p>Have Skill? | Get Hired!</p>
              <hr>
            </div>
          </div>
      </div>
      <form action="#" method="post" class="animated fadeInUp">
        <div class="row">
          <div class="col col-md-4 m-4 p-3" id="form">
            <div class="form-group">
              <label for="service">What Service you can Provide</label>
              <select class="form-control" id="service">
                <option selected>Select Service..</option>
                <option>Electrician</option>
                <option>Painter</option>
                <option>Plumber</option>
              </select>
            </div>
            <div class="form-group">
              <label for="subcategory">Select the sub-category</label>
              <select class="form-control" id="subcategory">
                <option selected>Select Service..</option>
                <option>Electrician</option>
                <option>Painter</option>
                <option>Plumber</option>
              </select>
              </div>
              <div class="form-group">
              <label for="description">Please Fill in some details about your skill</label>
              <textarea name="name" class="form-control" id="description"></textarea>
            </div>
              <div class="form-group">
                <button type="submit" class="btn btn-outline-light form-control">Submit</button>
              </div>
          </div>
        </div>
      </form>
    </section>



  <!-- <footer id="footer" class="text-center text-white">
    <p>CopyRight &copy; 2018 | Best Man services</p>
  </footer> -->
  <script src="js/jquery-3.3.1.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/fontawesome-all.js"></script>
</body>
</html>
