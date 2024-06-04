<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>The Pavilion - The Hausland Pampanga</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-..." crossorigin="anonymous" />
  
</head>
<style>


body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
}

header {
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: -50px;
    background-color: #103510;
    color: white;
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    z-index: 1000;
}


.logo img {
    width: 200px;
    height: 80px;
    border-radius: 10px;

}

.search-box {
    display: flex;
}

.search-box input {
    padding: 8px;
    border: 1px solid #ccc;
    border-radius: 5px;
}

.search-box button {
    padding: 8px 12px;
    background-color: #4CAF50;
    color: white;
    border: none;
    border-radius: 5px;
    margin-left: 10px;
    cursor: pointer;
}

nav ul {
    list-style-type: none;
    margin: 20px;
    padding: 0;

}

nav ul li {
    display: inline;
    margin-right: 10px;
}

nav ul li a {
    color: white;
    text-decoration: none;
    margin: 10px;
}
.discount-tag {
    position: absolute;
    top: 10px;
    left: 10px;
    background-color: #ff0000; /* Red background color */
    color: #ffffff; /* White text color */
    padding: 10px 10px;
    border-radius: 5px;
    font-size: 14px;
    font-weight: bold;
}

.contentss {
    padding-top: 80px; /* Adjust according to your header height */
}

.main-content {
    flex: 1;
    display: flex;
    justify-content: center;
    align-items: center;
    text-align: center;
    padding: 60px;
}
.main-content::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background: url('homeepage.jpg') no-repeat center center/cover;
    filter: brightness(60%);
    z-index: -1;
}


.welcome-message {
    position: absolute;
    color: #fff;
    padding: 20px;
    border-radius: 10px;
}

.welcome-message h2 {
    font-family: Georgia, 'Times New Roman', Times, serif;
    width: 20%;
    margin-top: 2%;
    margin-left: 3%;
    font-size: 100px;
    margin-bottom: -30px;
}

.welcome-message p {
    margin-left: 5%;
    font-size: 24px;
    margin-bottom: 20px;
}

.book-now {
    background-color: #15400e;
    font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
    color: #fff;
    padding: 20px 20px;
    font-size: 24px;
    border: none;
    margin-top: 30%;
    margin-left: 70%;
    width: 20%;
    border-radius: 5px;
    cursor: pointer;
    text-align: center;
}
.book-now span{
    font-family: Georgia, 'Times New Roman', Times, serif;
    color: #fffb00;
    font-size: 13px;  
    width: 50%;
    text-align: center;
}
.book-now:hover {
    background-color: #337a26;
}



.containerr {
    max-width: 1000px;
    overflow: hidden;
    margin: 0 auto;
    position: relative;
    padding: 20px;
    display: flex;
    flex-direction: column;
    align-items: center;
    text-align: center;
}

.imagesss {
    width: 100%;
    display: flex; 
    justify-content: space-between;
    flex-wrap: wrap; 
    margin-bottom: 20px;
    margin: 10px;
 
}

.imagesss img {
    width: calc(100% - 10px); /* Adjust the width of images with 20px margin */
    height: auto; /* Maintain aspect ratio */
    margin-bottom: 20px; /* Add space between images */
       border-radius: 10px;
}

.description {
    padding: 50px;
    border: 1px solid #ccc;
    border-radius: 10px;
}

.rating {
    margin-bottom: 10px;
    display: flex;
    text-align: left;
}

.rating .stars {
    color: gold;
}

button {
    padding: 30px 50px;
    background-color: #1e4b1f;
    color: white;
    font-weight: bold;
    font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
    font-size: 20px;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    margin-left: 73%;
}
.lineeee{ 
    display: flex;
    flex-direction: row;
    justify-content: space-between;
    margin: 10px;
  
}
.pavtitle {
    display: flex;
    text-align: left;
}
.payment{
    display: flex;
    text-align: left;
    margin-top: -20px;
    margin-left: 10px;
}
.mode{
    font-size: 25px;
    font-weight: bold;

}
.pricetag{
    font-size: 20px;
}   

