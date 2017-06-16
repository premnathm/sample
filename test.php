<?php
echo $destArray1=unserialize($_GET['array1']);
echo $destArray2=unserialize($_GET['array2']);
echo $destData1=unserialize($_GET['data1']);
?>

<?php
/*class test
{
function __isset($name)
{
echo "__isset is called for $name";
}
function __unset($name)
{
echo "__unset is called for $name";
}
}
$a = new test();
isset($a->x);
unset($a->c);
*/
$query_str = http_build_query(array(
    'a' => array(1, 2, 3)
));
print_r($query_str);

$city_names = array(
    'delhi',
    'mumbai',
    'kolkata',
    'chennai'
);
$city_query = http_build_query(array('city' => $city_names));
print_r($city_query);



?>