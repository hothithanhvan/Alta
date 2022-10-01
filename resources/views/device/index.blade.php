@extends('layout.menubar')
@extends('layout.header')
@extends('layout.hello')
<link rel="icon" href="C:\wamp64\www\alta\public\playground_assets\Logo alta.svg">

<title>Thiết bị</title>
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
		<div class="quanlythietbi-container">
			<div class="container-all">
				<div class="dropdown" id="dropdown1" name="dropdown">

					<div class="quanlythietbi-group319">
						<span class="quanlythietbi-text178  ">
							<span>Trạng thái hoạt động</span>
						</span>
							<select class="quanlythietbi-dropdown quanlythietbi-text176  " name="hoatdong" id="hoatdong">
								<option selected="selected" value="0">Tất cả</option>
								<option value="1">Hoạt động</option>
								<option value="2">Ngưng hoạt động</option>
							</select>
					</div>
					<div class="quanlythietbi-group320">
						<span class="quanlythietbi-text182  ">
							<span>Trạng thái kết nối</span>
						</span>
						<div class="">
							<select class="quanlythietbi-dropdown1 quanlythietbi-text176  " name="ketnoi" id="ketnoi">
								<option selected="selected" value="0">Tất cả</option>
								<option value="1">Kết nối</option>
								<option value="2">Mất kết nối</option>
							</select>
						</div>
					</div>
					<div class="quanlythietbi-group318">
						<span class="quanlythietbi-text222  ">Từ khoá</span>
						<input type="text" class="quanlythietbi-input quanlythietbi-text220" id="search" name="search"
							placeholder="Nhập từ khóa">
						<button onclick="getValue()">
							<img src="{{asset('playground_assets/fisearchi218-d31.svg')}}" alt="fisearchI218"
								class="quanlythietbi-fisearch" />
						</button>
				
					</div>
				</div>
				

			<span class="list-index">Danh sách thiết bị</span>
			<table class="table-index224 table quanlythietbi-text002  ">
				<tr class="quanlythietbi-frame624691">
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
				<tr class="alldata quanlythietbi-text159">
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
					<td>
					
					@foreach($a as $dvsd)
						@if ($device->mathietbi == $dvsd->mathietbi)
						{{ $dvsd->tendichvu}}|
						@endif
						@endforeach
						
					
						
					</td>
					<td class="quanlythietbi-text158">
						<form>
							<a href="{{ route('device.show',$device->id) }}">Chi tiết</a>
						</form>
					</td>
					<td class="quanlythietbi-text158">
						<div>
							<a href="{{ route('device.edit',$device->id) }}">Cập nhật</a>
						</div>
					</td>
				</tr>
				@endforeach
				<tbody class="searchdata quanlythietbi-text159" id="Content"></tbody>
			</table>
			<script type="text/javascript">
				$.ajaxSetup({ headers: { 'csrftoken': '{{ csrf_token() }}' } });
			</script>

	<div class="topbar-all">
		<div class="breadcrumbs">
			@include('device.breadscrum')
		</div>
		
	</div>
	<div class="create-index">
		<div class="quanlythietbi-vuesaxboldaddsquare">
			<div class="quanlythietbi-vuesaxboldaddsquare1">
				<div class="quanlythietbi-addsquare">
					<img src="{{asset('playground_assets/vectori305-229t.svg');}}" alt="VectorI305"
						class="quanlythietbi-vector02" />
				</div>
			</div>
		</div>
		<a  class="quanlythietbi-text201" href="{{ route('device.create') }}"> Thêm thiết bị</a>
	</div>

	<div class="pagination-all">
		{{ $devices->links() }}
	</div>
	</div>
	</div>

</body>

</html>