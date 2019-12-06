<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class ProductRequest extends Request
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
            //
        ];
        /*$rules = [
            'product_name' => 'required|alpha_dash',
            'parent_category' => 'required|alpha_dash',
            'sub_category' => 'required|alpha_dash',
            'product_meta_keywords' => 'required|alpha_dash',
            'product_model' => 'required|alpha_dash',
            'brand_name' => 'required|alpha_dash',
            'product_att_name' => 'required|alpha_dash',
            'product_att_value' => 'required|alpha_dash',
            'unit_type' => 'required|alpha_dash',
            'product_MOQ' => 'required|alpha_dash',
            'product_FOB' => 'required|alpha_dash',
            'product_groups' => 'required|alpha_dash',
            'add_group_name' => 'required|alpha_dash',
            'payment' => 'required|alpha_dash',
            'product_description' => 'required|alpha_dash',
            'p_image' => 'required|image',
          ];

          foreach($this->request->get('product_name') as $key => $val)
          {
            if($val != ''){
                $rules['product_name.'.$key] = 'required|alpha_dash';
            }
          }

          foreach($this->request->get('parent_category') as $key => $val)
          {
            if($val != ''){
                $rules['parent_category.'.$key] = 'required|alpha_dash';
            }
          }
          foreach($this->request->get('sub_category') as $key => $val)
          {
            if($val != ''){
                $rules['sub_category.'.$key] = 'required|alpha_dash';
            }
          }
          foreach($this->request->get('product_meta_keywords') as $key => $val)
          {
            if($val != ''){
                $rules['product_meta_keywords.'.$key] = 'required|alpha_dash';
            }
          }
          foreach($this->request->get('product_model') as $key => $val)
          {
            if($val != ''){
                $rules['product_model.'.$key] = 'required|alpha_dash';
            }
          }
          foreach($this->request->get('brand_name') as $key => $val)
          {
            if($val != ''){
                $rules['brand_name.'.$key] = 'required|alpha_dash';
            }
          }
          foreach($this->request->get('product_att_name') as $key => $val)
          {
            if($val != ''){
                $rules['product_att_name.'.$key] = 'required|alpha_dash';
            }
          }
          foreach($this->request->get('product_att_value') as $key => $val)
          {
            if($val != ''){
                $rules['product_att_value.'.$key] = 'required|alpha_dash';
            }
          }
          foreach($this->request->get('unit_type') as $key => $val)
          {
            if($val != ''){
                $rules['unit_type.'.$key] = 'required|alpha_dash';
            }
          }
          foreach($this->request->get('product_MOQ') as $key => $val)
          {
            if($val != ''){
                $rules['product_MOQ.'.$key] = 'required|alpha_dash';
            }
          }
          foreach($this->request->get('product_FOB') as $key => $val)
          {
            if($val != ''){
                $rules['product_FOB.'.$key] = 'required|alpha_dash';
            }
          }
          foreach($this->request->get('product_groups') as $key => $val)
          {
            if($val != ''){
                $rules['product_groups.'.$key] = 'required|alpha_dash';
            }
          }
          foreach($this->request->get('add_group_name') as $key => $val)
          {
            if($val != ''){
                $rules['add_group_name.'.$key] = 'required|alpha_dash';
            }
          }
          foreach($this->request->get('payment') as $key => $val)
          {
            if($val != ''){
                $rules['payment.'.$key] = 'required|alpha_dash';
            }
          }
          foreach($this->request->get('product_description') as $key => $val)
          {
            if($val != ''){
                $rules['product_description.'.$key] = 'required|alpha_dash';
            }
          }
          foreach($this->request->get('p_image') as $key => $val)
          {
            if($val != ''){
                $rules['p_image.'.$key] = 'required|image';
            }
          }

          return $rules;*/
    }
}
