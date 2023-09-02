

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Display PDF</title>
    <style media="screen">
      embed{
        border:3px ;
        margin-top: 30px;
      }
      .div{
        margin-left: 170px;
      }
    </style>
  </head>
  <body>
  <input type="submit" name="submit" value="submit">
    <div class="div">

      <?php
      if (isset($_POST["submit"]))
      {
      include 'info.php';
      $files = mysql_escape_string($con, $_POST['pdf_files']);

      
      // don't forget to change the column_name and value with your own valus
      $sql = "SELECT * FROM std WHERE pdf_files = $files";
      $query = mysql_query($con, $sql);
      while ($info = mysql_fetch_array($query)) {
        echo '<object data="./files/' . $info['pdf_files'] . '" type="application/pdf" width="300" height="900"></object>';
      }
    }
      ?>

    </div>

  </body>
</html>
