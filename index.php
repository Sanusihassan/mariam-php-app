<?php
include "info.php";
if (isset($_POST['submit'])) {
    $target_dir = getcwd() . "/files/";
    if (!file_exists($target_dir)) {
        mkdir($target_dir, 0777, true);
    }
    $target_file = $target_dir . basename($_FILES["pdf_file"]["name"]);
    if (move_uploaded_file($_FILES["pdf_file"]["tmp_name"], $target_file)) {
        // echo "The file " . basename($_FILES["pdf_file"]["name"]) . " has been uploaded.";
        // $sql = mysqli_query($link, "INSERT INTO `std` (`Id_ref`, `Id_pass`, `pdf_files`) VALUES ('$_POST[reference_number]','$_POST[Id_number]','$dst1')");
    } else {
        echo "Sorry, there was an error uploading your file.";
    }
}
?>

<html>

<head>


    <style>
        <?php include "style.css"; ?>
    </style>

</head>

<body>

    <header class="header">
        <div class="Address">
            <div class="text">
            </div>

            <div class="text1">

            </div>


            <div class="text1">

            </div>


        </div>


        <div class="LinkEng">

        </div>
    </header>

    <div class="container">


        <div class="verify-title">
        </div>

        <div class="inpbg">

            <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>" enctype="multipart/form-data">
                <div class="inpinfo">
                    <input type="text" placeholder="رقم المرجع" name="reference_number" autocomplete="off">
                    <input type="text" placeholder="رقم الهوية" name="Id_number" autocomplete="off">
                    <div class="file">
                        <input type="file" name="pdf_file" required="" />
                    </div>
                </div>
                <div class="btn">
                    <input type="submit" name="submit" value="إدخال البيانات">
                </div>
            </form>

        </div>



</body>

</html>