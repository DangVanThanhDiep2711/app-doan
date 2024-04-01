@extends('client.master')
@section('title' ,'Validated')

@section('content')

<div class="image-container">
    <img src="{{asset('blog/files/nui4.jpg')}}" class="img1">
    <div class="overlay">Validated Tour</div>
</div>

@if (Auth::check())
<section class="container">
    <form method="post" action="{{ route('admin.join.store') }}" enctype="multipart/form-data" class="form1">
        @csrf
        <!-- Default box -->
        <div >
            <div >
                <h3 >TourCreate</h3>
            </div>
            <div >
                    <div >
                            <label>Name</label>
                            <input type="text"  placeholder="Enter tour name" name="name" value="{{old('name')}}" >
                        </div>
                        <div >
                            <label>Infomation</label>
                            <textarea  name="infomation">{{old('infomation')}}</textarea>
                        </div>
                        <div >
                            <label>Mountain</label>
                            <select  name="mountain_id">
                              <option value="0" {{old('mountain_id')==0?'selected' : ''}}>----- Root -----</option>
                              @foreach ($mountains as $mountain)
                              <option value="{{$mountain->id}}" {{old('mountain_id')==$mountain->id?'selected' : ''}}>{{$mountain->name}}</option>
                              @endforeach  
                            </select>
                        </div>
    
                        <div >
                            <label>Quantity</label>
                            <input type="text"  placeholder="Enter mountain height" name="quantity"value="{{old('quantity')}}">
                        </div>
                        <div >
                            <label>Date</label>
                            <input type="datetime-local"  name="date"/>
                        </div>            
                    </div>
            <div >
                <input type="submit" value="Create">   
            </div>
        </div>
        <!-- /.card -->
    </form>      
</section>
@endif

@endsection