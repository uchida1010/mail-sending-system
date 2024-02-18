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
            <form action="#" method="post">
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
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <label class="form-label">
                                <span class="label-txt">TEL</span>
                            </label>
                            <input class="input-field" type="tel" name="tel" value="{{old('tel')}}">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <label class="form-label">
                                <span class="label-txt">E-mail</span>
                            </label>
                            <input class="input-field" type="email" name="email" value="{{old('email')}}">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <label class="form-label">
                                <span class="label-txt">カテゴリー</span>
                            </label>
                            <select name="category" class="input-field">
                                <option value="">選択してください</option>
                                @foreach($categories as $category)
                                    <option value="{{ $category }}" @if("$category" == old('category')) selected @endif >{{ $category }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <label class="form-label">
                                <span class="label-txt">お問い合わせ内容</span>
                            </label>
                            <textarea class="textarea-field" type="text" name="content" value="{{ old('$content') }}">{{ old('content') }}</textarea>
                        </div>
                    </div>
                </div>
                <input type="submit" value="登録" class="btn btn-info btn-register">
            </form>
        </div>
    </div>
</div>

@endsection