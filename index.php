<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <meta name="description" content="This page includes content assisted by AI tools.">
</head>
<body>
    <header>
        <h1>Welcome to My PHP Homepage</h1>
    </header>

    <main>
        <?php

        echo "<h2> Hello, I'm Daniel</h2>";
        echo "<p>I'm learning PHP and web development at Dallas College. This is my first dynamic homepage using PHP variable, math, and specific formatting.</p>";

        $quote = "You've gotta dance like there's nobody watching, Love like you'll never be hurt, Sing like there's nobody listening, And live like it's heaven on earth";
        echo "<h3>Favorite Quote by William W. Purkey</h3>";
        echo "<blockquote>$quote</blockquote>";

        $company = "CodeStream Solutions";
        $address = "3930 Valley View Ln";
        $city = "Farmers Branch";
        $state = "TX";
        $zip = "75244";

        echo "<h3>Company Address</h3>";
        echo "<address>$company<br>$address<br>$city, $state $zip</address>";

        $x = 12;
        $y = 5;

        echo "<h3>Math Operations</h3>";
        echo "<p>$x + $y = " . ($x + $y) . "</p>";
        echo "<p>$x - $y = " . ($x - $y) . "</p>";
        echo "<p>$x * $y = " . ($x * $y) . "</p>";
        echo "<p>$x / $y = " . ($x / $y) . "</p>";
        echo "<p>$x % $y = " . ($x % $y) . "</p>";


        define("MY_NAME", "Daniel Tzul");
        echo "<h3>Constant Example</h3>";
        echo "<p>My name is defined as a constant: " . MY_NAME ."</p>";

        echo "<h3>Current Script</h3>";
        echo "<p>You are viewing: " . $_SERVER['PHP_SELF'] . "</p>";
        ?>
    </main>

    <footer>
        <p>&copy; 2025 Daniel Tzul. All rights reserved.</p>
    </footer>

</body>
</html>