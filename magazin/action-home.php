<?php

$sql = "select id, name, town from shop";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        ?>
        <div style="background-color: #eeeeee; margin: 5px; padding: 5px;">
            <div>
                <a href="index.php?action=shop&id=<?php echo $row["id"]; ?>"><h2>
                        <?php
                        echo $row["name"];
                        ?>
                    </h2></a>
            </div>
            <div>
                <?php
                echo $row["town"];
                ?>
            </div>
        </div>
        <hr/>
        <?php
    }
} else {
    echo "0 results";
}
