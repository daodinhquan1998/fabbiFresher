<?php
    public function SortArray($array,$n)
        {
        
            //$array = ["11","2","8","10","5","99","1","18","9","22","12","50"];
                //      0    1   2   3   4    5    6    7   8    9   10   11
            // $n = 4;
            $submit = [];
            $s = count($array);
            $t = $s / $n;
            for($i = 0;$i < $n ; $i++ )
            {  
                array_push($submit, $array[$i]);
                array_push($submit, $array[$i + $n]);
                array_push($submit, $array[$i + $n*2]);
            }
            foreach ($submit as $key => $value) {
                echo $value. " ";
            }

        }
