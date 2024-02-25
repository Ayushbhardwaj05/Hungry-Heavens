<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/ol@v8.2.0/ol.css">
  <style>
    body, html {
      margin: 0;
      padding: 0;
      height: 100%;
    }

    #map {
      width: 100%;
      height: 80vh; /* Reduce height to make room for buttons */
    }

    #buttons {
      display: flex;
      justify-content: space-around;
      align-items: center;
      height: 20vh;
    }
  </style>
  <title>Restaurants Map</title>
</head>
<body>
  <div id="map"></div>
  <div id="buttons">
    <button onclick="showCurrentLocation()">Current Location</button>
    <button onclick="showKingStreetLocation()">King Street, Cambridge</button>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/ol@v8.2.0/dist/ol.js"></script>
  <script>
    document.addEventListener('DOMContentLoaded', function () {
      const map = new ol.Map({
        target: 'map',
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
          address: restaurant.address || '', // Assuming the restaurant object has an 'address' property
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
          const response = await fetch('restaurants.json');
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
        const kingStreetLocation = ol.proj.fromLonLat([0.1319, 52.2218]); // King Street, Cambridge
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
              width: 3, // Increased width of the line
            }),
          }),
        });
        map.addLayer(lineFeature);

        // Show an alert with the restaurant name
        alert('Food will be delivered from: ' + nearestRestaurant.get('name'));
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
