<?php
if(!function_exists('csv2array')){
    //definiálok egy függvényt, paramétere a filnév, visszatér egy tömbbel
    function csv2array(string $filename): array  {
        //tömb deklarációja és inicializálok egy üres tömböt
        $visszaTomb = [];
        if(file_exists($filename)){
            $handler = fopen($filename, 'r');
            while(($lineWithData = fgetcsv($handler, null, ";")) !== false) {
                $visszaTomb[] = $lineWithData; 
            }
            fclose($handler);
        }
        return $visszaTomb;
    }
}