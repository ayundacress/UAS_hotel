@extends('main')
@section('content')
  <div class="container">
    <div class="row">
      <div class="col-md-4 col-md-offset-4">
        <div class="panel panel-default">
          <div class="panel-heading">Create Guest</div>
          <div class="panel-body">
            
            <form action="{{ url('/product/create') }}" method="post">
              {{ csrf_field() }}
                <div class="form-group">
                  <label for="">Nama Makanan</label>
                  <input type="text" class="form-control" name="makanan" placeholder="Masukan Pesanan Anda">
                </div>
                <div class="form-group">
                  <label for="">Harga Makanan</label>
                  <input type="text" class="form-control" name="harga_makanan" placeholder="Masukan Harga">
                </div>
                <div class="form-group">
                  <label for="">Nama Minuman</label>
                  <input type="text" class="form-control" name="minuman" placeholder="Masukan Pesanan Anda">
                </div>
                <div class="form-group">
                  <label for="">Harga Minuman</label>
                  <input type="text" class="form-control" name="harga_minuman" placeholder="Masukan Harga">
                </div>
                <div class="form-group">
                  <input type="submit" value="Save" class="btn btn-primary btn-sm">
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection