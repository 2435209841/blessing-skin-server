<?php
/**
 * @Author: printempw
 * @Date:   2016-04-03 14:55:38
 * @Last Modified by:   printempw
 * @Last Modified time: 2016-04-05 14:09:59
 */

namespace Cipher;

class CrazyCrypt1 implements EncryptInterface
{
    /**
     * Fucking CrazyCrypt1
     *
     * https://github.com/ST-DDT/CrazyLogin/blob/master/php/Encryptors/CrazyCrypt1.php
     */
    public static function encrypt($raw_passwd, $salt = "") {
        // salt is username
        $text = "ÜÄaeut//&/=I " . $raw_passwd . "7421€547" . $salt . "__+IÄIH§%NK " . $raw_passwd;
        $t1 = unpack("H*", $text);
        $t2 = substr($t1[1], 0, mb_strlen($text, 'UTF-8')*2);
        $t3 = pack("H*", $t2);
        $encrypt = hash("sha512", $t3);
        return $encrypt;
    }

}
