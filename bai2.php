<?php
	
	public function SumMax($array)
    {
        sort($array);
        $size = count($array);
        $sum = $array[$size-1] + $array[$size-2];
        echo $sum;
    }