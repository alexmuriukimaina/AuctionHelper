<?php
if(!isset($_SESSION['login'])){
?>

<h2>Login </h2><br>

<form name="login" action="index.php" method="POST">
<label>userID</label>
<input type="text" name="userid" size="10">
<br>
<br>

<label>Password</label>
<input type="password" name="password" size="10">
<br>
<br>

<input type="submit" value="Login">
<input type="hidden" name="content" value="validate">
</form>

<?php
}else{
    echo "<h2>Welcome to AuctionHelper</h2>\n";
    echo "<br><br>\n";
    echo "<p>This program tracks bidders and auction item infrmation</p>\n";
    echo "<p>Please use the links in the navigation window</p>\n";
    echo "<p>Please DO NOT USE the browser navigation buttons</p>\n";
}
?>
<script language="javascript">
    document.login.userid.focus();
    document.login.userid.select();
</script>