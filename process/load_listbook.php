<?php
include("../connector/connector.php");
//lọc
    
//tạo truy vấn
    $sql="select * from tb_book, tb_img where tb_book.img_id = tb_img.img_id";
    if($sortmode ==2){
        $sql .= " order by book_price";
    }
    if($sortmode ==3){
        $sql .= " order by book_price desc";
    }
    // if($sortmode ==4){
    //     $sql .= " order by book_price";
    // }
    // if($sortmode ==4){
    //     $sql .= " order by book_price";
    // }
//load
    $sql .= " limit ".$numitem*($page-1).", $numitem";
    $result = mysqli_query($conn, $sql);
    if(mysqli_num_rows($result)>0){
        while($row = mysqli_fetch_array($result)){
            include("load_bookinformation.php");
            include("load_bookcard.php");
        }
    }
?>
