@extends('blog::main-page')
@section('page')
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h1>Blogs</h1>
                <div class="pull-right">
                    <a class="btn btn-success" href="{{ route('web_blog_create') }}">Create Blog</a>
                </div>
            </div>
            <table class="table table-bordered">
                <tr>
                    <th>No:</th>
                    <th>Title:</th>
                    <th>Body:</th>
                </tr>
             @foreach( $blogs as $blog)
                <tr>
                    <td>{{ $blog->id }}</td>
                    <td>{{ $blog->title }}</td>
                    <td>{{ $blog->body }}</td>
                </tr>
                 @endforeach
            </table>
        </div>
    </div>

@endsection