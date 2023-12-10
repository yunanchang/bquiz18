<?php
        include_once './api/db.php';
        $A=$Ad->all();
        dd($A);
        $A=$Ad->all(['sh'=>1]);
        $c='';
        foreach($A as $a){
            $c=$c.$a['text'];
            dd($a['text']);
        };
        echo $c;
    ?>