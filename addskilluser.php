<?php
if(count($_POST)>0) {
    require_once("connection/db.php");
    $sql = "INSERT INTO chat (username, skill1, skill2, skill3) VALUES ('" . $_POST["username"] . "','" . $_POST["skill1"] . "','" . $_POST["skill2"] . "','" . $_POST["skill3"] . "')";
    mysqli_query($conn,$sql);
    $current_id = mysqli_insert_id($conn);
    if(!empty($current_id)) {
        $message = "New User met skills Added Successfully";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Exclusive</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="css/prettyPhoto.css" rel="stylesheet" type="text/css" />
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/theme.css" rel="stylesheet">
    <link href="css/bootstrap-responsive.css" rel="stylesheet">
    <link href="css/docs.css" rel="stylesheet">
    <link href="js/google-code-prettify/prettify.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/styles1.css" />
    <link rel="stylesheet" href="css/styles1.css">
    <link rel="stylesheet" href="css/style6.css">
    <link rel="shortcut icon" href="images/portfolio/1.png">

    <link href='http://fonts.googleapis.com/css?family=Cabin:400,700,400italic' rel='stylesheet' type='text/css'>

    <!--[if lt IE 9]>
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
</head>
<body>
<?php include("includes/boven.php") ?>
<!--//header-->

<!--page_container-->
<div class="page_container">
    <div class="wrap">
        <div class="breadcrumb">
            <div>
                <a href="index.html">Home</a><span>/</span>users<span>/</span>adduser
            </div>
        </div>
        <div class="container">
            <!-- Typography -->


        </div></div>
    <div class="container ml-3">
        <form class="" name="frmUser" method="post" action="" enctype="multipart/form-data">
            <div class="">
                <div class="message"><?php if(isset($message)) { echo $message; } ?></div>
                <div align="right" style="padding-bottom:5px;"><a href="listusers.php" class="link"><img alt='List' title='List' src='images/list.png' width='15px' height='15px'/> List User</a></div>
                <table border="0" cellpadding="10" cellspacing="0" width="500" align="center" class="tblSaveForm">
                    <tr class="tableheader">
                        <td colspan="2" class="white">Add New User</td>
                    </tr>
                    <tr>
                        <td><label>Username</label></td>
                        <td><input type="text" name="username" class="txtField"></td>
                    </tr>
                    <tr>
                        <td><label>Skill1</label></td>
                        <td><input type="text" name="skill1" class="txtField"></td>
                    </tr>
                    <td><label>Skill2</label></td>
                    <td><input type="text" name="skill2" class="txtField"></td>
                    </tr>
                    <td><label>Skill3</label></td>
                    <td><input type="text" name="skill3" class="txtField"></td>
                    </tr>
                    <tr>
                        <td colspan="2"><input type="submit" name="submit" value="Submit" class="btnSubmitt"></td>
                    </tr>
                </table>
            </div>
        </form>
    </div>
    <!--/MAIN CONTENT AREA-->

</div>
<!--//page_container-->

<!--footer-->

<!--//footer-->
<?php include("includes/footer.php");?>
</body>
</html>
