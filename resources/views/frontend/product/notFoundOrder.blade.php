@extends('frontend.layout.front.main')
@section('content')
<div class="small-container" style="height: inhert; margin-top: -50px; margin-bottom: 100px">
    {{-- <input type="hidden" value="{{$data->id}}" value="id"> --}}
    <div class="child child-2">
        <h2>Your Orders</h2>
    </div>
    <div class="child" style="">
    <div class="alert alert-success" style='height: 500px'>Sorry, not found Order here.....</div>
    </div>
</div>
@endsection