<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ログインフォーム</title>

  <link href="{{ asset('css/app.css') }}" rel="stylesheet">
  <link href="{{ asset('css/signin.css') }}" rel="stylesheet">

  <script src="{{ asset('js/app.js') }}" defer></script>
</head>
</head>
<body>
<form class="form-signin" method="POST" action="{{route('login') }}">
    @csrf
    <h1 class="h3 mb-3 fw-normal">ログインフォーム</h1>
    @if ($errors->any())
     <div class="alert alert-danger">
         <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach

                @if (session('login_error'))
                <div class="alert alert-danger">
                    {{ session('login_error') }}
                </div>
                @endif
         </ul>
             @if (session('logout'))
                <div class="alert alert-danger">
                    {{ session('logout') }}
                </div>
            @endif
     </div>
    @endif
    
    <x-alert type="danger" :session="session('danger')"/>

    <div class="form-floating">
        <label for="floatingInput">Email address</label>
        <input type="email" name="email"
      class="form-control" id="floatingInput" placeholder="name@example.com">
      
    </div>
    <div class="form-floating">
        <label for="floatingPassword">Password</label>
        <input type="password" name="password"
      class="form-control" id="floatingPassword" placeholder="Password">
    
    </div>
    <button class="btn btn-primary w-100 py-2" type="submit">ログイン</button>
<!-- 会員登録ページへのリンク -->
<p>まだアカウントを作成していませんか？ <a href="{{ route('register.show') }}">会員登録はこちら</a></p>
<p>掲示板を見るには <a href="{{ route('posts.index') }}">こちら</a></p>

</form>

</body>
</html>