const pages = document.querySelectorAll('.page');
const breadcrumb = document.getElementById('breadcrumb');
let currentPageIndex = 0;

function showPage(index) {
  // Ensure index is within valid range
  if (index < 0 || index >= pages.length) {
    return;
  }

  // Hide all pages
  pages.forEach((page) => {
    page.style.display = 'none';
  });

  // Display the current page
  pages[index].style.display = 'block';

  // Update breadcrumb
  updateBreadcrumb(index);
}

function updateBreadcrumb(index) {
  breadcrumb.innerHTML = '';

  for (let i = 0; i <= index; i++) {
    const breadcrumbItem = document.createElement('span');
    breadcrumbItem.classList.add('breadcrumb-item');
    breadcrumbItem.textContent = `Step ${i + 1}`;
    breadcrumb.appendChild(breadcrumbItem);

    if (i < index) {
      breadcrumbItem.classList.add('completed');
    }
  }
}

function nextPage() {
  if (currentPageIndex < pages.length - 1) {
    currentPageIndex++;
    showPage(currentPageIndex);
  }
}

function previousPage() {
  if (currentPageIndex > 0) {
    currentPageIndex--;
    showPage(currentPageIndex);
  }
}

function uploadImage() {
  const uploadForm = document.getElementById("uploadForm");
  const imageInput = document.getElementById("imageInput");
  const uploadedImage = document.getElementById("uploadedImage");

  const formData = new FormData(uploadForm);

  fetch("upload.php", {
    method: "POST",
    body: formData,
  })
    .then((response) => response.text())
    .then((result) => {
      alert(result);
      uploadedImage.src = "uploads/" + imageInput.files[0].name;
    })
    .catch((error) => {
      console.error("Error:", error);
    });
}
document.addEventListener('DOMContentLoaded', function () {
  const form = document.getElementById('multiStepForm');
  const formSteps = document.querySelectorAll('.data_info');
  const btnNext = document.querySelector('.btn_next');
  const btnBack = document.querySelector('.btn_back');
  const btnSubmit = document.querySelector('.btn_submit');

  let currentStep = 0;

  btnNext.addEventListener('click', function () {
    formSteps[currentStep].style.display = 'none';
    formSteps[currentStep + 1].style.display = 'block';
    currentStep++;
    updateButtonsVisibility();
  });

  btnBack.addEventListener('click', function () {
    formSteps[currentStep].style.display = 'none';
    formSteps[currentStep - 1].style.display = 'block';
    currentStep--;
    updateButtonsVisibility();
  });

  function updateButtonsVisibility() {
    btnNext.style.display = currentStep < formSteps.length - 1 ? 'block' : 'none';
    btnBack.style.display = currentStep > 0 ? 'block' : 'none';
    btnSubmit.style.display = currentStep === formSteps.length - 1 ? 'block' : 'none';
  }

  form.addEventListener('submit', function (event) {
    event.preventDefault();
    // Add code to submit the form data via AJAX to the backend
    // and handle the response (e.g., show a success message).
    // You may use the FormData API to easily gather form data.
    // Example:
    // const formData = new FormData(form);
    // Use fetch or XMLHttpRequest to send formData to the server.
  });
});


// Initial setup
showPage(currentPageIndex);

// Attach event listeners to buttons
document.getElementById('nextButton').addEventListener('click', nextPage);
document.getElementById('backButton').addEventListener('click', previousPage);
document.addEventListener('DOMContentLoaded', function () {
  var map;

  function initMap() {
    map = new ol.Map({
      target: 'map',
      layers: [
        new ol.layer.Tile({
          source: new ol.source.OSM()
        })
      ],
      view: new ol.View({
        center: ol.proj.fromLonLat([0, 0]),
        zoom: 2
      })
    });

    map.on('click', function (event) {
      getAddressFromLatLng(event.coordinate);
    });
  }

  function openMap(latitude, longitude) {
    var defaultLocation = ol.proj.fromLonLat([longitude || 0, latitude || 0]);
    map.getView().setCenter(defaultLocation);
    map.getView().setZoom(15);
  }

  function getAddressFromLatLng(coordinate) {
    var lonLat = ol.proj.toLonLat(coordinate);
    var apiUrl = 'https://nominatim.openstreetmap.org/reverse?format=jsonv2&lat=' + lonLat[1] + '&lon=' + lonLat[0];

    fetch(apiUrl)
      .then(response => response.json())
      .then(data => {
        fillAddressFields(data.address);
      })
      .catch(error => {
        console.error('Error fetching address:', error);
      });
  }

  function fillAddressFields(address) {
    document.getElementById('addressLine1').value = address?.road || '';
    document.getElementById('addressLine2').value = address?.address29 || '';
    document.getElementById('city').value = address?.city || '';
    document.getElementById('state').value = address?.state || '';
    document.getElementById('postalCode').value = address?.postcode || '';
    document.getElementById('country').value = address?.country || '';
  }

  window.useCurrentLocation = function () {
    navigator.geolocation.getCurrentPosition(function (position) {
      var latitude = position.coords.latitude;
      var longitude = position.coords.longitude;
      openMap(latitude, longitude);
      getAddressFromLatLng([longitude, latitude]);
    }, function (error) {
      console.error('Error getting current location:', error.message);
    });
  };

  // Initialize the map once the document is fully loaded
  initMap();
});

function submitForm(event) {
  // Prevent the default form submission behavior
  event.preventDefault();

  // Simulate form submission
  // You can replace this with actual form submission logic
  // For example, using AJAX to send data to the server
  // Here, we hide the form and show the success message
  var addressForm = document.getElementById('addressForm');
  var successMessage = document.getElementById('successMessage');

  // Check if the form is valid before proceeding
  if (addressForm.checkValidity()) {
    addressForm.style.display = 'none';
    successMessage.style.display = 'block';
  } else {
    // If the form is not valid, trigger a submit to show validation messages
    addressForm.reportValidity();
  }
}
