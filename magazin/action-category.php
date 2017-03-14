<?php

/*
 * supposse we accidentely acces this page
 */
$shop_id = 0;
$category_id = 0;

/*
 * verify if the "id" resource is present in the url
 * if so overwrite the "id"
 */
if (isset($_GET['shop_id'])) {
    $shop_id = $_GET['shop_id'];
}
if (isset($_GET['category_id'])) {
    $category_id = $_GET['category_id'];
}

$sql = "select name from shop where id = ". $shop_id . "";
$result = $conn->query($sql);

if($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    
    $sql1 = "select name from categories where id = " . $category_id . "";
    $result1 = $conn->query($sql1);

    if($result1->num_rows > 0) {
        $row1 = $result1->fetch_assoc();
        ?>
        <div>
            <a href="index.php?action=shop&id=<?php echo $shop_id; ?>">
            <h1><?php
                echo $row["name"];
            ?>
            </a>
                <?php
                    echo ' >> ';
                ?>
                <?php 
                    echo $row1["name"];
                ?>
            </h1>
        </div>
        <?php
    }
}

$sql = "select name, price from products where category_id = ". $category_id ." and shop_id = ". $shop_id . "";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()){
        ?>
        <div style="background-color: #eeeeee; margin: 5px; padding: 5px;">
            <div>
                <h2>
                    <?php
                        echo $row["name"];
                    ?>
                </h2>
            </div>
            <div>
                <?php
                    echo $row["price"] . ' EURO';
                ?>
            </div>
        </div>
        <hr>
        <?php
    }
} else {
    echo "0 results";
}
