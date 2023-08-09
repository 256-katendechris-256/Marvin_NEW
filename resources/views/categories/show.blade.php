@extends('frontend.master')

@section('content')
<div class="container">
    <a href="/categories" class="btn btn-primary">Back</a>
    <h1>{{$category->news_title}}</h1>
    <img src="/storage/cover_images/{{$category->cover_image}}" alt="image" class="img-fluid" style="max-height: 400px"><br><br>
    <div class="news-details">
        <span class="badge bg-danger">{{$category->news_category}}</span> <br><br>
        <p>{{$category->news_body}}</p>
    </div>
    <hr>
    <small>Written on {{$category->created_at}}</small>
    <hr>
    <a href="/categories/{{$category->id}}/edit" class="btn btn-success">Edit</a>
    <form action="{{route('categories.destroy', $category->id)}}" method="post" class="pull-right">
        @csrf
        @method('DELETE')
        <button type="submit" onclick="return confirm('Are you sure you want to delete this news post?')" class="btn btn-danger">Delete</button>
    </form>
</div>
@endsection

@section('styles')
<style>
    body {
        background-color: #000;
        color: #fff;
    }

    .container {
        margin-top: 20px;
    }

    h1 {
        font-size: 32px;
        font-weight: bold;
        margin-bottom: 10px;
    }

    .news-details {
        background-color: #111;
        padding: 20px;
        margin-bottom: 20px;
    }

    .badge {
        font-size: 16px;
        padding: 5px 10px;
    }

    p {
        font-size: 18px;
        line-height: 1.5;
    }

    small {
        font-size: 14px;
    }

    .btn-primary {
        background-color: #dc3545;
        border-color: #dc3545;
    }

    .btn-success {
        background-color: #17a2b8;
        border-color: #17a2b8;
    }

    .btn-danger {
        background-color: #dc3545;
        border-color: #dc3545;
    }

    .btn-primary:hover,
    .btn-primary:focus,
    .btn-primary:active,
    .btn-primary.active,
    .open .dropdown-toggle.btn-primary {
        background-color: #c82333;
        border-color: #bd2130;
    }

    .btn-success:hover,
    .btn-success:focus,
    .btn-success:active,
    .btn-success.active,
    .open .dropdown-toggle.btn-success {
        background-color: #117a8b;
        border-color: #10707f;
    }

    .btn-danger:hover,
    .btn-danger:focus,
    .btn-danger:active,
    .btn-danger.active,
    .open .dropdown-toggle.btn-danger {
        background-color: #c82333;
        border-color: #bd2130;
    }
</style>
@endsection
