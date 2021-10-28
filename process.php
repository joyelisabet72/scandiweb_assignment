<?php 
include 'function.php';
$db = new database();
$action = $_GET['action'];
if($action == "add")
{
 	$db->add_product($_POST['sku'],$_POST['name'],$_POST['price'],$_POST['type'],$_POST['size'],$_POST['weight'],$_POST['height'],$_POST['width'],$_POST['length']);
     header("location:index.php");
 }
 elseif($action == "hapus"){ 	
        $a=$_POST['product'];
    for($i=0;$i<count($a);$i++){
        $product=$a[$i];
 	    $db->hapus($product);
    }
	header("location:index.php");
 }
 
?>