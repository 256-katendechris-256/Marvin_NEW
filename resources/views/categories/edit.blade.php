@extends('frontend.master')

@section('content')
     
    <h1>Edit News Post</h1>
    <div class="panel-body">
                            <form role="form" action ="/categories/{{$category->id}}" method = "POST" enctype="multipart/form-data">
                                @csrf
                                @method('PUT')
                                        <div class="form-group">
                                            <label for= "title">Enter News Title</label>
                                            <input class="form-control" type="text" id="title" name="title" placeholder = "enter news title" value="{{$category->news_title}}"/>
                                            
                                        </div>
                                 <div class="form-group">
                                            <label for="category">Enter Category</label>
                                            <input class="form-control" type="text" id ="category" name="category" placeholder = "enter news category" value="{{$category->news_category}}"/>
                                     
                                </div>
                                        <div class="form-group">
                                            <label>News Body</label>
                                            <textarea class="form-control" rows="3" placeholder = "type here" name="body" >{{$category->news_body}}</textarea>
                                        </div>
                                        <div class="form-group">
                                            <label>Upload Image </label>
                                            <input class="form-control" type="file"  name="cover_image"/>
                                        </div>
                                 
                                        <button type="submit" class="btn btn-info">Publish </button>

                            </form>
                            </div>
    </div>
@endsection