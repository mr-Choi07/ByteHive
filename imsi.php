<?php

//db연결
include 'inc/dbconfig.php';
include 'inc/member.php';


//아이디 중복체크

$id = 'aaa';

$mem = new Member($db);

if ( $mem->id_exists($id)) {
    echo "아이디가 중복됩니다.";
} else {
    echo "사용 할 수 있는 아이디입니다.";
}

?>