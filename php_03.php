<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <title>Multiplication Table</title>
    <style>
        .result-table {
            font-size: 20px;
            margin-top: 20px;
        }
        .result-row {
            padding: 5px 0;
        }
    </style>
</head>
<body>
<div class="container mt-5">
    <form method="POST" action="">
        <div class="mb-3">
            <label for="number" class="form-label">Input Number:</label>
            <input type="number" id="number" name="number" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>

    <?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $my_var = intval($_POST['number']); // รับค่าจากฟอร์มและแปลงเป็นตัวเลข
        echo '<div class="result-table">';
        echo '<h4 class="text-primary">ตารางสูตรคูณแม่ ' . $my_var . ':</h4>';
        echo '<div class="list-group">';
        for ($i = 1; $i <= 12; $i++) {
            echo '<div class="list-group-item result-row">' . $my_var . ' x ' . $i . ' = ' . ($my_var * $i) . '</div>';
        }
        echo '</div>';
        echo '</div>';
    }
    ?>
</div>
</body>
</html>
