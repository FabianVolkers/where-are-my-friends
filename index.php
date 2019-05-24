<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    

    <!-- RequireJS stuff -->
    <script data-main="scripts/main" src="scripts/require.js"></script>

    <!-- Open Layers stuff -->
    <link rel="stylesheet" href="https://cdn.rawgit.com/openlayers/openlayers.github.io/master/en/v5.3.0/css/ol.css" type="text/css">
    <script src="https://cdn.rawgit.com/openlayers/openlayers.github.io/master/en/v5.3.0/build/ol.js"></script>
    
    <link rel="stylesheet" type="text/css" href="css/main.css">
    <script src="scripts/main.js"></script>
    
</head>

<body>
    <h1>Where is everyone?</h1>
    <table>
        <tr>
            <th>Name</th>
            <th>Current Location</th>
            <th>Next Location</th>
        </tr>
        <tr>
            <td>Chris</td>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <td>Zac</td>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <td>Lola</td>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <td>Fabi</td>
            <td></td>
            <td></td>
        </tr>

    </table>
    <div id="overview">
        <?php 
            include "overview.php";
            getDestinations("Zac");
            var_dump(getDestinations("Zac"));
            getDestinations("Chris");
            getDestinations("Lola");
            getDestinations("Fabi");
        ?>
    </div>
    <div id="map" class="map"></div>
</body>

</html>