<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pampanga</title>
</head>
<style>
  
  body{
    background-image: url(timog.jpg);
    background-repeat: no-repeat;
    background-size: cover;
  }
 .map-container {
      position: relative;
      padding-bottom: 56.25%; /* Aspect ratio 16:9 */
      height: 0;
      overflow: hidden;
  }
  .map-container iframe {
      position: absolute;
      border-radius: 20px;
      top: 0;
      left: 15%;
      width: 70%;
      height: 70%;
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
    color: rgb(255, 255, 255);
    font-family: Georgia, 'Times New Roman', Times, serif;
    font-size: 44px;
    margin: 0;
  }

  .bydvwu {
    margin-left: 30px;
    font-size: 32px;
    margin-top: 5px;
    color: #1e4f0f;
    font-weight: bolder;
  }

  .msp {
    color: rgb(255, 255, 255);
    font-size: 50px;
    text-align: center;
  }

  .paragraph {
    color: rgb(255, 255, 255);
    font-family: Georgia, 'Times New Roman', Times, serif;
    margin-left: 30px;
    width: 60%;
    font-size: 22px;
  }
  .headers h1 {
color: rgb(255, 255, 255)  ;
font-family: Georgia, 'Times New Roman', Times, serif;
font-size: 44px;
text-align: center;
margin-top: -10%;
}
.containneer img{
  width: 400px;
  height: 400px;
}
.containneer{
  margin-left: 20%;
  max-width: 60%;
  display: flex;
justify-content: space-between;
align-items: flex-start;
flex-direction: row;
}
.header {
width: 95%;
}
</style>
<body>
  <div class="content">
    <div class="containers">
      <div class="header">
        <h1>The Pavilion of Timog Residences</h1>
        <p class="bydvwu">Book your dream venue with us</p>
        <p class="paragraph">Welcome to The Pavilion, an enchanting retreat nestled within the private confines of our esteemed subdivision, inspired by the timeless elegance of classical American architecture.

            As you step into our meticulously crafted sanctuary, you are transported to an era of grace and refinement, where every detail exudes the charm of yesteryears. The Pavilion stands as a testament to architectural splendor, with its grand columns, graceful arches, and intricate detailing reminiscent of a bygone era.  </p>
        <p class="paragraph">
            Embraced by the natural beauty of our surroundings, The Pavilion is a sanctuary of serenity, where the tranquil ambiance of nature harmonizes seamlessly with the classical elegance of its design. Surrounded by lush greenery and majestic mountains, it offers a haven of peace and tranquility for our esteemed guests.

            At the heart of our enclave lies a sprawling pool, reminiscent of the grandeur of old-world estates. Here, amidst the splendor of classical architecture, guests can unwind and rejuvenate, enveloped by the soothing waters and verdant landscapes that surround them.
            
             </p>
        <p class="paragraph">
            The Pavilion stands as a beacon of exclusivity, ensuring privacy and security for our discerning guests. Accessible only to those with invitations, it provides a sanctuary for intimate gatherings, corporate meetings, and celebratory occasions of all kinds.

            Whether you seek a venue for a sophisticated soirée or a tranquil retreat amidst the beauty of nature, The Pavilion offers an unparalleled experience that transcends time and tradition. Join us as we celebrate the timeless elegance of classical American architecture, surrounded by the natural wonders of our beloved community.  </p>
      </div>
    </div>
  </div>
  <section>
    <div class="map py-5">
      <div class="container">
        <h2 class="msp">Map</h2>
        <div class="row">
          <div class="col-lg-12">
            <!-- Updated iframe -->
            <div class="map-container">
              <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3851.287802504037!2d120.54700661535512!3d15.142530967624083!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3396f2c2a891be07%3A0x4dd37f706b057203!2sTimog%20Residences%20Subdivision%2C%20Brgy%2C%20Angeles%2C%202009%20Pampanga!5e0!3m2!1sen!2sph!4v1601622946114!5m2!1sen!2sph" width="100%" height="450" frameborder="0" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
          </div>
          <div class="headers">
            <h1>Vicinity-Map</h1></div>
            <div class="containneer">
            <p class="paragraph">
              Located in Brgy. Pampang, Angeles City, Timog Residences is a development that boasts of its prime location and proximity to establishments along Friendship Circumferential Highway, as well as Clark Freeport Zone. It is close to several points that serve as a major gateway outside Pampanga.

              Timog Residences is near:
              Clark Freeport Zone (7 minutes)
              Angeles City town proper (10 minutes)
              Subic–Clark–Tarlac Expressway (15 minutes)
              Schools, hospitals and restaurants along Friendship Circumferential Highway.</p>
                   <img src="4 TIMOG/vicinitymap.jpg" alt="Image 1">
            </div>
        </div>
      </div>
    </div>
  </section>
</body>
</html>
