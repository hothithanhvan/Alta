@extends('layout.menubar')
@extends('layout.header')
@extends('layout.alert')
@extends('layout.hello')

  <body>
    <div>
      <link href="{{asset('css/capso.css');}}" rel="stylesheet" />

      <div class="cpsmi-container">
        <div class="cpsmi-cpsmi">
          <div class="cpsmi-topbar">
            <div class="cpsmi-breadcrumbs">
              <button class="cpsmi-button">
                <span class="cpsmi-text 2020Bold"><span>Cấp số</span></span>
              </button>
              <img
                src="{{asset('playground_assets/uanglerighti339-7j9q.svg');}}"
                alt="uanglerightI339"
                class="cpsmi-uangleright"
              />
              <button class="cpsmi-button1">
                <span class="cpsmi-text02 2020Bold">
                  <span>Danh sách cấp số</span>
                </span>
              </button>
              <img
                src="{{asset('playground_assets/uanglerighti339-svs4.svg');}}"
                alt="uanglerightI339"
                class="cpsmi-uangleright1"
              />
              <button class="cpsmi-button2">
                <span class="cpsmi-text04 2020Bold">
                  <span>Cấp số mới</span>
                </span>
              </button>
            </div>
            <div class="cpsmi-frame271">
              <div class="cpsmi-vuesaxboldnotification">
                <div class="cpsmi-vuesaxboldnotification1">
                  <div class="cpsmi-notification">
                    <img
                      src="{{asset('playground_assets/vectori339-xzie.svg');}}"
                      alt="VectorI339"
                      class="cpsmi-vector"
                    />
                    <img
                      src="{{asset('playground_assets/vectori339-nd5f.svg');}}"
                      alt="VectorI339"
                      class="cpsmi-vector01"
                    />
                  </div>
                </div>
              </div>
            </div>
          </div>
          <span class="cpsmi-text10 2424Bold"><span>Quản lý cấp số</span></span>
         
          <div class="cpsmi-frame624726">
            <span class="cpsmi-text26 3232Bold"><span>CẤP SỐ MỚI</span></span>
            <span class="cpsmi-text28 2020Bold">
              <span>Dịch vụ khách hàng lựa chọn</span>
            </span>
            <form action="{{ route('number.store') }}" method="post" >
              @csrf
              <select name="tendichvu" class="cpsmi-text30 cpsmi-dropdown 1616Reg">
                  @foreach($services as $service)
                <option  value="{{ $service->tendichvu}}" >{{ $service->tendichvu }}</option>
                @endforeach
              </select>
            <div class="cpsmi-frame624757">
              <div class="cpsmi-frame624750">
                <button type="submit" class="cpsmi-button3 cpsmi-text32">In số</button>
                <button class="cpsmi-button4">
                  <span class="cpsmi-text34"><span>Hủy bỏ</span></span>
                </button>
              </div>
            </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>
