@extends('templates.master') @section('content')
<form method="POST" action="/posts">
    @csrf
    <div class="form-group">
        <label for="title">Post title</label>
        <input type="text" class="form-control" id="title" name="title" required>
    </div>

    <div class="form-group">
        <label for="slug">Post slug</label>
        <input type="text" class="form-control" id="slug" name="slug" required>
    </div>

    <div class="form-group">
        <label for="body">Body</label>
        <textarea class="form-control" id="body" rows="3" name="body" required></textarea>
    </div>

    <div class="form-group">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>

    @include('partials.error')

</form>


@endsection
