


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign up page 1</title>
</head>
<style>
   
    /* form {border: 5px solid #a8d89bde;} */
    body {font-family: Arial, Helvetica, sans-serif;
    background-image: url("website_design\ 1.png");
    background-repeat: no-repeat;
  background-attachment: fixed;
  background-size: 100% 100%;
}
    .content {
      max-width: 450px;
      margin: auto;
      background: #a8d89bde;
      padding: 11px;
    }
    input[type=text], input[type=password] {
      width: 90%;
      padding: 15px;
      margin: 8px 20px;
      display: inline-block;
      border: 2px solid #ccc;
      box-sizing: border-box;
    }
    input[type=text], input[type=password] {
      width: 90%;
      padding: 15px;
      margin: 8px 20px;
      display: inline-block;
      border: 2px solid #ccc;
      box-sizing: border-box;
    }
    
    .test{
    height: 50px;
    width:150px;
    background-color: #047004;
    color:aliceblue;
    font-size: 16px;
    border-color: #047004;
}

    .imgcontainer {
      text-align: center;
      margin: 24px 0 12px 0;
    }
    
    img.avatar {
      width: 40%;
      
    }
    
    
    span.psw {
      float: right;
      padding-top: 10px;
    }
    .header {
            padding: 1px 1px;
            /* background-color: rgb(243, 243, 243); */
           }
           body {margin:0;}
    
    ul {
      list-style-type: none;
      margin: 0;
      padding: 0;
      overflow: hidden;
      background-color: #ffffff;
      position: fixed;
      top: 0;
      width: 100%;
    }
    
    li {
      float: left;
    }
    
    li a {
      display: block;
      color: white;
      text-align: center;
      padding: 14px 16px;
      text-decoration: none;
    }
     
    /* Simple CSS3 Fade-in-down Animation */
    #formContent {
      -webkit-border-radius: 20px 20px 20px 20px;
      border-radius: 20px 20px 20px 20px;
      background: #fff;
      padding: 30px;
      width: 100%;
      max-width: 450px;
      position: relative;
      padding: 0px;
      -webkit-box-shadow: 0 30px 60px 0 rgba(0,0,0,0.3);
      box-shadow: 0 30px 60px 0 rgba(0,0,0,0.3);
      text-align: left;
    }
    .wrapper {
      display: flex;
      align-items: center;
      flex-direction: column; 
      justify-content: center;
      width: 100%;
      min-height: 100%;
      padding: 20px;
    }
    
        </style>
<body>
        <ul>
          <li><img src="logo_image-removebg-preview.png" alt="image" width="90" align = "left" ></li>
          <li><div class="header" id="myHeader">
            <h1 style = "color: rgb(2, 104, 2); font-size: 40px; font-family:verdana;">
                FITNESS GURU
            </h1></div> </header></li>
        </ul>
        <div style="padding:20px;margin-top:30px;background-color:#cccccc;height:40px;"></div>
        <div class="wrapper fadeInDown">
          <div id="formContent">
          <div class="content">
      <form action="" method="post">
        <h2 style = "color: #000000; font-size: 200%;">What's your Name?</h2>
       
          
      
        <div class="container">
          <label for="username"><b>Name:</b></label>
          <input type="text" placeholder="Enter Username" name="username" required>
          <h2 style = "color: #000000; font-size: 200%;">What's your country?</h2>
     
              <label for="country" class="form-label"><b>Choose your country:</b></label><br>
              <input type="text" placeholder="Click here to chose" list="browsers" name="country" id="browser">
              <datalist id="browsers">
                <option value="India">
                <option value="pakistan">
                <option value="Nepal">
                <option value="Malaysiya">
                <option value="china">
              </datalist> <br>  <hr> 
           
          <button class="test" style = margin-right:90px onclick="window.location.href = 'index01.html';">Back</button>
          <button class="test" style = margin-left:30px onclick="window.location.href = 'register.php';">Next</button>
         
        </div>
      </form>
      </div></div></div>
      </body>
      </html>
