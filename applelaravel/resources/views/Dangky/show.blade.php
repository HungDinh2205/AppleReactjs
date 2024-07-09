@extends('sanpham')
@section('content')
<style>
    .custom-button {
        background-color: black;
        color: #fff;
        padding: 10px 20px;
        border: none;
        border-radius: 5px;
        font-weight: bold;
        margin-top: 20px;
        cursor: pointer;
        margin-left: 10%;
    }
    .styled-table {
    width: 100%;
    border-collapse: collapse;
    font-size: 18px;
    text-align: left;
    margin: 25px 0;
}

.styled-table thead tr {
    background-color: black;
    color: black;
    text-align: left;
}

.styled-table th,
.styled-table td {
    padding: 12px 15px;
    border: 1px solid #dddddd;
}

.styled-table tbody tr {
    border-bottom: 1px solid #dddddd;
}

.styled-table tbody tr:nth-of-type(even) {
    background-color: #f3f3f3;
}

.styled-table tbody tr:last-of-type {
    border-bottom: 2px solid #009879;
}

.styled-table tbody tr.active-row {
    font-weight: bold;
    color: #009879;
}


table {
        border-collapse: collapse;
        width: 100%;
    }

    th, td {
        border: 1px solid #ddd;
        padding: 8px;
        text-align: left;
    }

    th {
        background-color: #f2f2f2;
    }


</style>
<main>
    <div class="container my-5">
        <h2></h2>
        <table class="styled-table">
           <thead>
            <tr>
                <th>Số thứ tự</th>
                <th>Tài khoản</th>
                <th>Mật khẩu</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($user as $index => $User)
            <tr>                   
                <td>{{$index + 1}}</td>
                <td>{{$User->username}}</td>
                <td>{{$User->password}}</td>
            </tr>
            @endforeach
        </tbody>
        </table>

    </div>
</main>

@endsection