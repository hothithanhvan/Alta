@extends('layout.menubar')
@extends('layout.header')
@extends('layout.hello')
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

      <div class="nhtkngidng-container">
        <div class="container-all">

          <div class="topbar-all">
            <div class="breadcrumbs">
              <div class="nhtkngidng-button">
                <span class="nhtkngidng-text  ">
                  <span>Cài đặt hệ thống</span>
                </span>
</div>
              <img
                src="{{asset('playground_assets/uanglerighti284-fwom.svg');}}"
                alt="uanglerightI284"
                class="nhtkngidng-uangleright"
              />
              <div class="nhtkngidng-button1">
                <span class="nhtkngidng-text002  ">
                  <span>Nhật ký hoạt động</span>
                </span>
</div>
            </div>
            
          </div>
          
          
          
              </div>
              <div id="dropdown">
              <div class="nhtkngidng-group311">
            <div class="nhtkngidng-datepicker">
              <input type="date" id="from_date"
              class="nhtkngidng-datepicker1 nhtkngidng-text008  " />
              <input type="date" id="to_date"
              class="nhtkngidng-datepicker2 nhtkngidng-text010  " />
              <div class="nhtkngidng-vuesaxboldarrowright">
                <div class="nhtkngidng-vuesaxboldarrowright1">
                  <div class="nhtkngidng-arrowright">
                    <img
                      src="{{asset('playground_assets/vectori284-xt3.svg');}}"
                      alt="VectorI284"
                      class="nhtkngidng-vector22"
                    />
                  </div>
                </div>
              </div>
            </div>
            <span class="nhtkngidng-text012 chitiettieude ">
              <span>Chọn thời gian</span>
            </span>
          </div>
          <div class="nhtkngidng-group318">
            <input class="nhtkngidng-text125 nhtkngidng-input" id="search" name="search">
              <button onclick="getValue()">
              <img
                src="{{asset('playground_assets/fisearchi283-b4sa.svg');}}"
                alt="fisearchI283"
                class="nhtkngidng-fisearch"
              />
            </button>
            <span class="nhtkngidng-text127 chitiettieude ">
              <span>Từ khoá</span>
            </span>
          </div>  
      </div>
          <script>
					function getValue() {
						var search = jQuery('#search').val();
            return search;
					}
					jQuery(document).ready(function () {
            
						jQuery('#dropdown').on('change', function () {
              var search =getValue();
              
							from_date = jQuery('#from_date').val();
							to_date = jQuery('#to_date').val();
							if (from_date == null && to_date == null  && search == null) {
								$('.alldata').show();
								$('.searchdata').hide();
							}
							else {
								$('.alldata').hide();
								$('.searchdata').show();
							}

							jQuery.ajax({
								url: 'dairy/search/from_date/to_date',
								type: "GET",
								data: { 'search': search,'from_date':from_date,'to_date':to_date },
								success: function (data) {
									console.log(data);
									$('#Content').html(data);
								}
							});
						});

					});
				</script>
        <table class="table-index192 ">
              <tr class="nhtkngidng-frame624691 nhtkngidng-text014 chitiettieude ">
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
