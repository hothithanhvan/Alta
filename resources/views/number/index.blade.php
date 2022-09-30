@extends('layout.menubar')
@extends('layout.header')
@extends('layout.hello')
<title>Dịch vụ</title>
<!DOCTYPE html>
  <body>
    <div>
    <link href="{{asset('css/capso.css');}}" rel="stylesheet" />
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script> 
      <div class="quanlycapso-container">
        <div class="container-all">
     
          <div class="create-index">
            <div class="quanlycapso-vuesaxboldaddsquare">
              <div class="quanlycapso-vuesaxboldaddsquare1">
                <div class="quanlycapso-addsquare">
                  <img
                    src="{{asset('playground_assets/vectori338-mysp.svg');}}"
                    alt="VectorI338"
                    class="quanlycapso-vector"
                  />
                </div>
              </div>
            </div>
            <a class="quanlycapso-text" href="{{ route('number.create') }}"> Cấp số mới</a>
          </div>
          <div class="topbar-all">
            <div class="breadcrumbs">
              @include('number.breadscrum')
            </div>
           
          </div>
          <span class="list-index">
            <span>Quản lý cấp số</span>
          </span>
          <div id="searchall">
          <div class="quanlycapso-group317">
            <div class="quanlycapso-dropdown">
              <select id="tendichvu" class="quanlycapso-text015  ">
              <option value="0" >Tất cả</option>
              @foreach($numbers as $number)_
                <option value="{{$number->tendichvu}}" >{{$number->tendichvu}}</option>
                @endforeach
              </select>
            </div>
            <span class="quanlycapso-text017  ">
              <span>Tên dịch vụ</span>
            </span>
          </div>
          <div class="quanlycapso-group319">
          <div class="quanlycapso-dropdown">
              <select id="trangthai" class="quanlycapso-text015  ">
                <option value="" >Tất cả</option>
                <option value="0" >Đang chờ</option>
                <option value="1" >Đã sử dụng</option>
                <option value="2" >Bỏ qua</option>
              </select>
            </div>
            <span class="quanlycapso-text021  ">
              <span>Tình trạng</span>
            </span>
          </div>
          <div class="quanlycapso-group318">
              <input type="text" id="search" class="quanlycapso-text023 quanlycapso-input" placeholder="Nhập từ khóa" />
              <button onclick="getValue()">
							<img src="{{asset('playground_assets/fisearchi218-d31.svg')}}" alt="fisearchI218"
								class="quanlythietbi-fisearch" />
						</button>
            <span class="quanlycapso-text025  "><span>Từ khoá</span></span>
          </div>
          <div class="quanlycapso-group311">
            <div class="quanlycapso-datepicker" name="datepicker" id="datepicker">
              <div class="quanlycapso-datepicker1">
                  <input name="from_date" id="from_date" 
                  type="date" value="" class="quanlycapso-text027  " />
              </div>
              <div class="quanlycapso-datepicker2">
                  <input name="to_date" id="to_date" 
                  type="date" value="" class="quanlycapso-text027  " />
              </div>
              <div class="quanlycapso-vuesaxboldarrowright">
                <div class="quanlycapso-vuesaxboldarrowright1">
                  <div class="quanlycapso-arrowright">
                    <img
                      src="{{asset('playground_assets/vectori338-v74.svg');}}"
                      alt="VectorI338"
                      class="quanlycapso-vector23"
                    />
                  </div>
                </div>
              </div>
            </div>
            <span class="quanlycapso-text031  ">
              <span>Chọn thời gian</span>
            </span>
          </div>
          </div>
         
          <table class="table-index224" id="table">
              <tr class="quanlycapso-frame624691 quanlycapso-text060  ">
                <td>STT</td>
                <td>Tên khách hàng</td>
                <td>Tên dịch vụ</td>
                <td>Thời gian cấp</td>
                <td>Hạn sử dụng</td>
                <td>Trạng thái</td>
                <td>Nguồn cấp</td>
                <td>     </td>
              </tr>
              @foreach($numbers as $number)
              <tr class="alldata">
                <td>{{$number->stt}}</td>
                <td>{{$number->tenkh}}</td>
                <td>{{$number->tendichvu}}</td>
                <td>{{$number->thoigiancap}}</td>
                <td>{{$number->hansd}}</td>
                <td>
                @if ($number->trangthai == 0)
              <span>Đang chờ</span>
              @elseif ($number->trangthai == 1)
                <span>Đã sử dụng</span>
                @else
                <span>Bỏ qua</span>
              @endif
                </td>
                <td>{{$number->nguoncap}}</td>
                <td>
                <a href="{{ route('number.show',$number->id) }}">Chi tiết</a>
                </td>
                
              </tr>
              @endforeach
              </div>
             <tbody class="searchdata" id="Content"></tbody> 
</table>

  <div class="pagination-all">
  {{$numbers->appends(request()->all)->links()}}
            </div>
        </div>
      </div>

    </div>
 
  </body>
</html>
