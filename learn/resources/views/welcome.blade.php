@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Welcome</div>
                
                <div class="panel-body">
                    <ul>
                        <li><a href="{{ url('/teach') }}">下單教學</a></li>
                        <li><a Target="_blank" href = "http://tw.shop.com/iandream">網購網站</a></li>
                        <li><a Target="_blank" href = "http://tw.motivescosmetics.com/iandream">彩妝保養</a></li>

                    </ul>
                </div>

                

            </div>
        </div>
    </div>
</div>

<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Order</div>
                
                <div class="panel-body">
                    <table class = "table table-hover">
                        

                        <tr class="">
                            <td class="">
                                Website
                            </td>

                            <td class="">
                                Quantity
                            </td>

                            <td class="">
                                Price(NT / Unit)
                            </td>

                            <td class="">
                                Price(NT)
                            </td>

                            <td class="">
                                Price(RM)
                            </td>

                            <td class="">
                                Status
                            </td>

                             <td class="">
                                Detail
                            </td>
                        </tr>

                        @foreach($blogs as $blog)
                                                <!-- 在 row 設置 -->
                            

                            <!-- 在儲存格（`td` 或 `th`）設置 -->

                            @if( $blog->status == 0)
                                <tr class="danger">
                            @else
                                <tr class="success">
                            @endif
                            
                                    <td >
                                        <a href="{{ $blog->website }}">
                                            <div>商品的網址</div>
                                        </a>
                                    </td>

                                    <td >
                                        <p>
                                            {{ $blog->number }}
                                        </p>
                                    </td>

                                    <td >
                                            <p>
                                                NT{{ $blog->price }}
                                            </p>
                                    </td>

                                    <td >
                                            <p>
                                                NT{{ number_format ($blog->price * $blog->number , 2 ) }}
                                            </p>
                                    </td>

                                    <td >
                                            <p>
                                                RM{{ number_format ($blog->price * $blog->number *  0.12317 , 2) }}
                                            </p>
                                    </td>


                                    <td >
                                       
                                            @if( $blog->status == 0)
                                                <div>processing</div>
                                            @else
                                                <div>successful</div>
                                            @endif
                                        
                                    </td>

                                    <td>
                                        <a type = "button" class = "btn btn-info" href = "blog/{{ $blog->id }}">Info</a>
                                    </td>
                                </tr>
                            
                                

                                        

                                         

                                        
                                    
                        @endforeach
                    </table>
                </div>

                

            </div>
        </div>
    </div>
</div>
@endsection
