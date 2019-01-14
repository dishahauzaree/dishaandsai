
<?php
    require_once 'login.php';
    $connection = mysqli_connect($host, $user, $pass, $db, $port)or die(mysql_error());
    $per = isset($_POST['person']) ? $_POST['person'] : false;
    if ($per){
        $param = $_POST['person'];
        $query = "SELECT * FROM players WHERE name = '$param' ";
        $result = mysqli_query($connection, $query);
        while ($row = mysqli_fetch_assoc($result)) {
            echo "<head>";
            echo "<link href='style.css' rel='stylesheet' type='text/css'>";
            echo "</head>";
            echo "<div class='c'>";
            echo "<img src=" . $row['picture'] . ">";
            echo "<br>";
            echo "<h2>$param: " . $row['name']."</h2>";
            echo "</div>";
            echo "<br>";
            echo "<h4>";
            echo "Gender: " . $row['gender'];
            echo "<br>";
            echo "Age: " . $row['age'];
            echo "<br>";
            echo "Height: " . $row['height'];
            echo "<br>";
            echo "Nationality: " . $row['nationality'];
            echo "<br>";
            echo $row['accomps'];
        }
    }
    
?>