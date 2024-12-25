<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <title>Multiplication Table</title>
    <style>
        .result {
            font-size: 18px; 
            margin-top: 20px;
        }
    </style>
</head>
<body>
<div class="container mt-5">
    <form method="POST" action="">
        <div class="mb-3">
            <label for="start" class="form-label">เริ่มต้น:</label>
            <input type="number" id="start" name="start" class="form-control" required>
        </div>
        <div class="mb-3">
            <label for="end" class="form-label">สิ้นสุด:</label>
            <input type="number" id="end" name="end" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-primary">ตรวจสอบ</button>
    </form>

    <?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $start = intval($_POST['start']);
        $end = intval($_POST['end']);
        echo '<div class="result">';
        for ($i = $start; $i <= $end; $i++) {
            if ($i % 2 == 0) {
                echo '<span class="badge bg-success">' . $i . ' = เลขคู่</span> ';
            } else {
                echo '<span class="badge bg-danger">' . $i . ' = เลขคี่</span> ';
            }
        }
        echo '</div>';
    }
    ?>
</div>
</body>
</html>
