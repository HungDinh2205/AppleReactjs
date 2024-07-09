@extends('store')
@section('content')
    <div class="container">
        <div class="row">
            @foreach ($sanphams as $index => $sanpham)
                <div class="col-lg-3 col-md-4 col-sm-6 mb-4">
                    <div class="card h-100 shadow-sm rounded">
                        <img src="{{ asset('/imgapple/' . $sanpham->img) }}" class="card-img-top rounded-top" alt="Ảnh sản phẩm" style="width: 100%">
                        <div class="card-body d-flex flex-column">
                            <h5 class="card-title">{{ $sanpham->tensanpham }}</h5>
                            <p class="card-text text-danger font-weight-bold">{{ number_format($sanpham->giatien, 0, ',', '.') }} VND</p>
                            <div class="mt-auto">
                                <a href="{{ route('store.detail', ['id' => $sanpham->idsanpham]) }}" class="btn btn-dark btn-block rounded" style="background-color: black">Chi tiết</a>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection