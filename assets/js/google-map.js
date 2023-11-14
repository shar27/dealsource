// Google Maps JavaScript file

function initMap() {
    // Create a map centered at a specific latitude and longitude
    var map = new google.maps.Map(document.getElementById('map'), {
        center: { lat: 51.52502006962166, lng: -0.14067101527136147 }, // Set your desired center coordinates
        zoom: 7, // Set the initial zoom level
    });

    // Create a marker on the map
    var marker = new google.maps.Marker({
        position: { lat: 51.52502006962166, lng: -0.14067101527136147 }, // Set marker coordinates
        map: map, // Attach the marker to the map
        title: 'Marker Title' // Set a title for the marker (optional)
    });
}

// Load the Google Maps API with your API key
function loadGoogleMaps() {
    var script = document.createElement('script');
    script.src = "https://maps.googleapis.com/maps/api/js?key=AIzaSyBfw_PRz0mCBDSwGfTf4SN8boeJrJSyv-U}&callback=initMap";
    script.defer = true;
    script.async = true;
    document.head.appendChild(script);
}

// Call the function to load the Google Maps API
loadGoogleMaps();