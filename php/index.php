<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP link mySQL</title>
    <link rel="stylesheet" href="./css/style.css">
</head>
<body>
    <?php
        $foods = [
            [
                "title" => "Fried Rice",
                "price" => 60,
            ],
            [
                "title" => "Fried Noodle",
                "price" => 70,
            ],
            [
                "title" => "Fried Chicken",
                "price" => 80,
            ],
            [
                "title" => "Fried Duck",
                "price" => 90,
            ]
        ];

        // for ($i = 0; $i < count($foods); $i++) {
        //     $food = $foods[$i];
        //     echo "<p>$food[title]</p>";
        //     echo "<p>$food[price]</p>";
        // }

    ?>
    <?php
        foreach ($foods as $food) :
    ?>
        <div class="food">
            <h2><?= $food["title"]; ?></h2>
            <p><?= $food["price"]; ?></p>
        </div>
    <?php
        endforeach;
    ?>
</body>
</html>