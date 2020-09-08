<?php
require_once("connection/db.php");
$sql = "SELECT * FROM userss ORDER BY id DESC";
$result = mysqli_query($conn,$sql);
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>listusers</title>
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
					<a href="index.html">Home</a><span>/</span>listusers
				</div>
			</div>
			<div class="container">

        </div>
            <form name="frmUser" method="post" action="">
                <div style="width:500px;">
                    <div class="message"><?php if(isset($message)) { echo $message; } ?></div>
                    <div align="right" style="padding-bottom:5px;"><a href="adduser.php" class="link"><img alt='Add' title='Add' src='images/add.png' width='15px' height='15px'/> Add User</a></div>
                    <table border="0" cellpadding="10" cellspacing="1" width="500" class="tblListForm">
                        <tr class="listheader">
                            <td>username</td>
                            <td>name</td>
                            <td>email</td>
                            <td>CRUD Actions</td>
                        </tr>
                        <?php
                        $i=0;
                        while($row = mysqli_fetch_array($result)) {
                            if($i%2==0)
                                $classname="evenRow";
                            else
                                $classname="oddRow";
                            ?>
                            <tr class="<?php if(isset($classname)) echo $classname;?>">
                                <td><?php echo $row["username"]; ?></td>
                                <td><?php echo $row["name"]; ?></td>
                                <td><?php echo $row["email"]; ?></td>
                                <td><a href="edituser.php?id=<?php echo $row["id"]; ?>" class="link"><img alt='Edit' title='Edit' src='images/edit.png' width='15px' height='15px' hspace='10' /></a>  <a href="deleteusers.php?id=<?php echo $row["id"]; ?>"  class="link"><img alt='Delete' title='Delete' src='images/delete.png' width='15px' height='15px'hspace='10' /></a></td>
                            </tr>
                            <?php
                            $i++;
                        }
                        ?>
                    </table>
            </form>
    </div>
    <!--//page_container-->

    <!--footer-->
        <?php include("includes/footer.php");?>
</body>
</html>
