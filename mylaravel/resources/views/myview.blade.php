<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
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
    <form method="POST" action="{{ url('/mycontroller') }}">
        @csrf
        <div class="mb-3">
            <label for="number" class="form-label">Input Number:</label>
            <input type="number" id="number" name="number" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>

    @if (!empty($error))
        <div class="alert alert-danger mt-4">{{ $error }}</div>
    @elseif (!empty($result))
        <div class="result-table">
            <h4 class="text-primary">ตารางสูตรคูณแม่ {{ $number }}:</h4>
            <div class="list-group">
                @foreach ($result as $line)
                    <div class="list-group-item result-row">{{ $line }}</div>
                @endforeach
            </div>
        </div>
    @endif
</div>
</body>
</html>
