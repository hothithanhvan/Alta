@extends('layout.menubar')
@extends('layout.header')
  <body>
    <div>
      <link href="{{asset('css/capso.css');}}" rel="stylesheet" />

      <div class="qunlcps-container">
        <div class="qunlcps-qunlcps">
          <div class="qunlcps-component1">
            <div class="qunlcps-vuesaxboldaddsquare">
              <div class="qunlcps-vuesaxboldaddsquare1">
                <div class="qunlcps-addsquare">
                  <img
                    src="{{asset('playground_assets/vectori338-mysp.svg');}}"
                    alt="VectorI338"
                    class="qunlcps-vector"
                  />
                </div>
              </div>
            </div>
            <a class="qunlcps-text" href="{{ route('number.create') }}"> Cấp số mới</a>
          </div>
          <div class="qunlcps-topbar">
            <div class="qunlcps-breadcrumbs">
              <button class="qunlcps-button">
                <span class="qunlcps-text005 2020Bold">
                  <span>Cấp số</span>
                </span>
              </button>
              <img
                src="{{asset('playground_assets/uanglerighti338-ub5.svg');}}"
                alt="uanglerightI338"
                class="qunlcps-uangleright"
              />
              <button class="qunlcps-button1">
                <span class="qunlcps-text007 2020Bold">
                  <span>Danh sách cấp số</span>
                </span>
              </button>
            </div>
            <div class="qunlcps-frame625226">
              <div class="qunlcps-unsplash-fyl8s-m-c2j2q"></div>
              <div class="qunlcps-group296">
                <span class="qunlcps-text009 1212Reg">
                  <span>Xin chào</span>
                </span>
                <span class="qunlcps-text011 1616Bold">
                  <span>Lê Quỳnh Ái Vân</span>
                </span>
              </div>
            </div>
            <div class="qunlcps-frame271">
              <div class="qunlcps-vuesaxboldnotification">
                <div class="qunlcps-vuesaxboldnotification1">
                  <div class="qunlcps-notification">
                    <img
                      src="{{asset('playground_assets/vectori338-bwbi.svg');}}"
                      alt="VectorI338"
                      class="qunlcps-vector01"
                    />
                    <img
                      src="{{asset('playground_assets/vectori338-dfy.svg');}}"
                      alt="VectorI338"
                      class="qunlcps-vector02"
                    />
                  </div>
                </div>
              </div>
            </div>
          </div>
          <span class="qunlcps-text013 2424Bold">
            <span>Quản lý cấp số</span>
          </span>
          <div class="qunlcps-group317">
            <div class="qunlcps-dropdown">
              <select class="qunlcps-text015 1616Reg">
              <option value="tatca" >Tất cả</option>
                <option value="khamranghammat" >Khám răng hàm mặt</option>
                <option value="khamtaimuihong" >Khám tai mũi họng</option>
              </select>
            </div>
            <span class="qunlcps-text017 1616Semi">
              <span>Tên dịch vụ</span>
            </span>
          </div>
          <div class="qunlcps-group319">
          <div class="qunlcps-dropdown">
              <select class="qunlcps-text015 1616Reg">
                <option value="tatca" >Tất cả</option>
                <option value="dangcho" >Đang chờ</option>
                <option value="dasudung" >Đã sử dụng</option>
                <option value="boqua" >Bỏ qua</option>
              </select>
            </div>
            <span class="qunlcps-text021 1616Semi">
              <span>Tình trạng</span>
            </span>
          </div>
          <div class="qunlcps-group318">
            <div class="qunlcps-input">
              <input type="text" class="qunlcps-text023" placeholder="Nhập từ khóa" />
              
            </div>
            <span class="qunlcps-text025 1616Semi"><span>Từ khoá</span></span>
          </div>
          <div class="qunlcps-group311">
            <div class="qunlcps-datepicker">
              <div class="qunlcps-datepicker1">

                  <input type="date" data-date-inline-picker="true" class="qunlcps-text027 1616Reg" />

              </div>
              <div class="qunlcps-datepicker2">
               
                  <input type="date" data-date-inline-picker="true" class="qunlcps-text027 1616Reg" />
              </div>
              <div class="qunlcps-vuesaxboldarrowright">
                <div class="qunlcps-vuesaxboldarrowright1">
                  <div class="qunlcps-arrowright">
                    <img
                      src="{{asset('playground_assets/vectori338-v74.svg');}}"
                      alt="VectorI338"
                      class="qunlcps-vector23"
                    />
                  </div>
                </div>
              </div>
            </div>
            <span class="qunlcps-text031 1616Semi">
              <span>Chọn thời gian</span>
            </span>
          </div>
          
          <div class="qunlcps-group3191">
          <div class="qunlcps-dropdown">
              <select class="qunlcps-text015 1616Reg">
                <option value="tatca" >Tất cả</option>
                <option value="kioks" >Kiosk</option>
                <option value="hethong" >Hệ thống</option>
              </select>
            </div>
            <span class="qunlcps-text058 1616Semi"><span>Nguồn cấp</span></span>
          </div>
          <table class="qunlcps-frame624721">
              <tr class="qunlcps-frame624691 qunlcps-text060 1616Bold">
                <td>STT</td>
                <td>Tên khách hàng</td>
                <td>Tên dịch vụ</td>
                <td>Thời gian cấp</td>
                <td>Hạn sử dụng</td>
                <td>Trạng thái</td>
                <td>Nguồn cấp</td>
                <td>     </td>
              </tr>
              <tr>

              </tr>
              </div>
              
</table>
          
        </div>
      </div>
    </div>
  </body>
</html>
