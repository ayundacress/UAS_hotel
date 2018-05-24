@extends('main')
@section('content')
  <div class="container">
    <div class="row">
      <div class="col-md-8 col-md-offset-2">
        <a href="{{ url('/product/create') }}" class="btn btn-primary btn-sm">Add Product <i class="fa fa-plus"></i></a>
        <h1></h1>
        <table class="table table-bordered">
          <thead>
            <tr>
              <th>No</th>
              <th>Nama Makanan</th>
              <th>Harga Makanan</th>
              <th>Nama Minuman</th>
              <th>Harga Minuman</th>
              <th>Action</th>
            </tr>
          </thead>
          <tbody>
            @foreach($products as $produk)
            <tr>
              <td>{{ $no++ }}</td>
              <td>{{ $produk->makanan }}</td>
              <td>{{ $produk->harga_makanan }}</td>
              <td>{{ $produk->minuman }}</td>
              <td>{{ $produk->harga_minuman }}</td>
              <td width="25%">
                <a href="{{ route('product.edit', $produk) }}" class="btn btn-info btn-sm" style="float:left;">Update</a>
                <form action="{{ route('product.destroy',$produk) }}" method="post">
                  {{ csrf_field() }}
                  <input type="hidden" name="_method" value="DELETE">
                  <button type="submit" class="btn btn-danger btn-sm" style="margin-left:3px;">Delete</button>
                </form>
              </td>
            </tr>
            @endforeach
          </tbody>
        </table>
      </div>
    </div>
  </div>
@endsection