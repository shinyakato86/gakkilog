@extends('layouts/layout')

@section('content')
<main>
<div class="contentsArea">
  <div class="heading02Wrap">
    <h2 class="heading02">LOGIN</h2>
    <p class="heading02-sub">ログイン</p>
  </div>
            <div class="formArea">
                <form method="POST" action="{{ route('login') }}">
                    @csrf

                    <div class="form-group">
                        <label for="email" class="col-form-label">{{ __('メールアドレス') }}</label>

                        <div class="">
                            <input id="email" type="email" class="input-01 @error('email') is-invalid @enderror" name="email" value="admin@admin.co.jp" required autocomplete="email" autofocus>

                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="password" class="col-form-label">{{ __('パスワード') }}</label>

                        <div class="">
                            <input id="password" type="password" class="input-01 @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" value="password">

                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    <p class="mb-5">※フォーム入力済みの初期値でログインできます。</p>
                    <div class="form-group">
                        <div class="col-md-6 offset-md-4">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                <label class="checkbox-01" for="remember">
                                    {{ __('ログイン状態を維持する') }}
                                </label>
                            </div>
                        </div>
                    </div>

                        <div class="form-group d-flex justify-content-center mt40">
                            <button type="submit" class="submitBtn">
                                {{ __('ログイン') }}
                            </button>

                            <!-- @if (Route::has('password.request'))
                                <a class="btn btn-link" href="{{ route('password.request') }}">
                                    {{ __('Forgot Your Password?') }}
                                </a>
                            @endif -->
                        </div>
                </form>
            </div>

</div>
</main>
@endsection
