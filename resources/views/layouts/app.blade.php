<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>DaiDV web site</title>
    <link rel="stylesheet" href="/css/app.css">

</head>
<body>
@include("includes.navbar")
<div class="container">
    @if (Request::is('/'))
        @include("includes.showcase")
    @endif
    <div class="row">
        <div class="col-md-8 col-lg-8">
            @yield("content")
        </div>

        <div class="col-md-4 col-lg-4">
            @include("includes.sidebar")
        </div>
    </div>

    <footer class="footer text-center">Copy right version 1.0</footer>
</div>
</body>
</html>