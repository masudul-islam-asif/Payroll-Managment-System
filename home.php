<!DOCTYPE html>
<html lang="en">
<title>Welcome to Payroll</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="css/w3.css">
<link rel="stylesheet" href="css/font.css">
<style>
body,h1,h2,h3,h4,h5 {font-family: "Poppins", sans-serif}
body {font-size:16px;}
.w3-half img{margin-bottom:-6px;margin-top:16px;opacity:0.8;cursor:pointer}
.w3-half img:hover{opacity:1}
</style>
<body>


<?php
    include('navigation.php');
    ?>
<header class="w3-container w3-top w3-hide-large w3-red w3-xlarge w3-padding">
  <a href="javascript:void(0)" class="w3-button w3-red w3-margin-right" onclick="w3_open()">☰</a>
  <span>Payroll system</span>
</header>


<div class="w3-overlay w3-hide-large" onclick="w3_close()" style="cursor:pointer" title="close side menu" id="myOverlay"></div>


  <div class="w3-main" style="margin-left:290px;margin-right:-10px;margin-top: -5px;margin-bottom: 0px">


      
      <div class="w3-display-container w3-text-blue" style="font-size: 50px">
          <img src="images/wq.jpg" alt="Lights" style="width:100%" style="height: 150px">
          <div class="w3-display-middle w3-large" > <h1 >Welcome to Payroll system</h1></div>
      </div>
   <div class="w3-display-container w3-text-white">
  <img src="images/y%20y.jpg" alt="Lights" style="width:100%">
  <div class="w3-display-topleft w3-container"><p></p></div>
  <div class="w3-display-topright w3-container"><p></p></div>
  <div class="w3-display-bottomleft w3-container"><p></p></div>
  <div class="w3-display-bottomright w3-container"><p></p></div>
  <div class="w3-display-topmiddle" style="font-size: 20px"><p>Welcome to payroll system. This is our homepage.     We are developing this site.</p></div>
  <div class="w3-display-left w3-container"></div>
  <div class="w3-display-right w3-container"></div>
  <div class="w3-display-middle w3-large w3-text-Red">Right now this website is in its early stage.</div>
  <div class="w3-display-bottommiddle"><p></p></div>
 
   </div>
      
          
  </div>

<div class="w3-dark-grey w3-container w3-padding-32" style="margin-top:75px;padding-right:58px"><p class="w3-right">References <a href="https://sites.google.com/view/niloy900" title="W3.CSS" target="_blank" class="w3-hover-opacity">Md Mahmudul Hasan</a></p></div>

<script>


function w3_open() {
  document.getElementById("mySidebar").style.display = "block";
  document.getElementById("myOverlay").style.display = "block";
}
 
function w3_close() {
  document.getElementById("mySidebar").style.display = "none";
  document.getElementById("myOverlay").style.display = "none";
}



function onClick(element) {
  document.getElementById("img01").src = element.src;
  document.getElementById("modal01").style.display = "block";
  var captionText = document.getElementById("caption");
  captionText.innerHTML = element.alt;
}
</script>

</body>
</html>
