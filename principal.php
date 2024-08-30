<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Food Good</title>
    <link rel="stylesheet" href="estilos.css">
</head>
<body>
    <h1>FOOD GOOD</h1>
    <h2>Breakfast</h2>
    <div class="recipes">
        <div class="recipe-item">
            <a href="receta1.php">
                <img src="imagenes/cinnamon_rolls.jpg" alt="Gooey Chocolate Cinnamon Rolls">
                <p>Gooey Chocolate Cinnamon Rolls</p>
            </a>
        </div>
        <div class="recipe-item">
            <a href="receta2.php">
                <img src="imagenes/pumpkin_bread.jpg" alt="Moist Chocolate Pumpkin Bread">
                <p>Moist Chocolate Pumpkin Bread</p>
            </a>
        </div>
        <div class="recipe-item">
            <a href="receta3.php">
                <img src="imagenes/choc_chip_muffins.jpg" alt="Bakery Style Chocolate Chip Muffins">
                <p>Bakery Style Chocolate Chip Muffins</p>
            </a>
        </div>
        <div class="recipe-item">
            <a href="receta4.php">
                <img src="imagenes/bread_pudding.jpg" alt="Chocolate Chip Bread Pudding">
                <p>Chocolate Chip Bread Pudding</p>
            </a>
        </div>
    </div>

    <div class="conversion">
        <h2>Conversion</h2>
        <form action="principal.php" method="get">
            <label for="amount">Amount:</label>
            <input type="text" name="amount" id="amount">
            <label for="conversion_type">Convert:</label>
            <select name="conversion_type" id="conversion_type">
                <option value="cups_to_grams">Cups to Grams</option>
                <option value="grams_to_cups">Grams to Cups</option>
            </select>
            <input type="submit" value="Convert">
        </form>
        <?php
        if (isset($_GET['amount']) && isset($_GET['conversion_type'])) {
            $amount = $_GET['amount'];
            $conversion_type = $_GET['conversion_type'];
            if ($conversion_type == "cups_to_grams") {
                $result = $amount * 128; // 1 taza = 128 gramos
                echo "<p>$amount cups = $result grams</p>";
            } else if ($conversion_type == "grams_to_cups") {
                $result = $amount / 128; // 1 taza = 128 gramos
                echo "<p>$amount grams = $result cups</p>";
            }
        }
        ?>
    </div>
</body>
</html>
