<?php

        require_once 'session.php';
        require_once 'database.php';


        if ( !empty($_POST['id']) && isset($_POST['id'])) {
                try {
                $id = $_POST['id'];

                $pdo = Database::connect();
                $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                $sql = "DELETE  FROM `ecomm`.`user_creditcard` WHERE `credit_FK` = ?";
                $q = $pdo->prepare($sql);
                $q->execute(array($id));



                Database::disconnect();
                header("Location: update.php");
                } catch (PDOException $e) {
                echo "Syntax Error: ".$e->getMessage() . "<br>";
                header("Location: update.php?error=1");
                }

        }
