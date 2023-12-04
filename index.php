<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nakshatryan Map</title>
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
        integrity="sha512-Kt4f5qVi77rZI3stUQIeCHYYNWi5AuC5uy3szrDh48vSSB7G5cc+Nmfm0K9FpNVzZc5JhFb2AqRs/8tI1nMjeg=="
        crossorigin="anonymous" />
    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
        }

        #header {
            background-color: #ADEDE6;
            justify-content: space-between;
            padding: 10px;
            display: flex;
            color: #006D76;
        }
        #footer {
            background-color: #FFDDD3;
            justify-content: space-between;
            padding: 10px;
            display: flex;
            color: #006D76;
            box-shadow: 0 -2px 4px rgba(0, 0, 0, 0.1);
            position: fixed;
            bottom: 0;
            width: 100%;
            z-index: 1;
        }

        #header a, #footer a {
            text-decoration: none;
            color: #006D76;
            border-radius: 5px;
            transition: background-color 0.3s ease-in-out;
        }

        #header a:hover, #footer a:hover {
            transform: scale(1.1);
        }

        #map {
            width: 100%;
            height: calc(100vh - 137px);
        }
    </style>
</head>
<body>
    <div id="header">
        <div style="margin-top: 3px;">
            <a onclick="">
                <i class="fa-solid fa-bars"></i>
            </a>
        </div>

        <div style="margin-top: 3px;">
            <a onclick="">
                <i class="fa-solid fa-eye"></i>
            </a>

            <a onclick="">
                Nakshatryan
            </a>
        </div>

        <div style="margin-top: 3px;">
            <a href="">
                <i class="fa-solid fa-right-from-bracket"></i>
            </a>
        </div>
    </div>

    <div id="map"></div>

    <div id="footer">
        <div style="margin-top: 3px;margin-left: 30px;">
            <a onclick="">
                <i class="fa-solid fa-house"></i>
            </a>
        </div>

        <div style="margin-top: 3px;">
            <a onclick="">
                <i class="fa-solid fa-qrcode"></i>
            </a>
        </div>

        <div style="margin-top: 3px;">
            <a onclick="">
                <i class="fa-solid fa-user"></i>
            </a>
        </div>

        <div style="margin-top: 3px;margin-right: 30px;">
            <a href="">
                <i class="fa-solid fa-gear"></i>
            </a>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
    <script src="https://unpkg.com/leaflet/dist/leaflet.js"></script>
    <script src="https://kit.fontawesome.com/4a7d9220ab.js" crossorigin="anonymous"></script>

    <script>
        var laptopBreakpoint = 768;

        var mapElement = document.getElementById('map');

        function setMapHeight() {
            var isLaptop = window.innerWidth >= laptopBreakpoint;
            if (isLaptop) {
                mapElement.style.height = 'calc(100vh - 84px)';
            } else {
                mapElement.style.height = 'calc(100vh - 137px)';
            }
        }

        setMapHeight();

        window.addEventListener('resize', setMapHeight);


        var map = L.map('map').setView([40.7128, -74.0060], 15);

        var streetMapLayer = L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
            attribution: '&copy; OpenStreetMap contributors'
        }).addTo(map);

        var satelliteLayer = L.tileLayer('https://server.arcgisonline.com/ArcGIS/rest/services/World_Imagery/MapServer/tile/{z}/{y}/{x}', {
            attribution: '&copy; Esri'
        });
        var terrainLayer = L.tileLayer('https://{s}.tile.opentopomap.org/{z}/{x}/{y}.png', {
            attribution: 'Map data: © OpenTopoMap contributors'
        });

        var baseLayers = {
            "Street Map": streetMapLayer,
            "Satellite": satelliteLayer,
            "Terrain": terrainLayer
        };

        L.control.layers(baseLayers).addTo(map);

        navigator.geolocation.getCurrentPosition(function (position) {
            var latitude = position.coords.latitude;
            var longitude = position.coords.longitude;

            map.setView([latitude, longitude], 15);

            L.marker([latitude, longitude]).addTo(map);
        }, function (error) {
            console.error('Error getting user location:', error.message);
        });
    </script>
</body>
</html>
