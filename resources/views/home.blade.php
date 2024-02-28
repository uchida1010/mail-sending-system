@extends('layouts.app')

@section('title')
 HOME|販売管理システム
@endsection

@section('content')
<div class="home-container main-container">
    <div class="title">
        <h2>Menu</h2>
    </div>

    <nav class="home-menu-container">
        <ul class="home-menu-list">
            <li class="menu-item"><a href="{{ route('user.index')  }}" class="menu-anchor">社員マスタ</a></li>
            <li class="menu-item"><a href="{{ route('inquiry.create')  }}" class="menu-anchor">お問い合わせ</a></li>
            <li class="menu-item"><a href="{{ route('inquiry.index')  }}" class="menu-anchor">お問い合わせ一覧</a></li>
        </ul>
    </nav>
</div>
@endsection