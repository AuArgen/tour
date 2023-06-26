<?php 
	$aabout = "active";
	$title = "Admin panel About";
	
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
		 <?php 
          if (isset($_SESSION["adding"])) {
              if ($_SESSION["adding"] != "") {
                  echo '
                      <div class="addCete alert alert-success" role="alert">
                          '.$_SESSION["adding"].' added successfully!!!
                      </div>
                  ';
                  unset($_SESSION["adding"]);
              }
          }
          if (isset($_SESSION["removing"])) {
              if ($_SESSION["removing"] != "") {
                  echo '
                      <div class="addCete alert alert-danger" role="alert">
                         '.$_SESSION["removing"].' deleted successfully!!!
                      </div>
                  ';
                  unset($_SESSION["removing"]);
              }
          }

           if (isset($_SESSION["updated"])) {
              if ($_SESSION["updated"] != "") {
                  echo '
                      <div class="addCete alert alert-success" role="alert">
                           '.$_SESSION["updated"].' updated successfully!!!
                      </div>
                  ';
                  unset($_SESSION["updated"]);
              }
          }
           if (isset($_SESSION["error"])) {
              if ($_SESSION["error"] != "") {
                  echo '
                      <div class="addCete alert alert-danger" role="alert">
                         Error information!!!
                      </div>
                  ';
                  unset($_SESSION["error"]);
              }
          }
      ?>
	  	<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
	        <h1 class="h4">About page</h1>
	    </div>
               
        	<br>		

		<form id="videos" action="update.php" class="form-control" method="get" enctype="multipart/form-data">
                    <span class="fs-4">
                      <center class="text-success">
                       	About us infromation <i class="fas fa-pen"></i>
                      </center>
                    </span>
                     
                    <br>
                    <textarea type="text" name="info" id="editor" placeholder="Please, enter information about your website" class="form-control mt-3" required> <?php echo $aboutInfo ?>  </textarea>

                    <input type="submit" name="about" value="Save" class="btn btn-outline-success form-control mt-3 mb-3" required="">
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