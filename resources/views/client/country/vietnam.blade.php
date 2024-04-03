@extends('client.master')
@section('title' ,'Viet Nam')
@section('action', 'List Mountains')

@section('content')
<div class="image-container">
    <img src="{{asset('blog/files/vietnam.jpg')}}" class="img1">
    <div class="overlay">VietNam Mountains</div>
</div>
<section class="package" id="package">
    <div class="package-title">
        <h2></h2>
    </div>
    <div class="package-content"> 
        @foreach ($mountains as $mountain)
         @if ($mountain->country->name == "Việt Nam")
        <div class="box">
            <div class="image">
                <a href="{{route('client.mountain.baden')}}"><img src="{{asset('uploads/')}}/{{$mountain->image}}" alt=""> 
                <h3> {{$mountain->name}} Mountain </h3>
            </div>
            <div class="stars">
                <a href="#"><i class='bx bxs-star'></i></a>
                <a href="#"><i class='bx bxs-star'></i></a>
                <a href="#"><i class='bx bxs-star'></i></a>
                <a href="#"><i class='bx bxs-star'></i></a>
                <a href="#"><i class='bx bxs-star-half'></i></a>
            </div>
            <div class="dest-content">
                <div class="location">
                    <li><h4>{{$mountain->name}} Mountain </h4></li>
                <ul class="pac-details">
                    <li>Height {{$mountain->height}}m</li>
                    <li><p>{{$mountain->content}}</p></li>
                </ul>
                </div>
            </div>
        </div>
        @endif  
        @endforeach
        <div class="box">
            <div class="image">
                <a href="{{route('client.mountain.chuachan')}}"><img src="{{asset('blog/files/nui-chua-chan.png')}}" alt="">
                <h3>Mountain Chứa Chan</h3>
            </div>

            <div class="stars">
                <a href="#"><i class='bx bxs-star'></i></a>
                <a href="#"><i class='bx bxs-star'></i></a>
                <a href="#"><i class='bx bxs-star'></i></a>
                <a href="#"><i class='bx bxs-star'></i></a>
                <a href="#"><i class='bx bxs-star-half'></i></a>
            </div>

            <div class="dest-content">
                <div class="location">
                    <h4>Mountain Chứa Chan</h4>
                    <ul class="pac-details">
                        <li>Đồng Nai</li>
                        <li>Height 837m</li>
                        <li>Chua Chan Mountain is also known as Gia Ray Mountain or Gia Lao Mountain in Xuan Loc District, Dong Nai Province, Vietnam. Chua Chan Mountain was ranked as a national scenic relic by the Ministry of Culture, Sports and Tourism according to Decision No. 1204/QD-BVHTTDL dated March 29, 2012. <br>
                            The mountain is 837 meters above sea level, the second highest in the Southern region
                        </li>
                        <li>Friendly Tour Guide</li>
                        <li>24/7 Customer Help Center</li>
                    </ul>
                </div>
            </div>
        </div>


        <div class="box">
            <div class="image">
                <a href="{{route('client.mountain.langbiang')}}"><img src="{{asset('blog/files/nui-Langbiang.jpg')}}" alt="">
                <h3>Mountain Langbiang</h3>
            </div>

            <div class="stars">
                <a href="#"><i class='bx bxs-star'></i></a>
                <a href="#"><i class='bx bxs-star'></i></a>
                <a href="#"><i class='bx bxs-star'></i></a>
                <a href="#"><i class='bx bxs-star'></i></a>
                <a href="#"><i class='bx bxs-star-half'></i></a>
            </div>
        
            <div class="dest-content">
                <div class="location">
                    <h4>Mountain Langbiang</h4>
                    <ul class="pac-details">
                        <li>Lâm Đồng</li>
                        <li>Height 1039 m</li>
                        <li>Located in Lac Duong district, 12 km north of Da Lat city center and 2,000 m above sea level, Langbiang is considered the second highest mountain in the national park mountain system in the National Park. Bidoup country – Ba mountain. From the top of Langbiang mountain, visitors can see almost the entire dreamy Da Lat, admire the beauty of Golden Stream, Silver Stream and the panoramic view of Da Lat tourism from above. Standing in this position, you feel like you are lost in a fairyland, as if you are traveling in the clouds as you enjoy the beauty of the hazy natural picture with the mist flying in front of you.</li>
                    </ul>
                </div>
            </div>
        </div>

    </div>
</section>

@endsection