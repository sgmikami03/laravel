@extends('app')

@section('title', '新規投稿')

@section('content')

 @include('nav')
 <div class="container">
   @include('articles.card')
 </div>

@endsection