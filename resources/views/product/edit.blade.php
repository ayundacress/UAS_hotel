@extends('main')
@section('content')
<div class="container">
  <div class="col-md-4 col-md-offset-4">
    <div class="panel panel-default">
      <div class="panel-heading">Edit Guest</div>
      <div class="panel-body">
        <form action="{{ route('product.update',$product) }}" method="post">
          {{ csrf_field() }}
          {{ method_field('PATCH') }}
                <div class="form-group">
                  <label for="">Nama Makanan</label>
                  <input type="text" class="form-control" name="makanan" placeholder="Enter Your Name" value="<?=$product->makanan?>">
                </div>
                <div class="form-group">
                  <label for="">Harga Makanan</label>
                  <input type="text" class="form-control" name="harga_makanan" placeholder="Enter Your Name" value="<?=$product->harga_maknanan?>">
                </div>
                <div class="form-group">
                  <label for="">Nama Minuman</label>
                  <input type="text" class="form-control" name="minuman" placeholder="Enter Your Name" value="<?=$product->minuman?>">
                </div>
                <div class="form-group">
                  <label for="">Harga Minuman</label>
                  <input type="text" class="form-control" name="harga_minuman" placeholder="Enter Your Name" value="<?=$product->harga_minuman?>">
                </div>

          <div class="form-group">
            <label for="">Name</label>
            <input type="text" name="name" class="form-control" placeholder="Enter Your Name" value="<?=$product->name?>">
          <div class="form-group">
            <input type="submit" value="Save" class="btn btn-primary">
          </div>
        </div>
      </form>
    </div>
  </div>
</div>
@endsection