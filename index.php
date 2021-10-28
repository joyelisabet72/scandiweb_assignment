<?php 	
include('function.php');
$db = new database();
$products = $db->tampil_data();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Scandiweb Assignment</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet">
  	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"></script>
	<!-- Style -->
	<link rel="stylesheet" href="style.css">
</head>
<body>
	<header>
		<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
			<div class="container-fluid">
				<a class="navbar-brand" href="#">Scandiweb Assignment</a>
			</div>
		</nav>
	</header>

	<div class="container-fluid">
		<h2>Product List</h2>  
		<hr> 
		<form  action="process.php?action=hapus" method="post"> 
		<button class="btn-warning"><a href="add-product.php" style="text-decoration: none;">ADD</a></button>
		<button class="btn-primary" type="submit">MAS DELETE</button>

		<div class="row col-md-12">
		<?php
		if($products!=0){
			foreach($products as $x){
		?>
			<div class="card col-md-2" style=" margin-right: 5px;padding: 5px">
				<div class="form-check">
					<input type="checkbox" class="form-check-input" id="check1" name="product[]" value="<?=$x['sku']?>" >
				</div>
				<center>
					<b><?= $x['sku'];?></b><br>
					<?= $x['name'].'<br>'.
					$x['price'].' $'.'<br>';
					if($x['type']=='DVD'){
						echo 'Size :'.$x['size'].' MB';
					}elseif($x['type']=='Book'){
						echo 'Weight :'.$x['weight'].' KG';
					}else{
						echo 'Dimension : '.$x['height'].' x '.$x['width'].' x '.$x['length'];
					}
					?>
				</center>
			</div>
		<?php }
		} else
			echo "Nothing of Product";
		?>

		
		</div>
		</form>
	</div>
	

	<footer class="bg-dark navbar-dark">
	<div class="container-fluid">
				<a class="navbar-brand" href="#">Scandiweb Assignment</a>
			</div>
	</footer>
</body>

<script type="text/javascript">
    jQuery(function ($) {
        // init the state from the input
        $(".image-checkbox").each(function () {
            if ($(this).find('input[type="checkbox"]').first().attr("checked")) {
                $(this).addClass('image-checkbox-checked');
            }
            else {
                $(this).removeClass('image-checkbox-checked');
            }
        });

        // sync the state to the input
        $(".image-checkbox").on("click", function (e) {
            if ($(this).hasClass('image-checkbox-checked')) {
                $(this).removeClass('image-checkbox-checked');
                $(this).find('input[type="checkbox"]').first().removeAttr("checked");
            }
            else {
                $(this).addClass('image-checkbox-checked');
                $(this).find('input[type="checkbox"]').first().attr("checked", "checked");
            }

            e.preventDefault();
        });
    });
</script>
</html>