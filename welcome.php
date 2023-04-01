<?php

session_start();

if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !==true)
{
    header("location: login.php");
}


?>


<!-- <!doctype html>
<html lang="en">
  <head>
    
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>PHP login system!</title>
  </head>
  <body>
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="#">Php Login System</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavDropdown">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="register.php">Register</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="login.php">Login</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="logout.php">Logout</a>
      </li>

      
     
    </ul>

  <div class="navbar-collapse collapse">
  <ul class="navbar-nav ml-auto">
  <li class="nav-item active">
        <a class="nav-link" href="#"> <img src="https://img.icons8.com/metro/26/000000/guest-male.png">
         php echo "Welcome ". $_SESSION['Email']?></a>
      </li>
  </ul>
  </div>


  </div>
</nav>

<div class="container mt-4">
<h3>php echo "Welcome ". $_SESSION['Email']?>! You can now use this website</h3>
<hr>

</div>

    
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html> -->


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous"> -->
    <title>Home page</title>
    <script
      src="https://kit.fontawesome.com/1a015cf62c.js"
      crossorigin="anonymous"
    ></script>
    <link rel="stylesheet" href="style.css">
  </head>
  <body>
    
  <header>
    <img src="logo_image-removebg-preview.png" alt="image" width="90" align = "left" >
  <div class="header" id="myHeader">
  <h1 style = "color: rgb(2, 104, 2); font-size: 40px; font-family:verdana;">
      FITNESS GURU
  </h1></div> </header>
    
      <nav class="navbar">
        <ul>
            <div class="navbar">
            <li><a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a></li>
            <li><a href="diary.html">Diary</a></li>
            <li><a href="goal.php">Goals</a></li>
            <li><a href="exercise.php">Exercise</a></li>
            <li><a href="about">About</a></li>
            <li><a class="nav-link" href="logout.php">Logout</a></li>
            
           
        </div>
          </ul>

          
      <!-- </nav> -->
      <!-- <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavDropdown">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="register.php">Register</a>
      </li>
      
      <li class="nav-item">
        <a class="nav-link" href="logout.php">Logout</a>
      </li> 

      
     
    </ul>-->

  <!-- <div class="navbar-collapse collapse">
  
  <li class="nav-item active">
        <a class="nav-link" href="#"> <img src="https://img.icons8.com/metro/26/000000/guest-male.png">
         php echo "Welcome ". $_SESSION['Email']?></a>
      </li>
  </ul>
  </div> -->


  </div>
</nav>
   

    <main>
        
        <div class="left">
            <div class="div1">
                <h2 style="color: rgb(8, 6, 6); font-size: 34px;">Calories</h2> 
             </div>  
             <div class="div2">
                <h2 style="color: rgb(8, 6, 6); font-size: 25px;">Steps</h2> 
                <img src="exercise-walk.gif" width="60px">
             </div> <br><br><br>
             <div class="div2">
                <h2 style="color: rgb(8, 6, 6); font-size: 25px;">Exercise</h2> 
                <img src="Barbell-Bench-Press.gif" width="60px">
             </div> 
            
            <div class="accounts">
                <p>Suggested accounts</p>
                <div class="user">
                    <img src="assets/Cat.png" alt="avatar">
                    <h6 class="username">Cheshire_Cat</h6>
                </div>
                <div class="user">
                    <img src="assets/Frankenstein.png" alt="avatar">
                    <h6 class="username">Frank</h6>
                </div>
                <div class="user">
                    <img src="assets/Pirate.png" alt="avatar">
                    <h6 class="username">Pirate</h6>
                </div>
                <div class="user">
                    <img src="assets/Gypsy.png" alt="avatar">
                    <h6 class="username">Gypsy</h6>
                </div>
            </div>
            <div class="tags">
                <p>Discover</p>
                <div>
                    <a href="#"># tiktokcookbook</a>
                    <a href="#"># summeressentials</a>
                    <a href="#"># music</a>
                    <a href="#"># memories</a>
                    <a href="#"># whoisbetter</a>
                    <a href="#"># tiktokcookbook</a>
                    <a href="#"># summeressentials</a>
                    <a href="#"># music</a>
                    <a href="#"># memories</a>
                    <a href="#"># whoisbetter</a>
                </div>
            </div>
            <div class="links">
                <div>
                    <div class="link">
                        <a href="#">About</a>
                        <a href="#">Newsroom</a>
                        <a href="#">Contact</a>
                        <a href="#">Careers</a>
                        <a href="#">ByteDance</a>
                        <a href="#">About</a>
                        <a href="#">Newsroom</a>
                        <a href="#">Contact</a>
                        <a href="#">Careers</a>
                        <a href="#">ByteDance</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="right">
            <div class="btns">
                <a href="#"><i class="fas fa-home"></i> <span>For You</span></a>
                <a href="#"><i class="fas fa-user-friends"></i> <span>Following</span></a>
                <a href="#"><i class="fas fa-video"></i> <span>Live</span></a>
              </div>
            <div class="post">
                <div class="post-info">
                    <div class="user">
                        <img src="5d789eb85d816200011f357a.jpeg" alt="avatar">
                        <div>
                            <h6>Gypsy</h6>
                            <p>Cool Video</p>
                        </div>
                    </div>
                    <button>Follow</button>
                </div>
                <div class="post-content">
                    <video autoplay muted controls loop disablepictureinpicture controlslist="nodownload noplaybackrate">
                        <source src="video1.mp4" type="video/mp4">
                    </video>
                    <div class="video-icons">
                        <a href="#"><i class="fas fa-heart fa-lg"></i><span>1.6K</span></a>
                        <a href="#"><i class="fas fa-comment-dots fa-lg"></i><span>423</span></a>
                        <a href="#"><i class="fas fa-share fa-lg"></i> <span>150</span></a>
                    </div>
                </div>
            </div>

            <div class="post">
                <div class="post-info">
                    <div class="user">
                        <img src="444dd033f280b5e20adc2490ba0e10e6.jpg" alt="avatar">
                        <div>
                            <h6>Frank</h6>
                            <p>Cute cat</p>
                        </div>
                    </div>
                    <button>Follow</button>
                </div>
                <div class="post-content">
                    <video autoplay muted controls loop disablepictureinpicture controlslist="nodownload noplaybackrate">
                        <source src="video2.mp4" type="video/mp4">
                    </video>
                    <div class="video-icons">
                        <a href="#"><i class="fas fa-heart fa-lg"></i><span>1.6K</span></a>
                        <a href="#"><i class="fas fa-comment-dots fa-lg"></i><span>423</span></a>
                        <a href="#"><i class="fas fa-share fa-lg"></i> <span>150</span></a>
                    </div>
                </div>
            </div>

            <div class="post">
                <div class="post-info">
                    <div class="user">
                        <img src="photo-1526506118085-60ce8714f8c5.jpg" alt="avatar">
                        <div>
                            <h6>Pirate</h6>
                            <p>Amazing</p>
                        </div>
                    </div>
                    <button>Follow</button>
                </div>
                <div class="post-content">
                    <video autoplay muted controls loop disablepictureinpicture controlslist="nodownload noplaybackrate">
                        <source src="video1.mp4" type="video/mp4">
                    </video>
                    <div class="video-icons">
                        <a href="#"><i class="fas fa-heart fa-lg"></i><span>1.6K</span></a>
                        <a href="#"><i class="fas fa-comment-dots fa-lg"></i><span>423</span></a>
                        <a href="#"><i class="fas fa-share fa-lg"></i> <span>150</span></a>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <script src="script.js"></script>
  </body>
</html>