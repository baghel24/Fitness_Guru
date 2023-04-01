<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Goal</title>
    <link rel="stylesheet" href="style.css">
</head>

<script type="text/javascript">
    /* Do not copy any part of this script without permission; Dr Bill Sukala */
             function calc (form) {
             var C, P, F 
             
             C=form.Carbohydrate.options[form.Carbohydrate.selectedIndex].value
             P=form.Protein.options[form.Protein.selectedIndex].value
             F=form.Fat.options[form.Fat.selectedIndex].value
                 
             if (+P + +F + +C !== 1) { alert('The sum of carb, protein, and fat must equal 100%'); }
                 
             form.CarbCalories.value = C*form.CalorieIntake.value
             form.ProteinCalories.value = P*form.CalorieIntake.value
             form.FatCalories.value = F*form.CalorieIntake.value
    
             form.CarbGrams.value = Math.round((C*form.CalorieIntake.value)/4)
             form.ProteinGrams.value = Math.round((P*form.CalorieIntake.value)/4)
             form.FatGrams.value = Math.round((F*form.CalorieIntake.value)/9)
                 
             }
            </script>
<style>
 

.div3{
    width: 760px;
    height: 150px;
    padding: 10px 10px;
    position:relative;
    margin-top: 40px;
    bottom: 0px ;
    left: 40px;
    -webkit-box-shadow: 0 10px 20px 0 rgba(0,0,0,0.3);
    -webkit-border-radius: 10px 10px 10px 10px;
     /* border: 1px solid rgb(41, 41, 43);  */
}
body {
  overflow-y: scroll;
}
body {font-family: Arial, Helvetica, sans-serif;}

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
  margin: .01rem 150px;
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



