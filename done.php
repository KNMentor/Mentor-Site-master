<?php

session_start();
		
		require_once 'database.php';
        $content = $_POST['content'];
        $date = $_POST['date'];

		$query = $db->prepare('INSERT INTO news VALUES (NULL, :content, :date)');
		$query->bindValue(':content', $content, PDO::PARAM_STR);
		$query->bindValue(':date', $date, PDO::PARAM_STR);
		$query->execute();

?>
<!DOCTYPE html>
<html lang="pl">
<head>

    <meta charset="utf-8">
    <title>Panel administracyjny</title>
    <meta http-equiv="X-Ua-Compatible" content="IE=edge">

    <link rel="stylesheet" href="main.css">
    <link href="https://fonts.googleapis.com/css?family=Lobster|Open+Sans:400,700&amp;subset=latin-ext" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/skeleton/2.0.4/skeleton.css" />
    <!--[if lt IE 9]>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.min.js"></script>
    <![endif]-->

</head>

<body>

    <h1>Dodano aktualność!</h1>
    <p><a href="list.php">Wróć</a></p>

</body>
</html>