<?php
    $language = 'paython' ;
    if($language == 'php'){
        $language = str_replace('php', 'paython', $language);
    }elseif($language == 'paython'){
        $language = str_replace('paython', 'php', $language);
    }
    echo $language;
?>