.containers {
    display: flex;
    justify-content: space-between;
    align-items: flex-start;
    padding: 20px;
}

.header {
    width: 95%;
}

.header h1 {
    font-family: Georgia, 'Times New Roman', Times, serif;
    font-size: 44px;
    margin: 0;
}
.bydvwu{
    margin-left: 30px;
    font-size: 32px;
    margin-top: 5px;
    color: #099e09;
    font-weight: bolder;
}

.paragraph {
    font-family: Georgia, 'Times New Roman', Times, serif;
    margin-left: 30px;
    width: 60%;
    font-size: 24px;
}

.button {
    margin-left: 10%;
    display: inline-block;
    background-color: #143a0d;
    color: #fff;
    padding: 30px 20px;
    font-size: 26px;
    font-weight: bolder;
    text-decoration: none;
    border-radius: 10px;
    margin-top: 20px;
}
.bataan {
    border-radius: 10px;
    border: 3px solid #000000;
    position: relative;
    top: 350px;
    right: -200px;
    width: 254px;
    height: 258px;
  }
  .mabalacat {
        border-radius: 10px;
        border: 5px solid #000000;
        position: relative;
        top: -70px;
        right: -64px;
        width: 250px;
        height: 200px;
  }
  .mansfield {
    border-radius: 10px;
    border: 4px solid #000000;
    position: relative;
    top: 100px;
    right: 24px;
    width: 313px;
    height: 247px;
  }



  
  body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
}
.containerss {
    margin-bottom: 10%;
    display: flex;
    flex-wrap: wrap;
    justify-content: center;
    position: relative; /* Added for positioning text */
}
.imagee {
    width: 30%; /* Adjust the width of each image */
    margin: 10px;
    position: relative; /* Added for positioning text */
    overflow: hidden; /* Added to contain the filter effects */
    transition: transform 0.3s ease; /* Added transition for smooth lift-up effect */
}
.imagee img {
    border-radius: 20px;
    width: 100%;
    height: 300px;
    filter: brightness(60%) blur(2px); /* Added filter for darkness and blur */
    transition: filter 0.3s ease; /* Added transition for smooth effect */
}
.imagee:hover {
    transform: translateY(-5px); /* Lift up on hover */
}
.imagee:hover img {
    filter: brightness(85%) blur(0); /* Change filter on hover */
}
.text-overlay {
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    color: white;
    padding: 5px 10px;
    font-weight: bolder;
    font-size: 45px;
    text-align: center;
}
/* Styling for the image container */
.full-image-container {
    display: none;
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background-color: rgba(0, 0, 0, 0.8);
    z-index: 9999;
    justify-content: center;
    align-items: center;
}
.imagee-back {
    position: absolute;
    color: white;
    cursor: pointer;
}
.full-image-content {
    display: flex;
    flex-wrap: wrap;
    justify-content: center;
}
.full-image-content .full-image {
    width: 30%;
    margin: 10px;
}
.full-image-content .full-image img {
    width: 100%;
    height: auto;
}
.h1{
    font-weight: bolder;
    font-size: 60px;
    text-align: center;
    color: rgb(23, 55, 20);
    font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
    
}
.subheadr{
    font-family: Georgia, 'Times New Roman', Times, serif;
    font-size: 24px;
    text-align: center;
}







.containeer {
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    margin-top: 30px;
  }

  .line-container {
    position: relative;
    width: 1250px; /* Adjust width as needed */
    height: 20px; /* Adjust height as needed */
    margin-bottom: 10px;
  }

  .line {
    justify-content: space-between; 
    display: flex;
    width: 100%;
    height: 100%;
  }

  .part {
    flex: 1;
    background-color: #ccc; /* Default color */
    transition: background-color 0.3s ease, transform 0.3s ease;
    margin: 1px; /* Adjust margin as needed */
    cursor: pointer;
  }

  .part.active {
    background-color: #1d4f11; /* Brightened color */
    transform: translateY(-5px); /* Lifted up */
    
  }

  .image-container {
    position: relative;
    bottom: -30px; /* Adjust distance from the line */
    left: -30px;
    width: 1300px; /* Adjust width as needed */
    text-align: center;
  }

  .image {
    width: 200px; /* Adjust width of the image */
    height: 250px;
    filter: brightness(60%)
  }
