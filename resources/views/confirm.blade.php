@extends('layout')


@section('css')
  <link rel="stylesheet" href="{{ asset('/css/share.css') }}">
  <link rel="stylesheet" href="{{ asset('/css/confirm.css') }}">
@endsection


@section('title')
  内容確認
@endsection


@section('content')
  <form action="{{ route('add') }}">
    <table>
      <tr>
        <th>お名前</th>
        <td>{{ $fullname }}</td>
      </tr>
      <tr>
        <th>性別</th>
        <td>{{ $gender }}</td>
      </tr>
      <tr>
        <th>メールアドレス</th>
        <td>{{ $email }}</td>
      </tr>
      <tr>
        <th>郵便番号</th>
        <td>{{ $postcode }}</td>
      </tr>
      <tr>
        <th>住所</th>
        <td>{{ $address }}</td>
      </tr>
      <tr>
        <th>建物</th>
        <td>{{ $building_name }}</td>
      </tr>
      <tr>
        <th>ご意見</th>
        <td>{{ $opinion }}</td>
      </tr>
    </table>
    <button>送信する</button>
  </form>
  <a href="{{ route('index') }}">修正する</a>
@endsection