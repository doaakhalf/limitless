@extends('dashboard.layouts.layouts')

@section('content')





<div class="content">

<div class="card">
      <div class="card-header">

   
      
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
        <h1 class="h2">Users</h1>
      </div>
      <a class="btn btn-sm btn-primary" href="{{route('users.create')}}">Add New User</a>
      <h2>{{$title}}</h2>
      <div class="table-responsive">
        <table class="table table-striped table-sm">
          <thead>
            <tr>
              <th>Username</th>
              <th>Email</th>
              <th>Role</th>
              <th>Action</th>
            </tr>
          </thead>
          <tbody>
              @foreach($users as $user)
                  <tr>
                    <td>{{ $user->firstname }}</td>
                    <td>{{ $user->email }}</td>
                    <td>
                    @foreach($user->roles as $r)
                        {{$r->display_name}}
                    @endforeach
                    </td>
                    <td>
                      <div class="btn-group">
                        <a class="btn btn-primary" href="{{ route('users.edit', ['id' => $user->id]) }}" class="btn btn-info btn-xs"><i class="fas fa-edit" title="Role"></i> </a>
                        <form action="{{ route('users.destroy', ['id' => $user->id]) }}" method="POST">
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
        {{ $users->links() }}
      </div>
  </div>
</div>
  </div>
</div>
</div>
@endsection