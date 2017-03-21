@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-7 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Image
                </div>

                <div class="panel-body">
                    <div><p><strong><h3>Title: {{$post->title}}</h3></strong></p></div>
                    <div><strong><h4>Salary: {{$post->salary}} $</h4></strong></div>
                    <br>
                    <div><p><?php echo nl2br($post->description); ?></p></div>
                    <div><p><strong><h4> Requires: </h4></strong></p>
                        <p><?php echo nl2br($post->requires); ?></p>
                        <a href="{{ route('post.edit', $post->id) }}">edit</a>
                        <a href="{{ route('post.delete', $post->id) }}">delete</a>
                        <a href="{{ route('apply', $post->id) }}">Apply now!</a> 
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection