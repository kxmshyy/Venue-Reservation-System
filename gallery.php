<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gallery</title>
   
    <style>
        body{
            background-color: rgb(255, 255, 255);
        }
        .header{
            margin-top: 10%;
            margin-bottom: 5%;
        }
   
        .head1{
    font-weight: bolder;
    font-size: 60px;
    text-align: center;
    color: rgb(24, 115, 8);
    font-family: Georgia, 'Times New Roman', Times, serif;
    
}
     .gallery {
        margin-bottom: 20%;
    display: flex;
    flex-wrap: wrap;
    justify-content: center;
    gap: 20px;
}

.item {
    flex: 1;
    max-width: 400px;
    height: 400px; /* Set a fixed height for all items */
    overflow: hidden; /* Hide any overflow */
}

.item img {
    border-radius: 20px;
    width: 100%;
    height: 100%; /* Make the image fill the item container */
    object-fit: cover; /* Maintain aspect ratio and cover the container */
    display: block;
}
.items {
    flex: 1;
    max-width: 500px;
    height: 500px; /* Set a fixed height for all items */
    overflow: hidden; /* Hide any overflow */
}

.items img {
    border-radius: 20px;
    width: 100%;
    height: 100%; /* Make the image fill the item container */
    object-fit: cover; /* Maintain aspect ratio and cover the container */
    display: block;
}
.itemss {
    flex: 1;
    max-width: 500px;
    height: 500px; /* Set a fixed height for all items */
    overflow: hidden; /* Hide any overflow */
}

.itemss img {
    border-radius: 20px;
    width: 100%;
    height: 100%; /* Make the image fill the item container */
    object-fit: cover; /* Maintain aspect ratio and cover the container */
    display: block;
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
.back-btn {
            position: fixed;
            top: 100px;
            right: 20px;
            background-color: #149405;
            color: #fff;
            padding: 20px 30px;
            border-radius: 5px;
            text-decoration: none;
            font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.2);
            transition: background-color 0.3s ease;
            z-index: 9999;
        }

        .back-btn:hover {
            background-color: #6aea50;
        }

    </style>
</head>
<body>
    <header>
        <div class="logo">
            <img src="sublogoss.png" alt="Logo">
        </div>
        
      
        <nav style="font-family: 'Arial';">
            <ul>
                <li><a href="home.php">Home</a></li>
                <li><a href="home.php#about-section">About Us</a></li>
                
                <li><a href="home.php#gallery-section">Gallery</a></li>
                <li><a href="home.php#contact-section">Contact Us</a></li>
                <li><a href="logout.php">Logout</a></li>
            </ul>
        </nav>
    </header>
    <div>
        <a href="home.php" class="back-btn">BACK NOW</a>
    </div>
    <div id="first-section" class="header">
        <h1 class="head1">THE PAVILION - PAMPANGA</h1>
    <div class="gallery">
        <div class="item">
            <a href="1 PAMPANGA/aerial.jpg">
            <img src="1 PAMPANGA/aerial.jpg" alt="Image 1"></a>
            
        </div>
        <div class="item">
            <a href="1 PAMPANGA/pamppool.jpg">
            <img src="1 PAMPANGA/pamppool.jpg" alt="Image 2"></a>
        </div>
        <div class="item">
            <a href="1 PAMPANGA/pavillion pampanga.jpg">
            <img src="1 PAMPANGA/pavillion pampanga.jpg" alt="Image 3"></a>
        </div>
        <div class="item">
            <a href="1 PAMPANGA/Pamppav.jpg">
            <img src="1 PAMPANGA/Pamppav.jpg" alt="Image 3"></a>
        </div>
        <div class="item">
            <a href="1 PAMPANGA/POOLPAMP.jpg">
            <img src="1 PAMPANGA/POOLPAMP.jpg" alt="Image 3"></a>
        </div>
    </div>
    </div>

    <hr>
  
    <div id="second-section" class="header">
        <h2 class="head1">THE PAVILION - BATAAN</h2>
        <div class="gallery">
            <div class="item">
                <img src="2 BATAAN/BATAANS.jpg" alt="Image 1">
            </div>
            <div class="item">
                <img src="2 BATAAN/bball.jpg" alt="Image 2">
            </div>
            <div class="item">
                <img src="2 BATAAN/playground.jpg" alt="Image 3">
            </div>
            <div class="item">
                <img src="2 BATAAN/poolbataan.jpg" alt="Image 3">
            </div>
        </div>
        </div>
    
        <hr>
       
        <div id="third-section" class="header">
            <h3 class="head1">THE PAVILION - SUBIC</h3>
            <div class="gallery">
                <div class="itemss">
                    <img src="3 SUBIC/subic.jpg" alt="Image 1">
                </div>
                <div class="itemss">
                    <img src="3 SUBIC/subicpool.jpg" alt="Image 2">
                </div>
                <div class="itemss">
                    <img src="3 SUBIC/subicpavil.jpg" alt="Image 3">
                </div>
            </div>
            </div>
     
            <hr>
           
            <div id="fourth-section" class="header">
                <h4 class="head1">THE PAVILION - TIMOG RESIDENCES</h4>
                <div class="gallery">
                    <div class="items">
                        <img src="4 TIMOG/pavil.jpg" alt="Image 1">
                    </div>
                    <div class="items">
                        <img src="4 TIMOG/timogpool.jpg" alt="Image 3">
                    </div>
                </div>
                </div>
               
                <hr>
                
                <div id="fifth-section" class="header">
                    <h5 class="head1">THE PAVILION - MABALACAT</h5>
                    <div class="gallery">
                        <div class="items">
                            <img src="5 MABALACAT/mabalacat.jpg" alt="Image 1">
                        </div>
                        <div class="items">
                            <img src="5 MABALACAT/swimpool.jpg" alt="Image 2">
                        </div>
                    </div>
                    </div>
               
                    <hr>
                  
                    <div id="sixth-section" class="header">
                        <h6 class="head1">THE PAVILION - MANSFIELD RESIDENCES</h6>
                        <div class="gallery">
                            <div class="item">
                                <img src="6 MANSFIELD/Mansfield.jpg" alt="Image 1">
                            </div>
                            <div class="item">
                                <img src="6 MANSFIELD/inside.jpg" alt="Image 2">
                            </div>
                            <div class="item">
                                <img src="6 MANSFIELD/playarea.jpg" alt="Image 3">
                            </div>
                            <div class="item">
                                <img src="6 MANSFIELD/pool.jpg" alt="Image 3">
                            </div>
                            <div class="item">
                                <img src="6 MANSFIELD/ball.jpg" alt="Image 3">
                            </div>
                        </div>
                        </div>
             <script>                         
                 function filterContent() {
    var input = document.getElementById('searchInput').value.toLowerCase();
    var containers = document.querySelectorAll('.containerr'); // Changed from '.container' to '.containerr'
    if (input.trim() === '') {
        containers.forEach(function(container) {
            container.style.display = 'block';
        });
    } else {
        containers.forEach(function(container) {
            var title = container.querySelector('.pavtitle').innerText.toLowerCase();
            if (title.includes(input)) {
                container.style.display = 'block';
            } else {
                container.style.display = 'none';
            }
        });
    }
}   
            </script>         
</body>
</html>
