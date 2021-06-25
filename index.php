<?php

// TUGAS NO 1
function tugas_subtracted($array) {

    $res = $array[0];
    for ($i = 1; $i < count($array); $i++)

        // Bitwise XOR (1 jika salah satu bit bernilai 1, tapi bukan keduanya)
        $res = $res ^ $array[$i];

    return $res;
}
 
$nums_1 = array(3,1,2,4);
echo "Hasil Tugas 1 = ".tugas_subtracted($nums_1);
echo "<br><br><br>";


// TUGAS NO 2
function tugas_divided($array, $x_2) {

    for ($i = 0; $i < count($array); $i++) {

        for ($j = 0; $j < count($array); $j++) {

            if(isset($array[$x_2-1])) {

                $dev = $array[$i] / $array[$j];

                if($dev == $x_2) {
                    unset($array[$i]);
                }
            }
        }
    }

    return $array;
}

$nums_2 = array (1,2,3,4);
$x_2 = 4;
echo "Hasil Tugas 2 = ".join(tugas_divided($nums_2, $x_2), ',');
echo "<br><br><br>";


// TUGAS NO 2
function containing($string, $x_3) {

    $expl = explode(' ', $string);

    $arr = array();

    foreach ($expl as $key => $val) {
        if(strlen($val) == $x_3) {
            $arr[$key] = $expl[$key];
        }
    }

    return $arr;
}

$word = "souvenir loud four lost";
$x_3 = 4;
containing($word, $x_3);
echo "Hasil Tugas 3 = "; print_r(containing($word, $x_3));
?>