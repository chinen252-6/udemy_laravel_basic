<?php 

namespace App\Services;

class CheckFormService
{
    public static function checkGender($data){
        
        
        if($data->gender === 0){
            $gender = '男性';
        } else {
            $gender = '女性';
        }
        return $gender;
    }

    public static function checkAge($data){
        if($data->age === 1 ){ $age = '～１９歳';}
        if($data->age === 2 ){ $age = '２０歳～２９歳';}
        if($data->age === 3 ){ $age = '３０歳～３９歳';}
        if($data->age === 4 ){ $age = '４０歳～４９歳';}
        if($data->age === 5 ){ $age = '５０歳～５９歳';}
        if($data->age === 6 ){ $age = '６０歳～';}

        return $age;
    }
}