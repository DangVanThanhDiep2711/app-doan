@extends('client.master')
@section('title' ,'India')
@section('action', 'List Mountains')

<link rel="stylesheet" href="{{ asset('admin/mountrains/style.css')}}">

@section('content')

<section class="package" id="package">
    <div class="image-container">
        <img src="{{asset('blog/files/india.jpg')}}" class="img1">
        <div class="overlay">India Mountains</div>
    </div>

    <div class="package-content">
        
        <div class="box">
            <div class="image">
                <img src="{{asset('blog/files/kangchenjunga.jpeg')}}" alt="">
                <h3>Kangchenjunga</h3>
            </div>
            <div class="stars">
                <a href="#"><i class='bx bxs-star'></i></a>
                <a href="#"><i class='bx bxs-star'></i></a>
                <a href="#"><i class='bx bxs-star'></i></a>
                <a href="#"><i class='bx bxs-star'></i></a>
                <a href="#"><i class='bx bxs-star'></i></a>
            </div>
            <div class="dest-content">
                <div class="location">
                    <li><h4>Kangchenjunga</h4></li>
                <ul class="pac-details">
                    <li>Height 8.586 m</li>
                    <li>Kangchenjunga (Nepali: कञ्चनजङ्घा Kanchanjaŋghā), (Limbu: Sewalungma (सेवालुन्ग्मा)), or Kanchenjunga (干城章嘉) is the third highest mountain in the world (after Mount Everest and K2), with an altitude of 8,586 meters (28,169 feet). Kangchenjunga translates to "Five Treasures of Snow", as it has five peaks, four of which are over 8,450 meters high. The treasures represent the five treasuries of God, which are gold, silver, precious stones, grains, and holy books. Kangchenjunga is called Sewalungma in the local Limbu language, which translates as 'the mountain to which we send our greetings'. Kanchenjunga or Sewalungma is considered sacred in the Kirant religion. <br>

                    Three of the five peaks (main, central and southern) are located on the border of Sikkim district, India and Taplejung district of Nepal, while the other two peaks lie entirely within Taplejung district. On the Nepal side, there is the Kangchenjunga conservation project run by the World Wildlife Fund, together with the Government of Nepal. This conservation area has red pandas and other alpine animals, birds and plants. Kangchenjunga on the Indian side also has a protected national park area called Khangchendzonga National Park.</li>
                </ul>
                </div>
            </div>
        </div>
        
        <div class="box">
            <div class="image">
                <img src="{{asset('blog/files/doddabetta.jpg')}}" alt="">
                <h3>Doddabetta</h3>
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
                    <h4>Doddabetta</h4>
                    <ul class="pac-details">
                        <li>Height 2,637 m</li>
                        <li>Doddabetta (Tamil pronunciation: [toʈːabeʈːaː]) is the highest mountain in the Nilgiri Mountains at 2,637 metres (8,652 ft). There is a reserved forest area around the peak. It is 9 km from Ooty, on the Ooty-Kotagiri Road in the Nilgiris District of Tamil Nadu, India. It is a popular tourist attraction with road access to the summit. It is the fourth highest peak in South India next to Anamudi, Mannamalai and Meesapulimala. The peaks Hecuba (2375 m), Kattadadu (2418 m) and Kulkudi (2439 m) are the three closely linked summits in the west of the Doddabetta range near to Udagamandalam. The word Doddabetta is derived from Kannada language meaning big hill.
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

</section>

@endsection