.image:hover {
    filter: brightness(80%)
}
  .image-container div {
    position: relative;
    display: inline-block;

  }

  .overlay-text {
    position: absolute;
    font-size: 24px;
    font-weight: 700;
    color: #ffffff;
    bottom: 100px; /* Adjust vertical position */
    left: 50%;
    transform: translateX(-50%);
    
  }
.line div:hover {

    background-color: rgb(52, 113, 35);
    transition: transform 0.3s ease;
}
.imagee-container {
    display: flex;
    align-items: center;
    justify-content: space-between;
}


.line div:hover {
    transform: translateY(-5px);
}



  .banner {
            position: relative;
            margin-top: 100px;
            background-image: url('one.jpg'); /* Add the path to your banner image */
            background-size: cover;
            background-repeat: no-repeat;
            background-position: center;
            padding: 100px 0px;
           margin-right: -7%;
            text-align: center;
            color: rgb(255, 255, 255);
        }
        .banner::before {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.5); /* Dark overlay */
            z-index: 1;
        }
        .banner p {
            position: relative;
            z-index: 2;
            margin: 0;
            bottom: 10px;
            font-size: 20px;
            text-shadow: 2px 2px 5px rgba(0, 0, 0, 0.5);
        }
        .banner h1 {
            position: relative;
            z-index: 2;
            font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
            margin: 10px 0 0 0;
            font-size: 80px;
            text-shadow: 0px 0px 15px rgb(255, 255, 255); /* Adding shadow to the text */
        }
        .containner {
            width: 100%;
            margin: 0 auto;
            padding: 40px;
        }
        .info-sections {
            display: flex;
            justify-content: space-between;
            margin-bottom: 10px;
        }
        .info-section {
            text-align: center;
            flex: 1;
            padding: 0 20px;
        }
        .info-section h2 {
            margin-bottom: 15px;
            font-size: 1.2em;
        }
        .info-section p {
            margin: 5px 0;
        }
        .contaiiner {
            max-width: 600px;
            margin: 0 auto;
        }
        .contaiiner h2{
           font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
           font-size: 30px;
        }
        .contaiiner p{
           margin-top: -15px;
           margin-bottom: 40px;
        }
        .contaiiner label {
            display: block;
            margin-bottom: 5px;
        }
        .contaiiner input, .contaiiner textarea {
            width: 100%;
            padding: 10px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        .modal {
            display: none;
            position: fixed;
            z-index: 1;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            overflow: auto;
            background-color: rgb(0,0,0);
            background-color: rgba(0,0,0,0.4);
            padding-top: 60px;
        }
        
        .modal-content {
            border-radius: 20px;
            background-color: #ffffff;
            margin: 5% auto;
            padding: 20px;
            border: 3px solid #267e1e;
            width: 80%;
            color: rgb(25, 18, 100);
            max-width: 300px;
            text-align: center;

        }
        .modallogo img{
            height: 100px;
            width: 200px;
            margin-bottom: -20px;
        }
        
        .close {
            color: #aaaaaa00;
            float: right;
            font-size: 28px;
            font-weight: bold;
        }
        
        .close:hover,
        .close:focus {
            color: rgba(0, 0, 0, 0);
            text-decoration: none;
            cursor: pointer;
        }
        
     
        .subbutton {
            display: block;
            width: 100%;
            padding: 10px;
            background-color: #084704;
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            margin-left: 1%;
        }
        .subbutton:hover {
            background-color: #3da430;
        }
        .textmid h2{
            margin-bottom: -5px;
        }
        .textmid{
            margin-top: 5%;
            text-align: center;
            margin-bottom: 3%;
        }
        .contacttext h3{
            font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
            font-size: 13px;
        }
        .contacttext{
            font-size: 10px;
            margin-top: 20px;
            text-align: center;
        }



      
        .footer {
            margin-right: -7%;
            background-color: #103510;
            color: white;
            padding: 10px 0px;
        }
        .footer-container {
            width: 100%;
            margin: 0 auto;
            display: flex;
            justify-content: space-between;
            flex-wrap: wrap;
        }
        .footer-column {
            flex: 1;
            min-width: 200px;
            margin: 20px 0;
        }
        .footer-column h3 {
            margin-top: 0;
            margin-bottom: 20px;
            font-size: 18px;
            font-weight: bold;
        }
        .footer-column ul {
            list-style-type: none;
            padding: 0;
        }
        .footer-column ul li {
            margin-bottom: 10px;
        }
        .footer-column ul li a {
            color: white;
            text-decoration: none;
        }
        .footer-column ul li a:hover {
            text-decoration: underline;
        }
        .footer-logo {
            display: flex;
            align-items: center;
            flex-direction: column;
        }
        .footer-logo img {
            max-width: 250px;
            margin-bottom: 10px;
        }
        .footer-logo p {
            margin: 0;
            font-size: 14px;
            text-align: center;
        }
        .footer-social {
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 15px;
            margin-top: 20px;
        }
        .footer-social a {
            color: white;
            text-decoration: none;
            font-size: 18px;
        }

        .hidden {
    display: none;
}

#form-status {
    margin-top: 20px;
    padding: 15px;
    border-radius: 5px;
    font-size: 16px;
    line-height: 1.5;
}

