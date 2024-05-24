<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BMI Kalkulátor</title>
    <style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            background-color: grey;
        }
        form {
            text-align: center;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 8px;
        }
        img {
            max-width: 100%;
            height: auto;
        }
        .menu {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            background-color: #333;
            color: #fff;
            text-align: center;
            padding: 10px 0;
        }
    </style>
</head>
<body>
    <h1>
        <div class="menu">
            <a href="index.html">Zpět do menu</a>
        </div>
    </h1>
    <div>
        <img src="BMI TABULKA.jpg" alt="Obrázek" width="400">
        <h2>BMI Kalkulátor</h2>

        <form method="post">
            <label for="weight">Vaše váha (kg):</label>
            <input type="text" id="weight" name="weight" required>
            <br><br>
            <label for="height">Vaše výška (m):</label>
            <input type="text" id="height" name="height" required>
            <br><br>
            <input type="submit" name="calculate" value="Vypočítat">
        </form>

        <?php
        if(isset($_POST['calculate'])) {
            $weight = $_POST['weight'];
            $height = $_POST['height'];

            // Výpočet BMI
            $bmi = $weight / ($height * $height);

            // Zaokrouhlení na dvě desetinná místa
            $bmi = round($bmi, 2);

            echo "<h3>Vaše BMI je: $bmi</h3>";
        }
        ?>
    </div>
</body>