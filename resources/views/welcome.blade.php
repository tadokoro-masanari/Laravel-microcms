
<!DOCTYPE html>
<html lang="ja">
<!-- ヘッダー -->
@include('parts.header')

<body class="pt-5">
@include('parts.navbar')

<main>
    <div class="bg-light p-3 p-sm-5 mb-4">
      <div class="container">
        <h1 class="display-4">カテゴリー名など</h1>
        <p>説明など</p>
        <a class="btn btn-primary btn-lg" href="#" role="button">もっと見る &raquo;</a>
      </div>
    </div>
    <div class="container mt-2">
      <div class="row">
        @if(!empty($blogs))
            @foreach ($blogs as $blog)
            <div class="col-md-4">
                <h4>{{ $blog->title }}</h4>
                <p>ここに本文を少し出したい</p>
                <p><a class="btn btn-secondary" href={{route('detail',$blog->id)}} role="button">詳細を見る &raquo;</a></p>
            </div>
            @endforeach
        @endif
    </div>
    <hr>
    </div>
</main>

<!-- フッタ -->
@include('parts.footer')
</body>

</html>