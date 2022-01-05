@extends('layout')


@section('css')
  <link rel="stylesheet" href="{{ asset('/css/share.css') }}">
  <link rel="stylesheet" href="{{ asset('/css/system.css') }}">
@endsection


@section('content')
  <h1>管理システム</h1>
  <div class="container">
    <form action="">
      <div class="side">
        <!-- お名前 -->
        <div class="name">
          <div class="th">お名前</div>
          <input type="text" name="fullname" value="">
        </div>
        <!-- 性別 -->
        <div class="gender">
          <div class="th">性別</div>
          <input type="radio" value="all" checked>全て
          <input type="radio" value="male">男性
          <input type="radio" value="female">女性
        </div>
      </div>
      <!-- 登録日 -->
      <div class="date">
        <div class="th">登録日</div>
        <input type="text" name="created_at" value="">
      </div>
      <!-- メールアドレス -->
      <div class="email">
        <div class="th">メールアドレス</div>
        <input type="text" name="email" value="">
      </div>
      <button>検索</button>
    </form>
    <a href="">リセット</a>
  </div>
@endsection