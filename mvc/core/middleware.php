<?php
    function CheckIsAdmin($level){
        if($level != 1){
            header("location:".base."admin/error404");
        }
    }
?>