#form-status.success {
    background-color: #dff0d8;
    border: 1px solid #d6e9c6;
    color: #3c763d;
}

#form-status.error {
    background-color: #f2dede;
    border: 1px solid #ebccd1;
    color: #a94442;
}


        </style>
<body>
    <header>
        <div class="logo">
            <img src="sublogoss.png" alt="Logo">
        </div>
        
      
        <nav>
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="index.php#about-section">About Us</a></li>
                
                <li><a href="index.php#gallery-section">Gallery</a></li>
                <li><a href="index.php#contact-section">Contact Us</a></li>
                <li><a href="login.php">Login/Register</a></li>
            </ul>
        </nav>
    </header>
    
    
    <div class="contentss">
        <div class="welcome-message">
            <h2>WELCOME VILLIE!</h2>
            <p>Book the perfect venue with us</p></div>
            <button onclick="location.href='login.php'" class="book-now">BOOK NOW <span><br>EXCLUSIVE OFFERS</span></button>
        <main class="main-content">
           
              
        </main>  
    </div>

   
    <hr>
    <br>
    <br>
    <br>
    <br>
    <div id="about-section" class="header">
    <div class="content">
        <div class="containers">
            <div class="header">
                <h1>Welcome to The Pavilions of The Hauslands</h1>
                <p class="bydvwu">Book your dream venue with us</p>
                <p class="paragraph">Step into the refined elegance of The Pavilion, nestled within the exclusive confines of Hauslands. 
                    As a distinguished feature of this private subdivision, The Pavilion offers an intimate and 
                    sophisticated setting for your special occasions. Experience the allure of understated luxury as 
                    you host weddings, corporate gatherings, and cherished celebrations within our meticulously designed
                     function hall. Our commitment to impeccable service ensures that every detail is attended to with 
                     care, providing you and your guests with an unparalleled experience. Discover the perfect blend of 
                     privacy and sophistication at The Pavilion. Reserve your event today and embark on a journey of 
                     elegance within the secluded enclave of Hauslands.</p>
                <a href="#gallery-section" class="button">View more of our Pavilion</a>
            </div>
            <div class="imagess">
                <img class="bataan" src="2 BATAAN/BATAANS.jpg" alt="Image 1">
                <img class="mabalacat" src="5 MABALACAT/mabalacat.jpg" alt="Image 2">
                <img class="mansfield"  src="3 SUBIC/subic.jpg" alt="Image 3">
            </div>
            
        </div>
        
    </div>
    </div>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
