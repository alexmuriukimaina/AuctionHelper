<?php
if (isset($_SESSION['login'])) {
$itemid = $_POST['itemid'];
$answer = $_POST['answer'];
if ($answer == "Update Item") {
    $item = Item::findItem($itemid);
    $item->itemid = $_POST['itemid'];
    $item->name = $_POST['name'];
    $item->description = $_POST['description'];
    $item->resaleprice = $_POST['resaleprice'];
    $item->winbidder = $_POST['winbidder'];
    $item->winprice = $_POST['winprice'];
    $result = $item->updateItem();
    if ($result) {
    echo "<h2>Item $itemid updated</h2>\n";
    } else {
    echo "<h2>Problem updating item $itemid</h2>\n";
    }
    } else {
    echo "<h2>Update Canceled for item $itemid</h2>\n";
    }
    } else {
    echo "<h2>Please login first</h2>\n";
    }
    ?>