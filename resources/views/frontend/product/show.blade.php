@extends('frontend.layout.front.main')
@section('content')
<div class="small-container" style="height: inhert; margin-top: -50px; margin-bottom: 100px">
    {{-- <input type="hidden" value="{{$data->id}}" value="id"> --}}
    <div class="child child-2">
        <h2>Your Orders</h2>
    </div>
    <div class="child" style="">
        @foreach($order as $ind)
            <div class="childprods" style="height: auto;">
          @php 
          $imge = explode('&', $ind->image);
          @endphp
            @for($i = 0; $i < count($imge); $i++)
                <img src="{{asset('frontend/images/product/'.$imge[0])}}">
                @break
                @endfor
                <h5><span>Name</span>: {{$ind->name}}-<span>Color</span>: {{$ind->color}}</h5>
                <h5><span>Price</span>: {{$ind->total - $ind->drive_cost}} L.E</h5>
                <hr>
                <h5><span>Check</span>: {{$ind->total}} L.E</h5>
                <a href="{{url('/product/order/delete/'.$ind->id)}}"><button type="button" class="btn btn-danger">Delete</button></a>
            </div>
        @endforeach
    </div>
</div>
@endsection
