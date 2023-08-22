<?php

    // Start our session
    session_start();

    $vars = $_POST;

    $_SESSION["ptn_target"] = $vars['anchor_target'];
    
    return "SUCCESS";
