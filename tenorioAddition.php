<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operations</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: arial;
        }
        body {
            background: linear-gradient(95deg, lightblue, blue);
            display: flex;
            align-items: center;
            flex-direction: column;
            height: 100dvh;
            gap: 20px;
        }
        h1 {
            color:rgb(220, 224, 226);
            font-size: 3.2rem;
            font-weight: 900;
            text-shadow: 0 5px 5px rgb(209, 14, 14);
        }
    </style>
</head>
<body>
    <h1> ADDITION </h1>
    <form action="tenorioAddition.php" method="POST">
        <table>
            <tr>
                <td><label for="tenorioFirstNum">First Number:</label></td>
                <td><input type="number" id="tenorioFirstNum"></td>
            </tr>
            <tr>
                <td><label for="tenorioSecondNum">Second Number:</label></td>
                <td><input type="number" id="tenorioSecondNum"></td>
            </tr>
            <tr>
                <td><button class="compute-btn" type="submit" name="compute" class="tenorioCompute">COMPUTE</button></td>
                <td><button type="reset" name="clear" class="tenorioClear">CLEAR</button></td>
            </tr>
            <tr>
                <td><label for="tenorioSum">The sum of the two number is: </label></td>
                <td><input type="number" id="tenorioSum"></td>
            </tr>
        </table>
    </form>

    <?php

    ?>
</body>
</html>