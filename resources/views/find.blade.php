@extends('layouts.default')

@section('content')
<div class="container">
  <div class="card">

    <div class="card__header">
      <p class="title mb-15">タスク検索</p>
      <div class="auth mb-15">
        <p class="detail">「{{ $user->name }}」でログイン中</p>
        <form method="post" action="/logout">
          @csrf
          <input class="btn btn-logout" type="submit" value="ログアウト">
        </form>
      </div>
    </div>

    <div class="todo">
      @if (count($errors) > 0)
      <ul>
        <li>{{$errors->first('content')}}</li>
      </ul>
      @endif
      <form action="/search" method="get" class="flex between mb-30">
        @csrf
        <input type="text" class="input-add" name="content" />
        <select name="tag_id" class="select-tag">
          <option value=""></option>
          @foreach($tags as $tag)
          <option value="{{ $tag->id }}">{{ $tag->tag_name }}</option>
          @endforeach
        </select>
        <input class="btn btn-add" type="submit" value="検索">
      </form>

      <table>
        <tr>
          <th>作成日</th>
          <th>タスク名</th>
          <th>タグ</th>
          <th>更新</th>
          <th>削除</th>
        </tr>
        @if(isset( $todos ))
        @foreach($todos as $todo)
        <tr>
          <td>{{ $todo->created_at }}</td>
          <form action="/update?id={{$todo->id}}" method="post">
            @csrf
            <td>
              <input type="text" class="input-update" value="{{ $todo->task_name }}" name="content" />
            </td>
            <td>
              <select name="tag_id" class="select-tag">
                @foreach($tags as $tag)
                @php
                $select = '';
                if( (int)$tag->id==(int)$todo->tag_id ) {
                  $select = 'selected';
                }
                @endphp
                <option value="{{ $tag->id }}" {{$select}}>{{ $tag->tag_name }}</option>
                @endforeach
              </select>
            </td>
            <td>
              <button class="btn btn-update">更新</button>
              <input type="hidden" name="page" value="/find">
            </td>
          </form>
          <td>
            <form action="/delete?id={{$todo->id}}" method="post">
              @csrf
              <button class="btn btn-delete">削除</button>
              <input type="hidden" name="page" value="/find">
            </form>
          </td>
        </tr>
        @endforeach
        @endif
      </table>
    </div>
    <a class="btn btn-back" href="/home">戻る</a>
  </div>
</div>
@endsection