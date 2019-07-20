<html>
<style>
HTML{background-color:lightcoral; font-family:Arial; color:#006600; font-size:18px}
h1{font-style:bold; text-align: center}
</style>
<head>
<title>Apple Database</title>
<h1>Apple Database</h1>
</head>
<body>
<?php
    function getDB() {
        $db_host="localhost";
        $db_user="root";
        $db_name="apples";
        $conn = new mysqli($dbhost, $dbuser, "", $dbname);
        if ($conn->connect_error) {
            echo "<div class='container text-center'>";
            die("Connection failed: " . $conn->connect_error . "\n");
            echo "</div>";
        }
        return $conn;
    }
    $connection = getDB();
    $applename = $_POST["applename"];
    $filename = $_POST["fileupload"];
    $sql = "INSERT INTO APPLEIMAGES (NAME, IMAGE) VALUES ($applename, LOAD_FILE($filename));";
    
    if(!$result = $connection->query($sql)){
        echo "Successfully logged! <br><br>";
        echo "This is a(n) $applename apple! <br>";
        echo "<img src = $filename>";
    }
    else
    {
        echo "Sorry, couldn't be added";
    }
?>
</body>
</html>
