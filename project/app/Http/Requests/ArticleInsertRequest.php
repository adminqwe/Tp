<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class ArticleInsertRequest extends Request
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
            //规则
        'title'=>'required',
        "content"=>'required',
        "descr"=>'required',
        "pic"=>'required|image',
        ];
    }
    //对规则的描述
    public function messages(){
        return [
            //规则的描述
        'title.required'=>'标题不能为空',
        "content.required"=>'内容不能为空',
        "descr.required"=>'描述不能为空',
        "pic.required"=>'图片不能为空',
        "pic.image"=>'文件类型必须是图片',
        ];
    }
}
