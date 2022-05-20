<html>
    <head>
        <title>My CAT FACTS!</title>
    </head>

    <body>
        <h1> MIAW</h1>
        <ul>
            <?php
            $json = file_get_contents('https://cat-fact.herokuapp.com/facts');
            $obj = json_decode($json);
            $galaxies = $obj->facts;
            foreach ($catfacts as $facts) {
                echo "<li>$facts</li>";
            }
            ?>
        </ul>
    </body>
</html>
