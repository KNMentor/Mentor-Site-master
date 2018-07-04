<?php
session_start();

        require_once 'database.php';

        $id = $_POST['number'];
        $stmt = $db->prepare( "DELETE FROM news WHERE id =:id" );
        $stmt->bindParam(':id', $id);
        $stmt->execute();

        header('Location: list.php');
        exit();

?>