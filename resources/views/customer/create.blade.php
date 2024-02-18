@extends('layouts.app')
@section('title')
HOME|販売管理システム
@endsection

@section('content')
<div class="main-container customer-container">
    <div class="page-title">
        <h2>取引先マスタ--新規登録
            <hr>
        </h2>
    </div>
    <div class="create-wrap">
        <div class="create-form">
            <form action="{{ url('sales-system/customer/create') }}" method="post">
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
                                <span class="label-txt">顧客名</span>
                                <span class="required-label">必須</span>
                            </label>
                            <input class="input-field" type="text" name="name" value="{{old('name')}}">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <label class="form-label">
                                <span class="label-txt">住所</span>
                            </label>
                            <input class="input-field" type="text" name="address" value="{{old('address')}}" >
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <label class="form-label">
                                <span class="label-txt">Tel</span>
                            </label>
                            <input class="input-field" type="tel" name="telephone" value="{{old('telephone')}}" >
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <label class="form-label">
                                <span class="label-txt">携帯番号</span>
                            </label>
                            <input class="input-field" type="tel" name="cellphone" value="{{old('cellphone')}}" >
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <label class="form-label">
                                <span class="label-txt">E-mail</span>
                            </label>
                            <input class="input-field" type="email" name="email" value="{{old('email')}}" >
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <label class="form-label">
                                <span class="label-txt">担当者</span>
                            </label>
                            <select name="personincharge_id" class="input-field">
                                <option value="" >選択してください</option>
                            @foreach($users as $user)
                                <option value="{{ $user->id }}" @if("$user->name" == old('user->name')) selected @endif >{{ $user->name }}</option>
                            @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <label class="form-label">
                                <span class="label-txt">備考</span>
                            </label>
                            <textarea class="textarea-field" type="text" name="remarks" value="{{ old('$remarks') }}">{{ old('remarks') }}</textarea>
                        </div>
                    </div>
                </div>
                <input type="submit" value="登録" class="btn btn-info btn-register">
            </form>
        </div>
    </div>
</div>

@endsection