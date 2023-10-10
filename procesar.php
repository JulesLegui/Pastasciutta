<?php

    $validacion = true;
    $error      = "";

    if ($_POST["nombre"] == "") {
        $validacion = false;
        $error      = "Falta el nombre";
    }   else {
        $nombre   = $_POST["nombre"];
    } 

    if ($_POST["email"] == "") {
        $validacion = false;
        $error      = "Falta el email";
    }   else {
        $email   = $_POST["email"];
    } 
    
    if ($_POST["comentario"] == "") {
        $comentario   = "";
    }   else {
        $comentario   = $_POST["comentario"];
    }
    
    if ($_POST["recetarios"] == "") {
        $validacion = false;
        $error      = "Faltan los recetarios";
    }   else {
        $recetarios    = implode($_POST["recetarios"]);
       //$recetarios = $_POST["recetarios"];
    } 


    if ($validacion == true) {
        header('Location: gracias.php');

    } else {
        header('Location: index.php?nombre=' . $nombre . '&email=' . $email . '&comentario=' . $comentario . '&recetarios='. $recetarios . '&error=' . $error);
    }

?>