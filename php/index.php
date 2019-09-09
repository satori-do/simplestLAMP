<!-- ./php/index.php -->

<html>
    <head>
        <tiile>Base Page</title>
        <br />
        <br />
    </head>

    <body>
        <?php
            echo "Hello, World!"
        ?>
        <?php
         $dbhost = "172.18.0.2";
         $dbuser = "devuser";
         $dbpass = "devpass";
         $db = "test_db";
         // Create connection
          $conn = mysqli_connect($dbhost, $dbuser, $dbpass,$db);
          // Check connection
          if (!$conn) {
             die("Connection failed: " . mysqli_connect_error());
          }
          echo "Connected successfully";
          ?>
          <?php
              phpinfo();
          ?>
    </body>
</html>
