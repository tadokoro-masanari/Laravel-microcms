
<!DOCTYPE html>
<html lang="ja">
<!-- ヘッダー -->
@include('parts.header')

<body class="pt-5">
@include('parts.navbar')

<main>
    <div class="bg-light p-3 p-sm-5 mb-4">
        <div class="container">
        <h1 class="display-4">{{$blog->title}}</h1>
    </div>
    <div class="container mt-5">
        <p> {!! $blog->content !!}</p>
    </div>
    <div class="container mt-5">
        <a class="btn btn-warning" href={{route('index')}} role="button">< 一覧に戻る</a>
    </div>
    <hr>
    </div>
</main>

<!-- フッタ -->
@include('parts.footer')
</body>

</html>