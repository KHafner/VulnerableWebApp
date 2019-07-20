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
    $applename = $_POST["name"];
    $sql = "SELECT id FROM APPLEIMAGES WHERE name= '$applename'";
    
    if(!$result = $connection->query($sql)){
        echo "Yes ";
        echo $applename;
        echo " is an apple!";
    }
    else
    {
        echo $applename;
        echo "is not found in the database";
    }
    ?>
</body>
</html>
