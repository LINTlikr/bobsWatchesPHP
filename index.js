
// Function to fetch and set the latest address
function setLatestAddress() {
    // Make a GET request to get_latest_record.php
    fetch('get_latest_record.php')
        .then(response => response.json())
        .then(data => {
            // Check if address is available in the response
            if (data.address) {
                // Update the address text field
                document.getElementById('address').value = data.address;
            } else {
                // If no address is available, you can handle it accordingly
                console.log('No address found');
            }
        })
        .catch(error => {
            console.error('Error fetching latest record:', error);
        });
}

window.onload = setLatestAddress;

function submitForm() {
    // Get form data
    var formData = new FormData(document.getElementById('myForm'));

    // Make a POST request using Fetch API
    fetch('save_record.php', {
            method: 'POST',
            body: formData
        })
        .then(response => response.json())
        .then(data => {
            alert('Address saved successfully!');
        })
        .catch(error => {
            console.error('Error submitting form:', error);
        });
}

// Set up Autocomplete functionality
function initMap() {
    const input = document.getElementById("address");
    const options = {
        fields: ["formatted_address", "geometry", "name"],
        strictBounds: false,
    };
    const autocomplete = new google.maps.places.Autocomplete(input, options);
}
window.initMap = initMap;