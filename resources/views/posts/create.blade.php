@extends('layouts.app2')
<script>
var i=0;
function add(){
    var value = document.getElementById('inputCategories').value;
    if (value!='') 
    {   
        i++;  
        var title   =document.getElementById('inputCategories').value;
        var node = document.createElement('div');        
        node.innerHTML = '<input type="checkbox" id="checkbox' + i + '" name="listCategories[' + i + ']" value=' + title + '><label for="check' + i + '">'+ title +'</label>';       
        document.getElementById('test').appendChild(node);
        document.getElementById('inputCategories').value="";
    }
}
</script>
@section('content')
<div id="content">
    <div id="post-create">
        <div id="page-container">
    <div class="row">
        <div class="col-md-10 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Create Post</div>
                <div class="panel-body">
                    <form class="form-horizontal" role="form" method="post" action="{{ url()->route('post.save') }}">
                        {{ csrf_field() }}
                        <input type="hidden" name="_method" value="post"/>
                        <div class="form-group{{ $errors->has('title') ? ' has-error' : '' }}">
                            <label for="title" class="col-md-2 control-label">Title</label>

                            <div class="col-md-8">
                                <input id="name" type="text" class="form-control" name="title" value="{{ old('title') }}">

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
                                <input id="name" type="text" class="form-control" placeholder="$(dolar)" name="salary" value="{{ old('salary') }}">

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
                                <textarea id="description" class="form-control" name="description" rows="10" cols="90" value="{{ old('description') }}"></textarea>

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
                                <textarea id="requires" class="form-control" rows="5" cols="90" name="requires"></textarea>

                                @if ($errors->has('requires'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('requires') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('categories') ? ' has-error' : '' }}">
                            <label for="categories" class="col-md-2 control-label">Categories</label>

                            <div class="col-md-8">
                                <div id="container">
                                    <input id="inputCategories" type="text" list="listCategories" >
                                    <input value="add" type="button"  onClick="add()">
                                    <datalist id="listCategories">
                                        @foreach($categories as $category)
                                        <option>{{$category->name}}</option>
                                        @endforeach
                                </datalist>
                                </div>
                                <div id="test"></div>

                                @if ($errors->has('categories'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('categories') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    <i class="fa fa-btn"></i> Create
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
</div>
@endsection