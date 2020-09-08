<?php
require_once("connection/db.php");
error_reporting(0); //zal verwijderen!
if(count($_POST)>0) {
    $sql = "UPDATE chat SET username='" . $_POST["username"] . "', skill1='" . $_POST["skill1"] . "', skill2='" . $_POST["skill2"] . "', skill3='" . $_POST["skill3"] . "' WHERE id='" . $_POST["id"] . "'";
    mysqli_query($conn,$sql);
    $message = "Record Modified Successfully";
}
$select_query = "SELECT * FROM chat WHERE id='" . $_GET["id"] . "'";
$result = mysqli_query($conn,$select_query);
$row = mysqli_fetch_array($result);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>editskill</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/theme.css" rel="stylesheet">
    <link href="css/bootstrap-responsive.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/styles1.css" />
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
                <a href="index.html">Home</a><span>/</span>editskill
            </div>
        </div>
        <form name="frmUser" method="post" action="">
            <div style="width:500px;">
                <div class="message"><?php if(isset($message)) { echo $message; } ?></div>
                <div align="right" style="padding-bottom:5px;"><a href="skills.php" class="link"><img alt='List' title='List' src='images/list.png' width='15px' height='15px'/> List Skills</a></div>
                <table border="0" cellpadding="10" cellspacing="0" width="500" align="center" class="tblSaveForm">
                    <tr class="tableheader">
                        <td colspan="2">Edit User</td>
                    </tr>
                    <tr>
                        <td><label>Username</label></td>
                        <td><input type="hidden" name="id" class="txtField" value="<?php echo $row['id']; ?>"><label>
                                <input type="text" name="username" class="txtField" value="<?php echo $row['username']; ?>">
                            </label></td>
                    </tr>
                    <tr>
                        <td><label>Skill 1</label></td>
                        <td><input type="text" name="skill1" class="txtField" value="<?php echo $row['skill1']; ?>"></td>
                    </tr>
                    <td><label>Skill 2</label></td>
                    <td><input type="text" name="skill2" class="txtField" value="<?php echo $row['skill2']; ?>"></td>
                    </tr>
                    <td><label>Skill 3</label></td>
                    <td><input type="text" name="skill3" class="txtField" value="<?php echo $row['skill3']; ?>"></td>
                    </tr>
                    <tr>
                        <td colspan="2"><input type="submit" name="submit" value="Submit" class="btnSubmitt"></td>
                    </tr>
                </table>
            </div>
        </form>
    </div>
</div>
<!--//page_container-->

<!--footer-->
<?php include("includes/footer.php");?>
</body>
</html>
