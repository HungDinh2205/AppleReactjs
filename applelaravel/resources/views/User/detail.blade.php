@extends('shop-detail')
@section('content')
<div class="container mt-5">
  <h1 class="text-center mb-4">Chi tiet san pham</h1>
  <div class="row">
    <div class="col-md-6">
      <img src="{{asset('/imgapple/'.$sanpham->img)}}" alt="Product Image" class="img-fluid" style="width: 80%">
    </div>
    <div class="col-md-6">
      <form method="GET" action="{{route('hoadon.add') }}">
        @csrf
        <div class="product-info">
          <h2>{{$sanpham->tensanpham}}</h2>
          <!-- <p class="text-muted">{{$sanpham->mota}}</p> -->
          <p><strong>Mo ta:</strong>{{$sanpham->mota}}</p>
          <p><strong>Gia tien:</strong>{{$sanpham->giatien}}</p>
          <p><strong>Mau sac:</strong> {{$sanpham->mausac}}</p>
          <p><strong>Kich co:</strong> {{$sanpham->kichco}}</p>
          <hr>
          <div class="form-group">
            <label for="quantity">Quantity:</label>
            <input type="number" id="quantity" class="form-control" value="1" min="1" name="quanlity">
          </div>
          <a href="/addhoadon" class="btn btn-primary" data-giatien="{{$sanpham->giatien}}" style="background-color: black; color: #fff; font-weight: bold; border-radius: 5px;" type="submit">Đặt Hàng</a>
      </form>
      @if(session('success'))
        {{session('success')}}
      @endif
    </div>
  </div>
</div>
<!--  -->
</div>
<script>
 document.querySelector('.btn-primary').addEventListener('click', function(event) {
    event.preventDefault(); 
    var giaTien = parseFloat(this.getAttribute('data-giatien'));
    var quantity = parseFloat(document.getElementById('quantity').value);
    var total = giaTien * quantity;
    var confirmMessage = "Bạn có chắc chắn muốn đặt hàng với số lượng là " + quantity + " sản phẩm, tổng số tiền là " + total + " VNĐ?";
    if (confirm(confirmMessage)) {   
      this.closest('form').submit(); 
    } else {
      alert("Đặt hàng đã bị hủy.");
    }
  });
</script>
@endsection