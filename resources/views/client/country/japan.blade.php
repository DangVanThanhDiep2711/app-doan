@extends('client.master')
@section('title' ,'Japan')
@section('action', 'List Mountains')

<link rel="stylesheet" href="{{ asset('admin/mountrains/style.css')}}">

@section('content')

<section class="package" id="package">
    <div class="image-container">
        <img src="{{asset('blog/files/nhatban.jpg')}}" class="img1">
        <div class="overlay">Japan Mountains</div>
    </div>

    <div class="package-content">
        
        <div class="box">
            <div class="image">
                <a href="{{route('client.mountain.asahi')}}"><img src="{{asset('blog/files/asahi.jpg')}}" alt="">
                <h3>Asahi</h3>
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
                    <li><h4>Asahi</h4></li>
                <ul class="pac-details">
                    <li>Height 2.291m</li>
                    <li>Sahi-dake (nusi Asahi), located in Daisetsuzan National Park, is Hokkaido's highest peak. Thanks to the cable car, getting around is easy and the road leading up to the southern edge of the mountain is possible, although a bit dangerous at times. <br>

                    Reaching the top of the mountain takes no more than two hours of continuous climbing. Even in the case of cloud cover, the effort is worth it. Visibility can change quickly, so there's always the chance of catching unexpectedly breathtaking views of the surrounding mountains and volcanoes.</li>
                </ul>
                </div>
            </div>
        </div>
        
        <div class="box">
            <div class="image">
                <a href="{{route('client.mountain.zao')}}"><img src="{{asset('blog/files/zao.jpg')}}" alt="">
                <h3>Zao</h3>
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
                    <h4>Zao</h4>
                    <ul class="pac-details">
                        <li>Height 1841m</li>
                        <li>One of the mountains in Japan that everyone wants to visit is Mount Zao with an altitude of 1841m, located on the border between Yamagata and Miyagi prefectures. This place especially has a walking path stretching along the mountainside, giving you the opportunity to admire the colorful natural picture. This is also a Japanese camping spot that you should try. <br>

                        If you successfully conquer Mount Zao, you will have a panoramic view of Okama Crater Lake, a natural wonder of the world with beautiful, seductive emerald green water.
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="box">
            <div class="image">
                <a href="{{route('client.mountain.asama')}}"><img src="{{asset('blog/files/asama.jpg')}}" alt="">
                <h3>Asama</h3>
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
                    <h4>Asama</h4>
                    <ul class="pac-details">
                        <li>Height 2568m</li>
                        <li>Mount Asama (浅間山 Asama-yama?) is an active complex volcano in the central Japanese island of Honshū. This is the most active volcano on the island of Honshū. The Japan Meteorological Agency classifies Mount Asama as grade A. The mountain's peak is 2,568 meters (8,425 ft) above sea level, on the border between Gunma and Nagano prefectures. Asama is listed as one of the 100 famous mountains in Japan (Japan's list of mountains). A class of cruisers of the Imperial Japanese Navy named after the mountain.
                        </li>
                    </ul>
                </div>
            </div>
        </div>



        <div class="box">
            <div class="image">
                <a href="{{route('client.mountain.norikura')}}"><img src="{{asset('blog/files/Norikura.jpg')}}" alt="">
                <h3>Norikura</h3>
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
                    <h4>Norikura</h4>
                    <ul class="pac-details">
                        <li>Height 3.026m</li>
                        <li>Mount Norikura is one of the highest mountains in Japan with an altitude of 3026m located along the border of Nagano and Gifu prefectures, also part of the famous Japanese Alps. To reach this majestic mountain peak, you can take a bus from Norikura Kogen to the 2700m high Norikura bus station, then continue walking to conquer the zigzag trail to the top of the mountain. <br>

                        Besides the unique natural scenery, Norikura Mountain also regularly organizes many interesting activities such as hiking, climbing, cycling...
                        </li>
                    </ul>
                </div>
            </div>
        </div>

    </div>

</section>

@endsection