<?php

include("config.php");

    if(isset($_GET["term"])){
        $term = $_GET["term"];
    }else{
        exit("You must enter a search term");
    }

    if(isset($_GET["type"])){
        $type = $_GET["type"];
    }else{
        $type="sites";
    }
?>
<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Search-Engine</title>
        <link rel="stylesheet" href="assets/css/style.css">
    </head>

    <body>

        <div class="wrapper">
            <div class="header">
                <div class="headerContent">
                    <div class="logoContainer">
                        <a href="index.php"> <img src="assets/images/logo.png" alt="logo"></a>
                    </div>
                    <div class="searchContainer">
                        <form action="search.php" method="GET">
                            <div class="searchBarContainer">
                                <input class='searchBox' type="text" name="term" value="<?php echo $term; ?>">
                                <button class="searchIcon">
                                    <img src="assets/images/search.png" alt="search">
                                </button>
                            </div>
                        </form>
                    </div>
                </div>

                <div class="tabsContainer">
                    <ul class="tabList">
                        <li class="<?php echo $type == 'sites' ? 'active' : '' ?>">
                            <a href='<?php echo "search.php?term=$term&type=sites"; ?>'>
                                Sites
                            </a>
                        </li>

                        <li class="<?php echo $type == 'images' ? 'active' : '' ?>">
                            <a href='<?php echo "search.php?term=$term&type=images"; ?>'>
                                Images
                            </a>
                        </li>
                    </ul>
                </div>

            </div>
        </div>

    </body>

</html>