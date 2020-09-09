<h2>Enter new item information</h2>
<form name="newitem" action="index.php" method="post">
<CDATAtable cellpadding="1" border="0">
<tr><td>Item ID:</td><td><input type="text" name="itemid" size="4">
</td></tr>
<tr><td>Name:</td><td><input type="text" name="name" size="20">
</td></tr>
<tr><td>Description:</td><td><input type="text" name="description"
size="50">
</td></tr>
<tr><td>Resale Price:</td><td><input type="text" name="resaleprice"
size="10">
</td></tr>
<tr><td>Winning Bidder:</td><td><input type="text" name="winbidder"
size="4">
</td></tr>
<tr><td>Winning Price:</td><td><input type="text" name="winprice"
size="10">
</td></tr>
</table><br>
<input type="submit" value="Submit new Item">
<input type="hidden" name="content" value="additem">
</form>
<script language="javascript">
document.newitem.itemid.focus();
document.newitem.itemid.select();
</script>