@extends('layout.menubar')
@extends('layout.header')
@extends('layout.hello')
<title>Tài khoản</title>
<body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
    <div>
        <link href="{{asset('css/taikhoan.css')}}" rel="stylesheet" />

        <div class="danhsachtaikhoan-container">
            <div class="container-all">
                <div id="search-dropdown">
                <div class="danhsachtaikhoan-group318">
                                <input type="text" name="search" id="search" placeholder="Nhập từ khóa" 
                                class="danhsachtaikhoan-input  danhsachtaikhoan-text153">
                                <button onclick="getValue()">
                                    <img src="{{asset('playground_assets/fisearchi282-5iy7.svg');}}" alt="fisearchI282"
                                        class="danhsachtaikhoan-fisearch" />
                                </button>
                        <span class="danhsachtaikhoan-text155 chitiettieude ">Từ khoá</span>
                </div>

                <div class="danhsachtaikhoan-group319">
                    <select id="dropdown" class="danhsachtaikhoan-dropdown danhsachtaikhoan-text180  ">
                    <option value="0">Tất cả</option>
                        @foreach ($role as $role)
                        <option value="{{ $role->tenvaitro }}">{{ $role->tenvaitro }}</option>
                        @endforeach
                    </select>
                    <span class="danhsachtaikhoan-text182 chitiettieude">Tên vai trò</span>
                </div>
                </div>

                <div class="create-index">
                    <div class="danhsachtaikhoan-vuesaxboldaddsquare">
                        <div class="danhsachtaikhoan-vuesaxboldaddsquare1">
                            <div class="danhsachtaikhoan-addsquare">
                                <img src="{{asset('playground_assets/vectori282-ldmc.svg');}}" alt="VectorI282"
                                    class="danhsachtaikhoan-vector" />
                            </div>
                        </div>
                    </div>
                    <span class="danhsachtaikhoan-text">
                        <a class="danhsachtaikhoan-text" href="{{ route('account.create') }}"> Thêm tài khoản</a>
                </div>
                <div class="topbar-all">
                    <div class="breadcrumbs">
                        @include('account.breadscrum')
                    </div>

                    
                </div>
                <span class="list-index">
                    <span>Danh sách tài khoản</span>
                </span>
                <table class="table-index224 danhsachtaikhoan-text015">
                    <tr class="danhsachtaikhoan-frame624691">
                        <td>Tên đăng nhập</td>
                        <td>Họ tên</td>
                        <td>Số điện thoại</td>
                        <td>Email</td>
                        <td>Vai trò</td>
                        <td>Trạng thái hoạt động</td>
                        <td> </td>
                    </tr>
                    @foreach($accounts as $account)
                    <tr class="alldata danhsachtaikhoan-text017">
                        <td>{{$account->tendn}}</td>
                        <td>{{$account->hoten}}</td>
                        <td>{{$account->sdt}}</td>
                        <td>{{$account->email}}</td>
                        <td>{{$account->vaitro}}</td>
                        <td>{{$account->tinhtrang}}</td>
                        <td>
                            <a href="{{ route('account.edit',$account->id) }}">Cap nhat</a>
                        </td>
                    </tr>
                    @endforeach
                    <tbody class="searchdata danhsachtaikhoan-text017" id="Content"></tbody>
                </table>
               
                
            </div>
            <div class="pagination-all">
                {{ $accounts->links()}}
            </div>
        </div>
    </div>
</body>
</html>
