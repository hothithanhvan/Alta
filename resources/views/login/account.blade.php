@extends('layout.menubar')
@extends('layout.header')
@extends('layout.hello')
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js" integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous"></script>
<body>
    <div>
        <link href="{{asset('css/dangnhap.css');}}" rel="stylesheet" />

        <div class="tikhoncnhn-container">
            <div class="tikhoncnhn-tikhoncnhn">
                <div class="tikhoncnhn-topbar">

                    <div class="tikhoncnhn-breadcrumbs">

                        <button class="tikhoncnhn-button">
                            <span class="tikhoncnhn-text 2020Bold">
                                <span>Thông tin cá nhân</span>
                            </span>
                        </button>
                    </div>

                    <div class="tikhoncnhn-frame271">
                        <div class="tikhoncnhn-vuesaxboldnotification">
                            <div class="tikhoncnhn-vuesaxboldnotification1">
                                <div class="tikhoncnhn-notification">
                                    <img src="{{asset('playground_assets/vectori194-sm3j.svg');}}" alt=" VectorI194" class="tikhoncnhn-vector" />
                                    <img src="{{asset('playground_assets/vectori194-hr9.svg');}}" alt=" VectorI194" class="tikhoncnhn-vector01" />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                

                @foreach($users as $user)
                <div class="tikhoncnhn-frame625106">
                    <div class="tikhoncnhn-group625151">
                        <img src="{{asset('playground_assets/sasuke.png');}}" class="tikhoncnhn-group624818"/>
                    <div class="tikhoncnhn-group624817">
                    <button type="button"  data-bs-toggle="modal" data-bs-target="#exampleModal">
                  <img src="{{asset('playground_assets/Group 624817.svg')}}" 
                  alt="Ellipse81945" class="tikhoncnhn-ellipse81">
                  </button>
                
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <form action="{{ route('image.upload.post') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="row">
    
                <div class="col-md-6">
                    <input type="file" name="image" class="form-control">
                </div>
     
                <div class="col-md-6">
                    <button type="submit" class="btn btn-success">Upload</button>
                </div>
     
            </div>
        
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Save changes</button>
      </div>
      </form>
    </div>
  </div>
</div>
</div>
                        <span class="tikhoncnhn-text20 2424Bold">
                            <span>{{$user->hoten}}</span>
                        </span>
                    </div>
                    
                    <div class="tikhoncnhn-group625150">
                        <div class="tikhoncnhn-group625146">
                            <div class="tikhoncnhn-group624750">
                                <div class="tikhoncnhn-frame6249604">
                                    <span class="tikhoncnhn-text22 1616Semi">
                                        <span>Mật khẩu</span>
                                    </span>
                                </div>
                            </div>
                            <div class="tikhoncnhn-fill">
                                <span class="tikhoncnhn-text24 1616Reg">
                                    <span>{{$user->password}}</span>
                                </span>
                            </div>
                        </div>
                        <div class="tikhoncnhn-group6251501">
                            <div class="tikhoncnhn-group6247501">
                                <div class="tikhoncnhn-frame6249604">
                                    <span class="tikhoncnhn-text26 1616Semi">
                                        <span>Tên người dùng</span>
                                    </span>
                                </div>
                            </div>
                            <div class="tikhoncnhn-fill1">
                                <span class="tikhoncnhn-text28 1616Reg">
                                    <span>{{$user->hoten}}</span>
                                </span>
                            </div>
                        </div>
                        <div class="tikhoncnhn-group625148">
                            <div class="tikhoncnhn-group6247502">
                                <div class="tikhoncnhn-frame6249604">
                                    <span class="tikhoncnhn-text30 1616Semi">
                                        <span>Email:</span>
                                    </span>
                                </div>
                            </div>
                            <div class="tikhoncnhn-fill2">
                                <span class="tikhoncnhn-text32 1616Reg">
                                    <span>{{$user->email}}</span>
                                </span>
                            </div>
                        </div>
                        <div class="tikhoncnhn-group625152">
                            <div class="tikhoncnhn-group6247503">
                                <div class="tikhoncnhn-frame6249604">
                                    <span class="tikhoncnhn-text34 1616Semi">
                                        <span>Vai trò:</span>
                                    </span>
                                </div>
                            </div>
                            <div class="tikhoncnhn-fill3">
                                <span class="tikhoncnhn-text36 1616Reg">
                                    <span>{{$user->vaitro}}</span>
                                </span>
                            </div>
                        </div>
                        <div class="tikhoncnhn-group625147">
                            <div class="tikhoncnhn-group6247504">
                                <div class="tikhoncnhn-frame6249604">
                                    <span class="tikhoncnhn-text38 1616Semi">
                                        <span>Số điện thoại</span>
                                    </span>
                                </div>
                            </div>
                            <div class="tikhoncnhn-fill4">
                                <span class="tikhoncnhn-text40 1616Reg">
                                    <span>{{$user->sdt}}</span>
                                </span>
                            </div>
                        </div>
                        <div class="tikhoncnhn-group6251511">
                            <div class="tikhoncnhn-group6247505">
                                <div class="tikhoncnhn-frame6249604">
                                    <span class="tikhoncnhn-text42 1616Semi">
                                        <span>Tên đăng nhập</span>
                                    </span>
                                </div>
                            </div>
                            <div class="tikhoncnhn-fill5">
                                <span class="tikhoncnhn-text44 1616Reg">
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
