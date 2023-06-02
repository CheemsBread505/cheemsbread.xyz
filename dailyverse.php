<!DOCTYPE html>
<html lang="en">
<head>
    <meta content="Cheems Bread's corner of the internet" property="og:title" />
    <meta content="Daily Bible Verse" property="og:description" />
    <meta content="https://www.cheemsbread.xyz/dailyverse.php" property="og:url" />
    <meta content="https://www.cheemsbread.xyz/images/CheemsOG.png" property="og:image" />
    <meta name="twitter:card" content="summary_large_image">
    <meta content="#deb137" data-react-helmet="true" name="theme-color" />

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Cheems Bread's Corner</title>
    <link rel="icon" type="image/x-icon" href="/images/CheemsOG.png">
    <script src="scripts.js"></script> 
</head>
<body>
<a href="/">&lt; Back</a>

    <h2>Daily Verse</h2> <br>

    <div class="container">
        <a id="link" href="#" onclick="toggleText();">Click for Info</a>
        <div id="hiddenText" class="hidden-text">
            <b>
                This page uses the biblegateway.com API to get biblegateway's 
                daily verse and then displays it on the webpage.
            </b>
            <br> <br>
        </div>
    </div>

<?php
    // API endpoint URL
    $url = 'https://www.biblegateway.com/votd/get/?format=json';

    // Fetch the JSON response
    $response = file_get_contents($url);

    // Check if the response was successful
    if ($response !== false) {
        // Decode the JSON response
        $data = json_decode($response, true);

        // Extract the verse and verse number
        $verse = $data['votd']['text'];
        $verseNumber = $data['votd']['display_ref'];

        // Display the verse and verse number
        //echo "Daily Verse: " . $verse . "\n";
        //echo "Verse Number: " . $verseNumber . "\n";
        echo "<br> <br>";
        echo "<div class='verse'>";
        echo "<b>$verseNumber:</b> <br> <br>";
        echo "<b>$verse</b>";
        echo "</div>";
    } else {
        echo "Failed to retrieve the daily verse.";
    }
?>

<style>
    b{
        background-color: transparent;
        text-decoration: none;`
    }

    .verse{
        color: gold !important;
        font-family: 'Space Mono', monospace;
        text-align: center;
    }
    
</style>

</body>
</html>