<?php
echo "<script language=\"javascript\">\n";
echo "function listbox_dblclick() {\n";
echo "document.items.updateitem.click() }\n";
echo "</script>\n";
echo "<script language=\"javascript\">\n";
echo "function button_click(target) {\n";
echo "if(target==0) " .
"document.items.action=\"index.php?content=removeitem\"\n";
echo "if(target==1) " .
" document.items.action=\"index.php?content=updateitem\"\n";
echo "}\n";
echo "</script>\n";
echo "<h2>Select Item</h2>\n";
echo "<form name=\"items\" method=\"post\">\n";
echo "<select ondblclick=\"listbox_dblclick()\" " .
"name=\"itemid\" size=\"20\">\n";
$items= Item::getItems();
foreach($items as $item) {
$itemid = $item->itemid;
$name = $item->name;
$option = $itemid . " - " . $name;
echo "<option value=\"$itemid\">$option</option>\n";
}
echo "</select><br><br>\n";
echo "<input type=\"submit\" onClick=\"button_click(0)\" " .
"name=\"deleteitem\" value=\"Delete Item\">\n";
echo "<input type=\"submit\" onClick=\"button_click(1)\" " .
"name=\"updateitem\" value=\"Update Item\">\n";
echo "</form>\n";
?>