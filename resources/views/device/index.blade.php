@extends('layout.menubar')
@extends('layout.header')
@extends('layout.hello')
<!DOCTYPE html>
<body>
  <div>
    <link href="{{asset('css/thietbi.css');}}" rel="stylesheet" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script> 
    <div class="qunlthitb-container">
      <div class="qunlthitb-qunlthitb">
      <!-- <form action="" method="get" > -->
    <div class="qunlthitb-group319">
    <span class="qunlthitb-text178 1616Semi">
        <span>Trạng thái hoạt động</span>
      </span>
      <div class="qunlthitb-dropdown">
          <select class="qunlthitb-text176 1616Reg" name="hoatdong" id="hoatdong">
          <option value="0">Tất cả</option>
          <option value="1">Hoạt động</option>
          <option value="2">Ngưng hoạt động</option>
          </select>
          <script>
    jQuery(document).ready(function ()
    {
            jQuery('select[name="hoatdong"]').on('change',function(){
               var hoatdong = jQuery(this).val();
               if (hoatdong !==null)
        {
          $('.alldata').hide();
          $('.searchdata').show();
        }
        else
        {
          $('.alldata').show();
          $('.searchdata').hide();
        }
               if(hoatdong)
               {
                  jQuery.ajax({
                     url : 'device/dropdown/'+hoatdong,
                     type : "GET",
                    //  dataType : "json",
                     success:function(data)
                     {
                        console.log(data);
                        $('#Content').html(data);
                     }
                  });
               }
            });
    });
  </script>
  <!-- <script type="text/javascript">
$.ajaxSetup({ headers: { 'csrftoken' : '{{ csrf_token() }}' } });
</script> -->
      </div>
    </div>
    <div class="qunlthitb-group320">
    <span class="qunlthitb-text182 1616Semi">
        <span>Trạng thái kết nối</span>
      </span>
      <div class="qunlthitb-dropdown1">
        <select class="qunlthitb-text176 1616Reg" name="ketnoi" id="ketnoi">
          <option value="0">Tất cả</option>
          <option value="1">Kết nối</option>
          <option value="2">Mất kết nối</option>
          </select>
      </div>
    </div>
    <div class="qunlthitb-group318">
    <span class="qunlthitb-text222 1616Semi">Từ khoá</span>
      <div class="qunlthitb-input">   
    <input type="search" class="qunlthitb-text220" id="search" name = "search" placeholder ="Nhập từ khóa">   

      <!-- <button type="submit">
         <img src="{{asset('playground_assets/fisearchi218-d31.svg');}}" alt="fisearchI218" class="qunlthitb-fisearch" />
      </button> -->
    </div>
    </div>
        <!-- </form> -->
        <span class="qunlthitb-text 2424Bold">
          <span>Danh sách thiết bị</span>
        </span>
        <table class="qunlthitb-frame624720 table qunlthitb-text002 1616Bold">
          <tr class="qunlthitb-frame624691">
            <td >Mã thiết bị</td>
            <td >Tên thiết bị</td>
            <td >Địa chỉ IP</td>
            <td >Trạng thái hoạt động</td>
            <td >Trạng thái kết nối</td>
            <td >Dịch vụ sử dụng</td>
            <td >          </td>
            <td >          </td>
          </tr>
          @foreach ($devices as $device)
          <tr class="alldata">
            <td class = "qunlthitb-text159">{{ $device->mathietbi }}</td>
            <td class = "qunlthitb-text159">{{ $device->tenthietbi }}</td>
            <td class = "qunlthitb-text159">{{ $device->diachiIP }}</td>
            <td class = "qunlthitb-text159">
              @if ($device->trangthaihoatdong == 1)
              <span>Hoạt động</span>
              @else
                <span>Ngưng hoạt động</span>
              @endif
            </td>
            <td class = "qunlthitb-text159"></td>
            <td class = "qunlthitb-text159">
              @foreach($a as $dvsd)
              @if ($device->mathietbi == $dvsd->mathietbi)
              {{ $dvsd->tendichvu}}|
              @endif
              @endforeach
            </td>
            <td class = "qunlthitb-text158">
                <form>
                <a href="{{ route('device.show',$device->id) }}">Chi tiết</a>
                </form>
            </td>
            <td class = "qunlthitb-text158">
                <div>
            <a href="{{ route('device.edit',$device->id) }}">Cập nhật</a>
                </div>
            </td>
          </tr>
          @endforeach
          <tbody class="searchdata qunlthitb-text159" id="Content"></tbody>
        </table>
<script type="text/javascript">
    $('#search').on('keyup', function()
    {
        $value = $(this).val();
        if ($value !==null)
        {
          $('.alldata').hide();
          $('.searchdata').show();
        }
        else
        {
          $('.alldata').show();
          $('.searchdata').hide();
        }
        $.ajax({
          methods: 'get',
          url : "{{ URL::to('/search') }}",
          // url: "{{ route('search') }}",
          data: {'search':$value},
          
          success:function(data)
          {
            console.log(data);
            $('#Content').html(data);
          },
          
    });
  })
  </script>
  <script type="text/javascript">
$.ajaxSetup({ headers: { 'csrftoken' : '{{ csrf_token() }}' } });
</script>
      </div>
    </div>

      
    </div>
    
    <div class="qunlthitb-topbar">
      <div class="qunlthitb-breadcrumbs">
        <button class="qunlthitb-button">
          <span class="qunlthitb-text193 2020Bold">
            <span>Thiết bị</span>
          </span>
        </button>
        <img src="{{asset('playground_assets/uanglerighti252-2vcr.svg');}}" alt="uanglerightI252"
          class="qunlthitb-uangleright" />
        <button class="qunlthitb-button1">
          <span class="qunlthitb-text195 2020Bold">
            <span>Danh sách thiết bị</span>
          </span>
        </button>
      </div>

      <div class="qunlthitb-frame271">
        <div class="qunlthitb-vuesaxboldnotification">
          <div class="qunlthitb-vuesaxboldnotification1">
            <div class="qunlthitb-notification">
              <img src="{{asset('playground_assets/vectori252-04yc.svg');}}" alt="VectorI252" class="qunlthitb-vector" />
              <img src="{{asset('playground_assets/vectori252-lvr.svg');}}" alt="VectorI252" class="qunlthitb-vector01" />
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="qunlthitb-component1">
      <div class="qunlthitb-vuesaxboldaddsquare">
        <div class="qunlthitb-vuesaxboldaddsquare1">
          <div class="qunlthitb-addsquare">
            <img src="{{asset('playground_assets/vectori305-229t.svg');}}" alt="VectorI305" class="qunlthitb-vector02" />
          </div>
        </div>
      </div>
        <a class="qunlthitb-text201" href="{{ route('device.create') }}"> Thêm thiết bị</a>
    </div>

    </div>   
    
  </div>
  </div>
  <div class="qunlthitb-frame105">
  {{ $devices->links() }}

        </div> 
  </div>
</body>
</html>