<?php
session_start();
    if (!isset($_SESSION['logged_id'])) {
        header('Location: admin-login.php');
        exit();
    }
?>

<!DOCTYPE html>
    <html lang="pl">
    <head>
        <meta charset="utf-8">
        <title>Panel administracyjny</title>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <link href="https://fonts.googleapis.com/css?family=Lobster|Open+Sans:400,700&amp;subset=latin-ext" rel="stylesheet"><link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/skeleton/2.0.4/skeleton.css" />
        <!--[if lt IE 9]>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.min.js"></script>
        <![endif]-->
    </head>

    <body>
            <form method="post" action="done.php">
                <label>Zawartość <br/>
                    <textarea rows="20" cols="50" name="content" wrap="hard"></textarea>
                
                </label>
                <br/>
                <label>Data <br/><input type="date" name="date"></label>
                <br/>
                <input type="submit" value="Dodaj aktualność">
            </form>
            
            <p><a href="list.php">Wróć</a></p>
    </body>
</html>