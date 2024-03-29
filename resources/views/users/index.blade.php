@extends('layouts.app')

@section('title')
HOME|メール送信システム
@endsection

@section('content')
<div class="main-container user-container">
    <div class="page-title">
        <h2>社員マスタ</h2>
    </div>
    
    <a href="#" class="btn btn-success">新規作成</a>
    <div class="table-wrap">
        <table class="table">
            <thead>
                <tr>
                    <th>編集</th>
                    <th>No</th>
                    <th>氏名</th>
                    <th>メールアドレス</th>
                </tr>

            </thead>
            <tbody>
            @foreach ($users as $user)
            <tr>
                <td><a class="btn btn-primary" href="#">編集</a></td>
                <td>{{ $user->id }}</td>
                <td>{{ $user->name }}</td>
                <td>{{ $user->email }}</td>
                </tr>
            @endforeach
            </tbody>

        </table>
    </div>
</div>
@endsection