@extends('frontend.master')

@section('content')
     
    <h1>Create News</h1>
    <div class="panel-body">
                            <form role="form" action ="{{route('categories.store')}}" method = "POST" enctype="multipart/form-data">
                                @csrf
                                        <div class="form-group">
                                            <label for= "title">Enter News Title</label>
                                            <input class="form-control" type="text" id="title" name="title" placeholder = "enter news title"/>
                                            
                                        </div>
                                 <div class="form-group">
                                            <label for="category">Enter Category</label>
                                            <input class="form-control" type="text" id ="category" name="category" placeholder = "enter news category"/>
                                     
                                </div>
                                        <div class="form-group">
                                            <label>News Body</label>
                                            <textarea class="form-control" id="body" rows="3" placeholder = "type here" name="body"></textarea>
                                        </div>
                                        <div class="form-group">
                                            <label>Upload Image </label>
                                            <input class="form-control" type="file" id="image" name="cover_image"/>
                                        </div>
                                 
                                        <button type="submit" class="btn btn-info btn-block save_btn">Publish </button>

                            </form>







                            </div>
    </div>
@endsection


