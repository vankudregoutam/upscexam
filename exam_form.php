<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "upsc_db";

        $a = $_POST["sname"];
        $b = $_POST["fname"];
        $c = $_POST["mname"];
        $d = $_POST["gender"];
        $e = $_POST["disable"];
        $f = $_POST["dob"];
        $g = $_POST["email"];
        $h = $_POST["phone"];
        $i = $_POST["ssc"];
        $j = $_POST["hsc"];
        $k = $_POST["ews"];
        $l = $_POST["caste"];
        $m = $_POST["disability"];
        $n = $_POST["domicile"];
        $o = $_POST["gov_id"];
        $p = $_POST["photo"];
        $q = $_POST["sign"];

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $sql = "INSERT INTO candidates VALUES('$a', '$b', '$c', '$d', '$e', '$f', 
        '$g', '$h', '$i', '$j', '$k', '$l', '$m', '$n', '$o', '$p', '$q')";

    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
?>