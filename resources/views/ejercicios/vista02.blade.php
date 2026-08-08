<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perfil de Usuario</title>
    <link rel="stylesheet" href="{{ asset('css/vista02.css') }}">
</head>
<style>
    body {
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    background: linear-gradient(135deg, #f5f7fa, #c3cfe2);
    margin: 0;
    padding: 0;
    display: flex;
    height: 100vh;
    justify-content: center;
    align-items: center;
}

.container {
    background: #ffffff;
    padding: 40px;
    border-radius: 12px;
    box-shadow: 0 8px 20px rgba(0, 0, 0, 0.1);
    text-align: center;
    max-width: 400px;
    width: 100%;
}

h1 {
    color: #333;
    margin-bottom: 20px;
    font-size: 1.8rem;
}

p {
    font-size: 1.1rem;
    color: #555;
    margin: 10px 0;
}

strong {
    color: #222;
}
</style>
<body>
    <div class="container">
        <h1>👤 Perfil de Usuario</h1>
        <p><strong>Nombre:</strong> {{ $nombre }}</p>
        <p><strong>Edad:</strong> {{ $edad }} años</p>
    </div>
</body>
</html>

