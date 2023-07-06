<?php
function loadAll_role(){
    $sql = "select * from phan_quyen order by id desc";
    $listrole=pdo_query($sql);
    return $listrole;
}
function loadOne_role($id){
    $sql = "select * from phan_quyen where id=".$id;
    $dm=pdo_query_one($sql);
    return $dm;
}

 ?>