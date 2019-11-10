<!-- ./php/index.php -->

<html>
    <head>
        <tiile>Base Page</title>
        <br />
        <br />
    </head>

    <body>
        <?php
            echo "Hello, World!<br><br>"
        ?>
        <?php
         $dbhost = "mariadb_web";
         $dbuser = "devuser";
         $dbpass = "devpass";
         $db = "test_db";
         // Create connection
          $link = mysqli_connect($dbhost, $dbuser, $dbpass,$db);
          // Check connection
          if (!$link) {
             die("Connection failed: " . mysqli_connect_error());
             exit();
          }
          $query = "SELECT * FROM Inventory";
          mysqli_query($link,$query);
          if ($result = mysqli_query($link, $query)) {
            /* extracting the associative array */
            while ($row = mysqli_fetch_assoc($result)) {
                printf ("%s) %s - [%s]<br>", $row["id"], $row["name"], $row["quantity"]);
            }
            /* delleting select */
            mysqli_free_result($result);
          }
          mysqli_close($link);
          echo "<br>Connected successfully";
          ?>
          <?php
              phpinfo();
          ?>
    </body>
</html>
