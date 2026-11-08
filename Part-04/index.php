<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Class 04</title>
</head>
<body>
    <h2>Best Programming Books</h2>
    <?php 
    $books = [
        'Code by Charles Petzold',
        'Eloquent JavaScript by Marijn Haverbeke',
        'Python Crash Course by Eric Matthes',
        'Head First Java by Kathy Sierra and Bert Bates',
        'Grokking Algorithms by Aditya Bhargava'
    ];
    
    ?>
    <ol>
        <?php foreach ($books as $book) :?>
        <li><?= $book?></li>
        <?php endforeach;?>    
    </ol>


    <h2>Best Fruits</h2>
    <?php
    $fruits = [
        'Orange',
        'Guava',
        'Sugarcane',
        'Mango'
    ];
    ?>        
    <ol>
        <?php foreach ($fruits as $fruit) : ?>
        <li><?= $fruit?></li>
        <?php endforeach;?>
    </ol>

</body>
</html>