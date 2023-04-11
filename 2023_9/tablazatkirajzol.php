<?php
if(!function_exists('array2table')){

    function array2table(array $details, bool $header = false): string  {
        $returnString = '<table border="1">';
        $lineCount = count($details);
        for($line = 0; $line < $lineCount; $line++){
            
            $returnString .= '<tr>';
            for($column = 0; $column < count($details[$line]); $column++) {
                if($header && $line === 0) {
                    $returnString .= '<th>'.$details[$line][$column].'</th>';
                } else {
                    $returnString .= '<td>'.$details[$line][$column].'</td>';
                }
            }
            $returnString .= '</tr>';
        }

        $returnString .= '</table>';
        return $returnString;
    }
}