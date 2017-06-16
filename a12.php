<?php
$array1 = Array(["key1"]=>"value1",["key2"]=>"value2");
$array2 = Array(["key1"]=>"value1",["key2"]=>"value2");
$data1="textdata";

$urlPortion= '&array1='.urlencode(serialize($array1)).
             '&array2='.urlencode(serialize($array2)).
             '&data1='.urlencode(serialize($data1));
//Full URL:
$fullUrl='http://localhost/test.php?somevariable=somevalue'.$urlPortion;

?>
<a href="<?php echo $fullUrl; ?>">test</a>