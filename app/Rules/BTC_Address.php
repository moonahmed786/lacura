<?php

namespace App\Rules;
//use app\lib\LinusU\Bitcoin\AddressValidator;
//require 'AddressValidator.php';
//use Cassandra\Exception;
use App\Lib\AddressValidator;
use Illuminate\Contracts\Validation\Rule;


class BTC_Address implements Rule
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
//$is_valid = true;
//        try {
//            $btc = file_get_contents("https://api.smartbit.com.au/v1/blockchain/address/".$value);
//        }catch(Exception $e) {
////            $error_message = $e->getMessage();
//            return false ;
//        }
//
////        $convert_amount= json_decode($btc)->;
//       return json_decode($btc)->success;;



// This will return false, indicating invalid address.
        return AddressValidator::isValid($value);

    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message()
    {
        return __('cps_dashboard.Your BTC Address is invalid');
    }
}
