<?php 
function checkWhere($str, $condition) {
    if (preg_match('/WHERE/i', $str)>0) {
        return $str . " AND ". $condition;
    }else
    return " WHERE $condition";
}
?>