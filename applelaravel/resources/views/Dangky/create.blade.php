@extends('dangky')
@section('content')
    <div class="row">
        <div class="card-body">
            <form method="POST" action="{{route('dangky.login') }}">
                @csrf
                <div class="form-group">
                    <label for="name">Tài khoản:</label>
                    <input type="text" name="username" class="form-control" id="name" name="name" required autofocus>
                </div>

                <div class="form-group">
                    <label for="password">Mật khẩu:</label>
                    <input type="text" name="password" class="form-control" id="email" name="email" required>
                </div>

                <div class="form-group">
                    <label for="password_confirmation">Nhập lại mật khẩu:</label>
                    <input type="password" name="password" class="form-control" id="password_confirmation" name="password_confirmation" required>
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary">Đăng ký</button>
                </div>
                
            </form>
            
        </div>
    </div>
@endsection