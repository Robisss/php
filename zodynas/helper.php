
 <?php
 function isversk($word, $kryptis) {
         $zodynas = readCsv();
         $newWord = 'Tokio nera';

            switch ($kryptis) {
                case 'LT':
                    foreach ($zodynas as $row) {                        # code...
                    if ($row['LT'] == $word){
                        $newWord = $row['EN'];
                    }
                }
                break;

                case 'EN':
                foreach ($zodynas as $row) {                        # code...
                if ($row['EN'] == $word){
                    $newWord = $row['LT'];
                }
                    }
                    break;

                default:
                    $newWord = 'tokios kalbos neverciame';
            }

            return $newWord;
}

       function readCsv(){
       $read = fopen('translate.csv',r);
       $zodynas = [];
        $i=0;
        while (($a=fgetcsv($read)) !=false){
            $zodynas[]=[
                'LT' => [0],
                'EN' => [1]
            ];

        }
    }


?>
