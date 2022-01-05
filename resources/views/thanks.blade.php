@extends('layout')


@section('css')
  <link rel="stylesheet" href="{{ asset('/css/share.css') }}">
  <link rel="stylesheet" href="{{ asset('/css/thanks.css') }}">
@endsection

@section('content')
<div class="container">
  <p class="center">ご意見いただきありがとうございました。</p>
  {{-- トップページへの遷移は不要 --}}
  <button action="">トップページへ</button>
</div>
@endsection