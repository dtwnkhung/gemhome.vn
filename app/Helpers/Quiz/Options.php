<?php
namespace App\Helpers\Quiz;


use Illuminate\Support\Arr;
 
class Options {

    /**
     * @param array array_in
     * @param object right_choice
     * @return array
     */
    public static function create($array_in, $right_choices)
    {
        $options = [];
        $blackList = []; 
        array_push($blackList, $right_choices);
        $counter = 1;
        for($i = 1; $i < count($array_in); $i++) {
            if ($blackList[0]['name'] != $array_in[$i]['name'] && $counter <= 3) { 
                $nextOptionFalse = $array_in[$i];
                $nextOptionFalse['is_right'] = False;
                array_push($options, $nextOptionFalse);
                $counter += 1;
            }
        } 
        $right_choices['is_right'] = True;
        array_push($options, $right_choices);
        $options = Arr::shuffle($options);
        return $options;
    }
}