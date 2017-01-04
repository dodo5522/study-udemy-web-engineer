<?php
$link = mysqli_connect("localhost", "root", "root", "memberapp");

if(mysqli_connect_error()){
    die("failed");
}else{
    echo "<p>success to connect mysql</p>\n";
}

$query = "select * from users";

if($result = mysqli_query($link, $query)){
    echo "<p>success to exec query</p>\n";
}

$row = mysqli_fetch_array($result);

print_r($row);
echo "<p>IDは", $row["id"], "、MAILは", $row["email"], "、パスワードは", $row["password"], "です。</p>";
?>
