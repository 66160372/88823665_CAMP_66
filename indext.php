<h1> File index.php</h1>
<?php
/**FILE Index.php */
#comment
//comment
$my_arry = array(1,2,3,4,5);
foreach($my_arry as $key => $value){
    echo "<h1>".$myvar."</h1>";
}
print_r($my_arry);
echo "<br>";
$my_arry2[] = 1;
$my_arry2[] = 2;
$my_arry2[] = 3;
print_r($my_arry2);
echo "<br>";

if(FALSE){
    echo "if false";
} else
if(TRUE || FALSE){
    echo "else if true";
} else{
    echo " else";
}
echo "<br>";




$myvar;
$myvar = " Hello World";
$myvar = 1;
echo "<h1>".$myvar."</h1>";
echo "<br>";
$x = 1;
function x(){
    global $x;
    $x =2;
}
echo $x;
echo "<br>";
x();
echo $x;
echo "<br>";
echo "1"+"1";
echo "<br>";
$x = "AZ";
$x++;
echo $x;
echo "<br>";

?>
<h1><?php echo $myvar; ?></h1>