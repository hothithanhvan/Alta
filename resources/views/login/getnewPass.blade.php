
@extends('layout.header')
@extends('layout.alert')

<body>
    <div>
        <link href=" {{asset('css/dangnhap.css'); }}"" rel="stylesheet" />

    <div class="qunmtkhu-container">
        <form method="post" action="{{url('getnewPass')}}">
        @csrf
        <div class="qunmtkhu-qunmtkhu">
            @include('login.rightForget');
            <span class="qunmtkhu-text 2222Bold">
                <span>Đặt lại mật khẩu mới</span>
            </span>
            <div class="qunmtkhu-group323">
                <span class="qunmtkhu-text2 1818Reg"><span>Mật khẩu</span></span>
                <input type="text" name="password" class="qunmtkhu-input">
            </div>
            <div class="qunmtkhu-frame624730">
                <span class="qunmtkhu-text4 1818Reg">
                    <span>Nhập lại mật khẩu</span>
                </span>
                <input type="text" name="password1" class="qunmtkhu-input1">
            </div>
            <button type="submit" class="qunmtkhu-button qunmtkhu-text6 1616Bold">Xác nhận
            </button>
</form>
            <div class="qunmtkhu-logoalta">
                <div class="qunmtkhu-group">
                    <div class="qunmtkhu-group1">
                        <img src="{{asset('playground_assets/vectori317-65lhc.svg'); }}" alt=" VectorI317" class="qunmtkhu-vector" />
                        <img src="{{asset('playground_assets/vectori317-2m0h.svg'); }}" alt=" VectorI317" class="qunmtkhu-vector1" />
                    </div>
                    <div class="qunmtkhu-group2">
                        <img src="{{asset('playground_assets/vectori317-g2q.svg'); }}" alt=" VectorI317" class="qunmtkhu-vector2" />
                        <img src="{{asset('playground_assets/vectori317-exy5n.svg'); }}" alt=" VectorI317" class="qunmtkhu-vector3" />
                        <img src="{{asset('playground_assets/vectori317-5eo.svg'); }}" alt=" VectorI317" class="qunmtkhu-vector4" />
                    </div>
                    <div class="qunmtkhu-group3">
                        <img src="{{asset('playground_assets/vectori317-ldd.svg'); }}" alt=" VectorI317" class="qunmtkhu-vector5" />
                        <img src="{{asset('playground_assets/vectori317-d4v6.svg'); }}" alt=" VectorI317" class="qunmtkhu-vector6" />
                    </div>
                    <img src="{{asset('playground_assets/vectori317-pq4.svg'); }}" alt=" VectorI317" class="qunmtkhu-vector7" />
                    <img src="{{asset('playground_assets/vectori317-fsjs.svg'); }}" alt=" VectorI317" class="qunmtkhu-vector8" />
                </div>
            </div>
        </div>
    </div>
    </div>
    </body>

</html>