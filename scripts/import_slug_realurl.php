<?php
    $localhost = '127.0.0.1';
    $user = 'username';
    $password = 'secretpassword';
    $dbname = 'databasename';

    $mysqli = new mysqli($localhost,$user,$password,$dbname);

    // Check connection
    if ($mysqli->connect_errno) {
        echo "Failed to connect to MySQL: " . $mysqli->connect_error;
        exit();
    }

    $sql = 'SELECT `tt_products`.uid,title,value_alias FROM `tt_products`, `tx_realurl_uniqalias` WHERE `tx_realurl_uniqalias`.tablename="tt_products" AND `tx_realurl_uniqalias`.expire=0 AND `tx_realurl_uniqalias`.value_id = `tt_products`.uid';
    if ($result = $mysqli->query($sql)) {
        $productsRecordsWithSlug = $result->fetch_all(MYSQLI_ASSOC);

        echo '<pre>';
        print_r($productsRecordsWithSlug);
        echo '</pre>';
        foreach ($productsRecordsWithSlug as $key => $value) {
            $sql = 'UPDATE tt_products SET slug = "' . $value['value_alias'] . '" WHERE uid = ' . $value['uid'];
            echo $sql;
            echo '<br/>';
            $mysqli->query($sql);
        }
    }
