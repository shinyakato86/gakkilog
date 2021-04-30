@extends('layouts/layout')

@section('content')
<main>
<div class="contentsArea">
  <div class="heading02Wrap">
    <h2 class="heading02">REGISTRATION</h2>
    <p class="heading02-sub">ユーザー登録</p>
  </div>
            <div class="formArea">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group">
                            <label for="name" class="col-form-label">{{ __('名前') }}</label>

                            <div class="">
                                <input id="name" type="text" class="input-01 @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="email" class="col-form-label">{{ __('メールアドレス') }}</label>

                            <div class="">
                                <input id="email" type="email" class="input-01 @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

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
                                <input id="password" type="password" class="input-01 @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="password-confirm" class="col-form-label">{{ __('パスワード（確認）') }}</label>

                            <div class="">
                                <input id="password-confirm" type="password" class="input-01" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="form-group mb-0 d-flex justify-content-center mt40">
                                <button type="submit" class="submitBtn">
                                    {{ __('新規登録') }}
                                </button>
                        </div>
                    </form>
                    </div>

</div>
</main>
@endsection
