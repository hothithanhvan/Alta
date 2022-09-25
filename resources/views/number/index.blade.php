@extends('layout.menubar')
@extends('layout.header')
@extends('layout.hello')
<!DOCTYPE html>
  <body>
    <div>
    <link href="{{asset('css/capso.css');}}" rel="stylesheet" />
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script> 
      <div class="qunlcps-container">
        <div class="container-all">
     
          <div class="create-index">
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
          <div class="topbar-all">
            <div class="breadcrumbs">
              @include('number.breadscrum')
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
          <span class="list-index">
            <span>Quản lý cấp số</span>
          </span>
          <div class="qunlcps-group317">
            <div class="qunlcps-dropdown">
              <select class="qunlcps-text015  ">
              <option value="tatca" >Tất cả</option>
                <option value="khamranghammat" >Khám răng hàm mặt</option>
                <option value="khamtaimuihong" >Khám tai mũi họng</option>
              </select>
            </div>
            <span class="qunlcps-text017  ">
              <span>Tên dịch vụ</span>
            </span>
          </div>
          <div class="qunlcps-group319">
          <div class="qunlcps-dropdown">
              <select class="qunlcps-text015  ">
                <option value="tatca" >Tất cả</option>
                <option value="dangcho" >Đang chờ</option>
                <option value="dasudung" >Đã sử dụng</option>
                <option value="boqua" >Bỏ qua</option>
              </select>
            </div>
            <span class="qunlcps-text021  ">
              <span>Tình trạng</span>
            </span>
          </div>
          <div class="qunlcps-group318">
              <input type="text" class="qunlcps-text023 qunlcps-input" placeholder="Nhập từ khóa" />
              
            <span class="qunlcps-text025  "><span>Từ khoá</span></span>
          </div>
          <div class="qunlcps-group311">
            <div class="qunlcps-datepicker" name="datepicker" id="datepicker">
              <div class="qunlcps-datepicker1">
                  <input name="from_date" id="from_date" 
                  type="date" value="" class="qunlcps-text027  " />
              </div>
              <div class="qunlcps-datepicker2">
                  <input name="to_date" id="to_date" 
                  type="date" value="" class="qunlcps-text027  " />
              </div>
              <!-- data-date-inline-picker="true" -->
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
            <span class="qunlcps-text031  ">
              <span>Chọn thời gian</span>
            </span>
          </div>
          
          <div class="qunlcps-group3191">
          <div class="qunlcps-dropdown">
              <select class="qunlcps-text015  ">
                <option value="tatca" >Tất cả</option>
                <option value="kioks" >Kiosk</option>
                <option value="hethong" >Hệ thống</option>
              </select>
            </div>
            <span class="qunlcps-text058  "><span>Nguồn cấp</span></span>
          </div>
          <table class="table-index224" id="table">
              <tr class="qunlcps-frame624691 qunlcps-text060  ">
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
<script type="text/javascript">
 $('#datepicker').on('change', function()
    {
        $value1 = $('#from_date').val();
        $value2 = $('#to_date').val();
        if (($value1) && ($value2))
        {
          $('.alldata').hide();
          $('.searchdata').show();
        }
        else if (!($value1) || !($value2))
        {
          $('.alldata').show();
          $('.searchdata').hide();
        }

        $.ajax({
          type: 'get',
          url : '/number/date/from_date/to_date',
          data: {'from_date':$value1,'to_date':$value2},
          
          success:function(data)
          {
            console.log(data);
            $('#Content').html(data);
          },
          
    });
  })


  </script>
  <div class="pagination-all">
  {{$numbers->links()}}
            </div>
        </div>
      </div>

    </div>
 
  </body>
</html>
