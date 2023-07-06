<?php
function insert_binhluan($noi_dung,$iduser,$idpro,$date){
    $sql="insert into binh_luan(noi_dung,iduser,idpro,date) values('$noi_dung','$iduser','$idpro','$date')";
    pdo_execute($sql);
}
function loadAll_binhluan_admin(){
    $sql = "select * from binh_luan order by id desc";
    $listbinhluan=pdo_query($sql);
    return $listbinhluan;
}
function loadAll_binhluan($idpro){
    $sql = "select * from binh_luan where idpro='$idpro' order by id desc";
    $listbinhluan=pdo_query($sql);
    return $listbinhluan;
}
function delete_binhluan($id){
    $sql = "delete from binh_luan where id=".$id;
    pdo_execute($sql);
}
?>