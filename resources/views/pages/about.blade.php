@extends('layouts.app')
   
@section('content')
    <h1><?php echo $title; ?></h1> <!-- Different from other pages that use {{$title}} to show that you can use regular php as well with Laravel -->
    <p>This is the about page.</p>
@endsection