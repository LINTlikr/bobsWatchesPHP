<!DOCTYPE html>
<html lang="en">

<style>
    body {
        height: 100vh;
        background-size: cover;
        display: flex;
    }
</style>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

<!-- Google Maps Autocomplete API -->
<script
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDijSVeCbRPmM7YWiHV2l2NP50aue6ipHM&callback=initMap&libraries=places&v=weekly&solution_channel=GMP_CCS_autocomplete_v1"
    defer
></script>

<script src="index.js"></script>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Address</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="bg-dark bg-gradient">
    <div class="container mt-5">
        <h1 class="mb-4 text-white">Address Autocomplete</h1>
        <!-- Form -->
        <form id="myForm" method="post" onsubmit="event.preventDefault(); submitForm();" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
            <div class="mb-3">
                <div class="input-group">
                <span class="input-group-text" id="basic-addon1">
                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pin-map" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M3.1 11.2a.5.5 0 0 1 .4-.2H6a.5.5 0 0 1 0 1H3.75L1.5 15h13l-2.25-3H10a.5.5 0 0 1 0-1h2.5a.5.5 0 0 1 .4.2l3 4a.5.5 0 0 1-.4.8H.5a.5.5 0 0 1-.4-.8z"></path>
                    <path fill-rule="evenodd" d="M8 1a3 3 0 1 0 0 6 3 3 0 0 0 0-6M4 4a4 4 0 1 1 4.5 3.969V13.5a.5.5 0 0 1-1 0V7.97A4 4 0 0 1 4 3.999z"></path>
                  </svg>
                </span>
                <input type="text" id="address" name="address" class="form-control" placeholder="Enter a location" aria-label="Input group example" aria-describedby="basic-addon1" required/>
              </div>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</body>
</html>
