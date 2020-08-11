@extends('dashboard.layouts.layouts')

@section('content')
<div class="content">

<div class="card">
      <div class="card-header">
      
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
        <h1 class="h2">Roles</h1>
      </div>
      <a class="btn btn-sm btn-primary" href="{{route('roles.create')}}">Add New Role</a>
      <h2>{{$title}}</h2>
      <div class="table-responsive">
        <table class="table table-striped table-sm">
          <thead>
            <tr>
              <th>Role Display</th>
              <th>Role Description</th>
              <th>Role</th>
              <th>Action</th>
            </tr>
          </thead>
          <tbody>
              @foreach($roles as $role)
              <tr>
                <td>{{ $role->display_name }}</td>
                <td>{{ $role->description }}</td>
                <td>{{ $role->name }}</td>
                <td>
                  <div class="btn-group">
                    <a class="btn btn-primary" href="{{ route('roles.edit', ['id' => $role->id]) }}" class="btn btn-info btn-xs"><i class="fas fa-edit" title="Edit"></i> </a>
                    <form action="{{ route('roles.destroy', ['id' => $role->id]) }}" method="POST">
                            @method('DELETE')
                            @csrf
                            <button class="btn btn-danger"><i class="fas fa-trash" title="Delete"></i></button>
                        </form>
                  </div>
                </td>
              </tr>
              @endforeach
          </tbody>
        </table>
        {{ $roles->links() }}
      </div>
  </div>
</div>
      </div>
  </div>
</div>
@endsection