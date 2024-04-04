@extends('client.master')
@section('title' ,'Apharwat')
@section('content')
<div class="image-container">
    <img src="{{asset('blog/files/hinhchitietnui.png')}}" class="img1">
    <div class="overlay">Apharwat Mountain</div>
</div>
<div class="introducing">
<h2>Conquer Apharwat Mountain</h2>
<p>
    Apharwat Peak is a summit, situated at a height of 4,390 metres (14,403 ft) above the sea level, in Gulmarg, India. It receives heavy snowfall and remains covered with snow for much of the year. The Line of Control (LOC) is barely a few kilometres away from here. Lying in the second phase of the cable car ride from Gulmarg, reaching this spot is highly dependent on the weather conditions.
</p>
<div><img class="img6" src="{{asset('blog/files/Apharwat.JPG')}}" alt="núi Apharwat"></div>
<h3 class="mountaintitle">How to Reach Apharwat Peak</h3>
<p>
    During winters, it's mandatory to hire a chain taxi from Tangmarg a town located near Gulmarg. During summers you can hire a private cab to the base of Gondola starting point. From the base, you can take a gondola ride to the summit above. To reach Apharwat which is phase 2, you need to first take a cable car to phase 1 which is from Gulmarg to Kongdoori. 
</p>

@include('client.home.createtour')
</div>



@endsection