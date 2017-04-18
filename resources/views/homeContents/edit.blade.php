@extends('layouts.app2')
<script type="text/javascript">
    function validateFileExtension(fld) {
        var fileSize = fld.files[0].size;
        if(!/(\.jpg|\.png|\.jpeg)$/i.test(fld.value)) {
            alert("file type must be jpeg, jpg, png");
            fld.value = "";
            fld.focus();        
            return false; 
        }
        if(fileSize > 3145728){
            alert("File size must under 3mb!");
            fld.value= "";
            fld.focus();        
            return false; 
        }
        return true;
    }
</script>
@section('content')
<div id="page-content">
    <div id="pageContent">
    <div class="row">
        <div class="col-md-10 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Edit {{$item['name']}}</div>
                <div class="panel-body">
                    <form class="form-horizontal" role="form" method="post" enctype="multipart/form-data" action="{{ url()->route('home.updateItem', $item['id']) }}">
                        {{ csrf_field() }}
                        <div class="form-group{{ $errors->has('small_title') ? ' has-error' : '' }}">
                            <label for="small_title" class="col-md-2 control-label">Small Title</label>
                            <div class="col-md-8">
                                <input id="small_title" type="text" class="form-control" name="small_title" value="{{ $item['small_title'] }}">
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
                                <input id="big_title" type="text" class="form-control" name="big_title" value="{{ $item['big_title'] }}">
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
                                 <textarea id="content_text" class="form-control" rows="5" cols="90" name="content">{{$item['content']}}</textarea>
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
                                <textarea id="slogan" class="form-control" rows="3" cols="90" name="slogan">{{ $item['slogan'] }}</textarea>
                                @if ($errors->has('slogan'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('slogan') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        @if(isset($item['images']))
                            @php ($i = 0)
                            @foreach($item['images'] as $image)
                            <div class="form-group{{ $errors->has('images') ? ' has-error' : '' }}">
                                <label for="img" class="col-md-2 control-label">Image {{$i++}}</label>
                                <div class="col-md-8">
                                    <input type="hidden" name="img[{{$image['id']}}][id]" value="{{$image['id']}}">
                                    <input type='file' name="img[{{$image['id']}}][]" onchange="return validateFileExtension(this)" />
                                    <image id='big_img' src='/images/{{$image['image_url']}}'/>
                                    @if ($errors->has('slogan'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('slogan') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>
                            @endforeach
                        @endif
                        @if(isset($item['small_items']))
                            @php ($i = 1)
                            @foreach($item['small_items'] as $smallItem)
                                <div class="form-group{{ $errors->has('small_content_title') ? ' has-error' : '' }}">
                                    <label for="small_content_title" class="col-md-2 control-label">Title {{$i}}</label>
                                    <div class="col-md-8">
                                        <input type="hidden" value="{{$smallItem['id']}}" name="small_content[{{$smallItem['id']}}][id]" />
                                        <input id="small_content_title" type="text" class="form-control" name="small_content[{{$smallItem['id']}}][title]" value="{{ $smallItem['title'] }}">
                                        @if ($errors->has('small_content_title'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('small_content_title') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>
                                <div class="form-group{{ $errors->has('small_content') ? ' has-error' : '' }}">
                                    <label for="small_content" class="col-md-2 control-label">Small Content {{$i}}</label>
                                    <div class="col-md-8">
                                        <textarea id="products_page_content1" class="form-control" rows="3" cols="90" name="small_content[{{$smallItem['id']}}][content]">{{$smallItem['content']}}</textarea>
                                        @if ($errors->has('small_content'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('small_content') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>
                                @if(isset($smallItem['image_id']))
                                    <div class="form-group{{ $errors->has('small_img') ? ' has-error' : '' }}">
                                        <label for="small_img" class="col-md-2 control-label">Image {{$i++}}</label>
                                        <div class="col-md-8">
                                            <input type='hidden' name="small_img[{{$smallItem['image_id']}}][id]" value="{{$smallItem['image_id']}}">
                                            <input type='file' name="small_img[{{$smallItem['image_id']}}][]" />
                                            <image id='small_img' src='/images/{{$smallItem['image_url']}}'/>

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


