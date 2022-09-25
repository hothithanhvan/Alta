@extends('layout.menubar')
@extends('layout.header')
@extends('layout.alert')
@extends('layout.hello')
  <body>
    <div>
      <link href="{{asset('css/taikhoan.css')}}" rel="stylesheet" />

      <div class="thmtikhon-container">
        <div class="container-all">
          <div class="topbar-all">
            <div class="breadcrumbs">
              @include('account.breadscrum')
              <img
                src="{{asset('playground_assets/uanglerighti283-yowa.svg');}}"
                alt="uanglerightI283"
                class="thmtikhon-uangleright1"
              />
              <div class="thmtikhon-button2">
                <span class="thmtikhon-text04  ">
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
          <div class="thmtikhon-frame624726">
            <span class="tieude">
              <span>Thông tin tài khoản</span>
            </span>
            <div class="thmtikhon-frame624731">
              <div class="thmtikhon-warningtext">
                <span class="chitiettieude">
                  <span>Họ tên</span>
                </span>
                <img
                  src="{{asset('playground_assets/vectori283-9fv.svg');}}"
                  alt="VectorI283"
                  class="thmtikhon-vector02"
                />
              </div>
              <input
                type="text" name="hoten"
                placeholder="Nhập họ tên"
                class="thmtikhon-input"
              />
            </div>
            <div class="thmtikhon-frame624732">
              <div class="thmtikhon-warningtext1">
              <span class="chitiettieude">
                  <span>Số điện thoại</span>
                </span>
                <img
                  src="{{asset('playground_assets/vectori283-a3g.svg');}}"
                  alt="VectorI283"
                  class="thmtikhon-vector03"
                />
              </div>
              <input
                type="text" name="sdt" 
                placeholder="Nhập số điện thoại"
                class="thmtikhon-input1"
              />
            </div>
            <div class="thmtikhon-frame624733">
              <div class="thmtikhon-warningtext2">
              <span class="chitiettieude">
                  <span>Email</span>
                </span>
                <img
                  src="{{asset('playground_assets/vectori283-l33c.svg');}}"
                  alt="VectorI283"
                  class="thmtikhon-vector04"
                />
              </div>
              <input
                type="text" name="email"
                placeholder="Nhập email"
                class="thmtikhon-input2"
              />
            </div>
            <div class="thmtikhon-frame624739">
              <div class="thmtikhon-warningtext3">
              <span class="chitiettieude">
                  <span>Vai trò</span>
                </span>
                <img
                  src="{{asset('playground_assets/vectori283-w72u.svg');}}"
                  alt="VectorI283"
                  class="thmtikhon-vector05"
                />
              </div>
              <div class="thmtikhon-dropdown">
              
                  <select class="thmtikhon-text22  " name="vaitro" id="vaitro" >
                  @foreach($role as $role)
                    <option 
                    value="{{ $role->tenvaitro }}">{{ $role->tenvaitro}}</option>
                    @endforeach
                  </select>
                  
              </div>
            </div>
            <div class="thmtikhon-frame624734">
              <div class="thmtikhon-warningtext4">
              <span class="chitiettieude">
                  <span>Tình trạng</span>
                </span>
                <img
                  src="{{asset('playground_assets/vectori283-83mp.svg');}}"
                  alt="VectorI283"
                  class="thmtikhon-vector06"
                />
              </div>
              <div class="thmtikhon-dropdown">
                  <select class="thmtikhon-text22  ">
                    <option>1</option>
                    <option>2</option>
                  </select>
              </div>
            </div>
            <div class="thmtikhon-frame624735">
              <div class="thmtikhon-warningtext5">
              <span class="chitiettieude">
                  <span>Tên đăng nhập</span>
                </span>
                <img
                  src="{{asset('playground_assets/vectori283-ql5.svg');}}"
                  alt="VectorI283"
                  class="thmtikhon-vector07"
                />
              </div>
              <input
                type="text" name="tendn"
                placeholder="Nhập tên đăng nhập"
                class="thmtikhon-input3"
              />
            </div>
            <div class="thmtikhon-frame624746">
              <div class="thmtikhon-warningtext6">
              <span class="chitiettieude">
                  <span>Nhập lại mật khẩu</span>
                </span>
                <img
                  src="{{asset('playground_assets/vectori283-onjb.svg');}}"
                  alt="VectorI283"
                  class="thmtikhon-vector08"
                />
              </div>
              <input
                type="text"
                placeholder="Nhập mật khẩu"
                class="thmtikhon-input3"
              />
            </div>
            <div class="thmtikhon-frame624745">
              <div class="thmtikhon-warningtext7">
              <span class="chitiettieude">
                  <span>Mật khẩu</span>
                </span>
                <img
                  src="{{asset('playground_assets/vectori283-1yzm.svg');}}"
                  alt="VectorI283"
                  class="thmtikhon-vector09"
                />
              </div>
              <input
                type="text" name="password"
                placeholder="Nhập lại mật khẩu"
                class="thmtikhon-input3"
              />
            </div>
            <div class="thmtikhon-frame624744">
              <span class="thmtikhon-text34  ">
                <span>Là trường thông tin bắt buộc</span>
              </span>
              <img
                src="{{asset('playground_assets/vector2831-v3pm.svg');}}"
                alt="Vector2831"
                class="thmtikhon-vector10"
              />
            </div>
          </div>
          <div class="thmtikhon-frame624737">
            <button type="submit" class="thmtikhon-button3 thmtikhon-text36">
              Thêm
            </button>
            <a href="{{route('account.index')}}" class="thmtikhon-button4">
              <span class="thmtikhon-text38"><span>Hủy bỏ</span></span>
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
