<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register form</title>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

</head>
<body>
    <div class="w3-card w3-margin w3 padding">
        <?php
            if( isset($_GET['error'])):?>
                <div class="w3-container w3-red">
                
                <p><?php echo $_GET['error'] ?></p>
                </div> 
        <?php endif; ?>    
         <h2>register</h2>
        <form class="w3-container" method="POST" action="register.php">
            <label class="w3-label w3-text-blue">First Name</label>
            <input name="first_name" type="text" class="w3-input w3-border"> <br>
            <label class="w3-label w3-text-blue">Last Name</label>
            <input name="last_name" type="text" class="w3-input w3-border"> <br>
            <label class="w3-label w3-text-blue">E-mail</label>
            <input name="email" type="text" class="w3-input w3-border"> <br>
            <label class="w3-label w3-text-blue">Location</label>
            <select name="location" classs="w3-input w3-border" name="" id="">
                <option value="Location 1">Location 1</option>
                <option value="Location 2">Location 2</option>
                <option value="Location 3">Location 3</option>
            </select> <br>
            <input type="submit" value="submit">
        </form>
    </div>
</body>
</html>