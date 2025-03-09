<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>会員登録</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .form-signin {
            max-width: 400px;
            padding: 15px;
            margin: auto;
        }
        .form-signin .form-control {
            margin-bottom: 10px;
        }
        .form-signin .btn {
            width: 100%;
        }
    </style>
</head>
<body class="text-center">
    <form class="form-signin" method="POST" action="{{ route('register') }}">
        @csrf
        <h1 class="h3 mb-3 fw-normal">会員登録</h1>

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <div class="form-group">
            <label for="floatingName" class="sr-only">名前</label>
            <input type="text" name="name" class="form-control" id="floatingName" placeholder="名前" value="{{ old('name') }}" maxlength="10" required>
        </div>

        <div class="form-group">
            <label for="floatingEmail" class="sr-only">メールアドレス</label>
            <input type="email" name="email" class="form-control" id="floatingEmail" placeholder="name@example.com" value="{{ old('email') }}" maxlength="100" required>
        </div>

        <div class="form-group">
            <label for="floatingPassword" class="sr-only">パスワード</label>
            <input type="password" name="password" class="form-control" id="floatingPassword" placeholder="パスワード" maxlength="10" required>
        </div>

        <div class="form-group">
            <label for="floatingPasswordConfirm" class="sr-only">パスワード確認</label>
            <input type="password" name="password_confirmation" class="form-control" id="floatingPasswordConfirm" placeholder="パスワード確認" maxlength="10" required>
        </div>

        <button class="btn btn-primary py-2 mt-2" type="submit">登録</button>
        <a href="{{ route('login.show') }}" class="btn btn-secondary py-2 mt-2">戻る</a>
    </form>
</body>
</html>