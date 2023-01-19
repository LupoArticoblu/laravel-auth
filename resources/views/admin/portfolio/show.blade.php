@extends('layouts.app')

@section('title')
    | {{$portfolio->title}}
@endsection

@section('content')
<div class="container">
  <h1>{{$portfolio->title}}</h1>
  <span>{{date_format(date_create($portfolio->date),'d/m/Y')}}</span>
  <img src="{{$portfolio->image}}" alt="">
  <p>{!!$portfolio->text!!}</p>

  <a class="btn btn-dark" href="{{route('admin.portfolio.index')}}">torna alla Dashboard</a>
</div>
    
@endsection
