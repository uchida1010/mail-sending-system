@extends('layouts.app')

@section('title')
HOME|メール送信システム
@endsection

@section('content')
<div class="main-container user-container">
    <div class="page-title">
        <h2>お問い合わせ一覧
        </h2>
    </div>
    
    <a href="#" class="btn btn-success">新規作成</a>
    <div class="table-wrap">
        <table class="table">
            <thead>
                <tr>
                    <th>編集</th>
                    <th>No</th>
                    <th>会社名</th>
                    <th>氏名</th>
                    <th>電話番号</th>
                    <th>メールアドレス</th>
                    <th>お問い合わせ内容</th>
                    <th>担当ユーザー</th>
                    <th>備考</th>
                </tr>

            </thead>
            <tbody>
            @foreach ($inquiries as $inquiry)
            <tr>
                <td><a class="btn btn-primary" href="#">編集</a></td>
                <td>{{ $inquiry->id }}</td>
                <td>{{ $inquiry->company }}</td>
                <td>{{ $inquiry->name }}</td>
                <td>{{ $inquiry->tel }}</td>
                <td>{{ $inquiry->email }}</td>
                <td>{{ $inquiry->content }}</td>
                <td>{{ $inquiry->send_user_id }}</td>
                <td>{{ $inquiry->note }}</td>
                </tr>
            @endforeach
            </tbody>

        </table>
    </div>
</div>
@endsection