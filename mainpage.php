<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel ="stylesheet" href="css/bootstrap.min.css">
    <title>Let's Travel</title>
</head>
<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container">
              <a class="navbar-brand" href="#">Let's Travel</a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                  <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">Home</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link " aria-current="page" href="#">About us</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link " aria-current="page" href="contactus.php">Contact Us</a>
                  </li>
                  
                </ul>
                <form class="d-flex">
                  <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                </form>
                <a href="logout.php">
                  <button class="btn btn-outline-success">Logout</button>
                  </a>
              </div>
            </div>
          </nav>
    </header>
    <main>
        <div class="container my-3">
          <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="false">
            <div class="carousel-indicators">
              <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
              <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
              <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img src="images\panorama-city-palace-udaipur-india-luxury-tourism-concept-background-lake-pichola-33550764.jpg" class="d-block w-100" alt="pink">
                <div class="carousel-caption d-none d-md-block">
                  <h5>City Palace</h5>
                  <p>Udaipur, Rajasthan</p>
                </div>
              </div>
              <div class="carousel-item">
                <img src="images\dataset-cover.jpg" class="d-block w-100" alt="white">
                <div class="carousel-caption d-none d-md-block">
                  <h5>Pink Palace</h5>
                  <p>Jaipur, Rajasthan</p>
                </div>
              </div>
              <div class="carousel-item">
                <img src="images\chatrapati-shivaji-terminus-earlier-known-as-victoria-terminus-mumbai-india-panorama-72384161.jpg" class="d-block w-100" alt="mum">
                <div class="carousel-caption d-none d-md-block">
                  <h5>Chatrapati Shivaji Maharaj Terminus</h5>
                  <p>Mumbai, Maharashtra</p>
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
        </div>

        <div class="container">
          <div class="row row-cols-3 g-4">
            <div class="col">
              <div class="card">
                <img src="images\Kedar.jpeg" class="card-img-top" alt="Kedar">
                <div class="card-body">
                  <h5 class="card-title">Kedarnath Temple</h5>
                  <p class="card-text">Standing magnificently at an altitude of 3,580mts and enveloped in the mighty Garhwal Himalayas, the Kedarnath Temple is one of the twelve Jyotirlingas of Lord Shiva. Kedarnath forms one of the four sites of the Chota Char Dham Pilgrimage. 
                    </p>
                    <button type="button" class="btn btn-primary">Details</button>
                </div>
              </div>
            </div>
            <div class="col">
              <div class="card">
                <img src="images\IMG_20220513_102648.jpg" class="card-img-top" alt="gang">
                <div class="card-body">
                  <h5 class="card-title">Gangotri Temple</h5>
                  <p class="card-text">Located at an altitude of 3,100mts, Gangotri Temple, the highest temple dedicated to Goddess Ganga, is one of the four Chota Char Dham Yatra pilgrimage sites in Uttarakhand. Goddess Ganga is the personification of the revered Ganga River. 
                    </p>
                    <button type="button" class="btn btn-primary">Details</button>
                </div>
              </div>
            </div>
            <div class="col">
              <div class="card">
                <img src="images\IMG_20210306_160429.jpg" class="card-img-top" alt="Jagdish">
                <div class="card-body">
                  <h5 class="card-title">Jagdish Temple</h5>
                  <p class="card-text">Jagdish temple is one of the best architectural wonders of the Mewar dynasty. Jagdish temple showcases the Indo- Aryan architectural style. The temple is built keeping the rules of Vastushastra, the Hindu architectural science in mind. 
                    </p>
                    <button type="button" class="btn btn-primary">Details</button>
                </div>
              </div>
            </div>
            <div class="col">
              <div class="card">
                <img src="images\IMG_20220518_082210.jpg" class="card-img-top" alt="Mana">
                <div class="card-body">
                  <h5 class="card-title">Mana Village</h5>
                  <p class="card-text">About Mana Village
                    Mana is a last Indian village from the border of India and Tibet/China in the Himalayas. It is located in the district of Chamoli. It’s been designated as a “Tourism Village” by the Uttarakhand government. </p>
                    <button type="button" class="btn btn-primary">Details</button>
                </div>
              </div>
            </div>
            <div class="col">
              <div class="card">
                <img src="images\IMG_20220517_191257.jpg" class="card-img-top" alt="Badri">
                <div class="card-body">
                  <h5 class="card-title">Badrinath Temple</h5>
                  <p class="card-text">Badrinath is located at an elevation of around 3,100 m. Located in the Garhwal Himalayas, on the banks of the Alaknanda river, this sacred town lies between Nar and Narayana mountain ranges. 
                    </p>
                    <button type="button" class="btn btn-primary">Details</button>
                </div>
              </div>
            </div>
            <div class="col">
              <div class="card">
                <img src="images\IMG_20220511_162158.jpg" class="card-img-top" alt="Yamu">
                <div class="card-body">
                  <h5 class="card-title">Yamonotri Temple Trek</h5>
                  <p class="card-text">Yamunotri is located at a height of 3293 mts above sea level and located in Uttarkashi district. It is surrounded by mountains on all sides and lies in close proximity of the Indo-China border. It is known for offering peace and tranquillity to its visitors.  
                    </p>
                    <button type="button" class="btn btn-primary">Details</button>
                </div>
              </div>
            </div>
          </div>
        </div>
        
    </main>

    <footer>
    <footer class="navbar navbar-expand-lg navbar-light bg-light">
      <div class="container py-3">
        <p class="copy">&copy; All rights Reserved </p>
        <a href="contactus.php"> 
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#conatact-us-modal">Contact Us</button>
        </a>
      </div>
    </footer>
    <!-- <div class="modal" tabindex="-1" id="conatact-us-modal">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title">Enter your details here.</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <form>
              <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Email address</label>
                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
              </div>
              <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Password</label>
                <input type="password" class="form-control" id="exampleInputPassword1">
              </div>
              <div class="mb-3 form-check">
                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                <label class="form-check-label" for="exampleCheck1">Check me out</label>
              </div>
              <button type="submit" class="btn btn-primary">Submit</button>
            </form>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            <button type="button" class="btn btn-primary">Save changes</button>
          </div>
        </div>
      </div>
    </div> -->
    
</body>
<script src="js/bootstrap.min.js">
  </script>
</html>