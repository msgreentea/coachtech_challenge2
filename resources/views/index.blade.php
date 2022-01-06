@extends('layout')


@section('css')
  <link rel="stylesheet" href="{{ asset('/css/share.css') }}">
  <link rel="stylesheet" href="{{ asset('/css/style.css') }}">
@endsection


@section('title')
    お問い合わせ
@endsection


@section('content')
<form action="{{ route('confirm') }}" method="get">
    <table>
      <!-- 名前 -->
      <tr>
        <th>お名前<span>※</span></th>
        <td class="side">
          <div class="left">
            {{-- <input type="text" name="familyname" value=""> --}}
            <input type="text" name="familyname" value="{{ old('familyname') }}">
          </div>
          <div class="right">
            {{-- <input type="text" name="lastname"> --}}
            <input type="text" name="lastname" value="{{ old('lastname') }}">
          </div>
        </td>
      </tr>
      <tr>
        <th></th>
        <td>
          <div class="side">
            <div class="left">
              <p class="example">例）山田</p>
            </div>
            <div class="right">
              <p class="example">例）太郎</p>
            </div>
          </div>
        </td>
      </tr>
      <!-- 性別 -->
      <tr>
        <th class="th">性別<span>※</span></th>
        <td class="td radio-side">
          <div class="radio">
            <label for=""><input type="radio" name="gender" value="male" checked="checked">男性</label>
            <label for=""><input type="radio" name="gender" value="female" checked="checked">女性</label>
            <label for="male"></label>
          </div>
          {{-- <div class="radio">
            <input type="radio" name="gender" value="female">
            <label for="female">女性</label>
          </div> --}}
        </td>
      </tr>
      <!-- メールアドレス -->
      <tr>
        <th class="th">メールアドレス<span>※</span></th>
        <td class="td">
          {{-- <input type="text" name="email"> --}}
          <input type="text" name="email" value="{{ old('email') }}">
        </td>
      </tr>
      <tr>
        <th></th>
        <td>
          <p class="example">例）test@example.com</p>
        </td>
      </tr>
      <!-- 郵便番号 -->
      <tr>
        <th>郵便番号<span>※</span></th>
        <td class="side">
          <div class="postcode-left">
            <p class="bold-text">〒</p>
          </div>
          <div class="right">
            {{-- <input type="text" name="email"> --}}
            <input type="text" name="postcode" value="{{ old('postcode') }}">
          </div>
        </td>
      </tr>
      <tr>
        <th></th>
        <td class="side">
          <div class="right">
            <p class="example">例）123-4567</p>
          </div>
        </td>
      </tr>
      <!-- 住所 -->
      <tr>
        <th>住所<span>※</span></th>
        <td>
          {{-- <input type="text" name="address"> --}}
          <input type="text" name="address" value="{{ old('address') }}">
        </td>
      </tr>
      <tr>
        <th></th>
        <td>
          <p class="example">例）東京都渋谷区千駄ヶ谷1-2-3</p>
        </td>
      </tr>
      <!-- 建物名 -->
      <tr>
        <th>建物名</th>
        <td>
          {{-- <input type="text" name="building_name"> --}}
          <input type="text" name="building_name" value="{{ old('buidling_name') }}">
        </td>
      </tr>
      <tr>
        <th></th>
        <td>
          <p class="example">例）千駄ヶ谷マンション101</p>
        </td>
      </tr>
      <tr>
        <th>ご意見<span>※</span></th>
        <td><textarea name="opinion" id="" cols="30" rows="10" value="{{ old('opinion') }}"></textarea></td>
      </tr>
    </table>
    <button>送信</button>
  </form>
@endsection