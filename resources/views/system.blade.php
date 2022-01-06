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
        <div class="name side">
          <div class="th">お名前</div>
          <input type="text" name="fullname" value="">
        </div>
        <!-- 性別 -->
        <div class="gender side">
          <div class="th">性別</div>
          <input type="radio" value="all" checked>全て
          <input type="radio" value="male">男性
          <input type="radio" value="female">女性
        </div>
      </div>
      <!-- 登録日 -->
      <div class="date side">
        <div class="th">登録日</div>
        <input type="text" name="created_at" value="">
      </div>
      <!-- メールアドレス -->
      <div class="email side">
        <div class="th">メールアドレス</div>
        <input type="text" name="email" value="">
      </div>
      <button>検索</button>
    </form>
    <a href="">リセット</a>
  </div>
  <!-- result -->
  <div class="container">
    <div class="side">
      <p>全35件中　件</p>
      {{-- {{ $item->links() }} --}}
      {{-- {{ $institutions->appends(request()->input())->links() }}
    </div> --}}
  </div>
  <table>
    <tr>
      <th>ID</th>
      <th>お名前</th>
      <th>性別</th>
      <th>メールアドレス</th>
      <th>ご意見</th>
      <th></th>
    </tr>
    @if (isset($items))
    @foreach ($items as $item)
    <tr>
      <form action="{{ route('delete', $task) }}" method="POST">
      @csrf
        <td>{{ $item->id }}</td>
        <td>{{ $item->fullname }}</td>
        <td>{{ $item->gender }}</td>
        <td>{{ $item->email }}</td>
        <td>{{ $item->opinion }}</td>
        <input type="hidden" name="id" value="{{ $item->id }}">
        <input type="hidden" name="fullname" value="{{ $item->fullname }}">
        <input type="hidden" name="gender" value="{{ $item->gender }}">
        <input type="hidden" name="email" value="{{ $item->email }}">
        <input type="hidden" name="opinion" value="{{ $item->opinion }}">
        <td><button>削除</button></td>
      </form>
    </tr>
    @endforeach
    @endif
  </table>
@endsection