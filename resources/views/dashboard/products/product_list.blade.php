@extends('dashboard.layouts.layouts')

@section('content')





<div class="content">

<div class="card">
      <div class="card-header">

   
      
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
        <h1 class="h2">Users</h1>
      </div>
      <a class="btn btn-sm btn-primary" href="{{route('products.create')}}">Add New product</a>
      <h2></h2>
      <div class="table-responsive">
        <table class="table table-striped table-sm">
          <thead>
            <tr>
              <th>name</th>
              <th>client</th>
              <th>viedo</th>
              <th>category</th>
              <th>logo</th>
              <th>Image</th>
              <th>Action</th>
            </tr>
          </thead>
          <tbody>
              @foreach($products as $product)
                  <tr>
                    <td>{{ $product->name }}</td>
                    <td>{{ $product->client }}</td>
                    <td>{{ $product->viedo }}</td>
                    <td>{{ $product->category->name }}</td>
                    <td>{{ $product->logo }}</td>
                    <td>{{ $product->Image }}</td>
                    
                    <td>
                      <div class="btn-group">
                        <a class="btn btn-primary" href="{{ route('products.edit', ['id' => $product->id]) }}" class="btn btn-info btn-xs"><i class="fas fa-edit" title="Role"></i> </a>
                        <form action="{{ route('products.destroy', ['id' => $product->id]) }}" method="DELETE">
                       
                        
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                            <button type="submit" class="btn btn-danger"><i class="fas fa-trash" title="Delete"></i></button>
                        </form>
                       

                     

                      </div>
                    </td>
                  </tr>
                  @endforeach
          </tbody>
        </table>
        {{ $products->links() }}
      </div>
  </div>
</div>
  </div>
</div>
</div>
@endsection