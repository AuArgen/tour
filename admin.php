<?php 
	$index = "active";
	$title = "Admin panel";
	
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
	        <h1 class="h4">Home page <a href="#slider">/Slider</a> - <a href="#sos">/Social</a> - <a href="#website">/Website</a> - <a href="#videos">/Videos about the tours</a>	</h1>
	    </div>
                <form id="slider" action="save.php" class="form-control" method="post" enctype="multipart/form-data">
                    <span class="fs-4">
                      <center class="text-success">
                        Slider <i class="fas fa-plus"></i>
                      </center>
                    </span>
                    <label for="slide">Image  <span class="text-danger">*</span></label>
                    <input type="file" name="slide" id="slide" class="form-control mt-3"  accept=".webp, .png, .jpg, .jpeg" required>
                    <label for="text">Text <span class="text-danger">*</span></label>
                    <input type="text" name="text" id="text" placeholder="Enter text please..." class="form-control mt-3" required>

                    <input type="submit" name="addSlide" value="Add new slide" class="btn btn-outline-success form-control mt-3 mb-3" required="">
                </form>
       	<h2>Slides</h2>
     	<div class="table-responsive">
        <table class="table table-striped table-sm">
          <thead>
            <tr>
              <th scope="col">#</th>
              <th scope="col">Image</th>
              <th scope="col">Text</th>
              <th scope="col" class="text-center"><i class="fas fa-pen"> Update</i></th>
              <th scope="col" class="text-center"><i class="fas fa-trash"> Delete</i></th>
            </tr>
          </thead>
          <tbody>
          <?php 
            $count = 1;
            if (mysqli_num_rows($slider)) {
              while ($row = mysqli_fetch_array($slider)) {
                echo '
                   <tr>
                    <td>'.$count++.'</td>
                    <td><img src="'.$row["img"].'" width="150" height="100"></td>
                    <td>'.$row["text"].'</td>
                    <td class="text-center"><a class="btn btn-success fs-6" href="slideU.php?slide='.$row["id"].'&img='.$row["img"].'&text='.$row["text"].'"><i class="fas fa-pen" style="font-size:0.9rem;" ></i></a></td>
                    <td class="text-center"><a  class="btn btn-danger fs-6" href="delete.php?slide='.$row["id"].'&img='.$row["img"].'"><i class="fas fa-trash" style="font-size:0.9rem;"></i></a></td>
                  </tr>
                ';
              }
            }
          ?>
          </tbody>
        </table>
      </div>


		<hr>
		<form id="sos" action="update.php" class="form-control" method="post" enctype="multipart/form-data">
                    <span class="fs-4">
                      <center class="text-success">
                        Social link <i class="fas fa-plus"></i>
                      </center>
                    </span>
                    
                    <label for="whatsapp">Enter whatsapp number please <span class="text-danger">*</span></label>
                    <input type="text" name="whatsapp" id="whatsapp" value="<?php echo $socialA["whatsapp"];?>" placeholder="+996" class="form-control mt-3" min =12 required>

                    <label for="phone">Enter phone number please <span class="text-danger">*</span></label>
                    <input type="tel" name="phone" id="phone" value="<?php echo $socialA["phone"];?>" placeholder="+996" class="form-control mt-3" min =12 required>

                    <label for="instagram">Enter instagram link please <span class="text-danger">*</span></label>
                    <input type="text" name="instagram" id="instagram" value="<?php echo $socialA["instagram"];?>" placeholder="https:/instagram.com/..." class="form-control mt-3" required>

                    <label for="tiktok">Enter tiktok link please <span class="text-danger">*</span></label>
                    <input type="text" name="tiktok" id="tiktok" value="<?php echo $socialA["tiktok"];?>" placeholder="https:/tiktok.com/..." class="form-control mt-3" required>

                    <input type="submit" name="updateSos" value="Save" class="btn btn-outline-success form-control mt-3 mb-3" required="">
                </form>
          <br>
         <hr>
         <br>
		<form id="website" action="update.php" class="form-control" method="post" enctype="multipart/form-data">
                    <span class="fs-4">
                      <center class="text-success">
                        Website info <i class="fas fa-plus"></i>
                      </center>
                    </span>
                    
                    <label for="name">Name website<span class="text-danger">*</span></label>
                    <input type="text" name="name" id="name" value="<?php echo $websiteA["name"];?>" placeholder="please enter website name " class="form-control mt-3"  required>

                    <label for="info">Info about the website <span class="text-danger">*</span></label>
                    <textarea type="text" name="info" id="info" placeholder="Please, enter information about your website" class="form-control mt-3" required> <?php echo $websiteA["info"];?> </textarea>

                    <label for="logo">Your website logo <span class="text-danger">*</span></label>
                    <input type="file" accept=".png, .jpg, .jpeg, .webp" name="logo" id="logo" class="form-control mt-3" >
                    <img src="<?php echo 	$websiteA["logo"] ;?>" width="150">
                   	<input type="hidden" name="logol" value="<?php echo$websiteA["logo"] ;?>">

                    <input type="submit" name="updateWebsite" value="Save" class="btn btn-outline-success form-control mt-3 mb-3" required="">
        </form>
        	<br>	
        	<hr>
        	<br>		

		<form id="videos" action="save.php" class="form-control" method="post" enctype="multipart/form-data">
                    <span class="fs-4">
                      <center class="text-success">
                       	Videos about the tours <i class="fas fa-plus"></i>
                      </center>
                    </span>
                    
                    <label for="theme">Theme<span class="text-danger">*</span></label>
                    <input type="text" name="theme" id="theme"  placeholder="please enter theme " class="form-control mt-3"  required>

                     <label for="iframe">Video<span class="text-danger">*</span></label>
                    <input type="text" name="iframe" id="iframe"  placeholder="please enter youtube video code " class="form-control mt-3 mb-3"  required>

                    <textarea type="text" name="info" id="editor" placeholder="Please, enter information about your website" class="form-control mt-3" required>Full text about the video  </textarea>

                    <input type="submit" name="addVideoInfo" value="Add new video info" class="btn btn-outline-success form-control mt-3 mb-3" required="">
                </form>


       	<h2>Video about the tour</h2>
     	<div class="table-responsive">
        <table class="table table-striped table-sm">
          <thead>
            <tr>
              <th scope="col">#</th>
              <th scope="col">Video</th>
              <th scope="col">Theme</th>
              <th scope="col">Info</th>
              <th scope="col" class="text-center"><i class="fas fa-pen"> </i></th>
              <th scope="col" class="text-center"><i class="fas fa-trash"> </i></th>
            </tr>
          </thead>
          <tbody>
          <?php 
            $count = 1;
            if (mysqli_num_rows($videoInfo)) {
              while ($row = mysqli_fetch_array($videoInfo)) {
                echo '
                   <tr>
                    <td>'.$count++.'</td>
                    <td class="videoinfo">'.$row["iframe"].'</td>
                    <td>'.$row["theme"].'</td>
                    <td> <div  style="height:200px; width:400px; overflow:scroll; ">'.$row["info"].'</div></td>
                    <td class="text-center"><a class="btn btn-success fs-6" href="videoinfo.php?videoinfo='.$row["id"].'"><i class="fas fa-pen" style="font-size:0.9rem;" ></i></a></td>
                    <td class="text-center"><a  class="btn btn-danger fs-6" href="delete.php?videoinfo='.$row["id"].'" ><i class="fas fa-trash" style="font-size:0.9rem;"></i></a></td>
                  </tr>
                ';
              }
            }
          ?>
          </tbody>
        </table>
      </div>


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