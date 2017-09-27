<html>
  <body>
    Text Output:

  <?php

  //if($_POST['formSubmit'] == "Submit")
  //{
    //insert logic for text color
     $textColor = $_POST['textColor'];
     //insert logic for bg color
     $bgColor = $_POST['bgColor'];
     $fontfamilies = $_POST['fontfamilies'];
     $textentry = $_POST['textentry'];
     //$textentry = "potato";
     $errorMessage = "";


     //insert logic for bg color
     //insert logic for font family

     //echo "<p><font color=\"$textColor\">$textentry $textColor</font></p>";
     //echo "<p>potato</p>";
     echo "<p><span style=\"color: $textColor; background-color: $bgColor; font-family: $fontfamilies;\">$textentry</span></p>"
  //}
  ?>
  </body>
</html>
