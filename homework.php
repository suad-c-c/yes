<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles2.css">
    <title>our store</title>
</head>
<body>
    <h1 class="header">Welcome to our store</h1>
    <p class="dic"> Welcome user to our store here you can Customize your PC choose so what is good for you!</p><br><br>
<div class="form">
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" enctype="multipart/form-data">
    <label for="textbar" class="textbar">Enter a any advice:</label><br>
<input type="text" name="textbar" class="textbar1"><br><br><br><br>

<label>Enter a what a CPU do you need:</label><br><br>
<input type="radio" name="cpu"  value="i5 core">
<label for="cpu1">i5 core</label>
<input type="radio" name="cpu"  value="i7 core">
<label for="cpu2">i7 core</label>
<input type="radio" name="cpu"  value="i9 core">
<label for="cpu3">i9 core</label><br><br><br>


<label>Enter a what a RAM do you need:</label><br><br>
<input type="radio"  value="8 RAM" name="RAM">
<label for="RAM1">8 RAM</label>
<input type="radio"  value="16 RAM" name="RAM">
<label for="RAM2">16 RAM</label>
<input type="radio" value="32 RAM" name="RAM">
<label for="RAM3">32 RAM</label><br><br><br>

<label for="Graphiccard">Enter what Graphic card do you need:</label>
<select name="Graphiccard">
<option nmae="Graphiccard">RTX4070</option>
<option nmae="Graphiccard">RTX3050</option>
<option nmae="Graphiccard">RTX3060</option>
<option nmae="Graphiccard">RTX1650</option>
</select><br><br><br><br>

<label for="imge">Enter a photo to the PC case :</label>
<input type="file" name="case"><br><br>

<input type="submit" name="submit" value="Purchase"><br><br>

</form>

</div>

<?php
if(isset($_POST['submit'])){
    $adv = $_POST['textbar'];
    $gc = $_POST['Graphiccard'];

    if (!empty($adv)) {
        echo 'the advice is:  '.$adv."<br><br>";
    } else {
        echo 'No advice entered.<br><br>';
    }

    if (isset($_POST['cpu'])) {
        $cpu = $_POST['cpu'];
        echo 'the CPU is: '.$cpu."<br><br>";
    } else {
        echo 'No CPU is chosen.<br><br>';
    }

    if (isset($_POST['RAM'])) {
        $ram = $_POST['RAM'];
        echo 'the RAM you need is: '.$ram."<br><br>";
    } else {
        echo 'No RAM is chosen.<br><br>';
    }

    if (!empty($gc)) {
        echo 'the Graphic card is: '.$gc."<br><br>";
    } else {
        echo 'No Graphic card is chosen.<br><br>';
    }

    $filelocation ='img';
    $filename=basename($_FILES["case"]["name"]);
    $file_path=$filelocation . $filename;
    move_uploaded_file ($_FILES["case"]["tmp_name"],$file_path);
    echo'<img src="'.$file_path.'" width=150 height=150>';
}
    ?>

</body>
</html>