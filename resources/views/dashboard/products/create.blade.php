@extends('dashboard.layouts.layouts')

@section('content')


<div class="container">

<div class="card">
      <div class="card-header">
      @if(session()->has('message'))
    <div class="alert alert-success">
        {{ session()->get('message') }}
        @endif
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
        <h1 class="h2">products</h1>
    </div>
    <h2></h2>
    <form method="post" action="{{ route('products.store') }}" data-parsley-validate class="form-horizontal form-label-left" enctype="multipart/form-data">

        <div class=" row">
            <label for="firstname" class="col-sm-2 col-form-label">Name</label>
            <div class="col-sm-10">
                <input type="text" value="" id="name" name="name" class="form-control col-md-7 col-xs-12"> 
                <span class="help-block"></span>
            
            </div>
        </div>
        <div class="form-group{{ $errors->has('client') ? ' has-error' : '' }} row">
            <label for="lastname" class="col-sm-2 col-form-label">client</label>
            <div class="col-sm-10">
                <input type="text" value="{{ Request::old('client') ?: '' }}" id="client" name="client" class="form-control col-md-7 col-xs-12"> 
                <span class="help-block"></span>
               
            </div>
        </div>

        <div class="form-group{{ $errors->has('viedo') ? ' has-error' : '' }} row">
            <label for="lastname" class="col-sm-2 col-form-label">viedo</label>
            <div class="col-sm-10">
                <input type="text" value="{{ Request::old('viedo') ?: '' }}" id="viedo" name="viedo" class="form-control col-md-7 col-xs-12"> 
                <span class="help-block"></span>
               
            </div>
        </div>

      
        <div class="form-group{{ $errors->has('category') ? ' has-error' : '' }} row">
            <label for="lastname" class="col-sm-2 col-form-label">category</label>
            <div class="col-sm-10">
                <select  value="{{ Request::old('category') ?: '' }}" id="category" name="category" class="form-control col-md-7 col-xs-12">
                    <option></option>
                    @foreach($categories as $category) 
                
                    <option value="{{$category->id}}">
                   {{ $category->name}}
                </option>
                @endforeach
                 </select>
                <span class="help-block"></span>
               
            </div>
        </div>
       
        <div class="form-group{{ $errors->has('logo') ? ' has-error' : '' }} row">
            <label for="lastname" class="col-sm-2 col-form-label">logo</label>
            <div class="col-sm-10">
                <input type="file" value="{{ Request::old('logo') ?: '' }}" id="logo" name="logo" class="form-control col-md-7 col-xs-12"> 
                <span class="help-block"></span>
               
            </div>
        </div>

        <div class="form-group{{ $errors->has('product_image') ? ' has-error' : '' }} row">
            <label for="lastname" class="col-sm-2 col-form-label">product Image</label>
            <div class="col-sm-10">
                <input type="file" value="{{ Request::old('image') ?: '' }}" id="image" name="image" class="form-control col-md-7 col-xs-12"> 
                <span class="help-block"></span>
               
            </div>
        </div>
       
        <div class="ln_solid"></div>

        <div class="form-group">
            <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                <input type="hidden" name="_token" value="{{ Session::token() }}">
                <button type="submit" class="btn btn-success">Create Product</button>
                <a class="btn  btn-primary" href="{{route('products.index')}}">Back</a>
            </div>
        </div>
    </form>
</div>
</div>
</div>
</div>
</div>

@endsection