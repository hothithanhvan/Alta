@extends('layout.menubar')
@extends('layout.header')
  <body>
    <div>
      <link href="{{asset('css/dichvu.css');}}" rel="stylesheet" />

      <div class="thmdchv-container">
        <div class="thmdchv-thmdchv">
          <div class="thmdchv-topbar">
            <div class="thmdchv-breadcrumbs">
              <button class="thmdchv-button">
                <span class="thmdchv-text 2020Bold"><span>Dịch vụ</span></span>
              </button>
              <img
                src="{{asset('playground_assets/uanglerighti284-q4ed.svg');}}"
                alt="uanglerightI284"
                class="thmdchv-uangleright"
              />
              <button class="thmdchv-button1">
                <span class="thmdchv-text02 2020Bold">
                  <span>Danh sách dịch vụ</span>
                </span>
              </button>
              <img
                src="{{asset('playground_assets/uanglerighti284-2hlc.svg');}}"
                alt="uanglerightI284"
                class="thmdchv-uangleright1"
              />
              <button class="thmdchv-button2">
                <span class="thmdchv-text04 2020Bold">
                  <span>Thêm dịch vụ</span>
                </span>
              </button>
            </div>
            <div class="thmdchv-frame625226">
              <div class="thmdchv-unsplash-fyl8s-m-c2j2q"></div>
              <div class="thmdchv-group296">
                <span class="thmdchv-text06 1212Reg">
                  <span>Xin chào</span>
                </span>
                <span class="thmdchv-text08 1616Bold">
                  <span>Lê Quỳnh Ái Vân</span>
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
          <span class="thmdchv-text10 2424Bold">
            <span>Quản lý dịch vụ</span>
          </span>
          <div class="thmdchv-frame624726">
            <span class="thmdchv-text12 2020Bold">
              <span>Thông tin dịch vụ</span>
            </span>
            <span class="thmdchv-text14 2020Bold">
              <span>Quy tắc cấp số</span>
            </span>
            <div class="thmdchv-frame624731">
              <div class="thmdchv-warningtext">
                <span class="thmdchv-text16 1616Semi">
                  <span>Mã dịch vụ:</span>
                </span>
                <img
                  src="{{asset('playground_assets/vectori285-iyk.svg');}}"
                  alt="VectorI285"
                  class="thmdchv-vector02"
                />
              </div>
              <input type="text" placeholder="201" class="thmdchv-input" />
            </div>
            <div class="thmdchv-frame624732">
              <div class="thmdchv-warningtext1">
                <span class="thmdchv-text18 1616Semi">
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
                placeholder="Khám tim mạch"
                class="thmdchv-input1"
              />
            </div>
            <div class="thmdchv-frame624733">
              <div class="thmdchv-warningtext2">
                <span class="thmdchv-text20 1616Semi"><span>Mô tả:</span></span>
              </div>
              <input
                type="text"
                placeholder="Mô tả dịch vụ"
                class="thmdchv-input2"
              />
            </div>
            <div class="thmdchv-group337">
              <div class="thmdchv-group333">
                <input type="text" placeholder="0001" class="thmdchv-input3" />
                <input type="text" placeholder="9999" class="thmdchv-input4" />
                <span class="thmdchv-text22 1616Semi"><span>đến</span></span>
              </div>
              <div class="thmdchv-group334">
                <div class="thmdchv-warningtext3">
                  <span class="thmdchv-text24 1616Semi">
                    <span>Tăng tự động từ:</span>
                  </span>
                </div>
                <div class="thmdchv-checkbox"></div>
              </div>
            </div>
            <div class="thmdchv-group338">
              <input type="text" placeholder="0001" class="thmdchv-input5" />
              <div class="thmdchv-group335">
                <div class="thmdchv-warningtext4">
                  <span class="thmdchv-text26 1616Semi">
                    <span>Prefix:</span>
                  </span>
                </div>
                <div class="thmdchv-checkbox1"></div>
              </div>
            </div>
            <div class="thmdchv-group339">
              <input type="text" placeholder="0001" class="thmdchv-input6" />
              <div class="thmdchv-group336">
                <div class="thmdchv-warningtext5">
                  <span class="thmdchv-text28 1616Semi">
                    <span>Surfix:</span>
                  </span>
                </div>
                <div class="thmdchv-checkbox2"></div>
              </div>
            </div>
            <div class="thmdchv-frame624744">
              <span class="thmdchv-text30 1414Reg">
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
                  <span class="thmdchv-text32 1616Semi">
                    <span>Reset mỗi ngày</span>
                  </span>
                </div>
                <div class="thmdchv-checkbox3"></div>
              </div>
            </div>
          </div>
          
          <div class="thmdchv-frame624737">
            <button class="thmdchv-button3">
              <span class="thmdchv-text48"><span>Thêm dịch vụ</span></span>
            </button>
            <button class="thmdchv-button4">
              <span class="thmdchv-text50"><span>Hủy bỏ</span></span>
            </button>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>
