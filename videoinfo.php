<?php 
    require("./conn.php");
  $id = $_GET['videoinfo'];
  $videoinfo = $conn -> query("SELECT * FROM tour.videoinfo WHERE id = '$id'");
  $iframe;
  $theme;
  $info;
  if (mysqli_num_rows($videoinfo)) {
      while ($r = mysqli_fetch_array($videoinfo)) {
        $info = $r["info"];
        $theme = $r["theme"];
        $iframe = $r["iframe"];
      }
  }
	$index = "active";
	$title = "Admin panel".$theme;
	
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
	        <h1 class="h4">Home page in update video information update </h1>
	    </div>
                <form action="update.php" class="form-control" method="post" enctype="multipart/form-data">
                    <span class="fs-4">
                      <center class="text-success">
                        Video information about the tour  <i class="fas fa-pen"></i>
                      </center>
                    </span>
                    <label for="theme">Theme<span class="text-danger">*</span></label>
                    <input type="text" name="theme" id="theme" value="<?php echo  $theme; ?> " placeholder="please enter theme " class="form-control mt-3"  required>

                     <label for="iframe">Video<span class="text-danger">*</span></label>
                    <input type="text" name="iframe" id="iframe" value='<?php echo  $iframe; ?> '  placeholder="please enter youtube video code " class="form-control mt-3 mb-3"  required>
                    <?php echo  $iframe; ?> 
                      <span class="mb-5"></span>
                    <textarea type="text" name="info" id="editor" placeholder="Please, enter information about your website" class="form-control mt-3" required> <?php echo  $info; ?>  </textarea>
                      <input type="hidden" name="id" value="<?php echo  $id; ?> ">
                    <input type="submit" name="updateVideoInfo" value="Save" class="btn btn-outline-success form-control mt-3 mb-3" required="">
                </form>
    
	  </main>
	<script>
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