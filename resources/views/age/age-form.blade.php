<!doctype html>
<html lang="vi">

<head>
    <meta charset="utf-8">
    <title>Age Form</title>

    <style>
        body {
            font-family: Arial, Helvetica, sans-serif;
            background: linear-gradient(135deg, #74ebd5, #9face6);
            min-height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .card {
            background: #fff;
            padding: 30px 35px;
            border-radius: 12px;
            width: 320px;
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.15);
        }

        h2 {
            text-align: center;
            margin-bottom: 20px;
            color: #333;
        }

        label {
            display: block;
            margin-bottom: 15px;
            color: #555;
            font-weight: 500;
        }

        input[type="text"] {
            width: 100%;
            padding: 10px 12px;
            margin-top: 6px;
            border: 1px solid #ccc;
            border-radius: 8px;
            font-size: 15px;
            transition: 0.3s;
        }

        input[type="text"]:focus {
            border-color: #6c63ff;
            outline: none;
            box-shadow: 0 0 0 2px rgba(108, 99, 255, 0.2);
        }

        button {
            width: 100%;
            padding: 10px;
            background: #6c63ff;
            border: none;
            border-radius: 8px;
            color: #fff;
            font-size: 16px;
            font-weight: 600;
            cursor: pointer;
            transition: 0.3s;
        }

        button:hover {
            background: #574fe0;
        }
    </style>
</head>

<body>
    <div class="card">
        <h2>Vui lòng nhập tuổi</h2>

        <form method="post" action="{{ route('checkAge') }}">
            @csrf
            <label>
                Tuổi
                <input type="text" id="age" name="age" value="{{ old('age', session('age')) }}">
            </label>

            <button type="submit">Gửi</button>
        </form>
    </div>
</body>

</html>