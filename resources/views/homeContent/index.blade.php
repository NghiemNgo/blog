@extends('layouts.app2')
@section('content')

<div id="content">
    <div id="home-list-items">
        <div id="page-container">
            @foreach($homeContents as $homeContent)
            <div id='item'>
                <p>{{$homeContent->home_category_name}}</p>
                <p>{{$homeContent->small_title}}</p>
                <p>{{$homeContent->big_title}}</p>
                <p>{{$homeContent->content}}</p>
                @foreach($groupByItems[$homeContent->id] as $groupByItem)
                    @if($groupByItem->home_image_url != null)
                        <image class="itemImage" src="/images/{{$groupByItem->home_image_url}}"/>
                    @endif
                @endforeach
                @if(isset($groupBySmallItems[$homeContent->id]))
                    @foreach($groupBySmallItems[$homeContent->id] as $groupBySmallItem)
                    <p>{{$groupBySmallItem->title}}</p>
                    <p>{{$groupBySmallItem->content}}</p>
                    @if($groupBySmallItem->image != null)
                        <image class="itemImage" src="/images/{{$groupBySmallItem->image}}"/>
                    @endif
                    @endforeach
                @endif
            </div>
            @endforeach.
        </div>
    </div>
</div>
@endsection