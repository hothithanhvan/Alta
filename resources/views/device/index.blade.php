@extends('layout.menubar')
@extends('layout.header')
@extends('layout.hello')

<!DOCTYPE html>

<body>
	<div>
		<link rel="stylesheet"
			href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.12.2/css/bootstrap-select.min.css">

		<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
		<script
			src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.12.2/js/bootstrap-select.min.js"></script>
		<link href="{{asset('css/thietbi.css');}}" rel="stylesheet" />
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
		<div class="qunlthitb-container">
			<div class="container-all">
				<div class="dropdown" id="dropdown" name="dropdown">

					<div class="qunlthitb-group319">
						<span class="qunlthitb-text178  ">
							<span>Trạng thái hoạt động</span>
						</span>
							<select class="qunlthitb-dropdown qunlthitb-text176  " name="hoatdong" id="hoatdong">
								<option selected="selected" value="0">Tất cả</option>
								<option value="1">Hoạt động</option>
								<option value="2">Ngưng hoạt động</option>
							</select>
					</div>
					<div class="qunlthitb-group320">
						<span class="qunlthitb-text182  ">
							<span>Trạng thái kết nối</span>
						</span>
						<div class="">
							<select class="qunlthitb-dropdown1 qunlthitb-text176  " name="ketnoi" id="ketnoi">
								<option selected="selected" value="0">Tất cả</option>
								<option value="1">Kết nối</option>
								<option value="2">Mất kết nối</option>
							</select>
						</div>
					</div>
					<div class="qunlthitb-group318">
						<span class="qunlthitb-text222  ">Từ khoá</span>
						<input type="text" class="qunlthitb-input qunlthitb-text220" id="search" name="search"
							placeholder="Nhập từ khóa">
						<button onclick="getValue()">
							<img src="{{asset('playground_assets/fisearchi218-d31.svg')}}" alt="fisearchI218"
								class="qunlthitb-fisearch" />
						</button>
				
					</div>
				</div>
				<script>
					function getValue() {
						var search = jQuery('#search').val();
						return search;
					}
					jQuery(document).ready(function () {

						jQuery('#dropdown').on('change', function () {
							var hoatdong = 0;
							var ketnoi = 0;
							var search = getValue();
							hoatdong = jQuery('#hoatdong').val();
							ketnoi = jQuery('#ketnoi').val();

							if (hoatdong == 0 && ketnoi == 0 && search == null) {
								$('.alldata').show();
								$('.searchdata').hide();
							}
							else {
								$('.alldata').hide();
								$('.searchdata').show();
							}

							jQuery.ajax({
								url: 'device/dropdown/hoatdong/ketnoi/search',
								type: "GET",
								data: { 'hoatdong': hoatdong, 'ketnoi': ketnoi, 'search': search },
								success: function (data) {
									console.log(data);
									$('#Content').html(data);
								}
							});
						});

					});
				</script>

			<span class="list-index">Danh sách thiết bị</span>
			<table class="table-index224 table qunlthitb-text002  ">
				<tr class="qunlthitb-frame624691">
					<td>Mã thiết bị</td>
					<td>Tên thiết bị</td>
					<td>Địa chỉ IP</td>
					<td>Trạng thái hoạt động</td>
					<td>Trạng thái kết nối</td>
					<td>Dịch vụ sử dụng</td>
					<td> </td>
					<td> </td>
				</tr>
				@foreach ($devices as $device)
				<tr class="alldata qunlthitb-text159">
					<td >{{ $device->mathietbi }}</td>
					<td >{{ $device->tenthietbi }}</td>
					<td >{{ $device->diachiIP }}</td>
					<td >
						@if ($device->trangthaihoatdong == 1)
						<span>Hoạt động</span>
						@else
						<span>Ngưng hoạt động</span>
						@endif
					</td>
					<td >
						@if ($device->trangthaiketnoi == 1)
						<span>Kết nối</span>
						@else
						<span>Mất kết nối</span>
						@endif
					</td>
					<td >
						@foreach($a as $dvsd)
						@if ($device->mathietbi == $dvsd->mathietbi)
						{{ $dvsd->tendichvu}}|
						@endif
						@endforeach
					</td>
					<td class="qunlthitb-text158">
						<form>
							<a href="{{ route('device.show',$device->id) }}">Chi tiết</a>
						</form>
					</td>
					<td class="qunlthitb-text158">
						<div>
							<a href="{{ route('device.edit',$device->id) }}">Cập nhật</a>
						</div>
					</td>
				</tr>
				@endforeach
				<tbody class="searchdata qunlthitb-text159" id="Content"></tbody>
			</table>
			<script type="text/javascript">
				$.ajaxSetup({ headers: { 'csrftoken': '{{ csrf_token() }}' } });
			</script>

	<div class="topbar-all">
		<div class="breadcrumbs">
			@include('device.breadscrum')
		</div>
		<div class="qunlthitb-frame271">
			<div class="qunlthitb-vuesaxboldnotification">
				<div class="qunlthitb-vuesaxboldnotification1">
					<div class="qunlthitb-notification">
						<img src="{{asset('playground_assets/vectori252-04yc.svg');}}" alt="VectorI252"
							class="qunlthitb-vector" />
						<img src="{{asset('playground_assets/vectori252-lvr.svg');}}" alt="VectorI252"
							class="qunlthitb-vector01" />
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="create-index">
		<div class="qunlthitb-vuesaxboldaddsquare">
			<div class="qunlthitb-vuesaxboldaddsquare1">
				<div class="qunlthitb-addsquare">
					<img src="{{asset('playground_assets/vectori305-229t.svg');}}" alt="VectorI305"
						class="qunlthitb-vector02" />
				</div>
			</div>
		</div>
		<a class="qunlthitb-text201" href="{{ route('device.create') }}"> Thêm thiết bị</a>
	</div>

	<div class="pagination-all">
		{{ $devices->links() }}
	</div>
	</div>
	</div>

</body>

</html>
