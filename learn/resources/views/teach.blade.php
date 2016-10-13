@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Welcome</div>
                
                <div class="panel-body">
                    <ol>
                        <li>
                            <h1>
                                點<a Target="_blank" href = "http://tw.shop.com/iandream">網站Link</a>，然後搜尋或查看你要的商品
                            </h1>
                        </li>

                        <li>
                            <h1>
                                照著圖示點選藍色字的商品
                            </h1>
                        </li>

                        <a Target="_blank" href = "http://211.20.176.97/pic/WSBRM_STORE/SURVEY_SYSTEM/20161011170148100813.png">
                            <img  alt="..." class="img-rounded" src="http://211.20.176.97/pic/WSBRM_STORE/SURVEY_SYSTEM/20161011170148100813.png" width="304" height="236">
                        </a>

                        <li>
                            <h1>
                                開啟新的訂單<a Target="_blank" href="{{ url('/home') }}">New Order</a>
                            </h1>
                        </li>

                        <li>
                            <h1>
                                照著圖示複製Link到Website欄位
                            </h1>
                        </li>

                        <li>
                            <h1>
                                照著圖示填寫商品價格到Price欄位，<B style = "color:red">注意不能有逗號</B>
                            </h1>
                        </li>

                        

                        <a Target="_blank" href = "http://211.20.176.97/pic/WSBRM_STORE/SURVEY_SYSTEM/20161011170152100814.png">
                            <img  alt="..." class="img-rounded" src="http://211.20.176.97/pic/WSBRM_STORE/SURVEY_SYSTEM/20161011170152100814.png" width="304" height="236">
                        </a>

                        <li>
                            <h1>
                                Website 和 Price欄位是逼填的，填完之後便能按 Add order 的button，就成功新增訂單
                            </h1>
                        </li>

                        <a Target="_blank" href = "http://211.20.176.97/pic/WSBRM_STORE/SURVEY_SYSTEM/20161011170154100815.png">
                            <img  alt="..." class="img-rounded" src="http://211.20.176.97/pic/WSBRM_STORE/SURVEY_SYSTEM/20161011170154100815.png" width="304" height="236">
                        </a>

                    </ol>
                </div>

                

            </div>
        </div>
    </div>
</div>
@endsection
