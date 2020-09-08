
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>blog</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="css/prettyPhoto.css" rel="stylesheet" type="text/css" />
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/theme.css" rel="stylesheet">
    <link href="css/bootstrap-responsive.css" rel="stylesheet">
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
                    <a href="index.html">Home</a><span>/</span>Blog
                </div>
            </div>
            <div class="container">
                <div class="container d-flex align-items-center">


                    <form method="post" class="pb-5" action="insert.php" class="pt-5" enctype="multipart/form-data">
                        <div class="form-group">
                            <input type="text" class="form-control" name="username" width="50px" placeholder="name for project">

                        </div>


                        <div class="input-group">
                            <div class="custom-file">
                                <input type="File" name="Image" class="custom-file-input" id="inputGroupFile04" value="">
                                <label class="custom-file-label" for="inputGroupFile04">Choose file</label>
                            </div>
                        </div>
                        <hr>
                        <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>

                <!--WHERE id = 1-->


                <section>
                    <div class="row">
                        <div class="span8">
                            <?php

                            $conn = mysqli_connect("localhost:3308", "root", "", "portfolio");
                            $sql = "SELECT * FROM image";
                            if ($result = mysqli_query($conn, $sql)) {

                                if (mysqli_num_rows($result) > 0) {

                                    while ($row = mysqli_fetch_array($result)) {
                                        $id = $row['id'];
                                        $username = $row['title'];
                                        $Image = $row['image'];
                                        $display = <<<DELIMITER

            
        
        <div class="post">
                            	<h2 class="title"><a href="blog_post.php">$username</a></h2>
                           		<img src="uploads/$Image" alt="" />
                                <div class="post_info">
                                	<div class="fleft">On <span>12 Nov 2020</span> / $id <a href="#">Ilia</a> / Tags <a href="#">WordPress</a>, <a href="#">2020 jaar</a></div>
                                    <div class="fright"><a href="blog_post.php">5</a> Comments</div>
                                	<div class="clear"></div>
                                </div>
                                <p>Mijn vierde project in WordPress</p>
                                <a href="blog_post.php" class="arrow_link">Comments line</a>
                            </div>
    

DELIMITER;


                                        echo $display;
                                    }
                                } else {
                                    echo '<div class="alert alert-warning">nothing on list! Sorry</div>';
                                    exit;
                                }
                            } else {
                                echo '<div class="alert alert-warning">An error occured!</div>';
                                exit;
                                //    echo "ERROR: Unable to excecute: $sql." . mysqli_error($link);
                            }


                            ?>

                            <div class="pagination">
                                <ul>
                                    <li><a href="#">&larr;</a></li>
                                    <li class="active"><a href="#">10</a></li>
                                    <li class="disabled"><a href="#">...</a></li>
                                    <li><a href="#">20</a></li>
                                    <li><a href="#">&rarr;</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="span4">
                            <div class="sidebar">

                                <?php

                                $conn = mysqli_connect("localhost:3308", "root", "", "portfolio");
                                $sql = "SELECT * FROM chat ";
                                if ($result = mysqli_query($conn, $sql)) {

                                    if (mysqli_num_rows($result) > 0) {

                                        while ($row = mysqli_fetch_array($result)) {
                                            $id = $row['id'];
                                            $username = $row['username'];
                                            $skill1 = $row['skill1'];
                                            $skill2 = $row['skill2'];
                                            $skill3 = $row['skill3'];
                                            $display = <<<DELIMITER

            
        <div class="span3">
							<h2 class="title">Ik ben: $username mijn skills zijn:</h2>
							<div class="tags">
								<a href="javascript:void(0);">$skill1</a>
								<a href="javascript:void(0);">$skill2</a>
								<a href="javascript:void(0);">$skill3</a>
</div>
						</div>
        
        
    

DELIMITER;


                                            echo $display;
                                        }
                                    } else {
                                        echo '<div class="alert alert-warning">nothing on list! Sorry</div>';
                                        exit;
                                    }
                                } else {
                                    echo '<div class="alert alert-warning">An error occured!</div>';
                                    exit;
                                    //    echo "ERROR: Unable to excecute: $sql." . mysqli_error($link);
                                }


                                ?>


                                <div class="widget">
                                    <h2 class="title">Vertel ons</h2>
                                    <ul class="links">
                                        <li><a href="javascript:void(0);">Heb je een eigen stijl ontwikkeld en kun je daar iets over vertellen?</a></li>
                                        <li><a href="javascript:void(0);">Begin je op papier of direct op de computer?</a></li>
                                        <li><a href="javascript:void(0);">Begin je vaak opnieuw?</a></li>
                                        <li><a href="javascript:void(0);">Welke applicaties gebruik je om je ontwerpen uit te werken?</a></li>

                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>
    <!--//page_container-->

    <!--footer-->
    <?php include("includes/footer.php");?>
</body>
</html>
