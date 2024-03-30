
@extends('client.master')
@section('title' ,'blog về núi')

@section('content')

<div class="image-container">
    <img src="{{asset('blog/files/nui4.jpg')}}" class="img1">
    <div class="overlay">Availabled Tour</div>
</div>

@if (Auth::check())
<section class="container">
    <table name="created" border="1px" class="tb1">
        <thead class="head1">
            <tr>
                <th>ID</th>
                <th>Mountain</th>
                <th>Name</th>
                <th>Infomation</th>
                <th>Quantity</th>
                <th>Date</th>
                <th>Register Now</th>         
            </tr>
        </thead>
        @foreach ($joins as $join)
        <tbody class="body1">
            <tr>
                <td>{{$loop->iteration}}</td>
                <td>{{$join->mountain->name}}</td>
                <td>{{$join->name}}</td>
                <td>{{$join->infomation}}</td>
                <td>{{$join->quantity}}</td>
                <td>{{date('d/m/Y - H:m:i', strtotime($join->date))}}</td>  

                <form action="{{route('admin.memberjoin.store')}}" method="post">
                    @csrf
                <div id="hiddenElement" style="visibility: hidden;">
                <select name="join_id">
                    <option value="{{$join->id}}">{{$join->name}}</option>
                </select>
                <select  name="user_id">
                    <option value="{{Auth::user()->id}}" >{{Auth::user()->fullname}}</option>
                </select>
                <label>Status</label>
                <select class="form-control" name="status">
                <option value="1" selected >validated</option>
                </select>
                </div>        
                <td><input type="submit" value="Register" class="btn1"></td>
                </form>
            </tr>
        </tbody>
        
        @endforeach
        <thead class="head1">
            <tr>
                <th>ID</th>
                <th>Mountain</th>
                <th>Name</th>
                <th>Infomation</th>
                <th>Quantity</th>
                <th>Date</th>
                <th>Register Now</th>         
            </tr>
        </thead>
    </form>
    </table>        
</section>
@endif

@endsection