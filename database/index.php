<?php

$config = include "dbconf.php";

require "database.php";
require "table.php";
 // 키값이 있는 연상배열

$db = new Database($config);

$query = "SHOW TABLES";
$result = $db->queryExecute($query); //db에서 생성한 Database에서 queryExecute를 호출

$count = mysqli_num_rows($result); //테이블 갯수나오는 함수
echo "테이블 갯수는 = ".$count;
echo "</br>";

for($i=0; $i<$count; $i++){
    $row = mysqli_fetch_object($result);  // 
    echo $row -> Tables_in_php."<br>";
    }