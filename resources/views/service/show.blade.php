@extends('layout.menubar')
@extends('layout.header')
@extends('layout.hello')
<title>Chi tiết dịch vụ</title>
<body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <div>
    <link href="{{asset('css/dichvu.css');}}" rel="stylesheet" />

    <div class="chitietdichvu-container">
      <div class="container-all">
        <div class="topbar-all">
          <div class="breadcrumbs">
          @include('service.breadscrum')
            <img src="{{asset('playground_assets/uanglerighti288-1l0w.svg');}}" alt="uanglerightI288"
              class="chitietdichvu-uangleright1" />
            <div class="chitietdichvu-button2">
              <span class="chitietdichvu-text004  ">Chi tiết</span>
</div>
          </div>

          
        </div>
        <span class="list-index">
          <span>Quản lý dịch vụ</span>
        </span>
        
        <div class="chitietdichvu-frame624754">
          <span class="chitietdichvu-text026 ">
            <span>Quy tắc cấp số</span>
          </span>
          <span class="chitietdichvu-text028 tieude">
            <span>Thông tin dịch vụ</span>
          </span>
          <span class="chitietdichvu-text030 chitiettieude ">
            <span>Mã dịch vụ:</span>
          </span>
          <span class="chitietdichvu-text032">
            {{$service->madichvu}}
          </span>
          <div class="chitietdichvu-group324">
            <span class="chitietdichvu-text034 chitiettieude ">
              <span>Tên dịch vụ:</span>
            </span>
            <span class="chitietdichvu-text036">
              {{$service->tendichvu}}
            </span>
          </div>
          <div class="chitietdichvu-group326">
            <span class="chitietdichvu-text038 chitiettieude "><span>Mô tả:</span></span>
            <span class="chitietdichvu-text040  ">
              <span>{{$service->mota}}</span>
            </span>
          </div>
          <div class="chitietdichvu-group332">
            <span class="chitietdichvu-text042 chitiettieude ">
              <span>Tăng tự động:</span>
            </span>
            <div class="chitietdichvu-group330">
              <span class="chitietdichvu-input">{{$service->batdau}}</span>
              <span class="chitietdichvu-input1">{{$service->ketthuc}}</span>
              <span class="chitietdichvu-text044  "><span>đến</span></span>
            </div>
          </div>
          <span class="chitietdichvu-text046 chitiettieude ">
            <span>Reset mỗi ngày</span>
          </span>
          <span class="chitietdichvu-text048  ">
            <span>Ví dụ: 201-2001</span>
          </span>
          <div class="chitietdichvu-group331">
            <span class="chitietdichvu-text050 chitiettieude ">Prefix:</span>
            <div class="chitietdichvu-group327">
              <span class="chitietdichvu-input2">{{$service->prefix}}</span>
            </div>
          </div>
        </div>
        <div class="chitietdichvu-component1">
          <div class="chitietdichvu-frame109">
            <div class="chitietdichvu-iconly-bold-edit-square">
              <div class="chitietdichvu-edit-square">
                <img src="{{asset('playground_assets/editsquarei289-ypa8.svg');}}" alt="EditSquareI289"
                  class="chitietdichvu-edit-square1" />
              </div>
            </div>
            <a href="{{ route('service.edit',$service->id) }}" class="chitietdichvu-text052">Cập nhật danh sách</button>
          </div>
          </button>
          <div class="chitietdichvu-frame110">
            <div class="chitietdichvu-frame116"></div>
          </div>
          <div class="chitietdichvu-frame111">
            <div class="chitietdichvu-vuesaxbulkbacksquare">
              <div class="chitietdichvu-vuesaxbulkbacksquare1">
                <div class="chitietdichvu-backsquare">
                  <img src="{{asset('playground_assets/vectori289-opr.svg');}}" alt="VectorI289" class="chitietdichvu-vector23" />
                  <img src="{{asset('playground_assets/vectori289-xdea.svg');}}" alt="VectorI289" class="chitietdichvu-vector24" />
                </div>
              </div>
            </div>
            <a href = "{{route('service.index')}}"class="chitietdichvu-text057">Quay lại</a>
          </div>
        </div>
        <div class="search-show chitietdichvu-frame624767">
       
          <div class="chitietdichvu-group318">
            <input type="text" id="searchs" class="chitietdichvu-input3 chitietdichvu-text059" placeholder="Nhập từ khóa">
            <button onclick="getValue()">
              <img src="{{asset('playground_assets/fisearchi289-pfg5.svg');}}" alt="fisearchI289" class="chitietdichvu-fisearch" />
            </button>
            <span class="chitietdichvu-text061 chitiettieude "><span>Từ khoá</span></span>
          </div>
          <div class="chitietdichvu-group320">
            <div class="">
              <select id="hoatdong" class="chitietdichvu-dropdown chitietdichvu-text063  ">
              <option value="">Tất cả</option>
                <option value="0">Đang chờ</option>
                <option value="1">Đã sử dụng</option>
                <option value="2">Bỏ qua</option>
              </select>
            </div>
            <span class="chitietdichvu-text065 chitiettieude ">
              <span>Trạng thái</span>
            </span>
          </div>
          <div class="chitietdichvu-group340">
            <div class="chitietdichvu-datepicker">
              <div class="chitietdichvu-datepicker1">
              <input type="date" id="from_date" data-date-inline-picker="true" class="" />
              </div>
              <div class="chitietdichvu-datepicker2">
              <input type="date" id="to_date" data-date-inline-picker="true" class="" />
              </div>
              <div class="chitietdichvu-vuesaxboldarrowright">
                <div class="chitietdichvu-vuesaxboldarrowright1">
                  <div class="chitietdichvu-arrowright">
                    <img src="{{asset('playground_assets/vectori281-w18.svg');}}" alt="VectorI281" class="chitietdichvu-vector45" />
                  </div>
                </div>
              </div>
            </div>
            <span class="chitietdichvu-text071 chitiettieude ">
              <span>Chọn thời gian</span>
            </span>
          </div>

               
     
          <table class="chitietdichvu-frame624720 chitietdichvu-text073  chitiettieude">
            <tr class="chitietdichvu-frame624721">
              <td>Số thứ tự</td>
              <td>Trạng thái</td>

            </tr>
            @foreach($numbers as $number)
            <tr class="alldata"> 
              <td >{{$number->stt}}</td>
              <td >
                @if($number->trangthai == 0)
                Đang chờ
             @elseif($number->trangthai == 1)
                Đã sử dụng
             @else
              Bỏ qua
            @endif
            </td>
            </tr>
            @endforeach
            <tbody class="searchdata" id="Content"></tbody>
          </table>
          
        </div>
        <div class="pagination-service-show">
          {{ $numbers->links() }}
        </div>
      </div>
    </div>
  </div>
</body>

</html>
