@extends('layouts.app2')
@section('content')
<div id="page-content">
    <div id="pageContent">
    <div class="row">
        <div class="col-md-10 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Edit Home's Content</div>
                <div class="panel-body">
                    <form class="form-horizontal" role="form" method="post" action="{{ url()->route('home.updateItem', $homeContent->id) }}">
                        {{ csrf_field() }}
                        <div class="form-group{{ $errors->has('small_title') ? ' has-error' : '' }}">
                            <label for="small_title" class="col-md-2 control-label">Small Title</label>
                            <div class="col-md-8">
                                <input id="small_title" type="text" class="form-control" name="small_title" value="{{ $homeContent->small_title }}">
                                @if ($errors->has('small_title'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('small_title') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('big_title') ? ' has-error' : '' }}">
                            <label for="big_title" class="col-md-2 control-label">Big Title</label>
                            <div class="col-md-8">
                                <input id="big_title" type="text" class="form-control" name="big_title" value="{{ $homeContent->big_title }}">
                                @if ($errors->has('big_title'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('big_title') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('content') ? ' has-error' : '' }}">
                            <label for="content" class="col-md-2 control-label">Content</label>
                            <div class="col-md-8">
                                 <textarea id="content_text" class="form-control" rows="5" cols="90" name="content">{{$homeContent->content}}</textarea>
                                @if ($errors->has('content'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('content') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('slogan') ? ' has-error' : '' }}">
                            <label for="slogan" class="col-md-2 control-label">Slogan</label>
                            <div class="col-md-8">
                                <input id="slogan" type="text" class="form-control" name="slogan" value="{{ $homeContent->slogan }}">
                                @if ($errors->has('slogan'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('slogan') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        @if(!empty($smallItems))
                            @foreach($smallItems as $smallItem)
                                <div class="form-group{{ $errors->has('small_content_title') ? ' has-error' : '' }}">
                                    <label for="small_content_title" class="col-md-2 control-label">Title</label>
                                    <div class="col-md-8">
                                        <input id="small_content_title" type="text" class="form-control" name="small_content_title[]" value="{{ $smallItem->title }}">
                                        @if ($errors->has('small_content_title'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('small_content_title') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>
                                <div class="form-group{{ $errors->has('small_content') ? ' has-error' : '' }}">
                                    <label for="small_content" class="col-md-2 control-label">Small Content</label>
                                    <div class="col-md-8">
                                        <textarea id="products_page_content1" class="form-control" rows="3" cols="90" name="small_content[]">{{$smallItem->content}}</textarea>

                                        @if ($errors->has('small_content'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('small_content') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>
                                @if($smallItem->image != null)
                                    <div class="form-group{{ $errors->has('small_img') ? ' has-error' : '' }}">
                                        <label for="small_img" class="col-md-2 control-label">Image</label>
                                        <div class="col-md-8">
                                            <input type='file' name="small_img[]" />

                                            @if ($errors->has('small_img'))
                                                <span class="help-block">
                                                    <strong>{{ $errors->first('small_img') }}</strong>
                                                </span>
                                            @endif
                                        </div>
                                    </div>
                                @endif
                            @endforeach
                        @endif
                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    <i class="fa fa-btn"></i> Update
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    </div>
</div>
@endsection


