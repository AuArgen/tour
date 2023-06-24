<?php 
	if(isset($_FILES['upload']['name']))
    {
     $file = $_FILES['upload']['tmp_name'];
     $file_name = $_FILES['upload']['name'];
     $file_name_array = explode(".", $file_name);
     $extension = end($file_name_array);
     $new_image_name = rand() . '.Daniel-More-info'. rand() .'.' . $extension;
    //  chmod('ok', 0777);
     $allowed_extension = array("jpg", "gif", "png","jpeg","pdf","doc","txt","doxc","docx","pptx","webp");
     $allowed_extension2 = array("pdf","doc","txt","doxc","docx","pptx");
         if(in_array($extension, $allowed_extension))
         {
          move_uploaded_file($file, './img/' . $new_image_name);
          $function_number = $_GET['CKEditorFuncNum'];
          if (in_array($extension, $allowed_extension2))$url = './img/' . $new_image_name;
          else $url = './img/' . $new_image_name;
          $message = '';
          echo "<script type='text/javascript'>window.parent.CKEDITOR.tools.callFunction($function_number, '$url', '$message');</script>";
        // echo "<script type='text/javascript'>alert($function_number, '$url', '');</script>";

         }
    }
?>