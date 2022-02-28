<?php
    $transactions = array(
        array(
            "id" => 1,
            "debit"=>2,
            "credit"=>3
        ),
        array(
            "id" => 2,
            "debit"=>15,
            "credit"=>10
        )
    );

    foreach ($transactions as $object) {
        $result = abs($object["debit"] - $object["credit"]);
        echo "ID: " .$object['id']. " => amount: $result\n";
    }
?>