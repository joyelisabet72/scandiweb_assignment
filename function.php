<?php 
class database{

	var $host = "localhost";
	var $username = "root";
	var $password = "";
	var $database = "scandiweb";
	var $koneksi = "";
	
	function __construct(){
		$this->koneksi = mysqli_connect($this->host, $this->username, $this->password,$this->database);
		if (mysqli_connect_errno()){
			echo "Koneksi database gagal : " . mysqli_connect_error();
		}
	}

	function tampil_data(){
		$data = mysqli_query($this->koneksi,"select * from products");
		while($row = mysqli_fetch_array($data)){
			$hasil[] = $row;
		}
		return @$hasil;
	}

	function add_product($sku, $name, $price, $type, $size, $weight, $height, $width, $length){
		$data="INSERT INTO products (sku, name, price, type, size, weight, height, width, length) VALUES ('$sku', '$name', '$price', '$type', '$size', '$weight', '$height', '$width', '$length')";
		mysqli_query($this->koneksi,$data);
	}

	function hapus($product){
		mysqli_query($this->koneksi,"DELETE FROM products WHERE sku='$product'");
	}
	
}?>
