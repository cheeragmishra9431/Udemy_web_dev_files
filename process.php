<?php include 'db.php' ?>
<?php
    if(!empty($_POST['text']) && !empty($_POST['user'])){
        $text=mysqli_real_escape_string($conn, $_POST['text']);
        $user=mysqli_real_escape_string($conn, $_POST['user']);

        $query="INSERT INTO messages(text,user) VALUES('$text',' $user')";

        if(!mysqli_query($conn, $query)){
            die(mysqli_error($conn));

        }
        else{

            header("Location: index.php?success=message%20added");
        }
    }
    else{
        header("Location: index.php?error=Please%20Fill%20in%20all%20fields");
    }
?>