<div class="containeer">
 
    <div class="line-container">
      <div class="line">
        <div class="part"></div>
        <div class="part"></div>
        <div class="part"></div>
        <div class="part"></div>
        <div class="part"></div>
        <div class="part"></div>
      </div>
      <div class="image-container">
        <div>
          <img class="image" src="1 PAMPANGA/Pamppav.jpg" alt="Image 1" onclick="liftImage('pamp.php')">
          <span class="overlay-text">PAMPANGA</span>
        </div>
        <div>
          <img class="image" src="BATAANS.jpg" alt="Image 2" onclick="liftImage('bataan.php')">
          <span class="overlay-text">BATAAN</span>
        </div>
        <div>
          <img class="image" src="subic.jpg" alt="Image 3" onclick="liftImage('subic.php')">
          <span class="overlay-text">SUBIC</span>
        </div>
        <div>
          <img class="image" src="timog.jpg" alt="Image 4" onclick="liftImage('timog.php')">
          <span class="overlay-text">TIMOG RESIDENCES</span>
        </div>
        <div>
          <img class="image" src="mabalacat.jpg" alt="Image 5" onclick="liftImage('mabalacat.php')">
          <span class="overlay-text">MABALACAT</span>
        </div>
        <div>
          <img class="image" src="pool.jpg" alt="Image 6" onclick="liftImage('mansfield.php')">
          <span class="overlay-text">MANSFIELD RESIDENCES</span>
        </div>
      </div>
      
    </div>
  </div>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>  
  <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>    
    <br>
    <hr>
    <br>
    <br>
    <br>
   
    <div id="gallery-section" class="header">
    <h1 class="h1">GALLERY</h1>
    <p class="subheadr">Explore more of our different kinds of pavilion </p>
    <div class="containerss">
        <div class="imagee">
            <a href="gal.php#first-section">
                <img src="1 PAMPANGA/Pamppav.jpg" alt="Image 1">
                <div class="text-overlay">PAMPANGA</div>
            </a>
        </div>
        <div class="imagee">
            <a href="gal.php#second-section">
                <img src="2 BATAAN/BATAANS.jpg" alt="Image 2">
                <div class="text-overlay">BATAAN</div>
            </a>
        </div>
        <div class="imagee">
            <a href="gal.php#third-section">
                <img src="3 SUBIC/subic.jpg" alt="Image 3">
                <div class="text-overlay">SUBIC</div>
            </a>
        </div>
        <div class="imagee">
            <a href="gal.php#fourth-section">
                <img src="4 TIMOG/timog.jpg" alt="Image 4">
                <div class="text-overlay">TIMOG RESIDENCES</div>
            </a>
        </div>
        <div class="imagee">
            <a href="gal.php#fifth-section">
                <img src="5 MABALACAT/mabalacat.jpg" alt="Image 5">
                <div class="text-overlay">MABALACAT</div>
            </a>
        </div>
        <div class="imagee">
            <a href="gal.php#sixth-section">
                <img src="6 MANSFIELD/Mansfield.jpg" alt="Image 6">
                <div class="text-overlay">MANSFIELD RESIDENCES</div>
            </a>
        </div>
        
    </div>
    <hr>
    <div id="contact-section">
        <div class="banner">
            <p>For The Pavilion Online Concerns</p>
            <h1>CONTACT US</h1>
        </div>
        <div class="background">
            <div class="containner">
                <div class="info-sections">
                    <div class="info-section">
                        <h2>HOURS OF OPERATION</h2>
                        <p>09:00 to 5:00, Mon - Fri (Excluding Holidays)</p>
                    </div>
                    <div class="info-section">
                        <h2>PHONE</h2>
                        <p>+1 202-555-0187</p>
                    </div>
                    <div class="info-section">
                        <h2>GENERAL CONCERNS</h2>
                        <p>Email: thehauslandph@gmail.com</p>
                    </div>
                </div>
               
                <div class="textmid">
                <h2>Our customer service team is waiting to assist you</h2>
                <p>Please allow up to few minutes/hours response time in order for us to fully address your concerns</p>
            
                </div>
                <hr>
                <div class="contacttext">
                <h3>CONTACT FORM BELOW</h3>
                <p>Fill out the form below</p>
                </div>
                <hr>
                <div class="contaiiner">
                    <section id="contact-section">
    <h2>Contact Form</h2>
    <form action="https://api.web3forms.com/submit" method="POST" id="contactForm">
        <input type="hidden" name="access_key" value="81aa46c9-7294-4221-967f-51c5938fc400">
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" required>
        <br>
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required>
        <br>
        <label for="message">Message:</label>
        <textarea id="message" name="message" required></textarea>
        <br>
        <button class="subbutton" type="submit">Submit</button>
    </form>
    <div id="form-status" class="hidden"></div>
