//resources/views/posts.blade.php
<!DOCTYPE html>
<html>

<head>
    <title>Laravel 10 Ajax Pagination</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <div class="container">
        <h2>Laravel 10 Pagination </h2>

        <div id="data-wrapper">
            <div class="row">
                @foreach ($post as $rs)
                <div class="col-3" style="padding-bottom:10px;">
                    <div class="card">
                        <img src="https://placehold.co/300x200" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">{{ $rs->id }} : {{ $rs->title }}</h5>
                            <p class="card-text">{!! $rs->body !!}</p>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>

        <div class="d-flex">
            {!! $post->links() !!}
        </div>
    </div>
</body>

</html>