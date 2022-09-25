@extends('layout.menubar')
@extends('layout.header')
@extends('layout.hello')

  <body>
    <div>
      <link href="{{asset('css/dichvu.css');}}" rel="stylesheet" />

      <div class="thmdchv-container">
        <div class="container-all">
          <div class="topbar-all">
            <div class="breadcrumbs">
              @include('service.breadscrum')
              <img
                src="{{asset('playground_assets/uanglerighti284-2hlc.svg');}}"
                alt="uanglerightI284"
                class="thmdchv-uangleright1"
              />
              <div class="thmdchv-button2">
                <span class="thmdchv-text04">
                  <span>Thêm dịch vụ</span>
                </span>
</div>
            </div>

            <div class="thmdchv-frame271">
              <div class="thmdchv-vuesaxboldnotification">
                <div class="thmdchv-vuesaxboldnotification1">
                  <div class="thmdchv-notification">
                    <img
                      src="{{asset('playground_assets/vectori284-ohv9.svg');}}"
                      alt="VectorI284"
                      class="thmdchv-vector"
                    />
                    <img
                      src="{{asset('playground_assets/vectori284-n0q.svg');}}"
                      alt="VectorI284"
                      class="thmdchv-vector01"
                    />
                  </div>
                </div>
              </div>
            </div>
          </div>
          <span class="list-index">
            <span>Quản lý dịch vụ</span>
          </span>

          <form action="{{ route('service.store') }}" method="POST">
            @csrf
          <div class="thmdchv-frame624726">
            <span class="tieude">
              <span>Thông tin dịch vụ</span>
            </span>
            <span class="thmdchv-text14  ">
              <span>Quy tắc cấp số</span>
            </span>
            <div class="thmdchv-frame624731">
              <div class="thmdchv-warningtext">
                <span class="chitiettieude">
                  <span>Mã dịch vụ:</span>
                </span>
                <img
                  src="{{asset('playground_assets/vectori285-iyk.svg');}}"
                  alt="VectorI285"
                  class="thmdchv-vector02"
                />
              </div>
              <input type="text" name="madichvu" class="thmdchv-input" />
            </div>
            <div class="thmdchv-frame624732">
              <div class="thmdchv-warningtext1">
              <span class="chitiettieude">
                  <span>Tên dịch vụ :</span>
                </span>
                <img
                  src="{{asset('playground_assets/vectori285-ethp.svg');}}"
                  alt="VectorI285"
                  class="thmdchv-vector03"
                />
              </div>
              <input
                type="text"
                name="tendichvu"
                class="thmdchv-input1"
              />
            </div>
            <div class="thmdchv-frame624733">
              <div class="thmdchv-warningtext2">
              <span class="chitiettieude">
                <span>Mô tả:</span></span>
              </div>
              <input
                type="text" name="mota" 
                placeholder="Mô tả dịch vụ"
                class="thmdchv-input2"
              />
            </div>
            <div class="thmdchv-group337">
              <div class="thmdchv-group333">
                <input type="text" name="batdau"  class="thmdchv-input3" />
                <input type="text" name="ketthuc"  class="thmdchv-input4" />
                <span class="thmdchv-text22  ">đến</span>
              </div>
              <div class="thmdchv-group334">
                <div class="thmdchv-warningtext3">
                <span class="chitiettieude">

                    <span>Tăng tự động từ:</span>
                  </span>
                </div>
                <div class="thmdchv-checkbox"></div>
              </div>
            </div>
            <div class="thmdchv-group338">
              <input type="text" name="prefix" class="thmdchv-input5" />
              <div class="thmdchv-group335">
                <div class="thmdchv-warningtext4">
                <span class="chitiettieude">
                    <span>Prefix:</span>
                  </span>
                </div>
                <div class="thmdchv-checkbox1"></div>
              </div>
            </div>
            <div class="thmdchv-group339">
              <input type="text" name="surfix" class="thmdchv-input6" />
              <div class="thmdchv-group336">
                <div class="thmdchv-warningtext5">
                <span class="chitiettieude">
                    <span>Surfix:</span>
                  </span>
                </div>
                <div class="thmdchv-checkbox2"></div>
              </div>
            </div>
            <div class="thmdchv-frame624744">
              <span class="thmdchv-text30  ">
                <span>Là trường thông tin bắt buộc</span>
              </span>
              <img
                src="{{asset('playground_assets/vector2878-s33m.svg');}}"
                alt="Vector2878"
                class="thmdchv-vector04"
              />
            </div>
            <div class="thmdchv-group343">
              <div class="thmdchv-group3371">
                <div class="thmdchv-warningtext6">
                <span class="chitiettieude">
                    <span>Reset mỗi ngày</span>
                  </span>
                </div>
                <div class="thmdchv-checkbox3"></div>
              </div>
            </div>
          </div>
          
          <div class="thmdchv-frame624737">
            <button type="submit" class="thmdchv-button3 thmdchv-text48">Thêm dịch vụ</button>
            <button class="cancel-button">
              <span class="thmdchv-text50"><span>Hủy bỏ</span></span>
            </button>
          </div>
        </div>
      </div>
</form>
    </div>
  </body>
</html>
