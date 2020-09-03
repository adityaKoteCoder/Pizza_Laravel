@extends('layouts.app')
@section('content')
      <div class="wrapper pizza-index">
          <h1>Pizza Orders</h1>
                 @foreach($pizzas as $pizza)
                 <div>
                     <div class="pizza-item">
                     <img src="/img/pizza.png" alt="pizza icon">
                    <h4><a href="/pizzas/{{$pizza->id}}"> {{ $pizza->name }} - {{ $pizza->type }} - {{ $pizza->base }} - {{ $pizza->price }}</a></h4>
                     </div>
                 </div>

                 @endforeach 
     </div>
             
@endsection