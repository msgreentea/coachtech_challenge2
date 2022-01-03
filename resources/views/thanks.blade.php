@extends('layout')


@section('css')
  <link rel="stylesheet" href="{{ asset('/css/share.css') }}">
  <link rel="stylesheet" href="{{ asset('/css/confirm.css') }}">
@endsection

@section('content')
  <p class="center">ご意見いただきありがとうございました。</p>
  <button href="{{ route('index') }}">トップページへ</button>
@endsection