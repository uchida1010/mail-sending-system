@extends('layouts.app')
@section('title')
HOME|メール送信システム
@endsection

@section('content')
<div class="main-container">
    <div class="page-title">
        <h2>お問い合わせフォーム
            <hr>
        </h2>
    </div>
    <div class="create-wrap">
        <div class="create-form">
            <form action="{{ route('inquiry.store') }}" method="post">
                @csrf
                <div class="create-table">
                    <div class="row">
                        <div class="col">
                            <label class="form-label">
                                <span class="label-txt">会社名</span>
                                <span class="required-label">必須</span>
                            </label>
                            <input id="company" class="input-field" type="text" name="company" value="{{old('company')}}">
                            <div class="error-wrap">
                                @if ($errors->has('company'))
                                <div class="alert error">
                                    {{$errors->first('company')}}
                                </div>
                                @endif
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <label class="form-label">
                                <span class="label-txt">名前</span>
                                <span class="required-label">必須</span>
                            </label>
                            <input class="input-field" type="text" name="name" value="{{old('name')}}">
                            @if ($errors->has('name'))
                                <div class="alert error">
                                    {{$errors->first('name')}}
                                </div>
                            @endif
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <label class="form-label">
                                <span class="label-txt">TEL</span>
                            </label>
                            <input class="input-field" type="tel" name="tel" value="{{old('tel')}}">
                            @if ($errors->has('tel'))
                                <div class="alert error">
                                    {{$errors->first('tel')}}
                                </div>
                            @endif
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <label class="form-label">
                                <span class="label-txt">E-mail</span>
                            </label>
                            <input class="input-field" type="email" name="email" value="{{old('email')}}">
                            @if ($errors->has('email'))
                                <div class="alert error">
                                    {{$errors->first('email')}}
                                </div>
                            @endif
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <label class="form-label">
                                <span class="label-txt">送信ユーザー</span>
                            </label>
                            <select name="user" class="input-field">
                                <option value="">選択してください</option>
                                @foreach($users as $user)
                                    <option value="{{ $user->id }}" @if("$user" == old('user')) selected @endif >{{ $user->name }}</option>
                                @endforeach
                            </select>
                            @if ($errors->has('user'))
                                <div class="alert error">
                                    {{$errors->first('user')}}
                                </div>
                            @endif
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <label class="form-label">
                                <span class="label-txt">お問い合わせ内容</span>
                            </label>
                            <textarea class="textarea-field" type="text" name="content" value="{{ old('$content') }}">{{ old('content') }}</textarea>
                            @if ($errors->has('content'))
                                <div class="alert error">
                                    {{$errors->first('content')}}
                                </div>
                            @endif
                        </div>
                    </div>
                </div>
                <input type="submit" value="登録" class="btn btn-info btn-register">
            </form>
        </div>
    </div>
</div>

@endsection