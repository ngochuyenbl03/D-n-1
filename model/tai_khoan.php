<<<<<<< HEAD
<?php
function insert_taikhoan($username,$password,$email){
    $sql="insert into tai_khoan(username,password,email) values('$username','$password','$email')";
    pdo_execute($sql);
}
function check_user($username,$password){
    $sql ="select * from tai_khoan where username='".$username."' and password='".$password."'";
    $tk=pdo_query_one($sql);
    return $tk;
}
function check_quenmk($tendn,$email){
    $sql ="select * from tai_khoan where username='".$tendn."' and  email='".$email."'";
    $tk=pdo_query_one($sql);
    return $tk;
}
function update_taikhoan($id,$username,$password,$email,$address,$phone,$role){
    $sql="update tai_khoan set username='".$username."', password='".$password."', email='".$email."', address='".$address."', phone='".$phone."', role='".$role."' where id=".$id;
    pdo_execute($sql);
}
function loadAll_taikhoan(){
    $sql = "select * from tai_khoan order by id desc";
    $listtaikhoan=pdo_query($sql);
    return $listtaikhoan;
}
function load_taikhoan_user($id){
    $sql = "select * from tai_khoan where id=".$id;
    $listtaikhoan=pdo_query_one($sql);
    return $listtaikhoan;
}
function delete_taikhoan($id){
    $sql = "delete from tai_khoan where id=".$id;
    pdo_execute($sql);
}
=======
<?php
function insert_taikhoan($username,$password,$email){
    $sql="insert into tai_khoan(username,password,email) values('$username','$password','$email')";
    pdo_execute($sql);
}
function check_user($username,$password){
    $sql ="select * from tai_khoan where username='".$username."' and password='".$password."'";
    $tk=pdo_query_one($sql);
    return $tk;
}
function check_quenmk($tendn,$email){
    $sql ="select * from tai_khoan where username='".$tendn."' and  email='".$email."'";
    $tk=pdo_query_one($sql);
    return $tk;
}
function update_taikhoan($id,$username,$password,$email,$address,$phone,$role){
    $sql="update tai_khoan set username='".$username."', password='".$password."', email='".$email."', address='".$address."', phone='".$phone."', role='".$role."' where id=".$id;
    pdo_execute($sql);
}
function loadAll_taikhoan(){
    $sql = "select * from tai_khoan order by id desc";
    $listtaikhoan=pdo_query($sql);
    return $listtaikhoan;
}
function load_taikhoan_user($id){
    $sql = "select * from tai_khoan where id=".$id;
    $listtaikhoan=pdo_query_one($sql);
    return $listtaikhoan;
}
function delete_taikhoan($id){
    $sql = "delete from tai_khoan where id=".$id;
    pdo_execute($sql);
}
>>>>>>> 4efff5ec34ac3df5b2a063c2e7e8c697533e8d7a
?>