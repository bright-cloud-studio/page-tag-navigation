<?php

	// Start our session, so we can save our target
	session_start();

    $_SESSION["ptn_target"] = '';
    
    return "cleared";
