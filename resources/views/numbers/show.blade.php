@extends('layouts.app') @section('content')
<div class="container">
  <div class="starter-template">
	<h1>{{ $number->title }}</h1>
	<p class="lead">{{ $number->phone_number }}</p>
	<p class="lead">{{ $number->description }}</p>
	<p class="lead">Last updated: <br>{{ $number->created_at }}</p>
  </div>
</div>
@endsection
