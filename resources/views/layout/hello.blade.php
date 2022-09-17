<link href="{{asset('css/dangnhap.css');}}" rel="stylesheet" />
<link href="{{asset('css/style.css');}}" rel="stylesheet" />

<div class="tikhoncnhn-frame625226">
                        <img src="{{asset('playground_assets/sasuke.png');}}" class="tikhoncnhn-unsplash-fyl8s-m-c2j2q"/>

                        <div class="tikhoncnhn-group296">
                            <span class="tikhoncnhn-text02 1212Reg">
                                <span>Xin chào</span>
                            </span>
                            <a class="tikhoncnhn-text04 1616Bold" href="{{ url('login')}}">
{{Auth::user()->hoten}}
                            </a>
                        </div>
                    </div>