<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nav</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: arial;
        }
        body {
            background: linear-gradient(245deg,rgb(255, 255, 255),rgb(255, 0, 0));
            height: 100dvh;
            gap: 20px;
        }
        h1 {
            font-size: 2.7rem;
            color:rgb(185, 5, 5);
            font-weight: 800;
            text-shadow: 0 5px 5px rgb(255, 255, 255);
            text-align: center;
            padding: 15px;
        }
        li {
            list-style: none;
        }
        a {
            text-decoration: none;
            font-weight: 800;
            font-size: 1.6rem;
            text-align: center;
            padding: 1.5px;
        }
        a:nth-child(odd) {
            color:rgb(255, 255, 255);
            text-shadow: 0 3px 4px rgb(255, 0, 0);
        }
        a:nth-child(even) {
            color:rgb(255, 0, 0);
            text-shadow: 0 3px 4px rgb(255, 255, 255);
        }
    </style>
</head>
<body>
    <h1>NAVIGATION MENU</h1>
    <ul>
        <a href="tenorioAddition.php" target="mid_column"><li>Addition</li></a>
        <a href="tenorioSubtraction.php" target="mid_column"><li>Subtraction</li></a>
        <a href="tenorioMultiplication.php" target="mid_column"><li>Multiplication</li></a>
        <a href="tenorioDivision.php" target="mid_column"><li>Division</li></a>
        <a href="tenorioWelcomePage.php" target="mid_column"><li>Log out</li></a>
    </ul>
</body>
</html>