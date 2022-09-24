@extends('layout.menubar')
@extends('layout.header')
@extends('layout.hello')

    <div>
      <link href="{{asset('css/capso.css');}}" rel="stylesheet" />

      <div class="thngtinchitit-container">
        <div class="thngtinchitit-thngtinchitit">
          <span class="thngtinchitit-text 2424Bold">
            <span>Quản lý cấp số</span>
          </span>
          <div class="thngtinchitit-topbar">
            <div class="thngtinchitit-breadcrumbs">
            @include('number.breadscrum')
              <img
                alt="uanglerightI844"
                src="{{asset('playground_assets/uanglerighti844-5wqb.svg');}}"
                class="thngtinchitit-uangleright1"
              />
              <div class="thngtinchitit-button2">
                <span class="thngtinchitit-text06 2020Bold">
                  <span>Chi tiết</span>
                </span>
</div>
            </div>

            <div class="thngtinchitit-frame271">
              <div class="thngtinchitit-vuesaxboldnotification">
                <div class="thngtinchitit-vuesaxboldnotification1">
                  <div class="thngtinchitit-notification">
                    <img
                      alt="VectorI844"
                      src="{{asset('playground_assets/vectori844-gwta.svg');}}"
                      class="thngtinchitit-vector"
                    />
                    <img
                      alt="VectorI844"
                      src="{{asset('playground_assets/vectori844-c1kl.svg');}}"
                      class="thngtinchitit-vector01"
                    />
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="thngtinchitit-frame624726">
            <span class="thngtinchitit-text12 2020Bold">
              <span>Thông tin cấp số</span>
            </span>
            <div class="thngtinchitit-group625226">
              <div class="thngtinchitit-group625219">
                <span class="thngtinchitit-text14 1616Semi">
                  <span>Tên dịch vụ:</span>
                </span>
                <span class="thngtinchitit-text16 1616Reg">
                  <span>Khám tim mạch</span>
                </span>
              </div>
              <div class="thngtinchitit-group625221">
                <span class="thngtinchitit-text18 1616Semi">
                  <span>Thời gian cấp:</span>
                </span>
                <span class="thngtinchitit-text20 1616Reg">
                  <span>14:35 - 07/11/2021</span>
                </span>
              </div>
              <div class="thngtinchitit-group625215">
                <span class="thngtinchitit-text22 1616Semi">
                  <span>Hạn sử dụng:</span>
                </span>
                <span class="thngtinchitit-text24 1616Reg">
                  <span>18:00 - 07/11/2021</span>
                </span>
              </div>
              <div class="thngtinchitit-group625218">
                <span class="thngtinchitit-text26 1616Semi">
                  <span>Họ tên:</span>
                </span>
                <span class="thngtinchitit-text28 1616Reg">
                  <span>Nguyễn Thị Dung</span>
                </span>
              </div>
              <div class="thngtinchitit-group625220">
                <span class="thngtinchitit-text30 1616Semi">
                  <span>Số thứ tự:</span>
                </span>
                <span class="thngtinchitit-text32 1616Reg">
                  <span>2001201</span>
                </span>
              </div>
              <div class="thngtinchitit-group625224">
                <span class="thngtinchitit-text34 1616Semi">
                  <span>Số điện thoại:</span>
                </span>
                <span class="thngtinchitit-text36 1616Reg">
                  <span>0948523623</span>
                </span>
              </div>
              <div class="thngtinchitit-group625225">
                <span class="thngtinchitit-text38 1616Semi">
                  <span>Địa chỉ Email:</span>
                </span>
                <span class="thngtinchitit-text40 1616Reg">
                  <span>nguyendung@gmail.com</span>
                </span>
              </div>
              <div class="thngtinchitit-group625222">
                <span class="thngtinchitit-text42 1616Semi">
                  <span>Nguồn cấp:</span>
                </span>
                <span class="thngtinchitit-text44 1616Reg">
                  <span>Kiosk</span>
                </span>
              </div>
              <div class="thngtinchitit-group625223">
                <span class="thngtinchitit-text46 1616Semi">
                  <span>Trạng thái:</span>
                </span>
                <div class="thngtinchitit-statusdate">
                  <img
                    alt="Ellipse1I844"
                    src="{{asset('playground_assets/ellipse1i844-2xb-200h.png');}}"
                    class="thngtinchitit-ellipse1"
                  />
                  <span class="thngtinchitit-text48 1616Reg">
                    <span>Đang chờ</span>
                  </span>
                </div>
              </div>
            </div>
          </div>
 
          <div class="thngtinchitit-component1">
            <div class="thngtinchitit-vuesaxboldbacksquare">
              <div class="thngtinchitit-vuesaxboldbacksquare1">
                <div class="thngtinchitit-backsquare">
                  <img
                    alt="VectorI844"
                    src="{{asset('playground_assets/vectori844-kb09.svg');}}"
                    class="thngtinchitit-vector23"
                  />
                </div>
              </div>
            </div>
            <span class="thngtinchitit-text64"><span>Quay lại</span></span>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>
