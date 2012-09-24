<?php

$arr['name']="teste2";
$arr['data'][]='453';
$arr['data'][]='213';
$arr['data'][]='253';
$arr['data'][]='293';
$arr['data'][]='353';
$arrSerie[]=$arr;
unset($arr);

$arr['name']="teste";
$arr['data'][]='45';
$arr['data'][]='21';
$arr['data'][]='25';
$arr['data'][]='29';
$arr['data'][]='35';



$arrSerie[]=$arr;
//$arrSerie[]=array('1,2,3,4,5');
echo json_encode($arrSerie);

?>