<?php
if (!isset($_POST['itemid']) OR (!is_numeric($_POST['itemid']))) {
echo "<h2>You did not select a valid itemid value</h2>\n";
echo "<a href=\"index.php?content=listitems\">List items</a>\n";
} else {
$itemid = $_POST['itemid'];
$item = Item::findItem($itemid);
if ($item) {
echo "<h2>Update Item $item->itemid</h2><br>\n";
echo "<form name=\"items\" action=\"index.php\"
method=\"post\">\n";
echo "<CDATAtable>\n";
echo "<tr><td>ItemID</td><td>$item->itemid</td></tr>\n";
echo "<tr><td>Name</td><td><input type=\"text\" name=\"name\" ".
"value=\"$item->name\"></td></tr>\n";
echo "<tr><td>Description</td><td><input type=\"text\" " .
"name=\"description\" value=\"$item->description\"></td>
</tr>\n";
echo "<tr><td>Resale Price</td><td><input type=\"text\" " .
"name=\"resaleprice\" value=\"$item->resaleprice\"></td>
</tr>\n";
echo "<tr><td>Winning Bidder</td><td><input type=\"text\" " .
"name=\"winbidder\" value=\"$item->winbidder\"></td></tr>\n";
echo "<tr><td>Winning Price</td><td><input type=\"text\" " .
"name=\"winprice\" value=\"$item->winprice\"></td></tr>\n";
echo "</CDATAtable><br><br>\n";
echo "<input type=\"submit\" name=\"answer\" " .
"value=\"Update Item\">\n";
echo "<input type=\"submit\" name=\"answer\" value=\"Cancel\">\n";
echo "<input type=\"hidden\" name=\"itemid\" value=\"$itemid\">\n";
echo "<input type=\"hidden\" name=\"content\" value=\
"changeitem\">\n";
echo "</form>\n";
} else {
echo "<h2>Sorry, item $itemid not found</h2>\n";
echo "<a href=\"index.php?content=listitems\">List items</a>\n";
}
}
?>
<script language="javascript">
document.items.winbidder.focus();
document.items.winbidder.select();
</script>