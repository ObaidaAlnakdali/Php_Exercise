<?php
    $transactions = array(
        array(
            "id" => 1,
            "name"=> "Gaby",
            "email"=> "gaby@codi.tech"
        ),
        array(
           "id" => 3,
           "name"=> "Omar",
           "email"=> "omar@codi.tech"
        )
    );

    foreach($transactions as $object) {
        echo "ID: " .$object['id']. " , name:" .$object['name']. " , email:" .$object['email']."\n";
    }
?>