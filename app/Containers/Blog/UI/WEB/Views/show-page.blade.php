@extends('blog::main-page')
@section('page')
<div class="row">
    <div class="col-lg-12 col-lg-offset-2">
        <h3>Available blogs</h3><a class="btn btn-primary" href="{{ route('web_blog_index') }}">Back</a>
    </div>

</div>
@endsection