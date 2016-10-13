@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row page-title-row">
        <div class="col-md-12">
            <h3>Tags <small>» Create New Tag</small></h3>
        </div>
    </div>

    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">New Tag Form</h3>
                </div>
                <div class="panel-body">

                    @if ($errors->any())
                    <!-- 錯誤訊息顯示區塊 -->
                    <div class="alert alert-danger">
                        <strong>請檢查您輸入的資料！</strong>
                        <br><br>
                        <ul>
                            @foreach($errors->all() as $error)
                            <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                    @endif

                    

                    <form class="form-horizontal" role="form" method="POST" action="/create">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <input type="hidden" name="status" value="0">

                            <div class="form-group">
                                <label for="tag" class="col-md-3 control-label">Name</label>
                                <div class="col-md-3">
                                    <input type="text" class="form-control" name="name" id="name" value="{{ Auth::user()->name }}" readonly>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="tag" class="col-md-3 control-label">Email</label>
                                <div class="col-md-3">
                                    <input type="text" class="form-control" name="mail" id="mail" value="{{ Auth::user()->email }}" readonly>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="tag" class="col-md-3 control-label">number</label>
                                <div class="col-md-1">
                                    <select class="form-control" name="number" id="number">
                                        @for ($i = 1; $i <= 10; $i++)
                                            <option>{{ $i }}</option>
                                        @endfor
                                        
                                    </select>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="tag" class="col-md-3 control-label">*website</label>
                                <div class="col-md-9">
                                    <input type="text" class="form-control" name="website" id="website" value="{{ old('website') }}" autofocus>
                                    <a href="http://tw.shop.com/%E8%8E%AB%E8%92%82%E8%86%9A+reg+%E9%81%94%E4%BA%BA%E7%B2%BE%E9%81%B8%E5%8D%81%E8%89%B2%E7%9C%BC%E5%BD%B1-1395101544-p+.xhtml">Example</a>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="tag" class="col-md-3 control-label">*Price (NT$)</label>
                                <div class="col-md-3">
                                    <input type="text" class="form-control" name="price" id="price" value="{{ old('price') }}" autofocus>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="meta_description" class="col-md-3 control-label">
                                     Q&A example
                                </label>
                                <div class="col-md-6">
                                    <textarea class="form-control" id="" name="" rows="10" readonly>1.這個商品適合皮膚過敏的使用嗎？
2.如何取貨交易
3.多少錢
4.想問什麼就盡量問</textarea>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="meta_description" class="col-md-3 control-label">
                                     Q&A
                                </label>
                                <div class="col-md-6">
                                    <textarea class="form-control" id="qa" name="qa" rows="10" value="{{ old('qa') }}" ></textarea>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="meta_description" class="col-md-3 control-label">
                                     Feedback
                                </label>
                                <div class="col-md-6">
                                    <textarea class="form-control" id="Feedback" name="Feedback" rows="10" value="{{ old('Feedback') }}"></textarea>
                                </div>
                            </div>



                            

                            

                            <div class="form-group">
                                <div class="col-md-7 col-md-offset-3">
                                    <button type="submit" class="btn btn-primary btn-md">
                                        <i class="fa fa-plus-circle"></i>
                                        Add New Tag
                                    </button>
                                </div>
                            </div>

                        </form>

                 </div>
             </div>
        </div>
    </div>
</div>
@endsection
