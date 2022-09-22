@extends('layout.menubar')
@extends('layout.header')
@section('title', 'Dịch vụ')
@extends('layout.hello')

<title>
	<?php echo 'Dịch vụ' ?>
</title>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
<link rel="stylesheet"
			href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.12.2/css/bootstrap-select.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>

		<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
		<script
			src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.12.2/js/bootstrap-select.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<body>
	<div>
		<link href="{{asset('css/dichvu.css');}}" rel="stylesheet" />

		<div class="danhschdchv-container">
			<div class="danhschdchv-danhschdchv">
				<div class="danhschdchv-component2">
					<div class="danhschdchv-vuesaxboldaddsquare">
						<div class="danhschdchv-vuesaxboldaddsquare1">
							<div class="danhschdchv-addsquare">
								<img src="{{asset('playground_assets/vectori281-58je.svg');}}" alt="VectorI281"
									class="danhschdchv-vector" />
							</div>
						</div>
					</div>
					<a class="danhschdchv-text" href="{{ route('service.create') }}">Thêm dịch vụ</a>
				</div>
				<div class="danhschdchv-topbar">
					<div class="danhschdchv-breadcrumbs">
						<button class="danhschdchv-button">
							<span class="danhschdchv-text005 2020Bold">
								<span>Dịch vụ</span>
							</span>
						</button>
						<img src="{{asset('playground_assets/uanglerighti283-mbzb.svg');}}" alt="uanglerightI283"
							class="danhschdchv-uangleright" />
						<button class="danhschdchv-button1">
							<span class="danhschdchv-text007 2020Bold">
								<span>Danh sách dịch vụ</span>
							</span>
						</button>
					</div>
        </div>
		<div id="dropdown">
			<div class="danhschdchv-group318">
				<span class="danhschdchv-text133 1616Semi">Từ khoá</span>
					<input type="text" class="qunlthitb-text220 danhschdchv-input" id="search" name="search"
							placeholder="Nhập từ khóa">
							<button onclick="getValue()">
              <img src="{{asset('playground_assets/fisearchi218-d31.svg')}}" 
              alt="fisearchI218" class="qunlthitb-fisearch" />
            </button>
			</div>
			<div class="danhschdchv-group319">
				<select id="hoatdong" name="hoatdong" class="danhschdchv-dropdown danhschdchv-text164 1616Reg">
				<option value="0">Tất cả</option>
				<option value="1">Hoạt động</option>
				<option value="2">Ngưng hoạt động</option>
				</select>
				<span class="danhschdchv-text166 1616Semi">Trạng thái hoạt động</span>
    		</div>
			<div class="danhschdchv-group311">
				<span class="danhschdchv-text139 1616Semi">Chọn thời gian</span>
				<div class="danhschdchv-datepicker">
				<div class="danhschdchv-vuesaxboldarrowright">
					<div class="danhschdchv-vuesaxboldarrowright1">
						<div class="danhschdchv-arrowright">
							<img src="{{asset('playground_assets/vectori284-2lnq.svg');}}" alt="VectorI284"
								class="danhschdchv-vector23" />
						</div>
					</div>
				</div>
				<input id="from_date" name="from_date" type="date" data-date-inline-picker="true" 
						class=" danhschdchv-datepicker1 danhschdchv-text137 1616Reg" />
				<input id="to_date" name="to_date" type="date" data-date-inline-picker="true" 
						class="danhschdchv-datepicker2 danhschdchv-text137 1616Reg" />
						<!-- <div class="danhschdchv-frame271">
							<div class="danhschdchv-vuesaxboldnotification">
								<div class="danhschdchv-vuesaxboldnotification1">
									<div class="danhschdchv-notification">
										<img src="{{asset('playground_assets/vectori283-a7so.svg');}}" alt="VectorI283"
											class="danhschdchv-vector01" />
										<img src="{{asset('playground_assets/vectori283-5mg.svg');}}" alt="VectorI283"
											class="danhschdchv-vector02" />
									</div>
								</div>
							</div>
						</div> -->
				</div>
        </div>
					<span class="danhschdchv-text013 2424Bold">
						<span>Quản lý dịch vụ</span>
					</span>
					<table class="danhschdchv-frame624720 ">
						<tr class="danhschdchv-frame624691 danhschdchv-text015 1616Bold ">
							<td>Mã dịch vụ</td>
							<td>Tên dịch vụ</td>
							<td>Mô tả</td>
							<td>Trạng thái hoạt động</td>
							<td> </td>
							<td> </td>
						</tr>
						@foreach ($services as $service)
						<tr class=" alldata danhschdchv-text019 1414Reg danhschdchv-frame624711">
							<td>{{$service->madichvu}}</td>
							<td>{{$service->tendichvu}}</td>
							<td>{{$service->mota}}</td>
							<td>
								@if ($service->trangthaihoatdong == 1)
								<span>Hoạt động</span>
								@else
								<span>Ngưng hoạt động</span>
								@endif
							</td>
							<td>
								<a href="{{ route('service.show',$service->id) }}">Chi tiết</a>
							</td>
							<td>
								<a href="{{ route('service.edit',$service->id) }}">Cập nhật</a>
							</td>
						</tr>
						@endforeach
						<tbody class="searchdata" id="Content"></tbody>
					</table>
			<script type="text/javascript">
						function getValue() {
						var search = jQuery('#search').val();
						return search;
								}
		$(document).ready(function() {
				$('#dropdown').on('change', function()
				{
					$search = $('#search').val();
					$from_date = $('#from_date').val();
					$to_date = $('#to_date').val();
					$hoatdong = jQuery('#hoatdong').val();
					if ($search == null && $from_date == null && $to_date == null && $hoatdong == null)
					{
						$('.alldata').show();
					  $('.searchdata').hide();
					  
					}
					else
					{
						$('.alldata').hide();
					  $('.searchdata').show();
					}
					$.ajax({
					type: 'get',
					url : '/service/dropdown/hoatdong/search/from_date/to_date',
					data: {'hoatdong':$hoatdong,'search':$search,'from_date':$from_date,'to_date':$to_date},
					
					success:function(data)
					{
						console.log(data);
						$('#Content').html(data);
					},
					
					});
			});
});
  </script>				


				
		<div class="danhschdchv-frame105">
			{{ $services->links() }}
			<div class="danhschdchv-frame108">
				<img src="{{asset('playground_assets/fichevrondowni284-sz84.svg');}}" alt="fichevrondownI284"
					class="danhschdchv-fichevrondown1" />
			</div>
		</div>

	</div>

</body>

</html>