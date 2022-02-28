<?php
    for ($row=6; $row>=0; $row--){
        for ($column=6; $column>=0; $column--){
            if(($row == 6 or $row == 0)or $row == $column){
                echo '*';
            }else{
                echo' ';
        }
    }        
    echo "\n";
    }    
?>