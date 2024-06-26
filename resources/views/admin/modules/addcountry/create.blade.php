@extends('admin.master')
@section('module' ,'Country')
@section('action','Create')  


@section('content')
    <!-- Default box -->
    <form action="{{route('admin.addcountry.store')}}" method="post">
    <div class="card">
        <div class="card-header">
          <h3 class="card-title">Country Create</h3>
          <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
              <i class="fas fa-minus"></i>
            </button>
            <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
              <i class="fas fa-times"></i>
            </button>
            </div>
        </div>
        <div class="card-body">
                @csrf
                <div class="form-group">
                    <label for="exampleInputEmail1">CountryName</label>
                    <input type="text" class="form-control" placeholder="Enter country name" name="name" value="{{old('name')}}">
                  </div>
                </div>
                  <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Create</button>
                  </div> 
        
      </div>
    </form>
@endsection