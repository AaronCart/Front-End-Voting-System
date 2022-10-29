<!DOCTYPE html>
<html lang="en">

<head>
    <title>Electoral Role Search</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="styling.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</head>

<body>
    <div class="container-fluid back">
        <div class="card inner border rounded">
            <h2 class="ms-3 mt-3">Electoral Role Search</h2>
            <form class="px-4 mb-4" oninput="validate()" action="vote.php" method="POST">
                <div class="mb-3 mt-3">
                    <label for="fullName" class="text-black">Full Name:</label>
                    <input type="text" class="form-control" id="fullName" placeholder="Enter your full name..." name="fullName">
                </div>
                <div class="mb-3">
                    <label for="address_line_1" class="text-black">Address:</label>
                    <input type="search" class="form-control address-field" id="address_line_1" placeholder="Search address here..." name="address_line_1">
                </div>
                <div class="mb-3">
                    <label for="suite" class="text-black">Apartment Suite, etc (optional):</label>
                    <input type="text" class="form-control" id="suite" placeholder="Enter apartment suite here..." name="suite">
                </div>
                <div class="mb-3">
                    <label for="suburb" class="text-black">Suburb:</label>
                    <input type="text" class="form-control address-field" id="suburb" placeholder="Search location here..." name="suburb">
                </div>
                <div class="mb-3">
                    <label for="state" class="text-black">State:</label>
                    <input type="text" class="form-control address-field" id="state" placeholder="Search state here..." name="state">
                </div>
                <div class="mb-3">
                    <label for="postcode" class="text-black">Postcode:</label>
                    <input type="text" class="form-control address-field" id="postcode" placeholder="Search postcode here..." name="postcode">
                </div>
                <div>
                    <label for="votedBefore" class="text-black">Have you voted before in this election? (Tick if already
                        voted):</label><br />
                    <input type="checkbox" id="votedBefore" name="votedBefore" value="Yes">
                </div>
                <button id="submit" type="submit" class="btn btn-warning ms-2 py-2 float-end border border-dark rounded">NEXT</button>
            </form>
        </div>
    </div>

    <script type="text/javascript">
        (function() {
            var widget, initAddressFinder = function() {
                widget = new AddressFinder.Widget(
                    document.getElementById('address_line_1'),
                    'MC8TP9REYHFBA74JWN3V',
                    'AU', {
                        "address_params": {
                            "gnaf": "1"
                        }
                    }
                );

                widget.on('address:select', function(fullAddress, metaData) {
                    var combinedAddressLine1And2;

                    if (metaData.address_line_2) {
                        combinedAddressLine1And2 = metaData.address_line_1 + ', ' + metaData.address_line_2
                    } else {
                        combinedAddressLine1And2 = metaData.address_line_1
                    }
                    // TODO - You will need to update these ids to match those in your form
                    document.getElementById('address_line_1').value = combinedAddressLine1And2;
                    document.getElementById('suburb').value = metaData.locality_name;
                    document.getElementById('state').value = metaData.state_territory;
                    document.getElementById('postcode').value = metaData.postcode;

                });
            };

            function downloadAddressFinder() {
                var script = document.createElement('script');
                script.src = 'https://api.addressfinder.io/assets/v3/widget.js';
                script.async = true;
                script.onload = initAddressFinder;
                document.body.appendChild(script);
            };

            document.addEventListener('DOMContentLoaded', downloadAddressFinder);
        })();
    </script>
</body>

</html>