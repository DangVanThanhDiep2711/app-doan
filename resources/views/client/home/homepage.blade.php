@extends('client.master')
@section('title' ,'blog về núi')
@section('content')
<section class="locations" id="locations">
    <div class="package-title">
        <h2>Countries</h2>
    </div>
    <div class="location-content">    
        <a href="{{route('client.country.vietnam')}}" target="_blank">
            <div class="col-content">
                <img src="{{asset('blog/files/l1.jpg')}}" alt="">
                    <h5>Vietnam</h5>
            </div>
        </a>
        <a href="{{route('client.country.china')}}" target="_blank">
            <div class="col-content">
                <img src="{{asset('blog/files/l2.jpg')}}" alt="">
                    <h5>China</h5>
            </div>
        </a>

        <a href="{{route('client.country.japan')}}" target="_blank">
            <div class="col-content">
                <img src="{{asset('blog/files/l3.jpg')}}" alt="">
                    <h5>Japan</h5>
            </div>
        </a>
        <a href="{{route('client.country.pakistan')}}" target="_blank">
            <div class="col-content">
                <img src="{{asset('blog/files/l5.jpg')}}" alt="">
                    <h5>Pakistan</h5>
            </div>
        </a>

        <a href="{{route('client.country.india')}}" target="_blank">
            <div class="col-content">
                <img src="{{asset('blog/files/l6.jpg')}}" alt="">
                    <h5>India</h5>
            </div>
            </a>
{{-- 
        <a href="./locations.html#port-blair" target="_blank"><div class="col-content">
            <img src="{{asset('blog/files/l7.jpg')}}" alt="">
            <h5>Andaman & Nicobar</h5>
            <p>Port Blair</p>
        </div></a>

        <a href="./locations.html#rome" target="_blank"><div class="col-content">
            <img src="{{asset('blog/files/l8.jpg')}}" alt="">
            <h5>Italy</h5>
            <p>Rome</p>
        </div></a> --}}

    </div>
</section>

<!-- Packages -->

<section class="package" id="package">
    <div class="package-title">
        <h2>Tour</h2>
    </div>

    <div class="package-content">
        
        <div class="box">
            <div class="image">
                <img src="{{asset('blog/files/p1.jpg')}}" alt="">
                <h3>Rs.9,999/-</h3>
            </div>
        
        <div class="dest-content">
            <div class="location">
                <h4>Bronze</h4>
                <ul class="pac-details">
                    <li>2 Star Hotel</li>
                    <li>5 Nights Stay</li>
                    <li>Free photo Session</li>
                    <li>Friendly Tour Guide</li>
                    <li>24/7 Customer Help Center</li>
                </ul>
            </div>
        </div>
        </div>
        
        <div class="box">
            <div class="image">
                <img src="{{asset('blog/files/p2.jpg')}}" alt="">
                <h3>Rs.19,999/-</h3>
            </div>
        
        <div class="dest-content">
            <div class="location">
                <h4>Silver</h4>
                <ul class="pac-details">
                    <li>3 Star Hotel</li>
                    <li>7 Nights Stay</li>
                    <li>Free photo Session</li>
                    <li>Friendly Tour Guide</li>
                    <li>24/7 Customer Help Center</li>
                </ul>
            </div>
        </div>
        </div>

        <div class="box">
            <div class="image">
                <img src="{{asset('blog/files/p3.jpg')}}" alt="">
                <h3>Rs.29,999/-</h3>
            </div>
        
        <div class="dest-content">
            <div class="location">
                <h4>Gold</h4>
                <ul class="pac-details">
                    <li>4 Star Hotel</li>
                    <li>10 Nights Stay</li>
                    <li>Breakfast and Dinner</li>
                    <li>Free photo Session</li>
                    <li>Friendly Tour Guide</li>
                    <li>24/7 Customer Help Center</li>
                </ul>
            </div>
        </div>
        </div>

        <div class="box">
            <div class="image">
                <img src="{{asset('blog/files/p4.jpg')}}" alt="">
                <h3>Rs.39,999/-</h3>
            </div>
        
        <div class="dest-content">
            <div class="location">
                <h4>Platinum</h4>
                <ul class="pac-details">
                    <li>5 Star Hotel</li>
                    <li>14 Nights Stay</li>
                    <li>Breakfast, Lunch and Dinner</li>
                    <li>Bornfire</li>
                    <li>Free photo Session</li>
                    <li>Friendly Tour Guide</li>
                    <li>24/7 Customer Help Center</li>
                </ul>
            </div>
        </div>
        </div>

    </div>

</section>

<!-- Newsletter -->

<section class="newsletter">
    <div class="newstext">
        <h2>Newsletter</h2>
        <p>Subscribe to get offers and latest<br>updates every week!</p>
    </div>

    <div class="send">
        <form action="">
            <input type="email" name="emailid" placeholder="E-mail" required>
            <input type="submit" value="Subscribe">
        </form>
    </div>

</section>
@endsection