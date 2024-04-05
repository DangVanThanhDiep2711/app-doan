@extends('client.master')
@section('title' ,'blog về núi')
@section('content')

    

<section class="locations" id="locations">
    <div class="package-title">
        <h2>Countries</h2>
    </div>
    
    <div class="location-content"> 
        @foreach ($countries as $country )   
        <a href="#" >
            <div class="col-content">
                <img src="{{asset('blog/files/l1.jpg')}}" alt="">
                    <h5>{{$country->name}}</h5>
            </div>
        </a>
        @endforeach
    </div>
</section>
@endsection