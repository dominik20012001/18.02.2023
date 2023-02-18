<?php
session_start();
?>
<html>
    <head>
        <meta http-equiv="content-type" content="text/html; charset=utf-8" />
     
        <title>Zmienna Predefiniowana $_POST</title>

    </head>
    <body>
        <!-- przenieś formularz na koniec (przed zamknięciem body)  -->
        
        <?php
            echo $_SERVER['HTTP_USER_AGENT'];
            echo "<br /><br />";
            
            // null
            // teraz można tworzyć zmienne sesyjne
            // $_SESSION['nazwa'] = wartosc;
            // # 1.O

            if (isset($_GET['akcja']) && $_GET['akcja'] == "wyloguj")
            {
                $_SESSION['zalogowany'] = 0;
                session_destroy();
                echo "Zostałeś pomyślnie wylogowany<br />";
            }
            if ($SESSION['zalogowany'] == 1 && (time() - $_SESSION['time'] > 2*60))
            
            if (isset($_POST['login']) && isset($_POST['haslo'])) // # 2.1
            {
                if ((isset($_POST['login']) && isset($_POST['haslo']))
                || $_SESSION['zalogowany'] == 1)
                $_SESSION['zalogowany'] = 0;
                session_destroy();
                echo "Sesja zakończona, zbyt długa bezczynność. Powinieneś się zalogować
                ponownie.<br />";
                if (!empty($_POST['login']) && !empty($_POST['haslo'])) // # 2.2
                {
                if ((!empty($_POST['login']) &&
                !empty($_POST['haslo'])) ||$_SESSION['zalogowany'])
                    // # 2.3
                    if ($_SESSION['zalogowany'] ==0)
                    {
                        $login = filter_var($_POST['login'], FILTER_SANITIZE_STRING); // # 2.3
                        $haslo = filter_var($_POST['haslo'], FILTER_SANITIZE_STRING); // # 2.3
                    }
                    
                    
                    if (($login == "admin" && $haslo == "abc") || // # 2.4
                    $_SESSION['zalogowany'] == 1)
                    {
                        // # 2.5
                        echo "PANEL ADMINISTRACYJNY <br />"; // # 2.5
                        echo "Zalogowałeś się na konto: ".$login; // # 2.5
                        if ($_SESSION['zalogowany'] == 0)
                            $_SESSION['login'] = $login;
                        include ("content.php");
                        $_SESSION['zalogowany'] = 1;

                    }
                    else
                        echo "Podałeś niepoprawny login lub hasło. Spróbuj ponownie <a href='index.php'>tutaj</a>";
                    
                }   
                else
                    echo "Hej!, nie podałeś loginu lub hasłą. Spróbuj ponownie <a href='index.php'>tutaj</a>";
                 
            }
           if ($_SESSION['login'])
        ?> <!-- # 3.0 -->
        <!-- # 3.0 -->
        
        <form action="index.php" method="post" enctype="multipart/form-data">
            <div>
                <div>
                    Login: <input type="text" name="login" maxlength="8" size="5" />
                </div>
                <div>
                    Password: <input type="password" name="haslo" maxlength="15" size="5" />
                </div> 
                <div>
                    <input type="submit" value="Zaloguj się" />
                </div>
            </div>
        </form>
        <script src="https://skrypt-cookies.pl/id/bc299330122d5597.js"></script>
    </body>
</html>

