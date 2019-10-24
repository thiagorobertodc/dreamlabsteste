
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Teste DreamLabs</title>

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link rel="stylesheet" href="<?php echo base_url('/Assets/css/style.css')?>" >	

	<head>
<body>
	
		
		<div class="container">

		<?php
		   foreach ($Array as $value) {
		?>
			<div class="jumbotron">
			<a  target = '_blank' href="<?php echo base_url("posts/show/".$value["id"]) ?>">
			
				<h6 class="display-4"> <?php echo $value["title"] ?> </h6>
				
				<hr class="my-4">

				<p class="lead"> 
					<?php echo $value["body"]?>
				</p>
			
			</a>
			</div>
			<?php
				}
			?>
		</div>

		
	
</body>
</html>