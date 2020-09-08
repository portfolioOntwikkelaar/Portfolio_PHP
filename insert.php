<?php




if(isset($_POST['submit'])){

    $username = $_POST['username'];
    $Image     = $_FILES["Image"]["name"];
    $Target    = "uploads/".basename($_FILES["Image"]["name"]);
    $conn = mysqli_connect("localhost:3308", "root", "", "portfolio");
    $sql = "INSERT INTO image (`name`, `image`) VALUES
   ('$username', '$Image')";
    move_uploaded_file($_FILES["Image"]["tmp_name"],$Target);



    $result = mysqli_query($conn, $sql);
    if(!$result){
        header("Location:blog.php?failed");
    }else{
        header("Location:blog.php?success");
    }

}


?>
