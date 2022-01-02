@extends('layout')


@section('css')
  <link rel="stylesheet" href="{{ asset('/css/share.css') }}">
  <link rel="stylesheet" href="{{ asset('/css/confirm.css') }}">
@endsection


@section('title')
  内容確認
@endsection


@section('content')
  <form action="{{ route('post') }}">
    <table>
      <tr>
        <th>お名前</th>
        <td>{{ -> }}</td>
      </tr>
      <tr>
        <th>性別</th>
        <td>{{ -> }}</td>
      </tr>
      <tr>
        <th>メールアドレス</th>
        <td>{{ -> }}</td>
      </tr>
      <tr>
        <th>郵便番号</th>
        <td>{{ -> }}</td>
      </tr>
      <tr>
        <th>住所</th>
        <td>{{ -> }}</td>
      </tr>
      <tr>
        <th>建物</th>
        <td>{{ -> }}</td>
      </tr>
      <tr>
        <th>ご意見</th>
        <td>{{ -> }}</td>
      </tr>
    </table>
    <button>送信する</button>
  </form>
  <a href="{{ route('index') }}">修正する</a>
@endsection