@extends('layout.menubar')
@extends('layout.header')
@extends('layout.hello')
@extends('layout.alert')
<title>Sửa tài khoản</title>
  <body>
    <div>
      <link href="{{asset('css/taikhoan.css')}}" rel="stylesheet" />

      <div class="capnhattaikhoan-container">
        <div class="container-all">
          <div class="topbar-all">
            <div class="breadcrumbs">
              @include('account.breadscrum')
              <img
                src="{{asset('playground_assets/uanglerighti282-gtv7.svg');}}"
                alt="uanglerightI282"
                class="capnhattaikhoan-uangleright1"
              />
              <div class="capnhattaikhoan-button2">
                <span class="capnhattaikhoan-text04  ">
                  <span>Cập nhật tài khoản</span>
                </span>
              </button>
            </div>
          </div>
          <span class="capnhattaikhoan-text10">
            <span>Quản lý tài khoản</span>
          </span>
          <form action="{{ route('account.update',$account->id) }}" method="POST">
                    @csrf
                    @method('PUT')
          <div class="capnhattaikhoan-frame624726">
            <span class="tieude">
              <span>Thông tin tài khoản</span>
            </span>
            @error('tendn')
  <div class="alert1">{{$message}}

  <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span> 

</div>
@enderror 
            <div class="capnhattaikhoan-frame624731">
              <div class="capnhattaikhoan-warningtext">
                <span class="chitiettieude">
                  <span>Họ tên</span>
                </span>
                <img
                  src="{{asset('playground_assets/vectori282-53o.svg');}}"
                  alt="VectorI282"
                  class="capnhattaikhoan-vector02"
                />
              </div>
              <input
                type="text" name="hoten"
                value="{{$account->hoten}}"
                class="capnhattaikhoan-input"
              />
            </div>
            <div class="capnhattaikhoan-frame624732">
              <div class="capnhattaikhoan-warningtext1">
              <span class="chitiettieude">
                  <span>Số điện thoại</span>
                </span>
                <img
                  src="{{asset('playground_assets/vectori282-qore.svg');}}"
                  alt="VectorI282"
                  class="capnhattaikhoan-vector03"
                />
              </div>
              <input
                type="text" name="sdt"
                value="{{$account->sdt}}"
                class="capnhattaikhoan-input1"
              />
            </div>
            <div class="capnhattaikhoan-frame624733">
              <div class="capnhattaikhoan-warningtext2">
              <span class="chitiettieude">
                  <span>Email</span>
                </span>
                <img
                  src="{{asset('playground_assets/vectori282-2q3m.svg');}}"
                  alt="VectorI282"
                  class="capnhattaikhoan-vector04"
                />
              </div>
              <input
                type="text" name="email"
                value="{{$account->email}}"
                class="capnhattaikhoan-input2"
              />
            </div>
            <div class="capnhattaikhoan-frame624739">
              <div class="capnhattaikhoan-warningtext3">
              <span class="chitiettieude">
                  <span>Vai trò</span>
                </span>
                <img
                  src="{{asset('playground_assets/vectori282-t95d.svg');}}"
                  alt="VectorI282"
                  class="capnhattaikhoan-vector05"
                />
              </div>
              <div class="capnhattaikhoan-dropdown">
                <select name="vaitro" class="capnhattaikhoan-text22  ">
                @foreach($role as $role)
                @if ($account->vaitro === $role->tenvaitro)
                <option selected value="{{ $role->tenvaitro }}">{{ $role->tenvaitro}}</option>
                @else
                    <option value="{{ $role->tenvaitro }}">{{ $role->tenvaitro}}</option>
                    @endif
                    @endforeach
                </select>
              </div>
            </div>
            <div class="capnhattaikhoan-frame624734">
              <div class="capnhattaikhoan-warningtext4">
              <span class="chitiettieude">
                  <span>Tình trạng</span>
                </span>
                <img
                  src="{{asset('playground_assets/vectori282-z37c.svg');}}"
                  alt="VectorI282"
                  class="capnhattaikhoan-vector06"
                />
              </div>
              <div class="capnhattaikhoan-dropdown">
                <select class=" capnhattaikhoan-text22" name="tinhtrang">
                <option value="Hoạt động">Hoạt động</option>
                    <option value="Ngưng hoạt động">Ngưng hoạt động</option>
                </select>
              </div>
            </div>
            <div class="capnhattaikhoan-frame624735">
              <div class="capnhattaikhoan-warningtext5">
              <span class="chitiettieude">
                  <span>Tên đăng nhập:</span>
                </span>
                <img
                  src="{{asset('playground_assets/vectori282-xu74.svg');}}"
                  alt="VectorI282"
                  class="capnhattaikhoan-vector07"
                />
              </div>
              <input
                type="text" name="tendn"
                value="{{$account->tendn}}"
                class="capnhattaikhoan-input3"
              />
            </div>
            <div class="capnhattaikhoan-frame624745">
              <div class="capnhattaikhoan-warningtext6">
              <span class="chitiettieude">
                  <span>Nhập lại mật khẩu:</span>
                </span>
                <img
                  src="{{asset('playground_assets/vectori282-io4f.svg');}}"
                  alt="VectorI282"
                  class="capnhattaikhoan-vector08"
                />
              </div>
              <input class="capnhattaikhoan-input4" type="text" name="password1">
                <!-- <span class="capnhattaikhoan-text32  "> -->
            
            </div>
            <div class="capnhattaikhoan-frame624738">
              <div class="capnhattaikhoan-warningtext7">
              <span class="chitiettieude">
                  <span>Mật khẩu:</span>
                </span>
                <img
                  src="{{asset('playground_assets/vectori282-tjge.svg');}}"
                  alt="VectorI282"
                  class="capnhattaikhoan-vector09"
                />
              </div>
              <input class="capnhattaikhoan-input5" type="text" name="password" 
              value="{{$account->password}}">
                <!-- <span class="capnhattaikhoan-text36  "> -->
               
            </div>
            <div class="capnhattaikhoan-frame624744">
              <span class="capnhattaikhoan-text38  ">
                <span>Là trường thông tin bắt buộc</span>
              </span>
              <img
                src="{{asset('playground_assets/vector2831-fucm.svg');}}"
                alt="Vector2831"
                class="capnhattaikhoan-vector10"
              />
            </div>
          </div>
          <div class="capnhattaikhoan-frame624737">
            <button type="submit" class="capnhattaikhoan-button3 capnhattaikhoan-text40">Cập nhật</button>
            <a href="{{route('account.index')}}" class="capnhattaikhoan-button4">
              <span class="capnhattaikhoan-text42"><span>Hủy bỏ</span></span>
</a>
          </div>
        </form>
          
        </div>
      </div>
    </div>
  </body>
</html>
