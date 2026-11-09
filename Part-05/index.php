<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Class 05</title>
</head>
<body>
    <h2>Best Programming Books</h2>
    <?php 
    $books = [
        [
            'name'=> 'Code',
            'author'=> 'Charles Petzold',
            'purchaseURL'=> 'https://test.com'
        ],

        [
            'name'=> 'Eloquent JavaScript',
            'author'=> 'Marijn Haverbeke',
            'purchaseURL'=> 'https://test1.com'
        ],

        [
            'name'=> 'Python Crash Course',
            'author'=> 'Eric Matthes',
            'purchaseURL'=> 'https://test2.com'
        ],

        [
            'name'=> 'Head First Java',
            'author'=> 'Kathy Sierra and Bert Bates',
            'purchaseURL'=> 'https://test3.com'
        ],

        [
            'name'=> 'The Pragmatic Programmer',
            'author'=> 'Hunt and Thomas',
            'purchaseURL'=> 'https://test4.com'
        ]

    ];
    
    ?>

    <ol>
        <?php foreach ($books as $book) : ?>
        <a href="<?= $book['purchaseURL']; ?>">
            <li><?= $book['author'] ?></li>
        </a>
        <?php endforeach;?>
    </ol>
    
    <h2>Best Selling Fruits</h2>
    <?php 
    $fruits = [
        [
            'name' => 'Orange',
            'price' => 'Rs. 300',
            'location' => 'Kolkata',
            'farmer' => 'Nayla Baba',
            'purchaseLink' => 'http:/link.com'
        ],

        [
            'name' => 'Apple',
            'price' => 'Rs. 400',
            'location' => 'Malda',
            'farmer' => 'Gopal',
            'purchaseLink' => 'http:/link1.com'
        ],

        [
            'name' => 'Grapes',
            'price' => 'Rs. 350',
            'location' => 'Darjeeling',
            'farmer' => 'Alok',
            'purchaseLink' => 'http:/link2.com'
        ],

        [
            'name' => 'Guava',
            'price' => 'Rs. 80',
            'location' => 'Durgapur',
            'farmer' => 'Alok',
            'purchaseLink' => 'http:/link3.com'
        ],

    ];  
     
    ?>       

    <ul>
        <?php foreach ($fruits as $fruit) : ?>

        <a href="<?= $fruit['purchaseLink']; ?>">
            <li>
                <?= $fruit['name']; ?>
            </li>
        </a>

        <?php endforeach;?>    
    </ul>

</body>
</html>


