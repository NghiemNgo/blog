@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">RikkeiSoft Careers</div>

                <div class="panel-body">
                    @foreach($posts as $post)
                    <div class="col-md-8 col-md-offset-2">
                        <div class="panel panel-default">
                        <div class="panel-heading"><a href="{{ route('post.show', $post->id) }}">{{$post->title}}</a></div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-md-2"><image src="../images/8489345.png"> </div>
                                <div class="col-md-10">
                                    <div><p><strong>Salary: {{$post->salary}} $</strong><p></div>
                                    <div><p>{{ substr($post->description, 0, 250) }}...</p></div>
                                </div>
                            </div>
                        </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
