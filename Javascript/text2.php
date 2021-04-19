<?php
header('Content-type:text/html;charset=utf8');
// var_dump($_POST);
$result=intval($_POST['Q']);
$answer=intval($_POST['answer']);
if ($result==$answer) {
    echo "回答正确";
}else{
    echo "回答错误";
}
?>