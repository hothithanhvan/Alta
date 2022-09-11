@extends('layout.menubar')
@extends('layout.header')

<body>
    <div>
        <link href="{{asset('css/taikhoan.css')}}" rel="stylesheet" />

        <div class="danhschtikhon-container">
            <div class="danhschtikhon-danhschtikhon">
                <div class="danhschtikhon-component2">
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
                <div class="danhschtikhon-topbar">
                    <div class="danhschtikhon-breadcrumbs">
                        <button class="danhschtikhon-button">
                            <span class="danhschtikhon-text005 2020Bold">
                                <span>Cài đặt hệ thống</span>
                            </span>
                        </button>
                        <img src="{{asset('playground_assets/uanglerighti282-p7s.svg');}}" alt="uanglerightI282"
                            class="danhschtikhon-uangleright" />
                        <button class="danhschtikhon-button1">
                            <span class="danhschtikhon-text007 2020Bold">
                                <span>Quản lý tài khoản</span>
                            </span>
                        </button>
                    </div>
                    <div class="danhschtikhon-frame625226">
                        <div class="danhschtikhon-unsplash-fyl8s-m-c2j2q">

                        </div>
                        <div class="danhschtikhon-group296">
                            <span class="danhschtikhon-text009 1212Reg">
                                <span>Xin chào</span>
                            </span>
                            <span class="danhschtikhon-text011 1616Bold">
                                <span>Lê Quỳnh Ái Vân</span>
                            </span>
                        </div>
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
                <span class="danhschtikhon-text013 2424Bold">
                    <span>Danh sách tài khoản</span>
                </span>
                <table class="danhschtikhon-frame624720 danhschtikhon-text015">
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
                        <td>van</td>
                        <td>
                            <a href="{{ route('account.edit',$account->id) }}">Cap nhat</a>
                        </td>
                    </tr>
                    @endforeach
                </table>
                <div class="danhschtikhon-group318">
                    <form>
                        <div class="danhschtikhon-input">
                            <input type="text" name="key" placeholder="Nhập từ khóa" class="danhschtikhon-text153">
                            <button type="submit">
                                <img src="{{asset('playground_assets/fisearchi282-5iy7.svg');}}" alt="fisearchI282"
                                    class="danhschtikhon-fisearch" />
                            </button>
                        </div>
                    </form>
                    <span class="danhschtikhon-text155 1616Semi">
                        <span>Từ khoá</span>
                    </span>
                </div>

                <div class="danhschtikhon-group319">
                    <select class="danhschtikhon-dropdown danhschtikhon-text180 1616Reg">
                        <option>1</option>
                        <option>2</option>
                    </select>
                    <span class="danhschtikhon-text182 1616Semi">
                    <span>Tên vai trò</span>
                </span>
                </div>
                
            </div>
        </div>
    </div>
</body>
</html>
