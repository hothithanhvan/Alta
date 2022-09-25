@extends('layout.menubar')
@extends('layout.header')
@extends('layout.hello')
<body>
    <div>
        <link href="{{asset('css/taikhoan.css')}}" rel="stylesheet" />

        <div class="danhschtikhon-container">
            <div class="container-all">
                <div class="danhschtikhon-group318">
                                <input type="text" name="search" id="search" placeholder="Nhập từ khóa" 
                                class="danhschtikhon-input  danhschtikhon-text153">
                                <button onclick="getValue()">
                                    <img src="{{asset('playground_assets/fisearchi282-5iy7.svg');}}" alt="fisearchI282"
                                        class="danhschtikhon-fisearch" />
</button>
                        <span class="danhschtikhon-text155  ">
                            <span>Từ khoá</span>
                        </span>
                </div>

                <div class="danhschtikhon-group319">
                    <select class="danhschtikhon-dropdown danhschtikhon-text180  ">
                        @foreach ($role as $role)
                        <option value="{{ $role->tenvaitro }}">{{ $role->tenvaitro }}</option>
                        @endforeach
                    </select>
                    <span class="danhschtikhon-text182  ">Tên vai trò</span>
                </div>
                <div class="create-index">
                    <div class="danhschtikhon-vuesaxboldaddsquare">
                        <div class="danhschtikhon-vuesaxboldaddsquare1">
                            <div class="danhschtikhon-addsquare">
                                <img src="{{asset('playground_assets/vectori282-ldmc.svg');}}" alt="VectorI282"
                                    class="danhschtikhon-vector" />
                            </div>
                        </div>
                    </div>
                    <span class="danhschtikhon-text">
                        <a class="danhschtikhon-text" href="{{ route('account.create') }}"> Thêm tài khoản</a>
                </div>
                <div class="topbar-all">
                    <div class="breadcrumbs">
                        @include('account.breadscrum')
                    </div>

                    <div class="danhschtikhon-frame271">
                        <div class="danhschtikhon-vuesaxboldnotification">
                            <div class="danhschtikhon-vuesaxboldnotification1">
                                <div class="danhschtikhon-notification">
                                    <img src="{{asset('playground_assets/vectori282-qaba.svg');}}" alt="VectorI282"
                                        class="danhschtikhon-vector01" />
                                    <img src="{{asset('playground_assets/vectori282-4dzd.svg');}}" alt="VectorI282"
                                        class="danhschtikhon-vector02" />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <span class="list-index">
                    <span>Danh sách tài khoản</span>
                </span>
                <table class="table-index224 danhschtikhon-text015">
                    <tr class="danhschtikhon-frame624691">
                        <td>Tên đăng nhập</td>
                        <td>Họ tên</td>
                        <td>Số điện thoại</td>
                        <td>Email</td>
                        <td>Vai trò</td>
                        <td>Trạng thái hoạt động</td>
                        <td> </td>
                    </tr>
                    @foreach($accounts as $account)
                    <tr class="danhschtikhon-text017">
                        <td>{{$account->tendn}}</td>
                        <td>{{$account->hoten}}</td>
                        <td>{{$account->sdt}}</td>
                        <td>{{$account->email}}</td>
                        <td>{{$account->vaitro}}</td>
                        <td>{{$account->trangthaihoatdong}}</td>
                        <td>
                            <a href="{{ route('account.edit',$account->id) }}">Cap nhat</a>
                        </td>
                    </tr>
                    @endforeach
                </table>
               
                
            </div>
            <div class="pagination-all">
                {{ $accounts->links()}}
            </div>
        </div>
    </div>
</body>
</html>
