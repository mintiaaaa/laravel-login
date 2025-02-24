<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>会員登録</title>

    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
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

        <div class="form-floating">
            <label for="floatingName">名前</label>
            <input type="text" name="name" class="form-control" id="floatingName" placeholder="名前" value="{{ old('name') }}">
            
        </div>

        <div class="form-floating">
            <label for="floatingEmail">メールアドレス</label>
            <input type="email" name="email" class="form-control" id="floatingEmail" placeholder="name@example.com" value="{{ old('email') }}">
    
        </div>

        <div class="form-floating">
            <label for="floatingPassword">パスワード</label>    
            <input type="password" name="password" class="form-control" id="floatingPassword" placeholder="パスワード">
            
        </div>

        <div class="form-floating">
            <label for="floatingPasswordConfirm">パスワード確認</label>
            <input type="password" name="password_confirmation" class="form-control" id="floatingPasswordConfirm" placeholder="パスワード確認">
        </div>

        <button class="btn btn-primary w-100 py-2" type="submit">登録</button>
    </form>
</body>
</html>
