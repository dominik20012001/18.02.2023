<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php  
if (isset($_GET['page']))
        {
            $allowed_pages + array("earth", "moon", "mars");  
            $page = filter_var($_GET['page'],FILTER_SANITIZE_STRING);
            if (!empty($page))
            {
                if (in_array($page, $allowed_pages))
                {
                    if (is_file($page.".php"))
                        include($page.".php");
                }
            }
        }
        else
            include ("basic.php");
            echo "<title>$title</title>";
    ?>
        <link rel="stylesheet" href="style.css" type="text/css" />
        <script type="text/javascript" src="jsc.js"></script>
</head>
    <body>
        <div id="container">
            <div id="top">
                PHP zmienna predefiniowana
            </div>
            
            <div id="menu">
                <div><a href="?page=earth">Earth</a></div>
                <div><a href="?page=moon">Moon</a></div>
                <div><a href="?page=mars">Mars</a></div>
            </div>
            <div id="content">     
                <div id="text">
        <?php
            if (isset($_GET['page']))
                    {
                        $allowed_pages = array("earth", "moon", "mars");
                        $page = filter_var($_GET['page'], FILTER_SANITIZE_STRING);
                        if (!empty($page))
                        {
                            if (!in_array($page, $allowed_pages))
                                echo "Strona nie istnieje";
                            else       
                            {
                                if (is_file($page."html"))
                                    include($page."html");
                                else
                                    echo "Strona internetowa";
                            }   
                        }
                    }
                    else
                        include("basic,html");
        ?>
               </div>
           </div>

        </div>
    </body>
</html>

