@extends('client.master')
@section('title' ,'Validated')

@section('content')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
<link rel="stylesheet" href="{{asset('administrator/plugins/fontawesome-free/css/all.min.css')}}">

<div class="image-container">
    <img src="{{asset('blog/files/nui4.jpg')}}" class="img1">
    <div class="overlay">Tour Create</div>
</div>

@if (Auth::check())

<section class="container">
    @if ($errors->any())
        <div class="alert alert-danger alert-dismissible" role="alert">        
            <h5><i class="icon fas fa-ban"></i> Alert!</h5>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
          
    </div>
    @endif
    @if ($message = Session::has('success'))
          <div class="alert alert-success alert-dismissible"  role="alert">
            <h5><i class="icon fas fa-check"></i> Alert!</h5>
            {{Session::get('success')}}
          </div>
    @endif
    <div class="container1">
    <form method="post" action="{{ route('admin.join.store') }}" enctype="multipart/form-data" class="form1">
        @csrf
        <!-- Default box -->
        <div class="form-group" >
                        <div class="form-group">
                            <label>Name</label>
                            <input type="text"  placeholder="Enter tour name" name="name" value="{{old('name')}}" >
                        </div>
                        <div class="form-group">
                            <label>Infomation</label>
                            <textarea  name="infomation">{{old('infomation')}}</textarea>
                        </div>
                        <div class="form-group">
                            <label>Mountain</label>
                            <select  name="mountain_id">
                              <option value="0" {{old('mountain_id')==0?'selected' : ''}}>----- Root -----</option>
                              @foreach ($mountains as $mountain)
                              <option value="{{$mountain->id}}" {{old('mountain_id')==$mountain->id?'selected' : ''}}>{{$mountain->name}}</option>
                              @endforeach  
                            </select>
                        </div>
    
                        <div class="form-group">
                            <label>Quantity</label>
                            <input type="text" name="quantity"value="{{old('quantity')}}">
                        </div>
                        <div class="form-group">
                            <label>Date</label>
                            <input type="datetime-local"  name="date"/>
                        </div>            
            <div class="form-group">
                <button type="submit">Create</button> 
            </div>
        </div>
        <!-- /.card -->
    </form>   
</div>   
</section>
@endif

@endsection