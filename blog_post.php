
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>blog post</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="">
<meta name="author" content="">
<link href="css/prettyPhoto.css" rel="stylesheet" type="text/css" />
<link href="css/bootstrap.css" rel="stylesheet">
<link href="css/theme.css" rel="stylesheet">
<link href="css/bootstrap-responsive.css" rel="stylesheet">
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
					<a href="index.html">Home</a><span>/</span>Blog post
				</div>
			</div>
			<div class="container">
                <section>
                	<div class="row pad5">
                    	<div class="span8">
                        	<div class="post">
                            	<img src="images/cmmnt.jpg" alt="" />

                                <?php

                                $conn = mysqli_connect("localhost:3308", "root", "", "portfolio");
                                $sql = "SELECT * FROM messages";
                                if ($result = mysqli_query($conn, $sql)) {

                                    if (mysqli_num_rows($result) > 0) {

                                        while ($row = mysqli_fetch_array($result)) {
                                            $id = $row['id_message'];
                                            $name = $row['name'];
                                            $text = $row['text'];
                                            $datum = $row['dt_add'];
                                            $display = <<<DELIMITER

            
        <p>$datum  </p>
                                <p>$text, <a href="#">$name</a></p>
        
    

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
                            </div>
                            <?php
                            require_once("connection/db.php");
                            if(count($_POST)>0) {
                                require_once("connection/db.php");
                                $sql = "INSERT INTO messages (name, text) VALUES ('" . $_POST["username"] . "','" . $_POST["text"] . "')";
                                mysqli_query($conn,$sql);
                                $current_id = mysqli_insert_id($conn);
                                if(!empty($current_id)) {
                                    $message = "New Comment Added Successfully";
                                }
                            }
                            ?>
                            <!-- Comments -->

                            <!-- //Comments -->

                            <!-- Leave a Comment -->
                            <style>input.btnSubmit {
                                    position: relative;
                                    display: inline-block;
                                    color: #777674;
                                    font-weight: bold;
                                    text-decoration: none;
                                    text-shadow: rgba(255,255,255,.5) 1px 1px, rgba(100,100,100,.3) 3px 7px 3px;
                                    user-select: none;
                                    padding: 1em 2em;
                                    outline: none;
                                    border-radius: 3px / 100%;
                                    background-image:
                                            linear-gradient(45deg, rgba(255,255,255,.0) 30%, rgba(255,255,255,.8), rgba(255,255,255,.0) 70%),
                                            linear-gradient(to right, rgba(255,255,255,1), rgba(255,255,255,0) 20%, rgba(255,255,255,0) 90%, rgba(255,255,255,.3)),
                                            linear-gradient(to right, rgba(125,125,125,1), rgba(255,255,255,.9) 45%, rgba(125,125,125,.5)),
                                            linear-gradient(to right, rgba(125,125,125,1), rgba(255,255,255,.9) 45%, rgba(125,125,125,.5)),
                                            linear-gradient(to right, rgba(223,190,170,1), rgba(255,255,255,.9) 45%, rgba(223,190,170,.5)),
                                            linear-gradient(to right, rgba(223,190,170,1), rgba(255,255,255,.9) 45%, rgba(223,190,170,.5));
                                    background-repeat: no-repeat;
                                    background-size: 200% 100%, auto, 100% 2px, 100% 2px, 100% 1px, 100% 1px;
                                    background-position: 200% 0, 0 0, 0 0, 0 100%, 0 4px, 0 calc(100% - 4px);
                                    box-shadow: rgba(0,0,0,.5) 3px 10px 10px -10px;
                                }
                                input.btnSubmit:hover {
                                    transition: .5s linear;
                                    background-position: -200% 0, 0 0, 0 0, 0 100%, 0 4px, 0 calc(100% - 4px);
                                }
                                input.btnSubmit:active {
                                    top: 1px;
                                }</style>



                            <div class="container ml-3 ">
                                <form class="" name="frmUser" method="post" action="" enctype="multipart/form-data">
                                    <div class="">
                                        <div class="message"></div>

                                        <table border="2" cellpadding="10" cellspacing="0" width="500" align="center" class="tblSaveForm">
                                            <tr class="tableheader">
                                                <td colspan="2" class="white">Zet jouw commentaar</td>
                                            </tr>
                                            <tr>
                                                <td><label>Username</label></td>
                                                <td><input type="text" name="username" class="txtField"></td>
                                            </tr>

                                            <td><label>Text</label></td>
                                            <td><input type="text" name="text" class="txtField pr-5"></td>
                                            </tr>
                                            <tr>
                                                <td colspan="2"><input type="submit" name="submit" value="Submit" class="btnSubmit"></td>
                                            </tr>
                                        </table>
                                    </div>
                                </form>
                            </div>
                            <!-- //Leave a Comment -->

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
