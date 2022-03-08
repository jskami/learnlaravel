<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Article List</title>
</head>
<body>
    {{-- 게시글 리스팅하는 뷰 페이지, php에서 레코드 물고 와서 반복하고 하나씩 뽑았던 그 방식! 인데.. 라라벨은 조금 다름  --}}
    <ol>
    @foreach($articles as $article)
        <li>{{ $article->title }}</li> <!--타이틀 항목을 뽑아 출력 하겠다.-->
    @endforeach
    </ol>
</body>
</html>