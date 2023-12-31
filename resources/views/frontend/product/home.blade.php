@extends('frontend.layout.front.main')
@section('content')
<div style="position: relative; float: right; margin-right: 10%; margin-top: 20px">
    <a href="{{route('show_order')}}" style="color: black; text-decoration: none">
        <svg xmlns="http://www.w3.org/3000/svg" width="20" height="20" fill="currentColor" class="bi bi-cart3" viewBox="0 0 16 16">
            <path d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .49.598l-1 5a.5.5 0 0 1-.465.401l-9.397.472L4.415 11H13a.5.5 0 0 1 0 1H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l.84 4.479 9.144-.459L13.89 4H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
          </svg>
         <span id="demo">{{$count}}</span>
    </a>
</div>
<div class="small-container" style="height: auto; margin-bottom: 170px">
    <div class="child child-2">
        <h2>Catalog</h2>
    </div>
    <div class="child">
            @foreach($index as $ind)
            <div class="childprods">
              @php 
              $imge = explode('&', $ind->image);
              @endphp
                @for($i = 0; $i < count($imge); $i++)
                <a href="{{url('product/order/'.$ind->id)}}"><img src="{{asset('frontend/images/product/'.$imge[0])}}"></a>
                @break
                @endfor
                <h4>{{$ind->name}}</h4>
                <p>L.E {{$ind->price}}</p>
            </div>
            
            @endforeach
    </div>
</div>
@endsection
