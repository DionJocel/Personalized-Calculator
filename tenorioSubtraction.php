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
            background: linear-gradient(295deg,rgb(148, 32, 32), #b0b0b0);
            display: flex;
            align-items: center;
            justify-content: center;
            flex-direction: column;
            height: 100dvh;
            gap: 20px;
        }
        h1 {
            color:rgb(68, 207, 189);
            font-size: 3.2rem;
            font-weight: 900;
            text-shadow: 0 5px 5px rgb(209, 14, 14);
        }
        table,td,tr {
            padding: 10px;
        }
        label {
            color: white;
            font-size: 1.5rem;
            font-weight: 600px;
            font-family: arial;
            text-shadow: 0 3px 6px white;
        }
        button {
            border-radius: 50px;
            width: 8vw;
            height: 4vw;
            border: none;
            color: white;
            font-weight: 800;
            font-size: 1.1rem;
            text-shadow: 0 2px 3px black;
        }
        button:hover {
            transform: scale(1.075);
            transition: ease-in-out 0.2s;
        }
        button.tenorioClear {
            background-color: red;
        }
        button.compute-btn {
            background-color: limegreen;
        }
    </style>
</head>
<body>
    <h1> SUBTRACTION </h1>
    <form action="tenorioSubtraction.php" method="POST">
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
                <td><label for="tenorioDiff">The difference of the two number is: </label></td>
                <td><input type="number" id="tenorioDiff"></td>
            </tr>
        </table>
    </form>

    <?php

    ?>
</body>
</html>