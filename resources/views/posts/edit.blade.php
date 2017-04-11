@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Edit Post</div>
                <div class="panel-body">
                    <form class="form-horizontal" role="form" method="post" action="{{ url()->route('post.update', $post->id) }}">
                        {{ csrf_field() }}
                        <input type="hidden" name="_method" value="post"/>
                        <div class="form-group{{ $errors->has('title') ? ' has-error' : '' }}">
                            <label for="title" class="col-md-2 control-label">Title</label>

                            <div class="col-md-8">
                                <input id="name" type="text" class="form-control" name="title" value="{{ $post->title }}">

                                @if ($errors->has('title'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('title') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        
                        <div class="form-group{{ $errors->has('salary') ? ' has-error' : '' }}">
                            <label for="title" class="col-md-2 control-label">Salary</label>

                            <div class="col-md-8">
                                <input id="name" type="text" class="form-control" placeholder="$(dolar)" name="salary" value="{{ $post->salary }}">

                                @if ($errors->has('salary'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('salary') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('description') ? ' has-error' : '' }}">
                            <label for="description" class="col-md-2 control-label">Description</label>

                            <div class="col-md-8">
                                <textarea id="content" class="form-control" name="description" rows="10" cols="90">{{ $post->description }}</textarea>

                                @if ($errors->has('description'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('description') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('requires') ? ' has-error' : '' }}">
                            <label for="requires" class="col-md-2 control-label">Requires</label>

                            <div class="col-md-8">
                                <textarea id="requires" class="form-control" rows="5" cols="90" name="requires" >{{ $post->description }}</textarea>

                                @if ($errors->has('requires'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('requires') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>                        
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
@endsection
