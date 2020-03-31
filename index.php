<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Test</title>
    <link rel="stylesheet" href="style1.css">
        <!-- Link to CesiumJS Library -->
    <script src="https://cesium.com/downloads/cesiumjs/releases/1.66/Build/Cesium/Cesium.js"></script>
    <link href="https://cesium.com/downloads/cesiumjs/releases/1.66/Build/Cesium/Widgets/widgets.css" rel="stylesheet">
    <script src="pop.js"></script>
</head>

<body>
    <?php include 'style/nav.php'?>

    <div class="main-content">
        <div class="page-container">
            <div class="row">

                <div class="pill-nav">
                    <a class="active" href="#mynavbar">Welcome</a>
                    <a href="#section-1">News</a>
                    <a href="#footer">Contact</a>
                    <a href="#about">About</a>
                </div><br>

            </div>
            <div class="row" id="welcome">
                <div class="image-container">
                    <div class="text">GLOBAL WARMING</div>
                </div>
            </div>
            <div class="row" style="text-align: center;">
                <p>
                    Below is the world population from 1990.
                </p>
            </div>
            <div class="row">
                    <div id="cesiumContainer"></div>
                    <div id="loadingOverlay">
                        <h1>Loading...</h1>
                    </div>
                    <div id="toolbar"></div>
                    <script>
                        pop();
                    </script>
            </div>


            <?php include 'footer.php'?>
</body>

</html>