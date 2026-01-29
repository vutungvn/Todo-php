<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <title>Nhập tuổi</title>
</head>

<body>
    <h2>Vui lòng nhập tuổi</h2>

    @if ($errors->any())
        <div style="color:red">
            @foreach ($errors->all() as $e) {{ $e }}<br>@endforeach
        </div>
    @endif

    <form method="post" action="">
        @csrf
        <label>Tuổi: <input type="text" name="age" value="{{ old('age', session('age')) }}"></label>
        <button type="submit">Gửi</button>
    </form>
</body>

</html>