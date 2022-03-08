<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() // index = 리스트 페이지
    {
        $articles = Article::orderBy('id','desc')->get();

        return view('articles.list', ['articles' => $articles]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() // create = 동작
    {
        echo 'create가 동작중입니다.';
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request) // store = 저장
    {
        echo 'store가 동작중입니다.';
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function show(Article $article) // show = 보여주기
    {
        echo 'show가 동작중입니다.';
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function edit(Article $article) // edit = 수정
    {
        echo 'edit가 동작중입니다.';
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Article $article)
    {
        echo 'update가 동작중입니다.';
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function destroy(Article $article) // destroy = 일반 유저가 띄우는 가장 처음 페이지 ex) 맨 처음 'Hello'문구 있던 routes 밑에 web.php를 말한다.
    {
        echo 'destroy 동작중입니다.';
    }
}
