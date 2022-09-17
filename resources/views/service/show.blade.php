@extends('layout.menubar')
@extends('layout.header')
@extends('layout.hello')

<body>
  <div>
    <link href="{{asset('css/dichvu.css');}}" rel="stylesheet" />

    <div class="chitit-container">
      <div class="chitit-chitit">
        <div class="chitit-topbar">
          <div class="chitit-breadcrumbs">
            <button class="chitit-button">
              <span class="chitit-text 2020Bold"><span>Dịch vụ</span></span>
            </button>
            <img src="{{asset('playground_assets/uanglerighti288-az4f.svg');}}" alt="uanglerightI288"
              class="chitit-uangleright" />
            <button class="chitit-button1">
              <span class="chitit-text002 2020Bold">
                <span>Danh sách dịch vụ</span>
              </span>
            </button>
            <img src="{{asset('playground_assets/uanglerighti288-1l0w.svg');}}" alt="uanglerightI288"
              class="chitit-uangleright1" />
            <button class="chitit-button2">
              <span class="chitit-text004 2020Bold">
                <span>Chi tiết</span>
              </span>
            </button>
          </div>

          <div class="chitit-frame271">
            <div class="chitit-vuesaxboldnotification">
              <div class="chitit-vuesaxboldnotification1">
                <div class="chitit-notification">
                  <img src="{{asset('playground_assets/vectori288-dx6o.svg');}}" alt="VectorI288" class="chitit-vector" />
                  <img src="{{asset('playground_assets/vectori288-xxm9.svg');}}" alt="VectorI288" class="chitit-vector01" />
                </div>
              </div>
            </div>
          </div>
        </div>
        <span class="chitit-text010 2424Bold">
          <span>Quản lý dịch vụ</span>
        </span>
        
        <div class="chitit-frame624754">
          <span class="chitit-text026 2020Bold">
            <span>Quy tắc cấp số</span>
          </span>
          <span class="chitit-text028 2020Bold">
            <span>Thông tin dịch vụ</span>
          </span>
          <span class="chitit-text030 1616Semi">
            <span>Mã dịch vụ:</span>
          </span>
          <span class="chitit-text032 1616Reg">
            {{$service->madichvu}}
          </span>
          <div class="chitit-group324">
            <span class="chitit-text034 1616Semi">
              <span>Tên dịch vụ:</span>
            </span>
            <span class="chitit-text036 1616Reg">
              {{$service->tendichvu}}
            </span>
          </div>
          <div class="chitit-group326">
            <span class="chitit-text038 1616Semi"><span>Mô tả:</span></span>
            <span class="chitit-text040 1616Reg">
              <span>Chuyên các bệnh lý về tim</span>
            </span>
          </div>
          <div class="chitit-group332">
            <span class="chitit-text042 1616Semi">
              <span>Tăng tự động:</span>
            </span>
            <div class="chitit-group330">
              <input type="text" placeholder="0001" class="chitit-input" />
              <input type="text" placeholder="9999" class="chitit-input1" />
              <span class="chitit-text044 1616Reg"><span>đến</span></span>
            </div>
          </div>
          <span class="chitit-text046 1616Semi">
            <span>Reset mỗi ngày</span>
          </span>
          <span class="chitit-text048 1616Reg">
            <span>Ví dụ: 201-2001</span>
          </span>
          <div class="chitit-group331">
            <span class="chitit-text050 1616Semi"><span>Prefix:</span></span>
            <div class="chitit-group327">
              <input type="text" placeholder="0001" class="chitit-input2" />
            </div>
          </div>
        </div>
        <div class="chitit-component1">
          <div class="chitit-frame109">
            <div class="chitit-iconly-bold-edit-square">
              <div class="chitit-edit-square">
                <img src="{{asset('playground_assets/editsquarei289-ypa8.svg');}}" alt="EditSquareI289"
                  class="chitit-edit-square1" />
              </div>
            </div>
            <button href="https://www.w3schools.com/css/css3_buttons.asp" class="chitit-text052">Cập nhật danh sách</button>
          </div>
          </button>
          <div class="chitit-frame110">
            <div class="chitit-frame116"></div>
          </div>
          <div class="chitit-frame111">
            <div class="chitit-vuesaxbulkbacksquare">
              <div class="chitit-vuesaxbulkbacksquare1">
                <div class="chitit-backsquare">
                  <img src="{{asset('playground_assets/vectori289-opr.svg');}}" alt="VectorI289" class="chitit-vector23" />
                  <img src="{{asset('playground_assets/vectori289-xdea.svg');}}" alt="VectorI289" class="chitit-vector24" />
                </div>
              </div>
            </div>
            <span class="chitit-text057"><span>Quay lại</span></span>
          </div>
        </div>
        <div class="chitit-frame624767">
          <div class="chitit-group318">
            <input type="text" class="chitit-input3 chitit-text059" placeholder="Nhập từ khóa">
            
              <!-- <img src="{{asset('playground_assets/fisearchi289-pfg5.svg');}}" alt="fisearchI289" class="chitit-fisearch" /> -->

            <span class="chitit-text061 1616Semi"><span>Từ khoá</span></span>
          </div>
          <div class="chitit-group320">
            <div class="">
              <select class="chitit-dropdown chitit-text063 1616Reg">
              <option value="">Tất cả</option>
                <option value="">Đã thực hiện</option>
                <option value="">Đã hoàn thành</option>
                <option value="">Vắng</option>
              </select>
            </div>
            <span class="chitit-text065 1616Semi">
              <span>Trạng thái</span>
            </span>
          </div>
          <div class="chitit-group340">
            <div class="chitit-datepicker">
              <div class="chitit-datepicker1">
              <input type="date" data-date-inline-picker="true" class="" />
              </div>
              <div class="chitit-datepicker2">
              <input type="date" data-date-inline-picker="true" class="" />
              </div>
              <div class="chitit-vuesaxboldarrowright">
                <div class="chitit-vuesaxboldarrowright1">
                  <div class="chitit-arrowright">
                    <img src="{{asset('playground_assets/vectori281-w18.svg');}}" alt="VectorI281" class="chitit-vector45" />
                  </div>
                </div>
              </div>
            </div>
            <span class="chitit-text071 1616Semi">
              <span>Chọn thời gian</span>
            </span>
          </div>


          <table class="chitit-frame624720 chitit-text073 1616Bold">
            <tr class="">
              <td>Số thứ tự</td>
              <td>Trạng thái</td>

            </tr>
            <tr>
              <td class="qunlthitb-text100">KIO_01</td>
              <td class="qunlthitb-text100">kioks</td>

            </tr>
          </table>

          <div class="chitit-frame105">
            <div class="chitit-frame1051">
              <img src="{{asset('playground_assets/fichevrondowni289-lyk.svg');}}" alt="fichevrondownI289"
                class="chitit-fichevrondown1" />
            </div>
            
            <div class="chitit-frame108">
              <img src="{{asset('playground_assets/fichevrondowni289-0c3l.svg');}}" alt="fichevrondownI289"
                class="chitit-fichevrondown2" />
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>

</html>