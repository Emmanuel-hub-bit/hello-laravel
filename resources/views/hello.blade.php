<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hello Laravel</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        .container {
            background: white;
            padding: 40px;
            border-radius: 10px;
            box-shadow: 0 10px 25px rgba(0,0,0,0.2);
            text-align: center;
        }
        h1 {
            color: #667eea;
            margin-bottom: 20px;
        }
        .info {
            color: #666;
            margin-top: 20px;
        }
        .highlight {
            color: #764ba2;
            font-weight: bold;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>🚀 Hello, {{ $name }}!</h1>
        <p>Welcome to your first <span class="highlight">{{ $framework }}</span> application.</p>
        <div class="info">
            <p>Running Laravel version: <span class="highlight">{{ $version }}</span></p>
            <p>Current time: <span class="highlight">{{ date('F j, Y, g:i a') }}</span></p>
        </div>
    </div>
</body>
</html>