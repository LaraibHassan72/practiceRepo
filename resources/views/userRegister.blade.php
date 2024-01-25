<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Registration</title>
    <style>
        /* Your styles can go here */
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
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            padding: 40px;
            border-radius: 8px;
            width: 300px;
            text-align: center;
        }

        h2 {
            color: #333;
        }

        label {
            display: block;
            margin: 10px;
            text-align: left;
            color: #555;
        }

        input, select {
            width: 100%;
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
        }
    </style>
</head>
<body>
    <div>
        <h2>User Registration</h2>

        <form method="POST" action="{{ route('register') }}" autocomplete="on">
            @csrf

            <label for="name">Name:</label>
            <input type="text" name="name" id="name" value="{{ old('name') }}" required autocomplete="name">

            <label for="email">Email:</label>
            <input type="email" name="email" id="email" value="{{ old('email') }}" required autocomplete="email">

            <label for="password">Password:</label>
            <input type="password" name="password" id="password" required autocomplete="new-password">

            <label for="password_confirmation">Confirm Password:</label>
            <input type="password" name="password_confirmation" id="password_confirmation" required autocomplete="new-password">

            <label for="role">Role:</label>
            <select name="role" id="role" autocomplete="role">
                <option value="user">User</option>
                <option value="admin">Admin</option>
            </select>

            <button type="submit">Register</button>
        </form>
    </div>
</body>
</html>
