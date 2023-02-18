<html>
    <head>
        <meta http-equiv="content-type" content="text/html; charset=utf-8" />
     
        <title>Zmienna Predefiniowana $_POST</title>

    </head>
    <body>
        <form action="index.php" method="post" enctype="multipart/form-data">
            <div>
                <div>
                    Login: <input type="text" name="login" maxlength="8" size="5" />
                </div>
                <div>
                    Password: <input type="password" name="haslo" maxlength="15" size="5" />
                </div> 
                <div>''
                    <input type="submit" value="Zaloguj się" />
                </div>
            </div>
        </form>
        <?php
            if (isset($_POST['login']) && isset($_POST['haslo']))
                {
                    if (!empty($_POST['login']) && !empty($_POST['haslo']))
                    {
                        $login = filter_var($_POST['login'], FILTER_SANITIZE_STRING);
                        $haslo = filter_var($_POST['haslo'], FILTER_SANITIZE_STRING);
                        if ($login == "admin" && $haslo == "abc")
                        {
                            echo "PANEL ADMINISTRACYJNY <br />";
                            echo "Zalogowałeś się na konto".$login;
                        }
                        else
                            echo "Podałeś niepoprawny login lub hasło. Spróbuj ponownie <a
            href='index.php'>tutaj</a>";
                    }
                    else
                        echo "Nie podałeś loginu lub hasła. Spróbuj ponownie <a
            href='index.php'>tutaj</a>";
        }

        ?>
        
    </body>
</html>
