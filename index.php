<!DOCTYPE html>
<html>

<head>
  <title>Hungry Heaven | Home</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <link rel="stylesheet" href="css/st.css">
  <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/ol@v8.2.0/ol.css">
</head>

<body>
  <header>
    <img src="logo.png" alt="logo" id="logo" class="logo">
    <nav>
      <a href="#" class="nav-links">Home</a>
      <a href="#moto" class="nav-links">Our Moto</a>
      <a href="donation.php" class="nav-links">Charity Donation</a>
      <a href="#contact" class="nav-links">Contact</a>
    </nav>
    <button><a href="DonateFood.php">Donate Food</a></button>
    <button><a href="login.php">Login</a></button>
  </header>
  <main>

    <div id="hero">
      <h1>Hungry Heaven</h1>
      <p>We don't let anyone Sleep Hungry</p>
      <button><a href="#order">Order Food</a></button>

    </div>
    <hr>
    <section id="moto">
      <div class="mission-container container">
        <h2>Our Mission</h2>
        <p>
          At Hungry Heaven, we believe that every person deserves a warm, nourishing meal. In a world
          abundant with resources, we strive to bridge the gap between surplus and scarcity. Our mission is simple
          yet profound: to provide food for those who need it the most.
        </p>
      </div>
      <hr>
      <div class="how-it-works-container container">
        <h2>How It Works</h2>
        <p>
          At Hungry Heaven, we've established a seamless platform where you can contribute to the cause of
          eradicating hunger. Through our website, you can make a difference by sponsoring meals for those facing
          food insecurity. Whether it's a one-time donation or a recurring contribution, each act of kindness
          contributes to a collective impact.
        </p>
      </div>
      <hr>
      <div class="impact-container container">
        <h2>The Impact</h2>
        <p>
          The impact of a nourishing meal extends far beyond a satisfied stomach. It empowers individuals, offering
          them hope, dignity, and the strength to face life's challenges. Through your support, we aspire to create
          a ripple effect of positive change, uplifting communities and fostering a brighter future for all.
        </p>
      </div>
      <hr>
      <div class="why-choose-container container">
        <h2>Why Choose Hungry Heaven?</h2>
        <ul>
          <li>
            <strong>Transparency:</strong> We are committed to transparency in all our operations. Your
            donations directly fund meal programs, and we provide regular updates on the impact your contribution
            has made.
          </li>
          <li>
            <strong>Efficiency:</strong> With a dedicated team and strategic partnerships, we ensure that your
            support goes a long way. We strive to maximize the number of meals provided with every donation.
          </li>
          <li>
            <strong>Community Engagement:</strong> Hungry Heaven is more than just a platform for giving;
            it's a community united by the belief that together, we can make a significant difference in the
            lives of those in need.
          </li>
        </ul>
      </div>
      <hr>
      <div class="donate-container container">
        <h2>Join Us in the Fight Against Hunger</h2>
        <p>Your involvement can be the turning point in someone's life. Join us in the fight against hunger.
          Together, we can be a beacon of hope, ensuring that no one goes to bed hungry.</p>
        <button><a href="donation.php">Donate Now and Be the Change!</a></button>
      </div>
      <div id="faq" class="container">
        <h1>Frequently Asked Questions</h1>
        <div class="accordion" id="accordionExample">

          <div class="accordion-item">
            <h2 class="accordion-header">
              <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne"
                aria-expanded="true" aria-controls="collapseOne">
                How can I donate?
              </button>
            </h2>
            <div id="collapseOne" class="accordion-collapse collapse show" data-bs-parent="#accordionExample">
              <div class="accordion-body">
                You can donate by visiting our website and clicking on the "Donate Now" button. Choose your contribution
                amount and follow the simple steps to make a difference.
              </div>
            </div>
          </div>
          <div class="accordion-item">
            <h2 class="accordion-header">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                Where does my donation go?
              </button>
            </h2>
            <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
              <div class="accordion-body">
                <strong>Your donation directly funds meal programs.</strong> We ensure transparency in our operations
                and provide regular updates on the impact your contribution has made.
              </div>
            </div>
          </div>
          <div class="accordion-item">
            <h2 class="accordion-header">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                Can I make a recurring donation?
              </button>
            </h2>
            <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
              <div class="accordion-body">
                Yes, you can choose to make a recurring donation to support our ongoing efforts in the fight against
                hunger.
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section id="order" class="container">
      <h1>Order Food</h1>
      <div class="wrapper">
        <div class="header">
          <ul>
            <li class="active form_1_progessbar">
              <div>
                <p>1</p>
              </div>
            </li>
            <li class="form_2_progessbar">
              <div>
                <p>2</p>
              </div>
            </li>
            <li class="form_3_progessbar">
              <div>
                <p>3</p>
              </div>
            </li>
          </ul>
        </div>
        <div class="form_wrap">
          <div class="form_1 data_info">
            <h1>Step 1: Image Upload</h1>
            <form id="uploadForm" action="upload.php" method="post" enctype="multipart/form-data">
              <input type="file" name="image" id="imageInput" accept="image/*" required>
              <button type="button" onclick="uploadImage()">Upload Image</button>
            </form>
            <div id="imageContainer">
              <h2>Uploaded Image:</h2>
              <img id="uploadedImage" src="uploads/default.jpg" alt="Uploaded Image">
            </div>
          </div>
          <div class="form_2 data_info" style="display: none;">
            <h2>Add Address</h2>

            <form id="addressForm" onsubmit="submitForm(event)">
              <label for="addressLine1">Address Line 1:</label>
              <input type="text" id="addressLine1" required>

              <label for="addressLine2">Address Line 2:</label>
              <input type="text" id="addressLine2">

              <label for="city">City:</label>
              <input type="text" id="city" required>

              <label for="state">State:</label>
              <input type="text" id="state" required>

              <label for="postalCode">Postal Code:</label>
              <input type="text" id="postalCode" required>

              <label for="country">Country:</label>
              <input type="text" id="country" required>

              <button type="button" onclick="openMap()">Select Location</button>
              <button type="button" onclick="useCurrentLocation()">Use Current Location</button>

              <div id="map"></div>
              <input type="submit" value="submit" id="submit">
              <div id="successMessage" style="visibility: hidden;">
                <p>Address submitted successfully!</p>
              </div>
            </form>
          </div>
          <div class="form_3 data_info" id="step3" style="display: none;">
          <h2>Step 3: Confirm Order</h2>
    <div id="restaurantInfo">
        <!-- Restaurant information will be dynamically inserted here -->
    </div>
    <div id="couponCode">
        <!-- Coupon code will be dynamically inserted here -->
    </div>
            <div id="buttons">
              <button onclick="showCurrentLocation()">Current Location</button>
            </div>
          </div>
        </div>
        <div class="btns_wrap">
          <div class="common_btns form_1_btns">
            <button type="button" class="btn_next">Next <span class="icon"><ion-icon
                  name="arrow-forward-sharp"></ion-icon></span></button>
          </div>
          <div class="common_btns form_2_btns" style="display: none;">
            <button type="button" class="btn_back"><span class="icon"><ion-icon
                  name="arrow-back-sharp"></ion-icon></span>Back</button>
            <button type="button" class="btn_next">Next <span class="icon"><ion-icon
                  name="arrow-forward-sharp"></ion-icon></span></button>
          </div>
          <div class="common_btns form_3_btns" style="display: none;">
            <button type="button" class="btn_back"><span class="icon"><ion-icon
                  name="arrow-back-sharp"></ion-icon></span>Back</button>
            <button type="button" class="btn_done">Done</button>
          </div>
        </div>
      </div>

      <div class="modal_wrapper">
        <div class="shadow"></div>
        <div class="success_wrap">
          <span class="modal_icon"><ion-icon name="checkmark-sharp"></ion-icon></span>
          <p>You have successfully completed the process.</p>
        </div>
      </div>
    </section>
    <section id="contact">
      <div class="container">
        <h2>Contact Us</h2>

        <div class="contact-info">
          <div class="contact-item">
            <ion-icon name="mail-outline"></ion-icon>
            <p>Email: info@hungryheaven.org</p>
          </div>

          <div class="contact-item">
            <ion-icon name="call-outline"></ion-icon>
            <p>Phone: +91-7988074125</p>
          </div>
        </div>

        <div class="contact-form">
          <h3>Send us a Message</h3>
          <form id="contactForm" action="#" method="post">
            <label for="name">Your Name:</label>
            <input type="text" id="name" name="name" required>

            <label for="email">Your Email:</label>
            <input type="email" id="email" name="email" required>

            <label for="message">Your Message:</label>
            <textarea id="message" name="message" rows="4" required></textarea>

            <button type="submit">Send Message</button>
          </form>
        </div>
      </div>
    </section>
  </main>
  <hr>
  <footer>
    <div class="container1">
      <div class="footer-section">
        <h3>Quick Links</h3>
        <ul>
          <li><a href="#">Home</a></li>
          <li><a href="#moto">Our Moto</a></li>
          <li><a href="donation.php">Charity Donation</a></li>
          <li><a href="#contact">Contact</a></li>
        </ul>
      </div>

      <div class="footer-section">
        <h3>Connect with Us</h3>
        <div class="social-icons">
          <a href="#" target="_blank" title="Facebook"><ion-icon name="logo-facebook"></ion-icon></a>
          <a href="#" target="_blank" title="Twitter"><ion-icon name="logo-twitter"></ion-icon></a>
          <a href="#" target="_blank" title="Instagram"><ion-icon name="logo-instagram"></ion-icon></a>
        </div>
      </div>

      <div class="footer-section">
        <h3>Contact Us</h3>
        <p>Email: info@hungryheaven.org</p>
        <p>Phone: +91-7988074125</p>
      </div>
    </div>
  </footer>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  <script type="text/javascript" src="script.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/ol@v8.2.0/dist/ol.js"></script>
  <script>
     document.addEventListener('DOMContentLoaded', function () {
  const map = new ol.Map({
    target: 'map1',  // Update the target to 'map1'
    layers: [
      new ol.layer.Tile({
        source: new ol.source.OSM(),
      }),
    ],
    view: new ol.View({
      center: ol.proj.fromLonLat([0, 0]),
      zoom: 2,
    }),
  });

  let currentLocationPin;
  let kingStreetPin;
  let lineFeature;

  function addRestaurantMarker(restaurant) {
    const marker = new ol.Feature({
      geometry: new ol.geom.Point(ol.proj.fromLonLat([restaurant.location.lon, restaurant.location.lat])),
      name: restaurant.name,
      address: restaurant.address || '',
    });

    const iconStyle = new ol.style.Style({
      image: new ol.style.Icon({
        anchor: [0.5, 1],
        src: 'https://openlayers.org/en/latest/examples/data/icon.png',
      }),
    });

    marker.setStyle(iconStyle);

    return marker;
  }

  function showRestaurantsOnMap(restaurants) {
    const restaurantLayer = new ol.layer.Vector({
      source: new ol.source.Vector({
        features: restaurants.map(addRestaurantMarker),
      }),
    });

    map.addLayer(restaurantLayer);
  }

  // Function to fetch restaurant data from JSON file
  async function fetchRestaurantData() {
    try {
      const response = await fetch('restaurant.json');
      const data = await response.json();
      return data;
    } catch (error) {
      console.error('Error fetching restaurant data:', error);
      return [];
    }
  }

  // Show restaurants on the map after fetching data
  fetchRestaurantData().then(showRestaurantsOnMap);

  // Functions to handle button clicks
  window.showCurrentLocation = function () {
    navigator.geolocation.getCurrentPosition(function (position) {
      const currentLocation = ol.proj.fromLonLat([position.coords.longitude, position.coords.latitude]);
      if (currentLocationPin) {
        map.removeLayer(currentLocationPin);
      }
      currentLocationPin = new ol.layer.Vector({
        source: new ol.source.Vector({
          features: [new ol.Feature({
            geometry: new ol.geom.Point(currentLocation),
            name: 'Current Location',
          })],
        }),
      });
      map.addLayer(currentLocationPin);
      map.getView().animate({ center: currentLocation, zoom: 15 });
      drawLineToNearestRestaurant(currentLocation);
    });
  };

  window.showKingStreetLocation = function () {
    const kingStreetLocation = ol.proj.fromLonLat([0.1319, 52.2218]);
    if (kingStreetPin) {
      map.removeLayer(kingStreetPin);
    }
    kingStreetPin = new ol.layer.Vector({
      source: new ol.source.Vector({
        features: [new ol.Feature({
          geometry: new ol.geom.Point(kingStreetLocation),
          name: 'King Street, Cambridge',
        })],
      }),
    });
    map.addLayer(kingStreetPin);
    map.getView().animate({ center: kingStreetLocation, zoom: 15 });
    drawLineToNearestRestaurant(kingStreetLocation);
  };

  function drawLineToNearestRestaurant(sourceLocation) {
    const restaurants = map.getLayers().item(1).getSource().getFeatures();
    const nearestRestaurant = findNearestRestaurant(sourceLocation, restaurants);
    const restaurantName = nearestRestaurant.get('name');
    const couponCode = generateCouponCode(); // Generate a unique coupon code
    const destinationLocation = nearestRestaurant.getGeometry().getCoordinates();
    if (lineFeature) {
      map.removeLayer(lineFeature);
    }
    lineFeature = new ol.layer.Vector({
      source: new ol.source.Vector({
        features: [new ol.Feature({
          geometry: new ol.geom.LineString([sourceLocation, destinationLocation]),
        })],
      }),
      style: new ol.style.Style({
        stroke: new ol.style.Stroke({
          color: 'red',
          width: 3,
        }),
      }),
    });
    map.addLayer(lineFeature);
    const restaurantInfo = document.getElementById('restaurantInfo');
    restaurantInfo.innerHTML = `<p>Your food will be delivered from : ${restaurantName}</p>`;
    const couponCodeElement = document.getElementById('couponCode');
    couponCodeElement.innerHTML = `<p>Coupon Code: ${couponCode}</p>`;
  }
  function generateCouponCode() {
    // Generate a random alphanumeric string of length 6
    const characters = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789';
    let couponCode = '';
    for (let i = 0; i < 6; i++) {
        couponCode += characters.charAt(Math.floor(Math.random() * characters.length));
    }
    return couponCode;
}
  function findNearestRestaurant(sourceLocation, restaurants) {
    let nearestDistance = Infinity;
    let nearestRestaurant = null;

    restaurants.forEach(function (restaurant) {
      const destinationLocation = restaurant.getGeometry().getCoordinates();
      const distance = ol.sphere.getDistance(sourceLocation, destinationLocation);
      if (distance < nearestDistance) {
        nearestDistance = distance;
        nearestRestaurant = restaurant;
      }
    });

    return nearestRestaurant;
  }
  
});
  </script>
</body>

</html>