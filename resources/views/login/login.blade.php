@extends('layout.header')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<body>
  <div>
    <link href="{{asset('css\dangnhap.css'); }}" rel="stylesheet" />

    <div class="framengnhp-container">
      <div class="framengnhp-framengnhp">
       @include('login.rightLogin')
       @include('layout.alert')
        <form action="login" method="post">
          @csrf
          <div class="framengnhp-frame624727">
              <span>Tên đăng nhập *</span>
            <input id="tendn" type="text" name="tendn" class="framengnhp-input" />
            <p id = "cd"></p>
          </div>
          <div class="framengnhp-frame624728">
            <span class="framengnhp-text02 1818Reg">
              <span>Mật khẩu *</span>
            </span>
            <input type="password" id="password" name="password" class="framengnhp-input" alt="ueyeslashI311" src="{{asset('playground_assets\ueyeslashi311-pqjr.svg'); }}" class="framengnhp-ueyeslash" />
          </div>
          <a href="{{url('forgetPassword')}}" class="framengnhp-text04  ">Quên mật khẩu?</a>

          <input type="submit" class="framengnhp-button framengnhp-text06  " value="Đăng nhập" />
        </form>
        <div class="framengnhp-logoalta">
          <div class="framengnhp-group">
            <div class="framengnhp-group001">
              <img alt="VectorI312" src="{{asset('playground_assets/vectori312-lj0h.svg');}}" class="framengnhp-vector" />
              <img alt="VectorI312" src="{{asset('playground_assets/vectori312-6hu5k.svg');}}" class="framengnhp-vector001" />
            </div>
            <div class="framengnhp-group002">
              <img alt="VectorI312" src="{{asset('playground_assets/vectori312-z78w.svg');}}" class="framengnhp-vector002" />
              <img alt="VectorI312" src="{{asset('playground_assets/vectori312-3io.svg');}}" class="framengnhp-vector003" />
              <img alt="VectorI312" src="{{asset('playground_assets/vectori312-cel.svg');}}" class="framengnhp-vector004" />
            </div>
            <div class="framengnhp-group003">
              <img alt="VectorI312" src="{{asset('playground_assets/vectori312-sbqj.svg');}}" class="framengnhp-vector005" />
              <img alt="VectorI312" src="{{asset('playground_assets/vectori312-xr9w.svg');}}" class="framengnhp-vector006" />
            </div>
            <img alt="VectorI312" src="{{asset('playground_assets/vectori312-h7jq.svg');}}" class="framengnhp-vector007" />
            <img alt="VectorI312" src="{{asset('playground_assets/vectori312-g97.svg');}}" class="framengnhp-vector008" />
          </div>
        </div>

        <span class="framengnhp-text08 3434Reg">
          <span>
            <span>Hệ thống</span>
            <br />
            <span></span>
          </span>
        </span>
        <span class="framengnhp-text13 3636Xbold">
          <span>QUẢN LÝ XẾP HÀNG</span>
        </span>
      </div>
    </div>
  </div>
</body>

</html>
