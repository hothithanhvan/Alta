@extends('layout.menubar')
@extends('layout.header')
@extends('layout.hello')
  <body>
    <div>
      <link href="{{asset('css/taikhoan.css')}}" rel="stylesheet" />

      <div class="cpnhttikhon-container">
        <div class="container-all">
          <div class="topbar-all">
            <div class="breadcrumbs">
              @include('account.breadscrum')
              <img
                src="{{asset('playground_assets/uanglerighti282-gtv7.svg');}}"
                alt="uanglerightI282"
                class="cpnhttikhon-uangleright1"
              />
              <div class="cpnhttikhon-button2">
                <span class="cpnhttikhon-text04  ">
                  <span>Cập nhật tài khoản</span>
                </span>
              </button>
            </div>
          </div>
          <span class="cpnhttikhon-text10">
            <span>Quản lý tài khoản</span>
          </span>
          <form action="{{ route('account.update',$account->id) }}" method="POST">
                    @csrf
                    @method('PUT')
          <div class="cpnhttikhon-frame624726">
            <span class="tieude">
              <span>Thông tin tài khoản</span>
            </span>
            <form>
            <div class="cpnhttikhon-frame624731">
              <div class="cpnhttikhon-warningtext">
                <span class="chitiettieude">
                  <span>Họ tên</span>
                </span>
                <img
                  src="{{asset('playground_assets/vectori282-53o.svg');}}"
                  alt="VectorI282"
                  class="cpnhttikhon-vector02"
                />
              </div>
              <input
                type="text" name="hoten"
                value="{{$account->hoten}}"
                class="cpnhttikhon-input"
              />
            </div>
            <div class="cpnhttikhon-frame624732">
              <div class="cpnhttikhon-warningtext1">
              <span class="chitiettieude">
                  <span>Số điện thoại</span>
                </span>
                <img
                  src="{{asset('playground_assets/vectori282-qore.svg');}}"
                  alt="VectorI282"
                  class="cpnhttikhon-vector03"
                />
              </div>
              <input
                type="text" name="sdt"
                value="{{$account->sdt}}"
                class="cpnhttikhon-input1"
              />
            </div>
            <div class="cpnhttikhon-frame624733">
              <div class="cpnhttikhon-warningtext2">
              <span class="chitiettieude">
                  <span>Email</span>
                </span>
                <img
                  src="{{asset('playground_assets/vectori282-2q3m.svg');}}"
                  alt="VectorI282"
                  class="cpnhttikhon-vector04"
                />
              </div>
              <input
                type="text" name="email"
                value="{{$account->email}}"
                class="cpnhttikhon-input2"
              />
            </div>
            <div class="cpnhttikhon-frame624739">
              <div class="cpnhttikhon-warningtext3">
              <span class="chitiettieude">
                  <span>Vai trò</span>
                </span>
                <img
                  src="{{asset('playground_assets/vectori282-t95d.svg');}}"
                  alt="VectorI282"
                  class="cpnhttikhon-vector05"
                />
              </div>
              <div class="cpnhttikhon-dropdown">
                <select name="vaitro" class="cpnhttikhon-text22  ">
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
            <div class="cpnhttikhon-frame624734">
              <div class="cpnhttikhon-warningtext4">
              <span class="chitiettieude">
                  <span>Tình trạng</span>
                </span>
                <img
                  src="{{asset('playground_assets/vectori282-z37c.svg');}}"
                  alt="VectorI282"
                  class="cpnhttikhon-vector06"
                />
              </div>
              <div class="cpnhttikhon-dropdown">
                <select class=" cpnhttikhon-text22  ">
                  <option id="1">1</option>
                  <option>2</option>
                </select>
              </div>
            </div>
            <div class="cpnhttikhon-frame624735">
              <div class="cpnhttikhon-warningtext5">
              <span class="chitiettieude">
                  <span>Tên đăng nhập:</span>
                </span>
                <img
                  src="{{asset('playground_assets/vectori282-xu74.svg');}}"
                  alt="VectorI282"
                  class="cpnhttikhon-vector07"
                />
              </div>
              <input
                type="text" name="tendn"
                value="{{$account->tendn}}"
                class="cpnhttikhon-input3"
              />
            </div>
            <div class="cpnhttikhon-frame624745">
              <div class="cpnhttikhon-warningtext6">
              <span class="chitiettieude">
                  <span>Nhập lại mật khẩu:</span>
                </span>
                <img
                  src="{{asset('playground_assets/vectori282-io4f.svg');}}"
                  alt="VectorI282"
                  class="cpnhttikhon-vector08"
                />
              </div>
              <div class="cpnhttikhon-input4">
                <span class="cpnhttikhon-text32  ">
                  <span></span>
                </span>
                
              </div>
            </div>
            <div class="cpnhttikhon-frame624738">
              <div class="cpnhttikhon-warningtext7">
              <span class="chitiettieude">
                  <span>Mật khẩu:</span>
                </span>
                <img
                  src="{{asset('playground_assets/vectori282-tjge.svg');}}"
                  alt="VectorI282"
                  class="cpnhttikhon-vector09"
                />
              </div>
              <div class="cpnhttikhon-input5">
                <span class="cpnhttikhon-text36  ">
                  <span></span>
                </span>
                
              </div>
            </div>
            <div class="cpnhttikhon-frame624744">
              <span class="cpnhttikhon-text38  ">
                <span>Là trường thông tin bắt buộc</span>
              </span>
              <img
                src="{{asset('playground_assets/vector2831-fucm.svg');}}"
                alt="Vector2831"
                class="cpnhttikhon-vector10"
              />
            </div>
          </div>
          <div class="cpnhttikhon-frame624737">
            <button type="submit" class="cpnhttikhon-button3 cpnhttikhon-text40">Cập nhật</button>
            <a href="{{route('account.index')}}" class="cpnhttikhon-button4">
              <span class="cpnhttikhon-text42"><span>Hủy bỏ</span></span>
</a>
          </div>
        </form>
          
        </div>
      </div>
    </div>
  </body>
</html>