/* Center the image and position the close button  */
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
                <li><a href="exercise.html">Exercise</a></li>
                <li><a href="about">About</a></li>
            </div>
              </ul>
          </nav>
          <h1 style="padding:30px">Your Fitness Goals:</h1>
          <form>
            <div class="wrapper-calories">
            <div id="column-one">
            <h3>Enter total daily calorie intake</h3>
            <p style="margin-bottom: 32px;">
            <input name="CalorieIntake" type="text" size="7" placeholder="Enter your calories here" class="calorie-field-style">
            </p>
            <h3>Select desired macronutrient percentages</h3>
            <p>
            <select name="Carbohydrate" class="style-selector">
            <option value="0.05">5%</option>
            <option value="0.10">10%</option>
            <option value="0.15">15%</option>
            <option value="0.20">20%</option>
            <option value="0.25">25%</option>
            <option value="0.30">30%</option>
            <option value="0.35">35%</option>
            <option value="0.40">40%</option>
            <option value="0.45">45%</option>
            <option value="0.50">50%</option>
            <option value="0.55" selected>55%</option>
            <option value="0.60">60%</option>
            <option value="0.65">65%</option>
            <option value="0.70">70%</option>
            <option value="0.75">75%</option>
            </select>
            Carbohydrate
            </p>
            <p>
            <select name="Protein" class="style-selector">
            <option value="0.05">5%</option>
            <option value="0.10">10%</option>
            <option value="0.15" selected>15%</option>
            <option value="0.20">20%</option>
            <option value="0.25">25%</option>
            <option value="0.30">30%</option>
            <option value="0.35">35%</option>
            <option value="0.40">40%</option>
            <option value="0.45">45%</option>
            <option value="0.50">50%</option>
            <option value="0.55">55%</option>
            <option value="0.60">60%</option>
            <option value="0.65">65%</option>
            <option value="0.70">70%</option>
            <option value="0.75">75%</option>
            <option value="0.80">80%</option>
            </select>
            Protein
            </p>
            <p style="margin-bottom: 5px !important;">
            <select name="Fat" class="style-selector">
            <option value="0.05">5%</option>
            <option value="0.10">10%</option>
            <option value="0.15">15%</option>
            <option value="0.20">20%</option>
            <option value="0.25">25%</option>
            <option value="0.30" selected>30%</option>
            <option value="0.35">35%</option>
            <option value="0.40">40%</option>
            <option value="0.45">45%</option>
            <option value="0.50">50%</option>
            <option value="0.55">55%</option>
            <option value="0.60">60%</option>
            <option value="0.65">65%</option>
            <option value="0.70">70%</option>
            <option value="0.75">75%</option>
            <option value="0.80">80%</option>
            <option value="0.85">85%</option>
            <option value="0.90">90%</option>
            </select>
            Fat
            </p>
            <div id="outer">
            <div class="inner">
            <input type="button" value="Calculate" class="CalculateButton" onclick="calc(this.form)">
            </div>
            <div class="inner">
            <input type="reset" value="Reset" name="Reset" class="ResetButton">
            </div>
            </div>
            </div>
            <div id="column-two">
            <h3 >Calories from each macronutrient</h3>
            <p style="margin-bottom: 3px;">
            <input name="CarbCalories" type="text" size="7" class="calorie-results-field" placeholder="Carb calories"> Carbohydrate</p>
            <p style="margin-bottom: 3px;"><input name="ProteinCalories" type="text" size="7" class="calorie-results-field" placeholder="Protein calories"> Protein</p>
            <p style="margin-bottom: 3px;"><input name="FatCalories" type="text" size="7" class="calorie-results-field" placeholder="Fat calories"> Fat</p>
            <h3>Grams of each macronutrient</h3>
            <p style="margin-bottom: 3px;"><input name="CarbGrams" type="text" size="7" class="grams-results-field" placeholder="Carb grams"> Carbohydrate (g)</p>
            <p style="margin-bottom: 3px;"><input name="ProteinGrams" type="text" size="7" class="grams-results-field" placeholder="Protein grams"> Protein (g)</p>
            <p style="margin-bottom: 3px;"><input name="FatGrams" type="text" size="7" class="grams-results-field" placeholder="Fat grams"> Fat (g)</p>
            </div>
            </div>
            </form>
            <style>
            .wrapper-calories { 
             border: 2px solid #eee;
             border-radius:5px;
             overflow:hidden;
             margin-top: 15px;
             margin-bottom:20px;
             /* background-color: #99d188a6; */
            }
            
            .wrapper-calories div {
               min-height: auto;
               padding: 10px;
            }
            
            #column-one {
              float:left; 
              margin-right:5px;
              width:50%;
            
            }
            #column-two { 
              overflow:hidden;
              border-left:1px solid #eee;
            }
            
            @media screen and (max-width: 768px) {
               #column-one { 
                float: none;
                margin-right:0;
                width:auto;
                border:0;
                border-bottom:1px solid #eee;    
              }
            }
            
            #calculator-h3 {font-size: 16px; font-weight:500; background-color:#2676b7; color:#fff; padding-top:5px; padding-bottom:5px; border-radius:3px;padding-left:10px;}
            
            #calculator-text {font-size:14px; line-height: 1.3;}
            
            #calculator-list-text {font-size:12px; line-height: 1.3;}
            
            /* Units selectors style */
            select.style-selector {	
                font-size: 17px;
                    width: 45%;
                    height: 45px;
                    margin-bottom: 3px;
            }
            
            /* Calorie input field styling */
            input.calorie-field-style[type="text"] {
            padding:.7em;
            width: 75%
            }
            
            /* Calorie results field styling */
            input.calorie-results-field[type="text"] {
            padding:.7em;
            width: 45%
            }
            
            /* Grams field styling */
            input.grams-results-field[type="text"] {
            padding:.7em;
            width: 45%
            }
            
            /* Calculate Buttons - inline  */
            #outer
            {
                width:100%;
                text-align: left;
                margin-top: 20px;
                margin-bottom: 20px;
                padding-left: 0px;
            }
            .inner
            {
                display: inline-block;
            }
            
            /* Calculate Buttons - styling  */
            input[type="button"].CalculateButton {font-size:16px !important; background: #166e0e; border: none; color: white; border-radius: 5px; padding: 15px 15px 16px 15px; -webkit-appearance: none; }
            
            input[type="reset"].ResetButton {font-size:16px !important; padding-top:11px !important; padding-bottom:12px !important; padding: 15px 22px 16px 22px; background: #2e9215; -webkit-appearance: none;}
            
            @media screen and (max-width: 768px) {
            ::-webkit-input-placeholder { /* Edge */
            font-size: 15px;
            }
            
            :-ms-input-placeholder { /* Internet Explorer 10-11 */
            font-size: 15px;
            }
            
            ::placeholder {
            font-size: 15px;
            }
            
            }
            </style>
             
          
</body>
</html>