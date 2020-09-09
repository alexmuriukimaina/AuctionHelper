<?php
session_start();
include("bidder.php");
include("items.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Auction Helper</title>
    <link rel="stylesheet" type="text/css" href="ah_style.css">
</head>
<body>
    <header>
        <?php include("header.inc.php"); ?>
    </header>
    
    <section id="container">
        <nav>
            <?php include("nav.inc.php");?>
        </nav>

        <main>
            <?php
                if(isset($_REQUEST['content'])){
                    include($_REQUEST['content'] . ".inc.php");
                }else{
                    include("main.inc.php");
                }
            ?>
        </main>
        <aside>
            <?php include("aside.inc.php");?>
        </aside>
    </section>

    <footer>
        <?php include("footer.inc.php");?>
    </footer>
</body>
</html>