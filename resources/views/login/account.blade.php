@extends('layout.menubar')
@extends('layout.header')
@extends('layout.hello')
<title>Thông tin cá nhân</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js" integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous"></script>
<body>
    <div>
        <link href="{{asset('css/dangnhap.css');}}" rel="stylesheet" />

        <div class="taikhoancanhan-container">
            <div class="container-all">
                <div class="topbar-all">
                    <div class="breadcrumbs">
                        <div class="taikhoancanhan-button">
                            <span class="taikhoancanhan-text  ">
                                <span>Thông tin cá nhân</span>
                            </span>
                        </div>
                    </div>

                   
                    </div>
                </div>
                

                @foreach($users as $user)
                <div class="taikhoancanhan-frame625106">
                    <div class="taikhoancanhan-group625151">
                    <span class="taikhoancanhan-text20  ">
                            <span>{{$user->hoten}}</span>
                        </span>
                        <img src="<?php echo "http://localhost:8000/images/".$user->image."" ?>" 
                        class="taikhoancanhan-group624818"/>
                    <div class="taikhoancanhan-group624817">
                    <button type="button"  data-bs-toggle="modal" data-bs-target="#exampleModal">
                  <img src="{{asset('playground_assets/Group 624817.svg')}}" 
                  alt="Ellipse81945" class="taikhoancanhan-ellipse81">
                  </button>
                
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Upload ảnh</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <form action="{{ route('image.upload.post') }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('post')
            <div class="row">
    
                <div class="col-md-6">
                    <input type="file" name="image" class="form-control">
                </div>
     
                <div class="col-md-6">
                    <button type="submit" class="btn btn-success">Upload</button>
                </div>
     
            </div>
        
      <div class="modal-footer">
        
      </div>
      </form>
    </div>
  </div>
</div>
</div>
  </div>
                    
                    <div class="taikhoancanhan-group625150">
                        <div class="taikhoancanhan-group625146">
                            <div class="taikhoancanhan-group624750">
                                <div class="taikhoancanhan-frame6249604">
                                    <span class="taikhoancanhan-text22  ">
                                        <span>Mật khẩu</span>
                                    </span>
                                </div>
                            </div>
                            <div class="taikhoancanhan-fill">
                                <span class="taikhoancanhan-text24">
                                    <span>{{$user->password}}</span>
                                </span>
                            </div>
                        </div>
                        <div class="taikhoancanhan-group6251501">
                            <div class="taikhoancanhan-group6247501">
                                <div class="taikhoancanhan-frame6249604">
                                    <span class="taikhoancanhan-text26  ">
                                        <span>Tên người dùng</span>
                                    </span>
                                </div>
                            </div>
                            <div class="taikhoancanhan-fill1">
                                <span class="taikhoancanhan-text28  ">
                                    <span>{{$user->hoten}}</span>
                                </span>
                            </div>
                        </div>
                        <div class="taikhoancanhan-group625148">
                            <div class="taikhoancanhan-group6247502">
                                <div class="taikhoancanhan-frame6249604">
                                    <span class="taikhoancanhan-text30  ">
                                        <span>Email:</span>
                                    </span>
                                </div>
                            </div>
                            <div class="taikhoancanhan-fill2">
                                <span class="taikhoancanhan-text32  ">
                                    <span>{{$user->email}}</span>
                                </span>
                            </div>
                        </div>
                        <div class="taikhoancanhan-group625152">
                            <div class="taikhoancanhan-group6247503">
                                <div class="taikhoancanhan-frame6249604">
                                    <span class="taikhoancanhan-text34  ">
                                        <span>Vai trò:</span>
                                    </span>
                                </div>
                            </div>
                            <div class="taikhoancanhan-fill3">
                                <span class="taikhoancanhan-text36  ">
                                    <span>{{$user->vaitro}}</span>
                                </span>
                            </div>
                        </div>
                        <div class="taikhoancanhan-group625147">
                            <div class="taikhoancanhan-group6247504">
                                <div class="taikhoancanhan-frame6249604">
                                    <span class="taikhoancanhan-text38  ">
                                        <span>Số điện thoại</span>
                                    </span>
                                </div>
                            </div>
                            <div class="taikhoancanhan-fill4">
                                <span class="taikhoancanhan-text40  ">
                                    <span>{{$user->sdt}}</span>
                                </span>
                            </div>
                        </div>
                        <div class="taikhoancanhan-group6251511">
                            <div class="taikhoancanhan-group6247505">
                                <div class="taikhoancanhan-frame6249604">
                                    <span class="taikhoancanhan-text42  ">
                                        <span>Tên đăng nhập</span>
                                    </span>
                                </div>
                            </div>
                            <div class="taikhoancanhan-fill5">
                                <span class="taikhoancanhan-text44  ">
                                   {{$user->tendn}}
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</body>
