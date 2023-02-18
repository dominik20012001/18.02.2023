<html>
    <head>
        <meta http-equiv="content-type" content="text/html; charset=utf-8" />
     
        <title>Strona która odbiera informacje / dane</title>
    </head>
    <body>
        <?php
            if (isset($_POST['login']) && isset($_POST['haslo']))
            {
                if (!empty($_POST['login']) && !empty($_POST['haslo']))
                {
                    $login = filter_var($_POST['login'], FILTER_SANITIZE_STRING);
                    $haslo = filter_var($_POST['haslo'], FILTER_SANITIZE_STRING);
                    
                    if ($login == "admin" && $haslo == "abc")
                    {
                        echo "Zalogowałeś się na konto: ".$login;
                        echo "PANEL ADMINISTRACYJNY";
                    }
                    else
                        echo "Podałeś niepoprawny login lub hasło. Spróbuj ponownie <a href='index.php'>tutaj</a>";
                }   
                else
                    echo "Nie podałeś loginu lub hasła. Spróbuj ponownie <a href='index.php'>tutaj</a>";
            }
            else
                echo "Hej!, nie podałeś loginu lub hasłą. Spróbuj ponownie <a href='index.php'>tutaj</a>";
           
        ?>
    </body>
</html>

