
@extends('layout.menubar')
@extends('layout.header')
@extends('layout.hello')

<body>
  <div>
    <link href="{{asset('css/vaitro.css')}}" rel="stylesheet" />

    <div class="cpnhtvaitr-container">
      <div class="cpnhtvaitr-cpnhtvaitr">
        <div class="cpnhtvaitr-topbar">
          <div class="cpnhtvaitr-breadcrumbs">
            <button class="cpnhtvaitr-button">
              <span class="cpnhtvaitr-text 2020Bold">
                <span>Cài đặt hệ thống</span>
              </span>
            </button>
            <img src="{{asset('playground_assets/uanglerighti287-ayzp.svg');}}" alt="uanglerightI287"
              class="cpnhtvaitr-uangleright" />
            <button class="cpnhtvaitr-button1">
              <span class="cpnhtvaitr-text02 2020Bold">
                <span>Quản lý vai trò</span>
              </span>
            </button>
            <img src="{{asset('playground_assets/uanglerighti287-38b.svg');}}" alt="uanglerightI287"
              class="cpnhtvaitr-uangleright1" />
            <button class="cpnhtvaitr-button2">
              <span class="cpnhtvaitr-text04 2020Bold">
                <span>Cập nhật vai trò</span>
              </span>
            </button>
          </div>

          <div class="cpnhtvaitr-frame271">
            <div class="cpnhtvaitr-vuesaxboldnotification">
              <div class="cpnhtvaitr-vuesaxboldnotification1">
                <div class="cpnhtvaitr-notification">
                  <img src="{{asset('playground_assets/vectori287-hhep.svg');}}" alt="VectorI287" class="cpnhtvaitr-vector" />
                  <img src="{{asset('playground_assets/vectori287-ibs.svg');}}" alt="VectorI287" class="cpnhtvaitr-vector01" />
                </div>
              </div>
            </div>
          </div>
        </div>
        <form action="{{ route('role.update',$role->id) }}" method="POST">
            @csrf
            @method('PUT')
        <div class="cpnhtvaitr-frame624738">
          <span class="cpnhtvaitr-text10 2020Bold">
            <span>Thông tin vai trò</span>
          </span>
          <div class="cpnhtvaitr-frame624731">
            <div class="cpnhtvaitr-warningtext">
              <span class="cpnhtvaitr-text12 1616Semi">
                <span>Tên vai trò</span>
              </span>
              <img src="{{asset('playground_assets/vectori287-4vrc.svg');}}" alt="VectorI287" class="cpnhtvaitr-vector02" />
            </div>
            <input type="text" name="tenvaitro" value="{{$role->tenvaitro}}" class="cpnhtvaitr-input" />
          </div>
          <div class="cpnhtvaitr-frame624733">
            <div class="cpnhtvaitr-warningtext01">
              <span class="cpnhtvaitr-text14 1616Semi">
                <span>Mô tả:</span>
              </span>
            </div>
            <input type="text" name="mota" value="{{$role->mota}}" class="cpnhtvaitr-input1" />
          </div>
          <div class="cpnhtvaitr-frame624744">
            <span class="cpnhtvaitr-text16 1414Reg">
              <span>Là trường thông tin bắt buộc</span>
            </span>
            <img src="{{asset('playground_assets/vector2871-46wl.svg');}}" alt="Vector2871" class="cpnhtvaitr-vector03" />
          </div>
          <div class="cpnhtvaitr-frame625231">
            <img src="{{asset('playground_assets/rectangle34631912871-zl05u-200w.png');}}" alt="Rectangle34631912871"
              class="cpnhtvaitr-rectangle3463191" />
            <span class="cpnhtvaitr-text18 2020Bold">
              <span>Nhóm chức năng A</span>
            </span>
            <span class="cpnhtvaitr-text20 2020Bold">
              <span>Nhóm chức năng B</span>
            </span>
            <div class="cpnhtvaitr-group343">
              <div class="cpnhtvaitr-group337">
                <div class="cpnhtvaitr-warningtext02">
                  <span class="cpnhtvaitr-text22 1616Semi">
                    <span>Tất cả</span>
                  </span>
                </div>
                <input type="checkbox" class="container checkbox">

              </div>
            </div>
            <div class="cpnhtvaitr-group347">
              <div class="cpnhtvaitr-group337">
                <div class="cpnhtvaitr-warningtext03">
                  <span class="cpnhtvaitr-text24 1616Semi">
                    <span>Tất cả</span>
                  </span>
                </div>
                <input type="checkbox" class="container checkbox">
              </div>
            </div>
              <div class="cpnhtvaitr-group344">
                <div class="cpnhtvaitr-group337">
                  <div class="cpnhtvaitr-warningtext04">
                    <span class="cpnhtvaitr-text26 1616Semi">
                      <span>Chức năng x</span>
                    </span>
                  </div>
                  <input type="checkbox" class="container checkbox">
                </div>
              </div>
            <div class="cpnhtvaitr-group348">
              <div class="cpnhtvaitr-group337">
                <div class="cpnhtvaitr-warningtext05">
                  <span class="cpnhtvaitr-text28 1616Semi">
                    <span>Chức năng x</span>
                  </span>
                </div>
                <input type="checkbox" class="container checkbox">
              </div>
            </div>
            <div class="cpnhtvaitr-group345">
              <div class="cpnhtvaitr-group337">
                <div class="cpnhtvaitr-warningtext06">
                  <span class="cpnhtvaitr-text30 1616Semi">
                    <span>Chức năng y</span>
                  </span>
                </div>
                <input type="checkbox" class="container checkbox">
            </div>
          </div>
          <div class="cpnhtvaitr-group349">
            <div class="cpnhtvaitr-group337">
              <div class="cpnhtvaitr-warningtext07">
                <span class="cpnhtvaitr-text32 1616Semi">
                  <span>Chức năng y</span>
                </span>
              </div>
              <input type="checkbox" class="container checkbox">
            </div>
          </div>
          <div class="cpnhtvaitr-group346">
            <div class="cpnhtvaitr-group337">
              <div class="cpnhtvaitr-warningtext08">
                <span class="cpnhtvaitr-text34 1616Semi">
                  <span>Chức năng z</span>
                </span>
              </div>
              <input type="checkbox" class="container checkbox">
          </div>
        </div>
        <div class="cpnhtvaitr-group350">
          <div class="cpnhtvaitr-group337">
            <div class="cpnhtvaitr-warningtext09">
              <span class="cpnhtvaitr-text36 1616Semi">
                <span>Chức năng z</span>
              </span>
            </div>
            <input type="checkbox" class="container checkbox">
          </div>
        </div>
      </div>
      <div class="cpnhtvaitr-warningtext10">
        <span class="cpnhtvaitr-text38 1616Semi">
          <span>Phân quyền chức năng</span>
        </span>

      </div>
    </div>
    <div class="cpnhtvaitr-frame624737">
      <button type="submit" class="cpnhtvaitr-button3 cpnhtvaitr-text40" >
        Cập nhật
      </button>
      <button class="cpnhtvaitr-button4">
        <span class="cpnhtvaitr-text42"><span>Hủy bỏ</span></span>
      </button>
    </div>
    <span class="cpnhtvaitr-text44 2424Bold">
      <span>Danh sách vai trò</span>
    </span>
        </form>
  </div>
  </div>
  </div>
</body>

</html>