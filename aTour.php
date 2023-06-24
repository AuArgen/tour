<?php 
	$atour = "active";
	$title = "Admin panel our tour";
	
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
	        <h1 class="h4">Tour page</h1>
	    </div>
               
        	<br>		

		<form id="videos" action="save.php" class="form-control" method="post" enctype="multipart/form-data">
                    <span class="fs-4">
                      <center class="text-success">
                       	New tour <i class="fas fa-plus"></i>
                      </center>
                    </span>
                     <label for="image">Image tour <span class="text-danger">*</span></label>
                    <input type="file" accept=".png, .jpg, .jpeg, .webp" name="image" id="image" class="form-control mt-3" required >
 
                    <label for="theme">Theme<span class="text-danger">*</span></label>
                    <input type="text" name="theme" id="theme"  placeholder="please enter theme " class="form-control mt-3 mb-3"  required>
                    <select name="styleClass" class="form-select mb-3" required>
                      <option value="">Change style blog</option>
                      <?php 
                        for ($i=0; $i < sizeof($styleClassWordA); $i++) { 
                          echo '<option value="'.($i+1).'">'.$styleClassWordA[$i].'</option>';
                        }
                      ?>
                    </select>
                    <label for="popular">Popular tour<span class="text-danger">*</span></label>
                    <input type="checkbox" name="popular" id="popular"  class="form-checkbox mt-3 mb-3">
                    <br>
                    <label for="best">Best tour<span class="text-danger">*</span></label>
                    <input type="checkbox" name="best" id="best"  class="form-checkbox mt-3 mb-3">
                    <br>
                    <textarea type="text" name="info" id="editor" placeholder="Please, enter information about your website" class="form-control mt-3" required>Text about the tour blog  </textarea>

                    <input type="submit" name="addTour" value="Add new tour" class="btn btn-outline-success form-control mt-3 mb-3" required="">
                </form>


       	<h2>Tours</h2>
     	<div class="table-responsive">
        <table class="table table-striped table-sm">
          <thead>
            <tr>
              <th scope="col">#</th>
              <th scope="col">image</th>
              <th scope="col">Theme</th>
              <th scope="col">Info</th>
              <th scope="col">Style</th>
              <th scope="col">Popular</th>
              <th scope="col">Best</th>
              <th scope="col" class="text-center"><i class="fas fa-plus"> </i></th>
              <th scope="col" class="text-center"><i class="fas fa-pen"> </i></th>
              <th scope="col" class="text-center"><i class="fas fa-trash"> </i></th>
            </tr>
          </thead>
          <tbody>
          <?php 
            $count = 1;
            if (mysqli_num_rows($tour)) {
              while ($row = mysqli_fetch_array($tour)) {
                echo '
                   <tr>
                    <td>'.$count++.'</td>
                    <td><img src="'.$row["img"].'" width="100"></td>
                    <td>'.$row["theme"].'</td>
                    <td> <div  style="max-height:200px; width:300px; overflow:scroll; ">'.$row["info"].'</div></td>
                    <td class= "">'. $styleClassWordA[$row["style"]-1].'</td>
                    <td class= "fs-4">'.($row["popular"]?"+":"-").'</td>
                    <td class= "fs-4">'.($row["best"]?"+":"-").'</td>
                    <td class="text-center"><a class="btn btn-success fs-6" href="addMoreTour.php?id='.$row["id"].'&theme='.$row["theme"].'"><i class="fas fa-plus" style="font-size:0.9rem;" ></i></a></td>
                    <td class="text-center"><a class="btn btn-success fs-6" href="uTour.php?id='.$row["id"].'"><i class="fas fa-pen" style="font-size:0.9rem;" ></i></a></td>
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