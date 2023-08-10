<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css"
          integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap-theme.min.css"
          integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/js/bootstrap.min.js"
            integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa"
            crossorigin="anonymous"></script>
    <style>
        body {
            margin: 0;
            padding: 0;
            background-color: #0f0f1a;
            color: #fff;
            font-family: Arial, sans-serif;
        }

        .container {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            height: 100vh;
        }

        .title {
            text-align: center;
            font-size: 24px;
            margin-bottom: 20px;
        }

        .card {
            width: 300px;
            background-color: #1e213a;
            padding: 20px;
            border-radius: 10px;
            border-top: 4px solid #19d4ca;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.3);
        }

        form {
            display: flex;
            flex-direction: column;
            gap: 10px;
        }

        input {
            padding: 10px;
            border: none;
            background-color: transparent;
            border-bottom: 1px solid #ccc;
            color: #fff;
            transition: box-shadow 0.3s;
        }

        input:focus {
            box-shadow: 0 0 10px #19d4ca;
        }

        .buttons {
            display: flex;
            justify-content: flex-end;
            align-items: center;
            gap: 10px;
        }

        .login-button,
        .register-link {
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s, box-shadow 0.3s, color 0.3s;
            text-decoration: none;
        }

        .login-button {
            background-color: transparent;
            color: #19d4ca;
        }

        .login-button:hover {
            background-color: #19d4ca;
            color: #fff;
            box-shadow: none;
        }

        .login-button:active {
            box-shadow: 0 0 10px #19d4ca;
        }

        .register-link {
            color: #ccc;
            background-color: transparent;
        }

        .register-link:hover {
            color: #fff;
        }

        .register-link:active {
            box-shadow: 0 0 10px #ccc;
        }

        @media (max-width: 480px) {
            .card {
                width: 100%;
                max-width: 300px;
            }
        }

    </style>
</head>
<body>
<div class="container">
    <h1 class="title">SIMPLE CODE</h1>
    <div class="card">
        <form>
            <input type="text" id="username" placeholder="Username">
            <input type="password" id="password" placeholder="Password">
            <div class="buttons">
                <button type="button" class="login-button">Login</button>
            </div>
        </form>
    </div>
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js"
        integrity="sha512-3gJwYpMe3QewGELv8k/BX9vcqhryRdzRMxVfq6ngyWXwo03GFEzjsUm8Q7RZcHPHksttq7/GFoxjCVUjkjvPdw=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/axios/1.4.0/axios.min.js" integrity="sha512-uMtXmF28A2Ab/JJO2t/vYhlaa/3ahUOgj1Zf27M5rOo8/+fcTUVH0/E0ll68njmjrLqOBjXM3V9NiPFL5ywWPQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script type="application/javascript" src="{{asset('js/index.js')}}"></script>
</body>
</html>