</section>


<script>
document.getElementById('contactForm').addEventListener('submit', async function(event) {
    event.preventDefault();
    const form = event.target;
    const statusDiv = document.getElementById('form-status');

    try {
        const response = await fetch(form.action, {
            method: form.method,
            body: new FormData(form),
            headers: {
                'Accept': 'application/json'
            }
        });

        if (response.ok) {
            const result = await response.json();
            if (result.success) {
                statusDiv.className = 'success';
                statusDiv.innerHTML = '<p>Thank you! Your message has been sent successfully.</p>';
            } else {
                statusDiv.className = 'error';
                statusDiv.innerHTML = '<p>Oops! Something went wrong. Please try again.</p>';
            }
        } else {
            statusDiv.className = 'error';
            statusDiv.innerHTML = `<p>Oops! Something went wrong. Status: ${response.statusText}</p>`;
        }
    } catch (error) {
        statusDiv.className = 'error';
        statusDiv.innerHTML = `<p>Error submitting form: ${error.message}</p>`;
    }

    statusDiv.classList.remove('hidden');
});
</script>

                </div>
                 </div>
        </div>
    </div>
      <!-- Footer -->
      <footer class="footer">
        <div id="footer-section" class="footer-container">
            <div class="footer-column footer-logo">
                <img src="sublogoss.png" alt="The Hauslands Logo">
                <p>&copy; Copyright 2020 Hauslands<br>
                   Made by The Fukiko Industry</p>
                <div class="footer-social">
                    <a href="https://www.facebook.com/yourcompany"><i class="fab fa-facebook"></i></a>
                    <a href="https://www.instagram.com/yourcompany"><i class="fab fa-instagram"></i></a>
                    <a href="https://twitter.com/yourcompany"><i class="fab fa-twitter"></i></a>
                </div>
            </div>
            <div class="footer-column">
                <h3>Available Facilities</h3>
                <ul>
                    <li><a href="#pampanga-section">The Hauslands Pampanga</a></li>
                    <li><a href="#bataan-section">The Hauslands Bataan</a></li>
                    <li><a href="#subic-section">The Hauslands Subic</a></li>
                    <li><a href="#timog-section">Timog Residences</a></li>
                    <li><a href="#mabalacat-section">The Hauslands Mabalacat</a></li>
                    <li><a href="#mansfield-section">Mansfield Residences</a></li>
                </ul>
            </div>
            <div class="footer-column">
                <h3>Check us</h3>
                <ul>
                    <li><a href="#about-section">About Us</a></li>
                    <li><a href="#gallery-section">Gallery</a></li>
                    <li><a href="#contact-section">Contact Us</a></li>
                </ul>
            </div>
        </div>
    </footer>
    <script src="script.js"></script>
</body>
</html>