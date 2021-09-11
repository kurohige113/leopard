@extends('layouts.front.index')

@section('head-meta')
  <meta name="csrf-token" content="{{ csrf_token() }}">
@endsection

@section('head-css')
  <link rel="stylesheet" href="{{ asset('css/snow-peak-maker.css') }}">
@endsection

@section('head-js')
  <script src="https://code.jquery.com/jquery-2.2.4.js" integrity="sha256-iT6Q9iMJYuQiMWNd9lDyBUStIq/8PuOW33aOqmvFpqI=" crossorigin="anonymous"></script>
@endsection

@section('head-title', 'SnowPeakMaker')
@section('head-description', 'ページの説明文です')

@section('header-service-name', 'snow-peak-maker')
@section('header-public-relations', '野遊びレシピ風画像を生成するよ')

@section('content')
  <article>
    <h1>野遊びレシピ風画像を作成する</h1>
    <section>
      <h2>画像を選択</h2>
    </section>
    <section>
      <h2>テキストを入力</h2>
      <input tyle="text" />
    </section>
    <section>
      <h2>プレビュー</h2>
      <div>
        <ul>
        <li>画像を保存</li>
        <li>画像を公開</li>
        <li>Twitterでシェア</li>
        <ul>
      </div>
    </section>
  </article>

  <article>
    <h1>最近公開された画像</h1>
  </article>

  <div id="app">
    @{{ message }}
    <span v-bind:title="message">
      Hover your mouse over me for a few seconds
      to see my dynamically bound title!
    </span>
  </div>

@endsection

@section('body-last')
  <script src="https://cdn.jsdelivr.net/npm/vue@2"></script>
  <script src="{{ asset('js/snow-peak-maker.js') }}"></script>
@endsection
