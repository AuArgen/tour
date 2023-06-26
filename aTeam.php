<?php 
	$ateam = "active";
	$title = "Admin panel Our team";
	
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
	        <h1 class="h4">Our team page</h1>
	    </div>
               
        	<br>		

		<form id="videos" action="save.php" class="form-control" method="post" enctype="multipart/form-data">
                    <span class="fs-4">
                      <center class="text-success">
                       	Add a new team member <i class="fas fa-plus"></i>
                      </center>
                    </span>
                     <label for="image">Image <span class="text-danger">*</span></label>
                    <input type="file" accept=".png, .jpg, .jpeg, .webp" name="image" id="image" class="form-control mt-3" required >
 
                    <label for="name">Name<span class="text-danger">*</span></label>
                    <input type="text" name="name" id="name"  placeholder="please enter name " class="form-control mt-3 mb-3"  required>
                     <label for="description">Description<span class="text-danger">*</span></label>
                    <textarea  name="description" id="description"  placeholder="please enter price " class="form-control mt-3 mb-3"  required> Enter description .. </textarea>
                   
                    <label for="whatsapp">Whatsapp<span class="text-danger">*</span></label>
                    <input type="tel" name="whatsapp" id="whatsapp"  placeholder="please enter whatsapp number " value="+996" class="form-control mt-3 mb-3"  required>
                    <br>
                    <label for="instagram">Instagram<span class="text-danger">*</span></label>
                    <input type="tel" name="instagram" id="instagram"  placeholder="please enter instagram link " value="" class="form-control mt-3 mb-3"  required>
                    <br>
                      <label for="facebook">Facebook<span class="text-danger">*</span></label>
                    <input type="tel" name="facebook" id="facebook"  placeholder="please enter facebook link " value="" class="form-control mt-3 mb-3"  required>
                    <br>

                    <input type="submit" name="team" value="Add a new team member " class="btn btn-outline-success form-control mt-3 mb-3" required="">
                </form>


       	<h2>Our team</h2>
     	<div class="table-responsive">
        <table class="table table-striped table-sm">
          <thead>
            <tr>
              <th scope="col">#</th>
              <th scope="col">Image</th>
              <th scope="col">Name</th>
              <th scope="col">Description</th>
              <th scope="col">Whatsapp</th>
              <th scope="col" class="text-center"><i class="fas fa-pen"> </i></th>
              <th scope="col" class="text-center"><i class="fas fa-trash"> </i></th>
            </tr>
          </thead>
          <tbody>
          <?php 
            $count = 1;
            if (mysqli_num_rows($team)) {
              while ($row = mysqli_fetch_array($team)) {
                echo '
                   <tr>
                    <td>'.$count++.'</td>
                    <td><img src="'.$row["img"].'" width="200"></td>
                    <td>'.$row["name"].'</td>
                    <td>'.$row["description"].'</td>
                    <td>'.$row["whatsapp"].'</td>
                    
                    <td class="text-center"><a class="btn btn-success fs-6" href="uTeam.php?id='.$row["id"].'"><i class="fas fa-pen" style="font-size:0.9rem;" ></i></a></td>
                    <td class="text-center"><a  class="btn btn-danger fs-6" href="delete.php?team='.$row["id"].'&img='.$row["img"].'" ><i class="fas fa-trash" style="font-size:0.9rem;"></i></a></td>
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