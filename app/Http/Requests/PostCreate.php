<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PostCreate extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'category_id' => 'required',
            'detail_name' => 'required|max:100',
            'detail_maker' => 'required|max:50',
            'detail_detail' => 'required|max:500',
            'detail_comment' => 'required|max:500',
            'detail_img'=>'image|mimes:jpeg,png,jpg,gif|max:10240',
        ];
    }

    public function messages()
    {
        return [
            'category_id.required' => 'カテゴリーを選択して下さい',
            'detail_name.required' => '名称を入力して下さい',
            'detail_maker.required' => 'メーカーを入力して下さい',
            'detail_detail.required' => '詳細を入力して下さい',
            'detail_comment.required' => '投稿者コメントを入力して下さい',
            'detail_name.max' => '名称は100文字以内で入力して下さい',
            'detail_maker.max' => 'メーカーは50文字以内で入力して下さい',
            'detail_detail.max' => '詳細は500文字以内で入力して下さい',
            'detail_comment.max' => '投稿者は500文字以内で入力して下さい',
            'detail_img.image'=>'画像は「jpeg, png, jpg, gif」いずれかの形式でアップロードして下さい',
            'detail_img.mimes'=>'画像は「jpeg, png, jpg, gif」いずれかの形式でアップロードして下さい',
        ];
    }
}
