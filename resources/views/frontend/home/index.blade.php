@extends('frontend.layout.front.main')
@section('content')

    <!-- Start Section Hunstler -->
    <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel" style="">
        <div class="carousel-inner" data-interval="2000" style="height: 800px">
          <div class="carousel-item active">
            <img src="{{asset('frontend/images/p1.jpg')}}" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="{{asset('frontend/images/p2.jpg')}}" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="{{asset('frontend/images/p3.jpg')}}" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="{{asset('frontend/images/p4.jpg')}}" class="d-block w-100" alt="...">
          </div>
          <section>
          <div class="main" style="position: relative">
                <div class="text" style="position: relative">
                    <h2>Summer '23 collection<br><span>Upgrade your casual game</span></h2>
                    <h3>Shop the latest streetwear trends</h3>
                    <a href="{{route('product')}}" class="main-btn">SHOP NOW</a>
                </div>
           </div>
        </section>
        </div>
    </div>
    <!-- End Section Hunstler -->
    <!-- Start Section T_shirt -->
    <section class="cards" id="services" style="">
        <h2 class="title">FEATURED PRODUCTS</h2>
        <div class="content">
            @foreach($data as $da)
            <div class="card">
                <div class="icon">
              @php 
              $imge = explode('&', $da->image);
              @endphp
                @for($i = 0; $i < count($imge); $i++)
                    <a href="{{url('product/order/'.$da->id)}}"><img src="{{asset('frontend/images/product/'.$imge[0])}}" alt=""></a>
                @break
                @endfor
                </div>
                <div class="info">
                    <h2>{{$da->name}}</h2>
                </div>
            </div>
            @endforeach
        </div>
        <a style="color: black; text-decoration: none" href="{{route('product')}}"><h3 style="text-align: center">Store <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-right" viewBox="0 0 16 16">
  <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z"/>
</svg></h3></a>
    </section>

    <!-- End Section T_shirt -->
@endsection
