@extends('layout.menubar')
@extends('layout.header')
@extends('layout.hello')

  <body>
    <div>
      <link href="{{asset('css/dichvu.css');}}" rel="stylesheet" />

      <div class="cpnht-container">
        <div class="cpnht-cpnht">
          <div class="cpnht-topbar">
            <div class="cpnht-breadcrumbs">
              <button class="cpnht-button">
                <span class="cpnht-text 2020Bold"><span>Dịch vụ</span></span>
              </button>
              <img
                src="{{asset('playground_assets/uanglerighti281-4l8s.svg');}}"
                alt="uanglerightI281"
                class="cpnht-uangleright"
              />
              <button class="cpnht-button1">
                <span class="cpnht-text02 2020Bold">
                  <span>Danh sách dịch vụ</span>
                </span>
              </button>
              <img
                src="{{asset('playground_assets/uanglerighti281-1qjs.svg');}}"
                alt="uanglerightI281"
                class="cpnht-uangleright1"
              />
              <button class="cpnht-button2">
                <span class="cpnht-text04 2020Bold"><span>Chi tiết</span></span>
              </button>
              <img
                src="{{asset('playground_assets/uanglerighti281-qggi.svg');}}"
                alt="uanglerightI281"
                class="cpnht-uangleright2"
              />
              <button class="cpnht-button3">
                <span class="cpnht-text06 2020Bold"><span>Cập nhật</span></span>
              </button>
            </div>

            <div class="cpnht-frame271">
              <div class="cpnht-vuesaxboldnotification">
                <div class="cpnht-vuesaxboldnotification1">
                  <div class="cpnht-notification">
                    <img
                      src="{{asset('playground_assets/vectori281-bwo.svg');}}"
                      alt="VectorI281"
                      class="cpnht-vector"
                    />
                    <img
                      src="{{asset('playground_assets/vectori281-kj75.svg');}}"
                      alt="VectorI281"
                      class="cpnht-vector01"
                    />
                  </div>
                </div>
              </div>
            </div>
          </div>
          <span class="cpnht-text12 2424Bold">
            <span>Quản lý dịch vụ</span>
          </span>
          <form action="{{ route('service.update',$service->id) }}" method="POST">
            @csrf
            @method('PUT')
          <div class="cpnht-frame624738">
            <span class="cpnht-text14 2020Bold">
              <span>Thông tin dịch vụ</span>
            </span>
            <span class="cpnht-text16 2020Bold">
              <span>Quy tắc cấp số</span>
            </span>
            <div class="cpnht-frame624731">
              <div class="cpnht-warningtext">
                <span class="cpnht-text18 1616Semi">
                  <span>Mã dịch vụ:</span>
                </span>
                <img
                  src="{{asset('playground_assets/vectori238-qhim.svg');}}"
                  alt="VectorI238"
                  class="cpnht-vector02"
                />
              </div>
              <input type="text" name="madichvu" value="{{$service->madichvu}}" class="cpnht-input" />
            </div>
            <div class="cpnht-frame624732">
              <div class="cpnht-warningtext1">
                <span class="cpnht-text20 1616Semi">
                  <span>Tên dịch vụ :</span>
                </span>
                <img
                  src="{{asset('playground_assets/vectori238-eer.svg');}}"
                  alt="VectorI238"
                  class="cpnht-vector03"
                />
              </div>
              <input
                type="text" name="tendichvu"
                value="{{$service->tendichvu}}"
                class="cpnht-input1"
              />
            </div>
            <div class="cpnht-frame624733">
              <div class="cpnht-warningtext2">
                <span class="cpnht-text22 1616Semi"><span>Mô tả:</span></span>
              </div>
              <input
                type="text" value="{{$service->mota}}" name="mota"
                placeholder="Mô tả dịch vụ"
                class="cpnht-input2"
              />
            </div>
            <div class="cpnht-group337">
              <div class="cpnht-group333">
                <input type="text" name="batdau" value="{{$service->batdau}}" class="cpnht-input3" />
                <input type="text" name="kethuc" value="{{$service->kethuc}}" placeholder="9999" class="cpnht-input4" />
                <span class="cpnht-text24 1616Semi"><span>đến</span></span>
              </div>
              <div class="cpnht-group334">
                <div class="cpnht-warningtext3">
                  <span class="cpnht-text26 1616Semi">
                    <span>Tăng tự động từ:</span>
                  </span>
                </div>
                <div class="cpnht-checkbox"></div>
              </div>
            </div>
            <div class="cpnht-group338">
              <input type="text" name="prefix" value="{{$service->prefix}}" class="cpnht-input5" />
              <div class="cpnht-group335">
                <div class="cpnht-warningtext4">
                  <span class="cpnht-text28 1616Semi">
                    <span>Prefix:</span>
                  </span>
                </div>
                <div class="cpnht-checkbox1"></div>
              </div>
            </div>
            <div class="cpnht-group339">
              <input type="text" name="surfix" value="{{$service->surfix}}" class="cpnht-input6" />
              <div class="cpnht-group336">
                <div class="cpnht-warningtext5">
                  <span class="cpnht-text30 1616Semi">
                    <span>Surfix:</span>
                  </span>
                </div>
                <div class="cpnht-checkbox2"></div>
              </div>
            </div>
            <div class="cpnht-frame624744">
              <span class="cpnht-text32 1414Reg">
                <span>Là trường thông tin bắt buộc</span>
              </span>
              <img
                src="{{asset('playground_assets/vector2389-zsy.svg');}}"
                alt="Vector2389"
                class="cpnht-vector04"
              />
            </div>
            <div class="cpnht-group343">
              <div class="cpnht-group3371">
                <div class="cpnht-warningtext6">
                  <span class="cpnht-text34 1616Semi">
                    <span>Reset mỗi ngày</span>
                  </span>
                </div>
                <div class="cpnht-checkbox3"></div>
              </div>
            </div>
          </div>
          
          <div class="cpnht-frame624737">
            <button type="submit" class="cpnht-button4 cpnht-text50">Cập nhật</button>
            <button class="cpnht-button5">
              <span class="cpnht-text52"><span>Hủy bỏ</span></span>
            </button>
          </div>
        </div>
        </form>
      </div>

    </div>
  </body>
</html>
