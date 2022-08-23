<?
// Generate random number
$sector = "Start game";
if (array_key_exists("bet", $_POST)){
    $sector = rand(0, 36);
    $connect = new PDO("sqlite:$db");
    $sql = "UPDATE `Roulette` SET stat = stat + 1 WHERE sector = $sector";
    $connect -> exec($sql);
    $connect = null;
}

// Statistic reset
if (array_key_exists("restart", $_POST)){
    $connect = new PDO("sqlite:$db");
    $sql = "UPDATE `Roulette` SET stat = 0";
    $connect -> exec($sql);
    $connect = null;
}

// Statistic conclusion
function statistic($db){
    $connect = new PDO("sqlite:$db");
    $sql = "SELECT sector, stat FROM `Roulette`";
    $result = $connect -> query($sql);
    $arr = [];
    foreach ($result as $row)
        $arr[$row['sector']] = $row['stat'];
    echo "<div class = 'row'>";

    ksort($arr);

    foreach ($arr as $key => $element) {
        echo "<div class = 'column'>";
        echo "<div>$key</div>";
        echo "<div>$element</div>";
        echo "</div>";
    }
    echo "</div>";
    $connect = null;
};