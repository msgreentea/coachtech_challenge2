@extends('layout')


@section('css')
  <link rel="stylesheet" href="{{ asset('/css/share.css') }}">
  <link rel="stylesheet" href="{{ asset('/css/thanks.css') }}">
@endsection

@section('content')
<div class="container">
  <p class="center">ご意見いただきありがとうございました。</p>
  <button action="{{ route('index') }}">トップページへ</button>
</div>
@endsection