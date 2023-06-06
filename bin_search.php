<?php

function binSearch( $list, $val )
{
    $lowIndex = 0;
    $hightIndex = sizeof( $list ) - 1;  
    while( $lowIndex <= $hightIndex )
    {
        $middleIndex = round( ( $lowIndex + $hightIndex ) / 2 );            
        $test = $list[ $middleIndex ];              
        if( $test == $val )
        {           
            return $middleIndex;
        }
        else if( $test > $val ) 
        {
            $hightIndex = $middleIndex  - 1;
        }
        else 
        {
            $lowIndex = $middleIndex  + 1;
        }       
    }
    return 'не найдено';
}
