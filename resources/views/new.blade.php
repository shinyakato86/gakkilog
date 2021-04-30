@extends('layouts/layout')

@section('content')

<main class="l-main">

<form route="/users/{$user->id}/edit" method="post" enctype='multipart/form-data'>
{{ csrf_field() }}

@isset ($filename)
<div>
<img src="{{ asset('storage/avatar/' . $user->image_path) }}">
</div>
@endisset

<div>
<input type="hidden" name="id" value="{{$user->id}}">
</div>
<div>
<input type="text" name="name" value="{{$user->name}}">
</div>
<div>
<input type="text" name="email" value="{{$user->email}}">
</div>
<div>
<input type="file" name="image">
</div>
<input type="submit" value="更新する">
</form>

</main>

@endsection