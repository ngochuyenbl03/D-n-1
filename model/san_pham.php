<<<<<<< HEAD
<?php
function insert_sanpham($ten_sp,$giasp,$img,$mota,$iddm){
    $sql="insert into san_pham(name,price,image,mo_ta,iddm) values('$ten_sp','$giasp','$img','$mota','$iddm')";
    pdo_execute($sql);
}
function delete_sanpham($idsp){
    $sql ="delete from san_pham where id=".$idsp;
    pdo_execute($sql);
}
function loadAll_sanpham_top10(){
    $sql ="select * from san_pham where 1 order by view desc limit 0,10";
    $listsanphamhome=pdo_query($sql);
    return $listsanphamhome;
}
function loadAll_sanpham_home(){
    $sql ="select * from san_pham where 1 order by id desc limit 0,9";
    $listsanpham=pdo_query($sql);
    return $listsanpham;
}
function loadAll_sanpham_admin(){
    $sql ="select * from san_pham order by id desc";
    $listsanpham=pdo_query($sql);
    return $listsanpham;
}
function loadAll_sanpham_index($kyw="",$iddm=0){
    $sql ="select * from san_pham where 1";
    if($kyw!=""){
        $sql.=" and name like '%".$kyw."%'";
    }
    if($iddm>0){
        $sql.=" and iddm ='".$iddm."'";
    }
    $sql.=" order by id desc";
    $listsanpham=pdo_query($sql);
    return $listsanpham;
}
function load_ten_dm($iddm){
    if($iddm>0){
        $sql ="select * from danh_muc where id =".$iddm;
        $dm=pdo_query_one($sql);
        extract($dm);
        return $name; 
    } else{
        return "";
    }  
}
function loadOne_sanpham($idsp){
    $sql ="select * from san_pham where id=".$idsp;
    $sp=pdo_query_one($sql);
    return $sp;
}
function load_sanpham_cungloai($iddm){
    $sql ="select * from san_pham where iddm=".$iddm;
    $listsanpham=pdo_query($sql);
    return $listsanpham;
}
function update_sanpham($idsp,$ten_sp,$giasp,$img,$mota,$iddm){
    if($img!="") $sql="update san_pham set name='".$ten_sp."', price='".$giasp."', image='".$img."', mo_ta='".$mota."', iddm='".$iddm."' where id=".$idsp;
    else $sql="update san_pham set name='".$ten_sp."', price='".$giasp."', mo_ta='".$mota."', iddm='".$iddm."' where id=".$idsp;
    pdo_execute($sql);
}
=======
<?php
function insert_sanpham($ten_sp,$giasp,$img,$mota,$iddm){
    $sql="insert into san_pham(name,price,image,mo_ta,iddm) values('$ten_sp','$giasp','$img','$mota','$iddm')";
    pdo_execute($sql);
}
function delete_sanpham($idsp){
    $sql ="delete from san_pham where id=".$idsp;
    pdo_execute($sql);
}
function loadAll_sanpham_top10(){
    $sql ="select * from san_pham where 1 order by view desc limit 0,10";
    $listsanphamhome=pdo_query($sql);
    return $listsanphamhome;
}
function loadAll_sanpham_home(){
    $sql ="select * from san_pham where 1 order by id desc limit 0,9";
    $listsanpham=pdo_query($sql);
    return $listsanpham;
}
function loadAll_sanpham_admin(){
    $sql ="select * from san_pham order by id desc";
    $listsanpham=pdo_query($sql);
    return $listsanpham;
}
function loadAll_sanpham_index($kyw="",$iddm=0){
    $sql ="select * from san_pham where 1";
    if($kyw!=""){
        $sql.=" and name like '%".$kyw."%'";
    }
    if($iddm>0){
        $sql.=" and iddm ='".$iddm."'";
    }
    $sql.=" order by id desc";
    $listsanpham=pdo_query($sql);
    return $listsanpham;
}
function load_ten_dm($iddm){
    if($iddm>0){
        $sql ="select * from danh_muc where id =".$iddm;
        $dm=pdo_query_one($sql);
        extract($dm);
        return $name; 
    } else{
        return "";
    }  
}
function loadOne_sanpham($idsp){
    $sql ="select * from san_pham where id=".$idsp;
    $sp=pdo_query_one($sql);
    return $sp;
}
function load_sanpham_cungloai($idsp,$iddm){
    $sql ="select * from san_pham where iddm='".$iddm."' and id <>".$idsp;
    $listsanpham=pdo_query($sql);
    return $listsanpham;
}
function update_sanpham($idsp,$ten_sp,$giasp,$img,$mota,$iddm){
    if($img!="") $sql="update san_pham set name='".$ten_sp."', price='".$giasp."', image='".$img."', mo_ta='".$mota."', iddm='".$iddm."' where id=".$idsp;
    else $sql="update san_pham set name='".$ten_sp."', price='".$giasp."', mo_ta='".$mota."', iddm='".$iddm."' where id=".$idsp;
    pdo_execute($sql);
}
>>>>>>> 4efff5ec34ac3df5b2a063c2e7e8c697533e8d7a
 ?>