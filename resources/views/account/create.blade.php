@extends('layout.menubar')
@extends('layout.header')
@extends('layout.hello')
@extends('layout.alert')
<title>Tạo tài khoản</title>
  <body>
    <div>
      <link href="{{asset('css/taikhoan.css')}}" rel="stylesheet" />

      <div class="themtaikhoan-container">
        <div class="container-all">
          <div class="topbar-all">
            <div class="breadcrumbs">
              @include('account.breadscrum')
              <img
                src="{{asset('playground_assets/uanglerighti283-yowa.svg');}}"
                alt="uanglerightI283"
                class="themtaikhoan-uangleright1"
              />
              <div class="themtaikhoan-button2">
                <span class="themtaikhoan-text04  ">
                  <span>Thêm tài khoản</span>
                </span>
</div>
            </div>

            <div>
            </div>
          </div>
          <span class="list-index">
            <span>Quản lý tài khoản</span>
          </span>
          <form action="{{ route('account.store') }}" method="POST">
            @csrf
          <div class="themtaikhoan-frame624726">
            <span class="tieude">
              <span>Thông tin tài khoản</span>
            </span>
            @error('tendn')
  <div class="alert1">{{$message}}

  <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span> 

</div>
@enderror 
            <div class="themtaikhoan-frame624731">
              <div class="themtaikhoan-warningtext">
                <span class="chitiettieude">
                  <span>Họ tên</span>
                </span>
                <img
                  src="{{asset('playground_assets/vectori283-9fv.svg');}}"
                  alt="VectorI283"
                  class="themtaikhoan-vector02"
                />
              </div>
              <input
                type="text" name="hoten"
                placeholder="Nhập họ tên"
                class="themtaikhoan-input"
              />
            </div>
            <div class="themtaikhoan-frame624732">
              <div class="themtaikhoan-warningtext1">
              <span class="chitiettieude">
                  <span>Số điện thoại</span>
                </span>
                <img
                  src="{{asset('playground_assets/vectori283-a3g.svg');}}"
                  alt="VectorI283"
                  class="themtaikhoan-vector03"
                />
              </div>
              <input
                type="text" name="sdt" 
                placeholder="Nhập số điện thoại"
                class="themtaikhoan-input1"
              />
            </div>
            <div class="themtaikhoan-frame624733">
              <div class="themtaikhoan-warningtext2">
              <span class="chitiettieude">
                  <span>Email</span>
                </span>
                <img
                  src="{{asset('playground_assets/vectori283-l33c.svg');}}"
                  alt="VectorI283"
                  class="themtaikhoan-vector04"
                />
              </div>
              <input
                type="text" name="email"
                placeholder="Nhập email"
                class="themtaikhoan-input2"
              />
            </div>
            <div class="themtaikhoan-frame624739">
              <div class="themtaikhoan-warningtext3">
              <span class="chitiettieude">
                  <span>Vai trò</span>
                </span>
                <img
                  src="{{asset('playground_assets/vectori283-w72u.svg');}}"
                  alt="VectorI283"
                  class="themtaikhoan-vector05"
                />
              </div>
              <div class="themtaikhoan-dropdown">
              
                  <select class="themtaikhoan-text22  " name="vaitro" id="vaitro" >
                  @foreach($role as $role)
                    <option 
                    value="{{ $role->tenvaitro }}">{{ $role->tenvaitro}}</option>
                    @endforeach
                  </select>
                  
              </div>
            </div>
            <div class="themtaikhoan-frame624734">
              <div class="themtaikhoan-warningtext4">
              <span class="chitiettieude">
                  <span>Tình trạng</span>
                </span>
                <img
                  src="{{asset('playground_assets/vectori283-83mp.svg');}}"
                  alt="VectorI283"
                  class="themtaikhoan-vector06"
                />
              </div>
              <div class="themtaikhoan-dropdown">
                  <select class="themtaikhoan-text22" name="tinhtrang">
                    <option value="Hoạt động">Hoạt động</option>
                    <option value="Ngưng hoạt động">Ngưng hoạt động</option>
                  </select>
              </div>
            </div>
            <div class="themtaikhoan-frame624735">
              <div class="themtaikhoan-warningtext5">
              <span class="chitiettieude">
                  <span>Tên đăng nhập</span>
                </span>
                <img
                  src="{{asset('playground_assets/vectori283-ql5.svg');}}"
                  alt="VectorI283"
                  class="themtaikhoan-vector07"
                />
              </div>
              <input
                type="text" name="tendn"
                placeholder="Nhập tên đăng nhập"
                class="themtaikhoan-input3"
              />
            </div>
            <div class="themtaikhoan-frame624746">
              <div class="themtaikhoan-warningtext6">
              <span class="chitiettieude">
                  <span>Nhập lại mật khẩu</span>
                </span>
                <img
                  src="{{asset('playground_assets/vectori283-onjb.svg');}}"
                  alt="VectorI283"
                  class="themtaikhoan-vector08"
                />
              </div>
              <input
                type="text" name="password1"
                placeholder="Nhập mật khẩu"
                class="themtaikhoan-input3"
              />
            </div>
            <div class="themtaikhoan-frame624745">
              <div class="themtaikhoan-warningtext7">
              <span class="chitiettieude">
                  <span>Mật khẩu</span>
                </span>
                <img
                  src="{{asset('playground_assets/vectori283-1yzm.svg');}}"
                  alt="VectorI283"
                  class="themtaikhoan-vector09"
                />
              </div>
              <input
                type="text" name="password"
                placeholder="Nhập lại mật khẩu"
                class="themtaikhoan-input3"
              />
            </div>
            <div class="themtaikhoan-frame624744">
              <span class="themtaikhoan-text34  ">
                <span>Là trường thông tin bắt buộc</span>
              </span>
              <img
                src="{{asset('playground_assets/vector2831-v3pm.svg');}}"
                alt="Vector2831"
                class="themtaikhoan-vector10"
              />
            </div>
          </div>
          <div class="themtaikhoan-frame624737">
            <button type="submit" class="themtaikhoan-button3 themtaikhoan-text36">
              Thêm
            </button>
            <a href="{{route('account.index')}}" class="themtaikhoan-button4">
              <span class="themtaikhoan-text38"><span>Hủy bỏ</span></span>
</a>
          </div>
          </div>
                </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>
