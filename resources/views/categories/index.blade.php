@extends('frontend.master')
@section('content')
 <h1>News!</h1>
 @if(count($categories) > 0)
        @foreach($categories as $category)
            <div class="well">
                <div class="row">
                    <div class="col-md-4 col-sm-4">
                        <img src="/storage/cover_images/{{$category->cover_image}}" alt="image" style="width:100%">
                    </div>
                    <div class="col-md-8 col-sm-8">
                         <h5><a href="/categories/{{$category->id}}">{{$category->news_title}}</a></h5>
                         <small>Written on {{$category->created_at}}</small>
                    </div>
                </div>
               
            </div>
        @endforeach
    @else
        <p>No categories found</p>
    @endif
@endsection