<?php
function operacao($n1,$n2,$op) {
        if($op == 'ad') {
            return $n1+$n2;
        } else if($op == 'sub') {
            return $n1-$n2;
        } else if($op == 'div') {
            return $n1/$n2;
        } else {
            return $n1*$n2;
        }
    }
?>