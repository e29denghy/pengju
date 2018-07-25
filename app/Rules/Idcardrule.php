<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\Rule;
use App\Library\Idcard;

class Idcardrule implements Rule
{
    /**
     * Create a new rule instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Determine if the validation rule passes.
     *
     * @param  string  $attribute
     * @param  mixed  $value
     * @return bool
     */
    public function passes($attribute, $value)
    {
        //
        $idcard = new Idcard;
        return $idcard->isChinaIDCard($value);
    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message()
    {
        return '请输入正确的身份证号码';
    }
}
