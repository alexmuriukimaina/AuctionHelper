<?php
if (isset($_SESSION['login'])) {
$itemid = $_POST['itemid'];
if ((trim($itemid) == '') OR (!is_numeric($itemid)))
{
echo "<h2>Sorry, you must enter a valid item ID number</h2>\n";
} else
{
$name = $_POST['name'];
$description = $_POST['description'];
$resaleprice = $_POST['resaleprice'];
$winbidder = $_POST['winbidder'];
$winprice = $_POST['winprice'];
$item = new Item($itemid, $name, $description, $resaleprice,
$winbidder, $winprice);
$result = $item->saveItem();
if ($result)
echo "<h2>New Item #$itemid successfully added</h2>\n";
else
echo "<h2>Sorry, there was a problem adding that item</h2>\n";
}
} else {
echo "<h2>Please login first</h2>\n";
}
?>