<?php 
  require("./conn.php");
  $id = $_GET["id"];
  $theme = $_GET["theme"];
  $type = 1;
  $moreInfo = $conn -> query("SELECT * FROM moreinfo WHERE id_cate = $id and type = 1");
  $page = "save.php";
  $moreInfoA = array("info" => "Enter text or images or youtube video", "id" => 0, "id_cate" => $id, "type" => 1);
  if (mysqli_num_rows($moreInfo)) {
    while ($r = mysqli_fetch_array($moreInfo)) {
      $page = "update.php";
      $moreInfoA = array("info" => $r["info"], "id" => $r["id"], "id_cate" => $id, "type" => 1);
    }
  }
	$atour = "active";
	$title = "Admin panel add more info";
	
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
	        <h1 class="h4">Add more infomation about the  <?php echo 'tour '.$theme; ?></h1>
          <a href="aTour.php" class="fa fa-arrow-left"> Back</a>
          
	    </div>
        	<br>		

		<form id="videos" action="<?php echo $page; ?>" class="form-control" method="post" enctype="multipart/form-data">
                    <span class="fs-4">
                      <center class="text-success">
                       	More infomation <i class="fas fa-plus"></i>
                      </center>
                    </span>
                    <input type="hidden"  name="id" value="<?php echo $moreInfoA["id"]; ?>">
                    <input type="hidden"  name="id_cate" value="<?php echo $moreInfoA["id_cate"]; ?>">
                    <input type="hidden"  name="type" value="<?php echo $moreInfoA["type"]; ?>">
                    <textarea type="text" name="info" id="editor" placeholder="Please, enter information about your website" class="form-control mt-3" required> <?php echo $moreInfoA["info"]; ?>   </textarea>

                    <input type="submit" name="tourMoreInfo" value="Save" class="btn btn-outline-success form-control mt-3 mb-3" required="">
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