<?php
    session_start();
    $_SESSION['username'] = "";
    session_destroy();
    header("Location: ../index.php");
