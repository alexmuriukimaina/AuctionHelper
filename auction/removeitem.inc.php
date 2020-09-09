<?php
if (isset($_SESSION['login'])) {
$itemid = $_POST['itemid'];
$item = Item::findItem($itemid);
$result = $item->removeItem();
if ($result)
echo"<h2>Item $itemid removed</h2>\n";
else
echo "<h2>Sorry, problem removing item $itemid</h2>\n";
} else {
echo "<h2>Please login first</h2>\n";
}
?>