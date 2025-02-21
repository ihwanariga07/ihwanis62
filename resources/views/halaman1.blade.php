<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kalkulator Sederhana</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            text-align: center;
            margin-top: 50px;
        }
        .container {
            max-width: 300px;
            margin: auto;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 10px;
            background-color: #f9f9f9;
        }
        input, select, button {
            margin: 5px;
            padding: 10px;
            width: 100%;
        }
    </style>
</head>
<body>

<div class="container">
    <h2>Kalkulator</h2>
    <form action="/hitung" method="POST">
        @csrf
        <input type="number" name="angka1" placeholder="Masukkan angka pertama" required value="{{ $angka1 ?? '' }}">
        
        <select name="operator">
            <option value="+" {{ isset($operator) && $operator == '+' ? 'selected' : '' }}>+</option>
            <option value="-" {{ isset($operator) && $operator == '-' ? 'selected' : '' }}>-</option>
            <option value="*" {{ isset($operator) && $operator == '*' ? 'selected' : '' }}>*</option>
            <option value="/" {{ isset($operator) && $operator == '/' ? 'selected' : '' }}>/</option>
        </select>

        <input type="number" name="angka2" placeholder="Masukkan angka kedua" required value="{{ $angka2 ?? '' }}">

        <button type="submit">Hitung</button>
    </form>

</div>

</body>
</html>
