@extends('layout.menubar')
@extends('layout.header')
@extends('layout.hello')

<body>
  <div>
    <link href="{{asset('css/dichvu.css');}}" rel="stylesheet" />

    <div class="chitit-container">
      <div class="container-all">
        <div class="topbar-all">
          <div class="breadcrumbs">
          @include('service.breadscrum')
            <img src="{{asset('playground_assets/uanglerighti288-1l0w.svg');}}" alt="uanglerightI288"
              class="chitit-uangleright1" />
            <div class="chitit-button2">
              <span class="chitit-text004  ">Chi tiết</span>
</div>
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
        <span class="list-index">
          <span>Quản lý dịch vụ</span>
        </span>
        
        <div class="chitit-frame624754">
          <span class="chitit-text026 ">
            <span>Quy tắc cấp số</span>
          </span>
          <span class="chitit-text028 tieude">
            <span>Thông tin dịch vụ</span>
          </span>
          <span class="chitit-text030 chitiettieude ">
            <span>Mã dịch vụ:</span>
          </span>
          <span class="chitit-text032">
            {{$service->madichvu}}
          </span>
          <div class="chitit-group324">
            <span class="chitit-text034 chitiettieude ">
              <span>Tên dịch vụ:</span>
            </span>
            <span class="chitit-text036">
              {{$service->tendichvu}}
            </span>
          </div>
          <div class="chitit-group326">
            <span class="chitit-text038 chitiettieude "><span>Mô tả:</span></span>
            <span class="chitit-text040  ">
              <span>{{$service->mota}}</span>
            </span>
          </div>
          <div class="chitit-group332">
            <span class="chitit-text042 chitiettieude ">
              <span>Tăng tự động:</span>
            </span>
            <div class="chitit-group330">
              <span class="chitit-input">{{$service->batdau}}</span>
              <span class="chitit-input1">{{$service->kethuc}}</span>
              <span class="chitit-text044  "><span>đến</span></span>
            </div>
          </div>
          <span class="chitit-text046 chitiettieude ">
            <span>Reset mỗi ngày</span>
          </span>
          <span class="chitit-text048  ">
            <span>Ví dụ: 201-2001</span>
          </span>
          <div class="chitit-group331">
            <span class="chitit-text050 chitiettieude ">Prefix:</span>
            <div class="chitit-group327">
              <span class="chitit-input2">{{$service->prefix}}</span>
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
            <a href="{{ route('service.edit',$service->id) }}" class="chitit-text052">Cập nhật danh sách</button>
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
            <a href = "{{route('service.index')}}"class="chitit-text057">Quay lại</a>
          </div>
        </div>
        <div class="chitit-frame624767">
          <div class="chitit-group318">
            <input type="text" class="chitit-input3 chitit-text059" placeholder="Nhập từ khóa">
            
              <!-- <img src="{{asset('playground_assets/fisearchi289-pfg5.svg');}}" alt="fisearchI289" class="chitit-fisearch" /> -->

            <span class="chitit-text061 chitiettieude "><span>Từ khoá</span></span>
          </div>
          <div class="chitit-group320">
            <div class="">
              <select class="chitit-dropdown chitit-text063  ">
              <option value="">Tất cả</option>
                <option value="">Đã thực hiện</option>
                <option value="">Đã hoàn thành</option>
                <option value="">Vắng</option>
              </select>
            </div>
            <span class="chitit-text065 chitiettieude ">
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
            <span class="chitit-text071 chitiettieude ">
              <span>Chọn thời gian</span>
            </span>
          </div>


          <table class="chitit-frame624720 chitit-text073  chitiettieude">
            <tr class="chitit-frame624721">
              <td>Số thứ tự</td>
              <td>Trạng thái</td>

            </tr>
            @foreach($number as $number)
            @if ($service->tendichvu == $number->tendichvu)
            <tr> 
              <td >{{$number->stt}}</td>
              <td >{{$number->trangthai}}</td>
              
            </tr>
            @endif
            @endforeach
          </table>

          
        </div>
      </div>
    </div>
  </div>
</body>

</html>
