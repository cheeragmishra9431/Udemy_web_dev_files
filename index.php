<?php
 include 'db.php';
?>
<?php
    $query='SELECT * FROM messages order by create_date desc';
    $messages=mysqli_query($conn, $query);

    if(isset($_GET['action']) && isset($_GET['id'])){
        if($_GET['action']=='delete'){
            $id=$_GET['id'];

            $query="DELETE from messages where id=$id ";

            if(!mysqli_query($conn, $query)){
                die(mysqli_error($conn));
    
            }
            else{
    
                header("Location: index.php?success=message%20removed");
            }
        }
    }

    if(isset($_GET['error'])){
        $error=$_GET['error'];
    }
    if(isset($_GET['success'])){
        $success=$_GET['success'];
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/styles.css">

</head>
<body>
    <div class="container">
        <header>
            <h1>Message app</h1>
            <?php if(isset($error)): ?>
                <div class='alert'> <?php echo $error; ?></div>
            <?php endif; ?>    
            <?php if(isset($success)): ?>
                <div class='success'> <?php echo $success; ?></div>
            <?php endif; ?>    
        </header>
        <div class="main">
            <form method='POST' action='process.php'>
                
                <input type="text" name='text' placeholder='enter message text'>
                <input type="text" name='user' placeholder='enter username'>
                <input type="submit" value='submit'>
            </form>
            <hr>
            <ul class='messages'>
                <?php while($row =mysqli_fetch_assoc($messages)): ?>
                <li><?php echo $row['text'];?>| <?php echo $row['user']?>|<?php echo $row['create_date']; ?> - <a href="index.php?action=delete&id=<?php echo $row['id'];?>">X</a></li>
                <?php endwhile; ?>
            </ul>
        </div>
        <footer>
            Message app &copy; 2016
        </footer>
    </div>
</body>
</html>