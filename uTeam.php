<?php 
	$ateam = "active";
	$title = "Admin panel Our team update";
	$id = $_GET["id"];

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
	<?php require("aHeader.php"); 
  $r = $conn -> query("SELECT * FROM tour.team WHERE id = $id");
  $name;
  $description;
  $img;
  $whatsapp;
  $instagram;
  $facebook;
  while($row = mysqli_fetch_array($r)) {
    $name = $row["name"];
    $description = $row["description"];
    $img = $row["img"];
    $whatsapp = $row["whatsapp"];
    $instagram = $row["instagram"];
    $facebook = $row["facebook"];
  }

  ?>
	<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
		
	  	<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
	        <h1 class="h4">Update <?php echo $name ?> </h1>
           <a href="aTeam.php" class="fa fa-arrow-left"> Back</a>

	    </div>
               
        	<br>		

		<form id="videos" action="update.php" class="form-control" method="get" enctype="multipart/form-data">
                    <span class="fs-4">
                      <center class="text-success">
                       	Update a new team member <i class="fas fa-pen"></i>
                      </center>
                    </span>
                     <label for="image">Image <span class="text-danger">*</span></label>
                    <input type="file" accept=".png, .jpg, .jpeg, .webp" name="image" id="image" class="form-control mt-3"   >
                    <br>  
                    <img src="<?php echo $img; ?>" width=220>
                    <input type="hidden" name="imgl" value="<?php echo $img; ?>">
                    <input type="hidden" name="id" value="<?php echo $id; ?>">
                    <br>

 
                    <label for="name">Name<span class="text-danger">*</span></label>
                    <input type="text" name="name" id="name"  placeholder="please enter name " class="form-control mt-3 mb-3" value=" <?php echo $name; ?> "  required>
                     <label for="description">Description<span class="text-danger">*</span></label>
                    <textarea  name="description" id="description"  placeholder="please enter price " class="form-control mt-3 mb-3"  required> <?php echo $description; ?> </textarea>
                   
                    <label for="whatsapp">Whatsapp<span class="text-danger">*</span></label>
                    <input type="tel" name="whatsapp" id="whatsapp"  placeholder="please enter whatsapp number " value="<?php echo $whatsapp; ?>" class="form-control mt-3 mb-3"  required>
                    <br>
                    <label for="instagram">Instagram<span class="text-danger">*</span></label>
                    <input type="tel" name="instagram" id="instagram"  placeholder="please enter instagram link " value="<?php echo $instagram; ?>" class="form-control mt-3 mb-3"  required>
                    <br>
                      <label for="facebook">Facebook<span class="text-danger">*</span></label>
                    <input type="tel" name="facebook" id="facebook"  placeholder="please enter facebook link " value="<?php echo $facebook; ?>" class="form-control mt-3 mb-3"  required>
                    <br>

                    <input type="submit" name="team" value="Save " class="btn btn-outline-success form-control mt-3 mb-3" required="">
                </form>



	  </main>
	<script>
		let iframes = document.querySelectorAll(".videoinfo iframe");
		for (var i = 0; i < iframes.length; i++) {
			iframes[i].style="width:240px; height:150px";
		}
        CKEDITOR.replace( 'editor', {
	          filebrowserUploadUrl: "./upload.php"
			});
    </script>
<script src="https://getbootstrap.com//docs/5.3/assets/js/color-modes.js"></script>

    <script src="./js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/feather-icons@4.28.0/dist/feather.min.js" integrity="sha384-uO3SXW5IuS1ZpFPKugNNWqTZRRglnUJK6UAZ/gxOX80nxEkN9NcGZTftn6RzhGWE" crossorigin="anonymous"></script><script src="https://cdn.jsdelivr.net/npm/chart.js@4.2.1/dist/chart.umd.min.js" integrity="sha384-gdQErvCNWvHQZj6XZM0dNsAoY4v+j5P1XDpNkcM3HJG1Yx04ecqIHk7+4VBOCHOG" crossorigin="anonymous"></script>
    <script src="./js/dashboard.js"></script>
</body>
</html>