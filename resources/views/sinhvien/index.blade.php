<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Thông tin Sinh viên</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            min-height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 20px;
        }

        .container {
            background: white;
            border-radius: 20px;
            box-shadow: 0 20px 60px rgba(0, 0, 0, 0.3);
            padding: 40px;
            width: 100%;
            max-width: 600px;
        }

        h1 {
            color: #333;
            margin-bottom: 30px;
            text-align: center;
            font-size: 28px;
            font-weight: 600;
        }

        .student-card {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            border-radius: 15px;
            padding: 30px;
            color: white;
            box-shadow: 0 10px 30px rgba(102, 126, 234, 0.3);
        }

        .info-row {
            display: flex;
            align-items: center;
            margin-bottom: 20px;
            padding: 15px;
            background: rgba(255, 255, 255, 0.1);
            border-radius: 10px;
            backdrop-filter: blur(10px);
        }

        .info-row:last-child {
            margin-bottom: 0;
        }

        .icon {
            font-size: 24px;
            margin-right: 15px;
            width: 40px;
            text-align: center;
        }

        .info-content {
            flex: 1;
        }

        .label {
            font-size: 12px;
            text-transform: uppercase;
            letter-spacing: 1px;
            opacity: 0.9;
            margin-bottom: 5px;
        }

        .value {
            font-size: 18px;
            font-weight: 600;
        }

        .avatar {
            width: 120px;
            height: 120px;
            border-radius: 50%;
            margin: 0 auto 25px;
            display: flex;
            align-items: center;
            justify-content: center;
            background: rgba(255, 255, 255, 0.2);
            font-size: 48px;
            border: 4px solid rgba(255, 255, 255, 0.3);
        }

        @media (max-width: 480px) {
            .container {
                padding: 30px 20px;
            }

            h1 {
                font-size: 24px;
            }

            .value {
                font-size: 16px;
            }
        }
    </style>
</head>

<body>
    <div class="container">
        <h1>📚 Thông tin Sinh viên</h1>

        <div class="student-card">
            <div class="avatar">
                👨‍🎓
            </div>

            <div class="info-row">
                <div class="icon">👤</div>
                <div class="info-content">
                    <div class="label">Họ và Tên</div>
                    <div class="value">{{ $name }}</div>
                </div>
            </div>

            <div class="info-row">
                <div class="icon">🏫</div>
                <div class="info-content">
                    <div class="label">Lớp</div>
                    <div class="value">67PM34</div>
                </div>
            </div>

            <div class="info-row">
                <div class="icon">🎫</div>
                <div class="info-content">
                    <div class="label">Mã số Sinh viên</div>
                    <div class="value">{{ $mssv }}</div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>