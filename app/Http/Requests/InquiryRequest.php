<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class InquiryRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'user' => 'required|exists:inquiries,send_user_id',
            'company' => 'required|max:255',
            'name' => 'required|max:255',
            'tel' => 'nullable|regex:/^[0-9]+$/',
            'email' => 'nullable|email:filter,dns',
            'content' => 'nullable|max:255',
        ];
    }
    /*
    * 定義済みバリデーションルールのエラーメッセージ取得
    *
    * @return array
    */
   public function messages()
   {
       return 
             [
               '*.required' => ':attributeを入力してください',
               '*.max' => '文字数の範囲内で入力してください',
               'tel||email' => '正しい形式で入力してください',
             ];
   }
   
   public function attributes(): array
   {
       return [
           'company' => '会社名',
           'name' => '氏名',
           'tel' => '電話番号',
           'email' => 'メールアドレス',
           'content' => 'お問い合わせ',
       ];
   }
}
