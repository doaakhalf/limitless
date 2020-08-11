@extends('dashboard.layouts.layouts')

@section('content')


    <div class="content">

        <div class="card">
              <div class="card-header">

      
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
        <h1 class="h2">Permission</h1>
      </div>
      <a class="btn btn-sm btn-primary" href="{{route('permission.create')}}">Add New Permission</a>
      <h2>{{$title}}</h2>
      <div class="table-responsive">
        <table class="table table-striped table-sm">
          <thead>
            <tr>
              <th>Name</th>
              <th>Display Name</th>
              <th>Description</th>
              <th>Action</th>
            </tr>
          </thead>
          <tbody>
              @foreach($permissions as $row)
              <tr>
                <td>{{ $row->name }}</td>
                <td>{{ $row->display_name }}</td>
                <td>{{ $row->description }}</td>
                <td>
                  <div class="btn-group">
                    <a class="btn btn-primary" href="{{ route('permission.edit', ['id' => $row->id]) }}" class="btn btn-info btn-xs"><i class="fas fa-edit" title="Edit"></i> </a>
                    <form action="{{ route('permission.destroy', ['id' => $row->id]) }}" method="POST">
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
        {{ $permissions->links() }}
      </div>
  </div>
</div>
  </div>
</div>
</div>

@endsection