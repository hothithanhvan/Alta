@extends('layout.menubar')
@extends('layout.header')
<body>
    <div>
        <link href="{{asset('css/dangnhap.css');}}" rel="stylesheet" />

        <div class="tikhoncnhn-container">
            <div class="tikhoncnhn-tikhoncnhn">
                <div class="tikhoncnhn-topbar">
                    <div class="tikhoncnhn-breadcrumbs">
                        <button class="tikhoncnhn-button">
                            <span class="tikhoncnhn-text 2020Bold">
                                <span>Thông tin cá nhân</span>
                            </span>
                        </button>
                    </div>
                    <div class="tikhoncnhn-frame625226">
                        <div class="tikhoncnhn-unsplash-fyl8s-m-c2j2q"></div>
                        <div class="tikhoncnhn-group296">
                            <span class="tikhoncnhn-text02 1212Reg">
                                <span>Xin chào</span>
                            </span>
                            <span class="tikhoncnhn-text04 1616Bold">
                                <span>{{Auth::user()->hoten}}</span>
                            </span>
                        </div>
                    </div>
                    <div class="tikhoncnhn-frame271">
                        <div class="tikhoncnhn-vuesaxboldnotification">
                            <div class="tikhoncnhn-vuesaxboldnotification1">
                                <div class="tikhoncnhn-notification">
                                    <img src="{{asset('playground_assets/vectori194-sm3j.svg');}}" alt=" VectorI194" class="tikhoncnhn-vector" />
                                    <img src="{{asset('playground_assets/vectori194-hr9.svg');}}" alt=" VectorI194" class="tikhoncnhn-vector01" />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                

                @foreach($users as $user)
                <div class="tikhoncnhn-frame625106">
                    <div class="tikhoncnhn-group625151">
                        <div class="tikhoncnhn-group624818">
                            <div class="tikhoncnhn-unsplash-fyl8s-m-c2j2q1"></div>
                            <div class="tikhoncnhn-group624817">
                                <img src="{{asset('playground_assets/ellipse81945-aiv-200h.png');}}" alt=" Ellipse81945" class="tikhoncnhn-ellipse81" />
                                <img src="{{asset('playground_assets/camera1945-x2c9.svg');}}" alt=" camera1945" class="tikhoncnhn-camera" />
                            </div>
                        </div>
                        <span class="tikhoncnhn-text20 2424Bold">
                            <span>{{$user->hoten}}</span>
                        </span>
                    </div>
                    
                    <div class="tikhoncnhn-group625150">
                        <div class="tikhoncnhn-group625146">
                            <div class="tikhoncnhn-group624750">
                                <div class="tikhoncnhn-frame6249604">
                                    <span class="tikhoncnhn-text22 1616Semi">
                                        <span>Mật khẩu</span>
                                    </span>
                                </div>
                            </div>
                            <div class="tikhoncnhn-fill">
                                <span class="tikhoncnhn-text24 1616Reg">
                                    <span>{{$user->password}}</span>
                                </span>
                            </div>
                        </div>
                        <div class="tikhoncnhn-group6251501">
                            <div class="tikhoncnhn-group6247501">
                                <div class="tikhoncnhn-frame6249604">
                                    <span class="tikhoncnhn-text26 1616Semi">
                                        <span>Tên người dùng</span>
                                    </span>
                                </div>
                            </div>
                            <div class="tikhoncnhn-fill1">
                                <span class="tikhoncnhn-text28 1616Reg">
                                    <span>{{$user->hoten}}</span>
                                </span>
                            </div>
                        </div>
                        <div class="tikhoncnhn-group625148">
                            <div class="tikhoncnhn-group6247502">
                                <div class="tikhoncnhn-frame6249604">
                                    <span class="tikhoncnhn-text30 1616Semi">
                                        <span>Email:</span>
                                    </span>
                                </div>
                            </div>
                            <div class="tikhoncnhn-fill2">
                                <span class="tikhoncnhn-text32 1616Reg">
                                    <span>{{$user->email}}</span>
                                </span>
                            </div>
                        </div>
                        <div class="tikhoncnhn-group625152">
                            <div class="tikhoncnhn-group6247503">
                                <div class="tikhoncnhn-frame6249604">
                                    <span class="tikhoncnhn-text34 1616Semi">
                                        <span>Vai trò:</span>
                                    </span>
                                </div>
                            </div>
                            <div class="tikhoncnhn-fill3">
                                <span class="tikhoncnhn-text36 1616Reg">
                                    <span>{{$user->vaitro}}</span>
                                </span>
                            </div>
                        </div>
                        <div class="tikhoncnhn-group625147">
                            <div class="tikhoncnhn-group6247504">
                                <div class="tikhoncnhn-frame6249604">
                                    <span class="tikhoncnhn-text38 1616Semi">
                                        <span>Số điện thoại</span>
                                    </span>
                                </div>
                            </div>
                            <div class="tikhoncnhn-fill4">
                                <span class="tikhoncnhn-text40 1616Reg">
                                    <span>{{$user->sdt}}</span>
                                </span>
                            </div>
                        </div>
                        <div class="tikhoncnhn-group6251511">
                            <div class="tikhoncnhn-group6247505">
                                <div class="tikhoncnhn-frame6249604">
                                    <span class="tikhoncnhn-text42 1616Semi">
                                        <span>Tên đăng nhập</span>
                                    </span>
                                </div>
                            </div>
                            <div class="tikhoncnhn-fill5">
                                <span class="tikhoncnhn-text44 1616Reg">
                                   {{$user->tendn}}
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</body>

</html>