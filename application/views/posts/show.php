<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Teste DreamLabs</title>

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link rel="stylesheet" href="<?php echo base_url('/Assets/css/style.css')?>" >	

	<head>
<body>
   
        <div class="container detalhes">
            <div class="row">
                <div class="col-md-10">
                    <h6 class="display-4"> <?php echo $post["title"] ?> </h6>
                    
                    <hr class="my-4">

                    <p class="lead"> 
                        <?php echo $post["body"]?>
                    </p>
                </div>
            </div>
        </div>
</body>
</html>