<?php
$userid = $_POST['userid'];
$password = $_POST['password'];
$query = "SELECT name FROM admins WHERE userid=? AND password=SHA2(?,256)";
$db = new mysqli("localhost","ah_user","AuctionHelper","auction");
$stmt = $db->prepare($query);
$stmt->bind_param("ss",$userid,$password);
$stmt->execute();
$stmt->bind_result($name);
$stmt->fetch();
if(isset($name)){
    echo "<h2>Welcome to Auction Helper</h2>\n";
    $_SESSION['login'] = $name;
    header("Location: index.php");
}else{
    echo "<h2>Sorry Login incorrect</h2>\n";
    echo "<a href=\"index.php\">Please try again</a>\n";
}
?>