<link href="{{asset('css/dangnhap.css');}}" rel="stylesheet" />
<link href="{{asset('css/style.css');}}" rel="stylesheet" />

<div class="tikhoncnhn-frame625226">
                        <img src="http://localhost:8000/images/{{Auth::user()->image}}" class="tikhoncnhn-unsplash-fyl8s-m-c2j2q"/>

                        <div class="tikhoncnhn-group296">
                            <span class="tikhoncnhn-text02">
                                <span>Xin chào</span>
                            </span>
                            <a class="tikhoncnhn-text04" href="{{ route('user',Auth::user()->id )}}">
{{Auth::user()->hoten}}
                            </a>
                        </div>
                    </div>
                    
                    <!-- {{Auth::user()->image}} -->
