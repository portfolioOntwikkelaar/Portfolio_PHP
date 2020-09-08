<?php




if(isset($_POST['submit'])){

    $name = $_POST['name'];
    $text     = $_POST["text"];

    $conn = mysqli_connect("localhost:3308", "root", "", "portfolio");
    $sql = "INSERT INTO messages (`name`, `text`) VALUES
   (NULL,'$name', '$text', CURRENT_TIMESTAMP, '0', '')";




    $result = mysqli_query($conn, $sql);
    if(!$result){
        header("Location:blog_post.php?failed");
    }else{
        header("Location:blog_post.php?success");
    }

}


?>
