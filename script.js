// Function to handle rating
function rate(stars) {
    // Your rating logic here
    console.log("Rated " + stars + " stars");
}

// Example: Change rating on click
document.addEventListener("DOMContentLoaded", function() {
    const stars = document.querySelectorAll(".stars");
    stars.forEach(function(star) {
        star.addEventListener("click", function() {
            const rating = this.getAttribute("data-rating");
            rate(rating);
        });
    });
});

// Function to filter content based on search input
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

function showFullImageContainer(imageSrc, text, direction) {
    // Show the full image container
    document.getElementById('fullImageContainer').style.display = 'flex';

    // Create an image element and append it to the full image container
    var img = document.createElement('img');
    img.src = imageSrc;
    img.alt = text;

    var fullImageContent = document.querySelector('.full-image-content');
    fullImageContent.innerHTML = ''; // Clear previous content
    fullImageContent.appendChild(img);

    // Set direction
    document.getElementById('fullImageContainer').setAttribute('data-direction', direction);
}

function hideFullImageContainer() {
    // Hide the full image container
    document.getElementById('fullImageContainer').style.display = 'none';
}
document.addEventListener('DOMContentLoaded', function() {
    const parts = document.querySelectorAll('.part');
    const images = document.querySelectorAll('.image');

    parts.forEach((part, index) => {
      part.addEventListener('click', () => {
        parts.forEach(p => p.classList.remove('active'));
        part.classList.add('active');
        moveImage(index);
      });
    });

    function moveImage(index) {
      images.forEach((image, i) => {
        if (i === index) {
          image.style.transform = 'translateY(-5px)'; // Move the image along with the active part
        } else {
          image.style.transform = 'translateY(0)'; // Reset position of other images
        }
      });
    }
  });
  function liftImage(pageUrl) {
        window.location.href = pageUrl;
    }

    var modal = document.getElementById("myModal");

    // Get the <span> element that closes the modal
    var span = document.getElementsByClassName("close")[0];

    // When the user submits the form, open the modal
    document.getElementById('contactForm').addEventListener('submit', function(event) {
        event.preventDefault();
        modal.style.display = "block";
    });

    // When the user clicks on <span> (x), close the modal
    span.onclick = function() {
        modal.style.display = "none";
    }

    // When the user clicks anywhere outside of the modal, close it
    window.onclick = function(event) {
        if (event.target == modal) {
            modal.style.display = "none";
        }
    }
