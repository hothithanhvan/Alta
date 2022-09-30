@extends('layout.header')
<title>Đăng nhập</title>
<link rel="icon" type="image/svg" href="C:\wamp64\www\alta\public\playground_assets\Logo alta.svg">

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<body>
  <div>
    <link href="{{asset('css\dangnhap.css'); }}" rel="stylesheet" />

    <div class="dangnhap-container">
      <div class="dangnhap-dangnhap">
       @include('login.rightLogin')
       @include('layout.alert')
        <form action="{{ route('store') }}" method="post">
          @csrf
          <div class="dangnhap-frame624727">
              <span>Tên đăng nhập *</span>
            <input id="tendn" type="text" name="tendn" class="dangnhap-input" />
          </div>
          <div class="dangnhap-frame624728">
            <span class="dangnhap-text02 1818Reg">
              <span>Mật khẩu *</span>
            </span>
            
            <input type="password" id="password" name="password" class="dangnhap-input"  />
            
          </div>
          <a href="{{url('forgetPassword')}}" class="dangnhap-text04  ">Quên mật khẩu?</a>
          <button type="submit" class="dangnhap-button dangnhap-text06" >Đăng nhập</button>
        </form>
        <button onclick="myFunction()">
          <img src="{{asset('/playground_assets/Eye.svg')}}" class="dangnhap-ueyeslash"/>
            </button>
        <script>
          function myFunction() {
            var x = document.getElementById("password");
            if (x.type === "password") {
              x.type = "text";
            } else {
              x.type = "password";
            }
          }
          </script>
        <div class="dangnhap-logoalta">
          <div class="dangnhap-group">
            <div class="dangnhap-group001">
              <img alt="VectorI312" src="{{asset('playground_assets/vectori312-lj0h.svg');}}" class="dangnhap-vector" />
              <img alt="VectorI312" src="{{asset('playground_assets/vectori312-6hu5k.svg');}}" class="dangnhap-vector001" />
            </div>
            <div class="dangnhap-group002">
              <img alt="VectorI312" src="{{asset('playground_assets/vectori312-z78w.svg');}}" class="dangnhap-vector002" />
              <img alt="VectorI312" src="{{asset('playground_assets/vectori312-3io.svg');}}" class="dangnhap-vector003" />
              <img alt="VectorI312" src="{{asset('playground_assets/vectori312-cel.svg');}}" class="dangnhap-vector004" />
            </div>
            <div class="dangnhap-group003">
              <img alt="VectorI312" src="{{asset('playground_assets/vectori312-sbqj.svg');}}" class="dangnhap-vector005" />
              <img alt="VectorI312" src="{{asset('playground_assets/vectori312-xr9w.svg');}}" class="dangnhap-vector006" />
            </div>
            <img alt="VectorI312" src="{{asset('playground_assets/vectori312-h7jq.svg');}}" class="dangnhap-vector007" />
            <img alt="VectorI312" src="{{asset('playground_assets/vectori312-g97.svg');}}" class="dangnhap-vector008" />
          </div>
        </div>

        <span class="dangnhap-text08 3434Reg">
          <span>
            <span>Hệ thống</span>
            <br />
            <span></span>
          </span>
        </span>
        <span class="dangnhap-text13 3636Xbold">
          <span>QUẢN LÝ XẾP HÀNG</span>
        </span>
      </div>
    </div>
  </div>
</body>

</html>
