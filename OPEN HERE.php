<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>The Hausland Reservation system</title>
<style>
  body {
    margin: 0;
    padding: 0;
    font-family: Arial, sans-serif;
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
    background-color: #296714;
  }

  #loading-container {
    display: flex;
    flex-direction: column;
    align-items: center;
  }

  #loading-spinner {
    margin-top: 40%;
    margin-right:-10%;
    border: 15px solid #ffffff;
    border-top: 15px solid #3cbd35;
    border-radius: 50%;
    width: 50px;
    height: 50px;
    animation: spin 1s linear infinite;
  }

  @keyframes spin {
    0% { transform: rotate(0deg); }
    100% { transform: rotate(360deg); }
  }

  .hidden {
    display: none;
  }

  .center {
    text-align: center;
  }

  .center img {
    width: 300px; /* Adjust as needed */
    height: auto;
    border-radius: 10px;
    margin-bottom: 20px;
  }

  #start-button {
  text-decoration: none;
  margin-top: 20px; /* Adjust margin as needed */
  padding: 10px 20px;
  background-color: #3cbd35;
  color: #ffffff;
  border: none;
  border-radius: 5px;
  cursor: pointer;
  font-size: 16px;
  font-weight: 700;
  transition: box-shadow 0.3s ease; /* Added transition property */
}

#start-button:hover {
  box-shadow: 0px 0px 10px 0px rgba(135, 246, 125, 0.75); /* Adds a shadow to lift the button */
}


</style>
</head>
<body>
<div id="loading-container">
  <div id="loading-spinner"></div>
  <div class="center">
    <img src="sublogoss.png" alt="Logo">
    <div id="loading-text"></div>
  </div>

  <div id="content" class="hidden">
    <div class="center">
      <a href="index.html" button id="start-button" class="hidden">ENTER</button>
    </div>
  </div>
</div>

<script>
  document.addEventListener("DOMContentLoaded", function(event) {
    // Show loading screen
    document.getElementById("loading-container").classList.remove("hidden");

    // Hide spinner after 4 seconds
    setTimeout(function() {
      document.getElementById("loading-spinner").classList.add("hidden");
      document.getElementById("loading-text").classList.add("hidden");
      document.getElementById("content").classList.remove("hidden");
      document.getElementById("start-button").classList.remove("hidden");
    }, 4000);
  });

  // Show loading screen again after page reload
  window.addEventListener("beforeunload", function(event) {
    // Show loading screen
    document.getElementById("loading-container").classList.remove("hidden");
  });
</script>
</body>
</html>
