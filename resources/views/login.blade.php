<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
        }

        div {
            background-color: #fff;
            /* box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); */
            padding: 20px;
            border-radius: 8px;
            /* width: 300px; */
            text-align: center;
        }

        h2 {
            color: #333;
        }

        form {
            display: flex;
            flex-direction: column;
        }

        label {
            margin-bottom: 6px;
            color: #555;
        }

        input {
            padding: 8px;
            margin-bottom: 12px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        button {
            background-color: #4caf50;
            color: white;
            padding: 10px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        button:hover {
            background-color: #45a049;
            <!DOCTYPE html>

        }
    </style>
</head>
<body>
    <div>
        <h2>Login</h2>

        <form method="POST" action="{{ route('login') }}">
            @csrf

            <div>
                <label for="email">Email:</label>
                <input type="email" name="email" id="email" value="{{ old('email') }}" required autofocus>
               
            </div>

            <div>
                <label for="password">Password:</label>
                <input type="password" name="password" id="password" required>
            
            </div>

            <div>
                <input type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                <label for="remember">Remember Me</label>
            </div>

            <div>
                <button type="submit" onclick="showPopupOnError()">Login</button>
            </div>
        </form>

      
    </div>

</body>
</html>
