<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;
use Illuminate\Support\Facades\Input;

class ValidationController extends Request
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
        $input_with_rule = [];

        (isset($_POST['email']))                ? $input_with_rule['email']                 = 'required|email' : "";
        (isset($_POST['password']))             ? $input_with_rule['password']              = 'required' : "";
        (isset($_POST['comfirm_password']))     ? $input_with_rule['comfirm_password']      = 'required|same:password' : "";
        (isset($_POST['first_name']))           ? $input_with_rule['first_name']            = 'required' : "";
        (isset($_POST['last_name']))            ? $input_with_rule['last_name']             = 'required' : "";
        (isset($_POST['fname']))                ? $input_with_rule['fname']                 = 'required' : "";
        (isset($_POST['lname']))                ? $input_with_rule['lname']                 = 'required' : "";
        (isset($_POST['country']))              ? $input_with_rule['country']               = 'required' : "";
        (isset($_POST['customer_type']))        ? $input_with_rule['customer_type']         = 'required' : "";
        (isset($_POST['btype']))                ? $input_with_rule['btype']                 = 'required' : "";
        (isset($_POST['category_id']))          ? $input_with_rule['category_id']           = 'required' : "";
        (isset($_POST['country_id']))           ? $input_with_rule['country_id']            = 'required' : "";
        (isset($_POST['location']))             ? $input_with_rule['location']              = 'required' : "";
        (isset($_POST['duration']))             ? $input_with_rule['duration']              = 'required' : "";
        (isset($_POST['company_name']))         ? $input_with_rule['company_name']          = 'required' : "";




        return $input_with_rule;

    }
}
