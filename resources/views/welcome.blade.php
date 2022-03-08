<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <title>Document</title>
</head>
<body>
    <h1 style="font-family: 'Black Han Sans', sans-serif">라라벨은 처음이지?!</h1>
    <p style="font-family:CBNUJIKJI">22.02.28 졸립다. 공부할게 많다. 머리가 아프다. 탄산수가 땡긴다.</p>
    <p style="font-family:CBNUJIKJI">할 건 많은데, 시간은 부족하다. 욕심을 버리기엔 치열한 삶이기 때문이다.</p>
    <button class="t-bg-orange-300">
        Save changes
    </button>
    <br>
    <p>
        <button class="btn">Basic</button>
        <button class="btn btn-primary">Primary</button>
        <button class="btn btn-secondary">Secondary</button>
        <button class="btn btn-success">Success</button>
        <button class="btn btn-info">Info</button>
        <button class="btn btn-warning">Warning</button>
        <button class="btn btn-danger">Danger</button>
        <button class="btn btn-dark">Dark</button>
        <button class="btn btn-light">Light</button>
        <button class="btn btn-link">Link</button>
    </p>

    <p>
        <div class="spinner-border text-muted"></div>
        <div class="spinner-border text-primary"></div>
        <div class="spinner-border text-success"></div>
        <div class="spinner-border text-info"></div>
        <div class="spinner-border text-warning"></div>
        <div class="spinner-border text-danger"></div>
        <div class="spinner-border text-secondary"></div>
        <div class="spinner-border text-dark"></div>
        <div class="spinner-border text-light"></div>
    </p>

    <ul class="pagination">
        <li class="page-item"><a class="page-link" href="#">Previous</a></li>
        <li class="page-item"><a class="page-link" href="#">1</a></li>
        <li class="page-item"><a class="page-link" href="#">2</a></li>
        <li class="page-item"><a class="page-link" href="#">3</a></li>
        <li class="page-item"><a class="page-link" href="#">Next</a></li>
    </ul>

    <p>
        <div class="container mt-3">
            <h2>Cards with Contextual Classes</h2>
            <div class="card">
              <div class="card-body">Basic card</div>
            </div>
            <br>
            <div class="card bg-primary text-white">
              <div class="card-body">Primary card</div>
            </div>
            <br>
            <div class="card bg-success text-white">
              <div class="card-body">Success card</div>
            </div>
            <br>
            <div class="card bg-info text-white">
              <div class="card-body">Info card</div>
            </div>
            <br>
            <div class="card bg-warning text-white">
              <div class="card-body">Warning card</div>
            </div>
            <br>
            <div class="card bg-danger text-white">
              <div class="card-body">Danger card</div>
            </div>
            <br>
            <div class="card bg-secondary text-white">
              <div class="card-body">Secondary card</div>
            </div>
            <br>
            <div class="card bg-dark text-white">
              <div class="card-body">Dark card</div>
            </div>
            <br>
            <div class="card bg-light text-dark">
              <div class="card-body">Light card</div>
            </div>
        </div>
    </p>



</body>
</html>