<?php 
  $text = $_GET['text'];
  $img = $_GET['img'];
  $id = $_GET['slide'];
	$index = "active";
	$title = "Admin panel".$text;
	
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta property="og:type" content="website">
    <title><?php echo $title;?></title>
    <link href="./img/logo.webp" rel="icon" type="image/x-png">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="./css/style.css">
</head>
<body>
	<?php require("aHeader.php"); ?>
	<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
	  	<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
	        <h1 class="h4">Home page in update slide</h1>
	    </div>
                <form action="update.php" class="form-control" method="post" enctype="multipart/form-data">
                    <span class="fs-4">
                      <center class="text-success">
                        Slider <i class="fas fa-plus"></i>
                      </center>
                    </span>
                    <label for="slide">Image  <span class="text-danger">*</span></label>
                    <input type="file" name="slide" id="slide" class="form-control mt-3"  accept=".png, .jpg, .jpeg" > <img src="<?php echo $img ?>" width="150">
                    <input type="hidden" name="limg" value="<?php echo $img ?>">
                    <input type="hidden" name="id" value="<?php echo $id ?>">
                    <br>
                    <label for="text">Text <span class="text-danger">*</span></label>
                    <input type="text" name="text" id="text" value="<?php echo $text ?>" placeholder="Enter text please..." class="form-control mt-3" required>

                    <input type="submit" name="updateSlide" value="Save slide" class="btn btn-outline-success form-control mt-3 mb-3" required="">
                </form>
    
	  </main>
	<script>
    </script>
<script src="https://getbootstrap.com//docs/5.3/assets/js/color-modes.js"></script>

    <script src="./js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/feather-icons@4.28.0/dist/feather.min.js" integrity="sha384-uO3SXW5IuS1ZpFPKugNNWqTZRRglnUJK6UAZ/gxOX80nxEkN9NcGZTftn6RzhGWE" crossorigin="anonymous"></script><script src="https://cdn.jsdelivr.net/npm/chart.js@4.2.1/dist/chart.umd.min.js" integrity="sha384-gdQErvCNWvHQZj6XZM0dNsAoY4v+j5P1XDpNkcM3HJG1Yx04ecqIHk7+4VBOCHOG" crossorigin="anonymous"></script>
    <script src="./js/dashboard.js"></script>
</body>
</html>