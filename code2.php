<?php
$n=date("N");
$name=$_GET["name"];
$age=$_GET["age"];
$sex=$_GET["sex"];
$S=$_GET["s"];

if($age <= "15"&& $sex =="male")
{
    $n=("ดช.");
}
elseif($age >"15"&& $sex =="male")
{
    $n=("นาย.");
}
elseif($age <="15"&& $sex =="femele")
{
    $n=("ดญ.");
}
elseif($age >"15"&& $sex =="femele" && $S == "married")
{
    $n=("นาง.");
}
elseif($age >"15"&& $sex =="femele")
{
    $n=("นางสาว.");
}
echo"ชื่อ:$n$name อายุ:$age สถานะ:$S" ;    
?>