<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ApiController extends Controller
{
    public function count(){
        $str = date('d.m.Y');
        $arr = str_split($str);
        $arr = array_diff($arr, ["."]);
        $num = 0;
    
        foreach($arr as $el){
            $num +=$el;
        }
        return $num;
    }

    public function email(Request $request){
        $data = $request->all([
            'name' => '',
            'number' => ''
        ]);
        $to = 'axanov.yaroslav@mail.ru, example@mail.ru';
        $subject = 'Письмо о заявке';
        $message = "Новая заявка: ".$data['name'].", номер".$data['number']; 
        mail($to, $subject, $message);
        return $data;
    }
}
