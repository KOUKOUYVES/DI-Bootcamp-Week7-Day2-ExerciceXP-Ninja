<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Document</title>
</head>
<body><br><br>
    <h1 style="text-align: center;">Exercice Ninja Chess Board</h1>
    <div class="container">
        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Entrer un Nombre</label>
                <input type="number" name="num" class="form-control">
            </div>
            <button type="submit" name="submit" class="btn btn-primary">Submit</button>
        </form><br>

        <?php
            // Check if the form has been submitted
                if ($_SERVER["REQUEST_METHOD"] == "POST") {
                    // Store the value of number of columns and rows
                    $saisie = $_POST["num"];
                    
                    // Create the table
                    echo "<table>";
                    for ($i = 0; $i < $saisie; $i++) {
                    echo "<tr>";
                    for ($j = 0; $j < $saisie; $j++) {
                        // Alternate between black and white background colors
                        if (($i + $j) % 2 == 0) {
                        echo "<td bgcolor='black' width='50' height='50'></td>";
                        } else {
                        echo "<td bgcolor='white' width='50' height='50'></td>";
                        }
                    }
                    echo "</tr>";
                    }
                    echo "</table>";
                }
        ?>
    </div>
</body>
</html>