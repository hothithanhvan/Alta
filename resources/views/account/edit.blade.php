@extends('layout.menubar')
@extends('layout.header')
  <body>
    <div>
      <link href="{{asset('css/taikhoan.css')}}" rel="stylesheet" />

      <div class="cpnhttikhon-container">
        <div class="cpnhttikhon-cpnhttikhon">
          <div class="cpnhttikhon-topbar">
            <div class="cpnhttikhon-breadcrumbs">
              <button class="cpnhttikhon-button">
                <span class="cpnhttikhon-text 2020Bold">
                  <span>Cài đặt hệ thống</span>
                </span>
              </button>
              <img
                src="{{asset('playground_assets/uanglerighti282-xnkf.svg');}}"
                alt="uanglerightI282"
                class="cpnhttikhon-uangleright"
              />
              <button class="cpnhttikhon-button1">
                <span class="cpnhttikhon-text02 2020Bold">
                  <span>Quản lý tài khoản</span>
                </span>
              </button>
              <img
                src="{{asset('playground_assets/uanglerighti282-gtv7.svg');}}"
                alt="uanglerightI282"
                class="cpnhttikhon-uangleright1"
              />
              <button class="cpnhttikhon-button2">
                <span class="cpnhttikhon-text04 2020Bold">
                  <span>Cập nhật tài khoản</span>
                </span>
              </button>
            </div>
            <div class="cpnhttikhon-frame625226">
              <div class="cpnhttikhon-unsplash-fyl8s-m-c2j2q"></div>
              <div class="cpnhttikhon-group296">
                <span class="cpnhttikhon-text06 1212Reg">
                  <span>Xin chào</span>
                </span>
                <span class="cpnhttikhon-text08 1616Bold">
                  <span>Lê Quỳnh Ái Vân</span>
                </span>
              </div>
            </div>
            <div class="cpnhttikhon-frame271">
              <div class="cpnhttikhon-vuesaxboldnotification">
                <div class="cpnhttikhon-vuesaxboldnotification1">
                  <div class="cpnhttikhon-notification">
                    <img
                      src="{{asset('playground_assets/vectori282-qwg.svg');}}"
                      alt="VectorI282"
                      class="cpnhttikhon-vector"
                    />
                    <img
                      src="{{asset('playground_assets/vectori282-of6k.svg');}}"
                      alt="VectorI282"
                      class="cpnhttikhon-vector01"
                    />
                  </div>
                </div>
              </div>
            </div>
          </div>
          <span class="cpnhttikhon-text10 2424Bold">
            <span>Quản lý tài khoản</span>
          </span>
          <form action="{{ route('account.update',$account->id) }}" method="POST">
                    @csrf
                    @method('PUT')
          <div class="cpnhttikhon-frame624726">
            <span class="cpnhttikhon-text12 2020Bold">
              <span>Thông tin tài khoản</span>
            </span>
            <form>
            <div class="cpnhttikhon-frame624731">
              <div class="cpnhttikhon-warningtext">
                <span class="cpnhttikhon-text14 1616Semi">
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
                <span class="cpnhttikhon-text16 1616Semi">
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
                <span class="cpnhttikhon-text18 1616Semi">
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
            <!-- <div class="cpnhttikhon-frame624739">
              <div class="cpnhttikhon-warningtext3">
                <span class="cpnhttikhon-text20 1616Semi">
                  <span>Vai trò</span>
                </span>
                <img
                  src="{{asset('playground_assets/vectori282-t95d.svg');}}"
                  alt="VectorI282"
                  class="cpnhttikhon-vector05"
                />
              </div>
              <div class="cpnhttikhon-dropdown">
                <select class=" cpnhttikhon-text22 1616Reg">
                  <option id="1">1</option>
                  <option>2</option>
                </select>
              </div>
            </div>
            <div class="cpnhttikhon-frame624734">
              <div class="cpnhttikhon-warningtext4">
                <span class="cpnhttikhon-text24 1616Semi">
                  <span>Tình trạng</span>
                </span>
                <img
                  src="{{asset('playground_assets/vectori282-z37c.svg');}}"
                  alt="VectorI282"
                  class="cpnhttikhon-vector06"
                />
              </div>
              <div class="cpnhttikhon-dropdown">
                <select class=" cpnhttikhon-text22 1616Reg">
                  <option id="1">1</option>
                  <option>2</option>
                </select>
              </div>
            </div> -->
            <div class="cpnhttikhon-frame624735">
              <div class="cpnhttikhon-warningtext5">
                <span class="cpnhttikhon-text28 1616Semi">
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
            <!-- <div class="cpnhttikhon-frame624745">
              <div class="cpnhttikhon-warningtext6">
                <span class="cpnhttikhon-text30 1616Semi">
                  <span>Nhập lại mật khẩu:</span>
                </span>
                <img
                  src="{{asset('playground_assets/vectori282-io4f.svg');}}"
                  alt="VectorI282"
                  class="cpnhttikhon-vector08"
                />
              </div>
              <div class="cpnhttikhon-input4">
                <span class="cpnhttikhon-text32 1616Reg">
                  <span>Tuyetnguyen12</span>
                </span>
                
              </div>
            </div>
            <div class="cpnhttikhon-frame624738">
              <div class="cpnhttikhon-warningtext7">
                <span class="cpnhttikhon-text34 1616Semi">
                  <span>Mật khẩu:</span>
                </span>
                <img
                  src="{{asset('playground_assets/vectori282-tjge.svg');}}"
                  alt="VectorI282"
                  class="cpnhttikhon-vector09"
                />
              </div>
              <div class="cpnhttikhon-input5">
                <span class="cpnhttikhon-text36 1616Reg">
                  <span>Tuyetnguyen12</span>
                </span>
                
              </div>
            </div> -->
            <div class="cpnhttikhon-frame624744">
              <span class="cpnhttikhon-text38 1414Reg">
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
            <button class="cpnhttikhon-button4">
              <span class="cpnhttikhon-text42"><span>Hủy bỏ</span></span>
            </button>
          </div>
        </form>
          
        </div>
      </div>
    </div>
  </body>
</html>
