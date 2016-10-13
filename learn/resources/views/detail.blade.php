@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row page-title-row">
        <div class="col-md-12">
            <h3>Blog <small>» Detail</small></h3>
        </div>
    </div>

    

    <div class="row">


        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">New Tag Form</h3>
                </div>
                <div class="panel-body">

                    

                
                @foreach ($blogs as $blog)


                    <form class="form-horizontal" role="form" method="POST" action="/create">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">

                            <div class="form-group">
                                <label for="tag" class="col-md-3 control-label">tittle</label>
                                @if (Auth::guest())
                                    <div class="col-md-3">
                                        <input type="text" class="form-control" name="tittle" id="tittle" value="{{ $blog->tittle}}" autofocus>
                                    </div>
                                @else
                                    <div class="col-md-3">
                                        <input type="text" class="form-control" name="tittle" id="tittle" value="{{ $blog->tittle}}" autofocus>
                                    </div>
                                @endif
                                <div class="col-md-3">
                                    <input type="text" class="form-control" name="tittle" id="tittle" value="{{ $blog->tittle}}" autofocus>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="meta_description" class="col-md-3 control-label">
                                    word
                                </label>
                                <div class="col-md-8">
                                    <textarea class="form-control" id="word" name="word" rows="30">{{ $blog->word}}</textarea>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="tag" class="col-md-3 control-label">picture</label>
                                <div class="col-md-3">
                                    <input type="text" class="form-control" name="picture" id="picture" value="" autofocus>
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
                @endforeach

                 </div>
             </div>
        </div>
    </div>
</div>
@endsection
