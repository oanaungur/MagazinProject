<?php

/*
 * supposse we accidentely acces this page
 */
$id = 0;
/*
 * verify if the "id" resource is present in the url
 * if so overwrite the "id"
 */
if (isset($_GET['id'])) {
    $id = $_GET['id'];
}

$sql = "select name, town from shop where id = ". $id ." limit 1";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    $row = $result->fetch_assoc()
        ?>
        <div style="background-color: #eeeeee; margin: 5px; padding: 5px;">
            <div>
                <a href="index.php?action=shop&id=<?php echo $id; ?>"><h2>
                        <?php
                        echo $row["name"];
                        ?>
                    </h2></a>
            </div>
        </div>
        <hr>
        <?php
}

$sql = "select id,name from categories where shop_id = " . $id . "";
$result = $conn->query($sql);

if($result->num_rows > 0) {
    $id = 1;
    while($row = $result->fetch_assoc()){
        ?>
        <div>
            <a href="index.php?action=category&shop_id=<?= $id ?>&category_id=<?= $row["id"] ?>">
                <?php echo $id . " " . $row["name"]; ?>
            </a>
        </div>
        <?php
        $id = $id + 1;
    }
} else {
    echo "0 results";
}
