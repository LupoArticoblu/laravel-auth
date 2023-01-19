@extends('layouts.app')

@section('title')
    | Galleria
@endsection

@section('content')
<div class="container">
  <h1>I miei lavori</h1>

  <table class="table">
    <thead>
      <tr>
        <th scope="col"> <a href="{{route('admin.portfolio.orderby', ['id', $direction])}}">Id</a></th>
        <th scope="col"> <a href="{{route('admin.portfolio.orderby', ['titolo', $direction])}}">Titolo</a></th>
        <th scope="col"> <a href="{{route('admin.portfolio.orderby', ['date', $direction])}}">Data</a></th>
        
      </tr>
    </thead>
    <tbody>
      @foreach ($portfolios as $portfolio)
      <tr>
        <td>{{$portfolio->id}}</td>
        <td>{{$portfolio->title}}</td>
        <td>{{date_format(date_create($portfolio->date), 'Y-m-d')}}</td>
        <td> <a class="btn btn-danger" href="{{route('admin.portfolio.show', $portfolio)}}">SHOW</a></td>
      </tr>  
      @endforeach
    </tbody>
  </table>

  <div>{{$portfolios->links()}}</div>

  
</div>
    
@endsection
