@extends('layout.menubar')
@extends('layout.header')
@extends('layout.hello')

      <div class="thngtinchitit-container">
        <div class="thngtinchitit-thngtinchitit">
          <span class="thngtinchitit-text 2424Bold">
            <span>Quản lý thiết bị</span>
          </span>
          <div class="thngtinchitit-topbar">
            <div class="thngtinchitit-breadcrumbs">
              <button class="thngtinchitit-button">
                <span class="thngtinchitit-text02 2020Bold">
                  <span>Thiết bị</span>
                </span>
              </button>
              <img
                src="{{asset('playground_assets/uanglerighti334-zhg7.svg');}}"
                alt="uanglerightI334"
                class="thngtinchitit-uangleright"
              />
              <button class="thngtinchitit-button1">
                <span class="thngtinchitit-text04 2020Bold">
                  <span>Danh sách thiết bị</span>
                </span>
              </button>
              <img
                src="{{asset('playground_assets/uanglerighti334-4knm.svg');}}"
                alt="uanglerightI334"
                class="thngtinchitit-uangleright1"
              />
              <button class="thngtinchitit-button2">
                <span class="thngtinchitit-text06 2020Bold">
                  <span>Chi tiết thiết bị</span>
                </span>
              </button>
            </div>

            <div class="thngtinchitit-frame271">
              <div class="thngtinchitit-vuesaxboldnotification">
                <div class="thngtinchitit-vuesaxboldnotification1">
                  <div class="thngtinchitit-notification">
                    <img
                      src="{{asset('playground_assets/vectori334-weql.svg');}}"
                      alt="VectorI334"
                      class="thngtinchitit-vector"
                    />
                    <img
                      src="{{asset('playground_assets/vectori334-444f.svg');}}"
                      alt="VectorI334"
                      class="thngtinchitit-vector01"
                    />
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="thngtinchitit-frame624726">
            <span class="thngtinchitit-text12 2020Bold">
              <span>Thông tin thiết bị</span>
            </span>
            <div class="thngtinchitit-group625230">
              <div class="thngtinchitit-frame624731">
                <div class="thngtinchitit-warningtext">
                  <span class="thngtinchitit-text14 1616Semi">
                    <span>Mã thiết bị:</span>
                  </span>
                </div>
              </div>
              <span class="thngtinchitit-text16 1616Reg">
                <span>{{$device->mathietbi}}</span>
              </span>
            </div>
            <div class="thngtinchitit-group625231">
              <div class="thngtinchitit-frame624732">
                <div class="thngtinchitit-warningtext1">
                  <span class="thngtinchitit-text18 1616Semi">
                    <span>Loại thiết bị:</span>
                  </span>
                </div>
              </div>
              <span class="thngtinchitit-text20 1616Reg">
                <span>?</span>
              </span>
            </div>
            <div class="thngtinchitit-group625229">
              <span class="thngtinchitit-text22 1616Semi">
                <span>Tên thiết bị:</span>
              </span>
              <span class="thngtinchitit-text24 1616Reg">
                <span>{{$device->tenthietbi}}</span>
              </span>
            </div>
            <div class="thngtinchitit-group625232">
              <span class="thngtinchitit-text26 1616Semi">
                <span>Tên đăng nhập:</span>
              </span>
              <span class="thngtinchitit-text28 1616Reg">
                <span>Linhkyo011</span>
              </span>
            </div>
            <div class="thngtinchitit-group625228">
              <span class="thngtinchitit-text30 1616Semi">
                <span>Địa chỉ IP:</span>
              </span>
              <span class="thngtinchitit-text32 1616Reg">
                <span>{{$device->diachiIP}}</span>
              </span>
            </div>
            <div class="thngtinchitit-group625234">
              <span class="thngtinchitit-text34 1616Semi">
                <span>Dịch vụ sử dụng:</span>
              </span>
              <span class="thngtinchitit-text36 1616Reg">
                <span>
                {{$device->dichvusudung}}
                </span>
              </span>
            </div>
            <div class="thngtinchitit-group625233">
              <span class="thngtinchitit-text38 1616Semi">
                <span>Mật khẩu:</span>
              </span>
              <span class="thngtinchitit-text40 1616Reg"><span>CMS</span></span>
            </div>
          </div>

            <div class="thngtinchitit-logoalta">
              <div class="thngtinchitit-group">
                <div class="thngtinchitit-group1">
                  <img
                    src="{{asset('playground_assets/vectori345-ow4.svg');}}"
                    alt="VectorI345"
                    class="thngtinchitit-vector14"
                  />
                  <img
                    src="{{asset('playground_assets/vectori345-cpu.svg');}}"
                    alt="VectorI345"
                    class="thngtinchitit-vector15"
                  />
                </div>
                <div class="thngtinchitit-group2">
                  <img
                    src="{{asset('playground_assets/vectori345-nvle.svg');}}"
                    alt="VectorI345"
                    class="thngtinchitit-vector16"
                  />
                  <img
                    src="{{asset('playground_assets/vectori345-wiag.svg');}}"
                    alt="VectorI345"
                    class="thngtinchitit-vector17"
                  />
                  <img
                    src="{{asset('playground_assets/vectori345-zxg.svg');}}"
                    alt="VectorI345"
                    class="thngtinchitit-vector18"
                  />
                </div>
                <div class="thngtinchitit-group3">
                  <img
                    src="{{asset('playground_assets/vectori345-i72b.svg');}}"
                    alt="VectorI345"
                    class="thngtinchitit-vector19"
                  />
                  <img
                    src="{{asset('playground_assets/vectori345-adb7.svg');}}"
                    alt="VectorI345"
                    class="thngtinchitit-vector20"
                  />
                </div>
                <img
                  src="{{asset('playground_assets/vectori345-o2o5.svg');}}"
                  alt="VectorI345"
                  class="thngtinchitit-vector21"
                />
                <img
                  src="{{asset('playground_assets/vectori345-ziro.svg');}}"
                  alt="VectorI345"
                  class="thngtinchitit-vector22"
                />
              </div>
            </div>
          </div>
          <div class="thngtinchitit-component1">
            <div class="thngtinchitit-iconly-bold-edit-square">
              <div class="thngtinchitit-edit-square">
                <img
                  src="{{asset('playground_assets/editsquarei301-gsqr.svg');}}"
                  alt="EditSquareI301"
                  class="thngtinchitit-edit-square1"
                />
              </div>
            </div>
            <span class="thngtinchitit-text56">
              <span>
                <span>Cập nhật</span>
                <br />
                <span>thiết bị</span>
              </span>
            </span>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>
