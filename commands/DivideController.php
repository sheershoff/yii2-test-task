<?php
/**
 * Created by PhpStorm.
 * User: sheershoff
 * Date: 1/12/18
 * Time: 4:51 PM
 */

namespace app\commands;

use yii\console\Controller;
use app\common\ArrayDivider;

class DivideController extends Controller
{
    public $number, $array;

    public function options($actionID)
    {
        return ['number', 'array'];
    }

    public function optionAliases()
    {
        return [
            'n' => 'number',
            'a' => 'array'
        ];
    }

    public function actionIndex()
    {
        if($this->number == '')
        {
            die("Specify number option - an integer, e.g. --number=1");
        }
        if($this->array == '')
        {
            die("Specify array option - an array of integers of at least two integers, divided by commas, e.g. --array=1,2,3,1,2,3,1");
        }
        $this->array = explode(',', $this->array);
        if(ArrayDivider::validate($this->number,$this->array)){
            $this->number = (int)$this->number;
            echo ArrayDivider::process($this->number, $this->array);
        }else{
            die("Validation failed. Number should be an integer, array should be integers divided by commas, at least two integers.");
        }
    }

}