<?php

    // Starts the session and connects to the database
    include_once("prepend.page_tag_navigation.endpoint.php");

    // Start our session
    session_start();

    $vars = $_POST;
    $message = '<select id="select_child" class="select_child" onchange="push_to_target();">';


    // open the contao localconfig.php file and get our default child option
    if ($file = fopen("/home/oces/public_html/system/config/localconfig.php", "r")) {
        while(!feof($file)) {
            $line = fgets($file);

            if(strpos($line, 'childDefault') !== false){
                $stripFront = substr($line, 41);
                $stripEnd = substr($stripFront, 0, -3);
                $message .= '<option>' . $stripEnd . '</option>';
            }
        }
        fclose($file);
    }  




    $dbh = new mysqli("localhost", "oces_user", "cnLtU3L0fD8PNurD)R", "oces_contao_4_9");
    if ($dbh->connect_error) {
      die("Connection failed: " . $dbh->connect_error);
    }

    $sorting_number = 0;
    $query =  "select * from tl_child_category WHERE published=1";
    $result = $dbh->query($query);
    if($result) {
      while($row = $result->fetch_assoc()) {

            $parents = unserialize($row['pid']);

            $linked = 0;
            foreach ($parents as &$value) {
                if($value == $vars['parent_val']){
                    $linked = 1;
                }
            }
            if($linked == 1){

                $page_url = '';

                $page_url = getPageAliasByTarget($page_url, $row['id']);

                if($page_url != '')
                {
                    $message = $message . '<option value="'.$page_url.'">' . $row['label'] . '</option>';
                } else {
                    $message = $message . '<option>' . $row['label'] . '</option>';
                }


            }

        }
    }


    $message = $message . '</select>';
    echo $message;


    function getPageAliasByTarget($page_url, $id) {

        $dbh = new mysqli("localhost", "oces_user", "cnLtU3L0fD8PNurD)R", "oces_contao_4_9");
        if ($dbh->connect_error) {
          die("Connection failed: " . $dbh->connect_error);
        }

        $query2 =  "select * from tl_page WHERE page_tag_navigation_target=" . $id;
        $result2 = $dbh->query($query2);
        if($result2) {
            while($row2 = $result2->fetch_assoc()) {
                $alias = "/" . $row2['alias'];

                //if($row2['pid'] >= 2)
                    //$page_url = getPageAliasByID($page_url, $row2['pid']) . $alias;
                //else
                    //$page_url .= $alias;

                // this page has no prepend
                //$page_url .= $alias . ".html";
                $page_url .= $alias;

                // If there is a target, save it to our session
                if($row2['page_tag_navigation_anchor_target'] != '')
                    $_SESSION["ptn_target"] = $row2['page_tag_navigation_anchor_target'];

            }
        }
        return $page_url;
    }
    function getPageAliasByID($page_url, $id) {

        $dbh = new mysqli("localhost", "oces_user", "cnLtU3L0fD8PNurD)R", "oces_contao_4_9");
        if ($dbh->connect_error) {
          die("Connection failed: " . $dbh->connect_error);
        }

        $query2 =  "select * from tl_page WHERE id=" . $id;
        $result2 = $dbh->query($query2);
        if($result2) {
            while($row2 = $result2->fetch_assoc()) {
                $page_url = $page_url . "/" . $row2['alias'];
                if($row2['pid'] >= 2)
                    $page_url = getPageAliasByID($page_url, $row2['pid']) . $page_url;
            }
        }
        return $page_url;
    }
