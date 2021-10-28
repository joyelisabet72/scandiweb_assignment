<!DOCTYPE html>
<html>
<head>
	<title>Scandiweb Assignment</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet">
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
    <div class="container mt-3">
        <h2>Product Add</h2>
        <hr>
        <?php
            	
        ?>

        <form  action="process.php?action=add" method="post" > 
            <button  class="btn-warning"><a href="index.php" style="text-decoration: none;">Back</a></button> 
            <button class="btn-danger" type="reset">Cancel</button>
            <button class="btn-success" type="submit">Save</button>
            <div class="row mt-10 col-md-7">  
                <table>
                    <tr>
                        <td class="form-group" width="25%">SKU</td>
                        <td><input type="text" name="sku" class="form-control" value="PRDCT0" ></td>
                    </tr>
                    <tr>
                        <td class="form-group ">Name</td>
                        <td><input type="text" name="name" class="form-control"></td>
                    </tr>
                    <tr>
                        <td class="form-group">Price</td>
                        <td><input type="text" name="price" class="form-control" placeholder="$"></td>
                    </tr>
                    <tr>
                        <td class="form-group">Type</td>
                        <td >
                        <select id="type" name="type" class="form-control">>
                            <option value="Pilih">Pilih</option>
                            <option value="DVD">DVD</option>
                            <option value="Book">Book</option>
                            <option value="Furniture">Furniture</option>
                        </select>
                        </td>
                    </tr>
                </table>
                <table id="description" >
                    <tr><td>Product Description</td></tr>
                    
                    <tr id="dvd" hidden>
                        <td class="form-group" width="25%">Size</td>
                        <td><input type="number" class="form-control" id="Size" placeholder="#size(MB)" name="size" ></td>
                    </tr>
                    <tr id="furniture" hidden>
                        <td class="form-group" width="25%">Height</td>
                        <td><input type="number" class="form-control" id="height" placeholder="#height(CM)" name="height" ></td>
                    </tr>
                    <tr id="furniture" hidden>
                        <td class="form-group">Width</td>
                        <td><input type="number" class="form-control" id="width" placeholder="#width(CM)" name="width" ></td>
                    </tr>
                    <tr id="furniture" hidden>
                        <td class="form-group">Length</td>
                        <td><input type="number" class="form-control" id="length" placeholder="#length(CM)" name="length" ></td>
                    </tr>
                    <tr id="book" hidden>
                        <td class="form-group" width="25%">Weight</td>
                        <td><input type="number" class="form-control" id="weight" placeholder="#weight(KG)" name="weight" ></td>
                    </tr>
                </table>
            </div>   
        </form>
    </div>

    <footer class="bg-dark navbar-dark">
    <div class="container-fluid">
                <a class="navbar-brand" href="#">Scandiweb Assignment</a>
            </div>
    </footer>
    </body>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
    <script type='text/javascript'>
    $(window).load(function(){
    $("#type").change(function() {
                console.log($("#type option:selected").val());
                if ($("#type option:selected").val() == 'Pilih') {
                    $("table[id=description]").prop('hidden', 'true');
                }else if ($("#type option:selected").val() == 'DVD') { 
                    $("tr[id=dvd]").prop('hidden', false);
                    $("tr[id=furniture]").prop('hidden', true);
                    $("tr[id=book]").prop('hidden', true);
                }else if ($("#type option:selected").val() == 'Furniture') { 
                    $("tr[id=furniture]").prop('hidden', false);
                    $("tr[id=dvd]").prop('hidden', true);
                    $("tr[id=book]").prop('hidden', true);
                }else {
                    $("tr[id=book]").prop('hidden', false);
                    $("tr[id=furniture]").prop('hidden', true);
                    $("tr[id=dvd]").prop('hidden', true);
                }
            });
    });
    </script>
</html>