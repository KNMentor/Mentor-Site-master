<?php
session_start();

    if (!isset($_SESSION['logged_id'])) {
        header('Location: admin-login.php');
        exit();
    }

require_once 'database.php';


$usersQuery = $db->query('SELECT * FROM news');
$users = $usersQuery->fetchAll();

?>

<!DOCTYPE html>
    <html lang="pl">
    <head>
        <meta charset="utf-8">
        <title>Panel administracyjny</title>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <link href="https://fonts.googleapis.com/css?family=Lobster|Open+Sans:400,700&amp;subset=latin-ext" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/skeleton/2.0.4/skeleton.css" />
        
        <!--[if lt IE 9]>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.min.js"></script>
        <![endif]-->
    </head>

    <body>
			
				<table>
					<thead>
						<tr><th colspan="3">Łącznie rekordów: <?= $usersQuery->rowCount() ?></th></tr>
						<tr><th>ID</th><th>Zawartość</th><th>Data</th><th></th></tr>
					</thead>
					<tbody>
						<?php
						foreach ($users as $user) {
							echo "
                            
                            <tr>
                                <td>{$user['id']}</td>
                                <td>{$user['content']}</td>
                                <td>{$user['date']}</td>
                            </tr>";
						}
						?>
					</tbody>
				</table>
        <form method="post" action="delete-script.php">
                <label>
                    Podaj ID aktualności do usunięcia:<br/>
                    <input type="text" name="number">
                </label>
                <input type="submit" value="Usuń aktualność">
            </form>
                
                <p><a href="list.php">Wróć</a></p>
    </body>
</html>