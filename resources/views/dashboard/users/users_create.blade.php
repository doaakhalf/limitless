@extends('dashboard.layouts.layouts')

@section('content')

<div class="container">

<div class="card">
      <div class="card-header">

    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
        <h1 class="h2">Users</h1>
    </div>
    <h2>{{$title}}</h2>
    <form method="post" action="{{ route('users.store') }}" data-parsley-validate class="form-horizontal form-label-left">

        <div class="form-group{{ $errors->has('firstname') ? ' has-error' : '' }} row">
            <label for="firstname" class="col-sm-2 col-form-label">Firstname</label>
            <div class="col-sm-10">
                <input type="text" value="{{ Request::old('firstname') ?: '' }}" id="firstname" name="firstname" class="form-control col-md-7 col-xs-12"> @if ($errors->has('firstname'))
                <span class="help-block">{{ $errors->first('firstname') }}</span>
                @endif
            </div>
        </div>
        <div class="form-group{{ $errors->has('lastname') ? ' has-error' : '' }} row">
            <label for="lastname" class="col-sm-2 col-form-label">lastname</label>
            <div class="col-sm-10">
                <input type="text" value="{{ Request::old('lastname') ?: '' }}" id="lastname" name="lastname" class="form-control col-md-7 col-xs-12"> @if ($errors->has('lastname'))
                <span class="help-block">{{ $errors->first('lastname') }}</span>
                @endif
            </div>
        </div>

        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }} row">
            <label for="email" class="col-sm-2 col-form-label">Email</label>
            <div class="col-sm-10">
                <input type="text" value="{{ Request::old('email') ?: '' }}" id="email" name="email" class="form-control col-md-7 col-xs-12"> @if ($errors->has('email'))
                <span class="help-block">{{ $errors->first('email') }}</span>
                @endif
            </div>
        </div>

        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }} row">
            <label for="password" class="col-sm-2 col-form-label">Password</label>
            <div class="col-sm-10">
                <input type="password" value="{{ Request::old('password') ?: '' }}" id="password" name="password" class="form-control col-md-7 col-xs-12"> @if ($errors->has('password'))
                <span class="help-block">{{ $errors->first('password') }}</span>
                @endif
            </div>
        </div>

        <div class="form-group{{ $errors->has('phone') ? ' has-error' : '' }} row">
            <label for="phone" class="col-sm-2 col-form-label">phone</label>
            <div class="col-sm-10">
                <input type="text" value="{{ Request::old('phone') ?: '' }}" id="phone" name="phone" class="form-control col-md-7 col-xs-12"> @if ($errors->has('phone'))
                <span class="help-block">{{ $errors->first('phone') }}</span>
                @endif
            </div>
        </div>

        <div class="form-group{{ $errors->has('role_id') ? ' has-error' : '' }} row">
            <label class="col-sm-2 col-form-label" for="category_id">Role
                <span class="required">*</span>
            </label>
            <div class="col-md-6 col-sm-6 col-xs-12">
                <select class="form-control" id="role_id" name="role_id">
                    @if(count($roles)) @foreach($roles as $row)
                    <option value="{{$row->id}}">{{$row->name}}</option>
                    @endforeach @endif
                </select>
                @if ($errors->has('role_id'))
                <span class="help-block">{{ $errors->first('role_id') }}</span>
                @endif
            </div>
        </div>

        <div class="ln_solid"></div>

        <div class="form-group">
            <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                <input type="hidden" name="_token" value="{{ Session::token() }}">
                <button type="submit" class="btn btn-success">Create User</button>
                <a class="btn  btn-primary" href="{{route('users.index')}}">Back</a>
            </div>
        </div>
    </form>
</div>
</div>
</div>
</div>
</div>

@endsection