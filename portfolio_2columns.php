<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>Portfolio</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="">
<meta name="author" content="">
<link href="css/prettyPhoto.css" rel="stylesheet" type="text/css" />
<link href="css/bootstrap.css" rel="stylesheet">
<link href="css/theme.css" rel="stylesheet">
<link href="css/bootstrap-responsive.css" rel="stylesheet">

<link href='http://fonts.googleapis.com/css?family=Cabin:400,700,400italic' rel='stylesheet' type='text/css'>
    <link rel="shortcut icon" href="images/portfolio/1.png">

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
					<a href="index.html">Home</a><span>/</span>Portfolio 2 columns
				</div>
			</div>
			<div class="container">

                <div class="row">
                    <!-- portfolio_block -->
                    <div class="projects">
                        <div class="span6 element category01 height_2column" data-category="category01">
                            <?php include ("includes/photo.php"); ?>
                        </div>
                        <div class="span6 element category02 height_2column" data-category="category02">
                            <?php include ("includes/photo2.php"); ?>
                        </div>
                       <div class="span6 element category03 height_2column" data-category="category03">
                           <?php include ("includes/photo3.php"); ?>
                        </div>
                        <div class="span6 element category01 height_2column" data-category="category01">
                            <?php include ("includes/photo4.php"); ?>
                        </div>

                        <div class="clear"></div>
                    </div>
                    <!-- //portfolio_block -->
                </div>
            </div>
        </div>
    <!--//MAIN CONTENT AREA-->

    </div>
    <!--//page_container-->

    <!--footer-->
        <?php include("includes/footer.php");?>
</body>
</html>
