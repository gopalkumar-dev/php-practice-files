<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Conditions & Booleans</title>
</head>
<body>
    <?php 
    $bookname = 'Clean Code';
    $isBestBook = true;

    if ($isBestBook) {
        $message = "The Best Programming Book is - $bookname";
    } else {
        $message = 'This is not a Best Programming Book';
    }

    
    ?>
    <h1>
        <?= $message?>
    </h1>
    
    <!-- Making Result System using Conditions & Boolean  -->

    <?php 
    $number = 80;

    if ($number >= 80) {
        $result = 'You Got A+';
    }
    elseif ($number >= 70) {
        $result = 'You Got A';
    }
    elseif ($number >= 60) {
        $result = 'You Got A-';
    }
    elseif ($number >= 50) {
        $result = 'You Got B';
    }
    elseif ($number >= 40) {
        $result = 'You Got C';
    }
    elseif ($number >= 33) {
        $result = 'You Passed';
    }
    elseif ($number < 33) {
        $result = 'You Failed';
    }
    
    ?>    
    
    <h4>
        <?= "Your Result is--- $result"; ?>
    </h4>


    
</body>
</html>