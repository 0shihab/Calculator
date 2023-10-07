<?php include "database.php"; 
?>
<?php
$sql= "SELECT * FROM calculation";
$query= mysqli_query($con, $sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculator in PHP using MySQL</title>
    <link rel="stylesheet" href="CSS/style.css">
</head>
<body>
    <div class="container">
        <header>
            <h1>Calculator in PHP using MySQL</h1>
        </header>
        <div class="display">
            <ul>
                <li class="output">
                <?php while ($row = mysqli_fetch_assoc($query)) : ?>
                  <span><?php echo $row['number1'];?></span>
                  <span><?php echo $row['operator'];?></span>
                  <span><?php echo $row['number2'];?></span>
                  <span>=</span>
                  <span><?php echo $row['result'];?></span>
                  <?php endwhile; ?>
                </li>
            </ul>
        </div>
        <div class="input">
            <form class="" action="process.php" method="post">
              <input type="number" name="input1" placeholder="Enter 1st Number">
              <input type="number" name="input2" placeholder="Enter 2nd Number">
              <select name="operator">
                <option value="">+</option>
                <option value="">-</option>
                <option value="">*</option>
                <option value="">/</option>
                <option value="">%</option>
              </select>
              <input type="submit" name="submit" value="Submit">
              </form>
        </div>
    </div>
</body>
</html>