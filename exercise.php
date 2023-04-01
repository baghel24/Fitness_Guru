<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercise</title>
    <link rel="stylesheet" href="style.css">
</head>
<style>
    .div1 {
    width: 500px;
    height: 150px;
    padding: 10px 10px;
    position:relative;
    top: 80px;
    left: 30px;
    /* border: 1px solid rgb(41, 41, 43); */
    -webkit-box-shadow: 0 10px 20px 0 rgba(0,0,0,0.3);
    -webkit-border-radius: 10px 10px 10px 10px;
  }

.div2{
    width: 500px;
    height: 150px;
    padding: 10px 10px;
    position:relative;
    bottom: 105px ;
    left: 600px;
     /* border: 1px solid rgb(41, 41, 43);  */
}
#myTextarea {
  width: 70%;
  height:30%;
  padding: 15px;
  border-radius: 10px;
  border: 3px solid #ccc;
  /* margin-bottom: 1px; */
  margin-left: 130px;
  -webkit-box-shadow: 0 10px 20px 0 rgba(0,0,0,0.3);
    -webkit-border-radius: 10px 10px 10px 10px;
}

.btn {
  margin-right: 100px;
  padding: 12px 10px;
  width :100px;
  margin-bottom: 10px;
}

/* body {
  overflow-y: scroll;
} */
body {font-family: Arial, Helvetica, sans-serif; overflow-y: scroll;}

/* Full-width input fields */
input[type=text], input[type=password] {
  width: 60%;
  padding: 14px 20px;
  margin: 8px 20px;
  display: inline-block;
  border: 2px solid #ccc;
  box-sizing: border-box;
}

/* Set a style for all buttons */
button {
  background-color: rgb(2, 104, 2);
  color: white;
  padding: 4px 1px;
  margin: .01rem 300px;
  border: none ;
  cursor: pointer;
  width: 30%;
}

button:hover {
  opacity: 0.8;
}

.submitbutton{
    background-color: rgb(2, 104, 2);
  color: white;
  padding: 12px 10px;
  margin: 1rem 15px;
  border: none ;
  cursor: pointer;
  width: 30%;
}

/* Center the image and position the close button */
.imgcontainer {
  text-align: center;
  margin: 2px 0 12px 0;
  position: relative;
}
.container {
  padding: 16px;
}

/* span.psw {
  float: right;
  padding-top: 16px;
} */

/* The Modal (background) */
.modal {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
  padding-top: 60px;
}

/* Modal Content/Box */
.modal-content {
  background-color: #fefefe;
  margin: 5% auto 15% auto; /* 5% from the top, 15% from the bottom and centered */
  border: 1px solid #888;
  width: 60%; /* Could be more or less, depending on screen size */
}

/* The Close Button (x) */
.close {
  position: absolute;
  right: 25px;
  top: 0;
  color: #000;
  font-size: 35px;
  font-weight: bold;
}

/* .close:hover,
.close:focus {
  color: red;
  cursor: pointer;
} */

/* Add Zoom Animation */
.animate {
  -webkit-animation: animatezoom 0.6s;
  animation: animatezoom 0.6s
}

@-webkit-keyframes animatezoom {
  from {-webkit-transform: scale(0)} 
  to {-webkit-transform: scale(1)}
}
  
@keyframes animatezoom {
  from {transform: scale(0)} 
  to {transform: scale(1)}
}

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {
  span.psw {
     display: block;
     float: none;
  }
  .cancelbtn {
     width: 100%;
  }
}

</style>
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
                <li><a href="home">Home</a>
                <li><a href="diary.html">Diary</a></li>
                <li><a href="goal.html">Goals</a></li>
                <li><a href="about">About</a></li>
            </div>
              </ul>
          </nav>

          <div class="left">
            <div class="div1">
                <h2 style="color: rgb(8, 6, 6); font-size: 25px;">Cardiovascular</h2> 
                <button onclick="document.getElementById('id01').style.display='block' ">Add Exercise</button><hr>
                
             </div>  <br><br>
             <div class="div2">
                <h2 style="color: rgb(8, 6, 6); font-size: 25px;">Strength Training</h2> 
                <button onclick="document.getElementById('id01').style.display='block'">Add Exercise</button><hr>
             </div><hr>
             <h3 style="padding:20px">Create your Exercise Notes:</h3>
             <textarea id="myTextarea" rows="5"></textarea>
             <button class="btn"id="saveBtn" type="button" >Save</button>
             <button class="btn"id="editBtn" type="button">Edit</button>
             
             <div id="id01" class="modal">
               
               <form class="modal-content animate" action="/action_page.php" method="post">
                 <div class="imgcontainer">
                   <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
                   <img src="logo_image-removebg-preview.png" alt="image" width="90">
                   <h3>Add Exercise from database:</h3>
                 </div>
             
                 <div class="search-container">
                     <form action="/action_page.php">
                       <input type="text" placeholder="Search.." name="search">
                       <button class = "submitbutton"type="submit">Submit</button>
                     </form>
                   </div>
             
                 <!-- <div class="container" style="background-color:#f1f1f1">
                   <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
                   <span class="psw">Forgot <a href="#">password?</a></span>
                 </div> -->
               </form>
             </div>
             
             <script>
             // Get the modal
             var modal = document.getElementById('id01');
             
             // When the user clicks anywhere outside of the modal, close it
             window.onclick = function(event) {
                 if (event.target == modal) {
                     modal.style.display = "none";
                 }
             }
             </script>   
          
</body>
</html>