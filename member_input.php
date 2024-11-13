<?php

if(!isset($_POST['chk']) or $_POST['chk'] != 1) {
    die("<script>
    alert('잘못된 접근입니다.')
    self.location.href='./stipulation.php'
    </script>");
}

?>