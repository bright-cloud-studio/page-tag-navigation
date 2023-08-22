<?php

    // Starts the session and connects to the database
    include_once("prepend.page_tag_navigation.endpoint.php");

    // Start our session
    session_start();

    $vars = $_POST;
    $message = '<svg data-fa-pseudo-element="::before" data-prefix="fas" data-icon="f13a" class="svg-inline--fa fa-f13a" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg=""><path fill="currentColor" d="M256 0C114.6 0 0 114.6 0 256c0 141.4 114.6 256 256 256s256-114.6 256-256C512 114.6 397.4 0 256 0zM390.6 246.6l-112 112C272.4 364.9 264.2 368 256 368s-16.38-3.125-22.62-9.375l-112-112c-12.5-12.5-12.5-32.75 0-45.25s32.75-12.5 45.25 0L256 290.8l89.38-89.38c12.5-12.5 32.75-12.5 45.25 0S403.1 234.1 390.6 246.6z"></path></svg><select id="select_child" class="select_child" onchange="push_to_target(\'' . $vars['ptn_id'] . '\');">';
    


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
                $page_anchor_target = getAnchorTargetByID($row['id']);

                if($page_url != '')
                {
                    $message = $message . '<option value="'.$page_url.'" anchor_target="'.$page_anchor_target.'" >' . $row['label'] . '</option>';
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
                    $_SESSION['ptn_target'] = $row2['page_tag_navigation_anchor_target'];

            }
        }
        return $page_url;
    }
    
    function getAnchorTargetByID($id) {
        $our_anchor = 'no_target';
        $dbh = new mysqli("localhost", "oces_user", "cnLtU3L0fD8PNurD)R", "oces_contao_4_9");
        if ($dbh->connect_error) {
          die("Connection failed: " . $dbh->connect_error);
        }

        $query2 =  "select * from tl_page WHERE page_tag_navigation_target=" . $id;
        $result2 = $dbh->query($query2);
        if($result2) {
            while($row2 = $result2->fetch_assoc()) {

                // If there is a target, save it to our session
                if($row2['page_tag_navigation_anchor_target'] != '')
                    $our_anchor = $row2['page_tag_navigation_anchor_target'];

            }
        }
        return $our_anchor;
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
