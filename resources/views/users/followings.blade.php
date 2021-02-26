@extends('app')
@section('content')

@section('title', $user->name . 'のフォロー')

  @include('nav')
  
  <div class="container">
  @include('users.user')
  @include('users.tabs', ['hasArticles' => false, 'hasLikes' => false])
      @foreach($followings as $person)
        @include('users.person')
      @endforeach
  </div>
@endsection