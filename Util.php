<?php

namespace abbas_adv\util;

/*
 * ini contoh penggunaan fungsi menggunakan namespace
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Util {

    public static function belanja($number) {
        return 'Rp ' . number_format($number);
    }

}
