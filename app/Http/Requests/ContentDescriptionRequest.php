<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;
use Sentinel;

class ContentDescriptionRequest extends Request
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
            'description' => 'required',
            'page_id' => 'required',
            'content_category_id' => 'required',
        ];
    }
}