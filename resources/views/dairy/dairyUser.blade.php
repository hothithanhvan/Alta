@extends('layout.menubar')
@extends('layout.header')
@extends('layout.hello')
<title>Nhật ký người dùng</title>
  <body>		
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script
  src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.12.2/js/bootstrap-select.min.js"></script>
<link href="{{asset('css/thietbi.css');}}" rel="stylesheet" />
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
    <div>
      <link href="{{asset('css/nhatky.css')}}" rel="stylesheet" />

      <div class="nhatkynguoidung-container">
        <div class="container-all">

          <div class="topbar-all">
            <div class="breadcrumbs">
              <div class="nhatkynguoidung-button">
                <span class="nhatkynguoidung-text  ">
                  <span>Cài đặt hệ thống</span>
                </span>
</div>
              <img
                src="{{asset('playground_assets/uanglerighti284-fwom.svg');}}"
                alt="uanglerightI284"
                class="nhatkynguoidung-uangleright"
              />
              <div class="nhatkynguoidung-button1">
                <span class="nhatkynguoidung-text002  ">
                  <span>Nhật ký hoạt động</span>
                </span>
</div>
            </div>
            
          </div>
          
          
          
              </div>
              <div id="dropdown">
              <div class="nhatkynguoidung-group311">
            <div class="nhatkynguoidung-datepicker">
              <input type="date" id="from_date"
              class="nhatkynguoidung-datepicker1 nhatkynguoidung-text008  " />
              <input type="date" id="to_date"
              class="nhatkynguoidung-datepicker2 nhatkynguoidung-text010  " />
              <div class="nhatkynguoidung-vuesaxboldarrowright">
                <div class="nhatkynguoidung-vuesaxboldarrowright1">
                  <div class="nhatkynguoidung-arrowright">
                    <img
                      src="{{asset('playground_assets/vectori284-xt3.svg');}}"
                      alt="VectorI284"
                      class="nhatkynguoidung-vector22"
                    />
                  </div>
                </div>
              </div>
            </div>
            <span class="nhatkynguoidung-text012 chitiettieude ">
              <span>Chọn thời gian</span>
            </span>
          </div>
          <div class="nhatkynguoidung-group318">
            <input class="nhatkynguoidung-text125 nhatkynguoidung-input" id="search" name="search">
              <button onclick="getValue()">
              <img
                src="{{asset('playground_assets/fisearchi283-b4sa.svg');}}"
                alt="fisearchI283"
                class="nhatkynguoidung-fisearch"
              />
            </button>
            <span class="nhatkynguoidung-text127 chitiettieude ">
              <span>Từ khoá</span>
            </span>
          </div>  
      </div>
         
        <table class="table-index192 ">
              <tr class="nhatkynguoidung-frame624691 nhatkynguoidung-text014 chitiettieude ">
                <td>Tên đăng nhập</td>
                <td>Thời gian tác động</td>
                <td>IP thực hiện</td>
                <td>Thao tác thực hiện</td>
              </tr>
              @if($logs->count())
			@foreach($logs as $key => $log)
              <tr class="alldata">
                <td>{{ $log->username }}</td>
                <td>{{ $log->time }}</td>
                <td>{{ $log->ip }}</td>
                <td>{{ $log->subject }}</td>
              </tr>
              @endforeach
              @endif
              <tbody class="searchdata" id="Content"></tbody>
          </table>
          <div class="pagination-all">
            {{ $logs->links() }} 
          </div>     
        </div>
      </div>
    </div>
    
  </body>
</html>
