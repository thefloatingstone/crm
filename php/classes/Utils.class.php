<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Utils
 *
 * @author macbookpro
 */
class Utils {
    //put your code here
    
  public static function encode($secretKey, $str) {
        return base64_encode(mcrypt_encrypt(
                MCRYPT_BLOWFISH,
                md5($secretKey),
                $str,
                MCRYPT_MODE_CBC,
                '12345678'
        ));
    }

    public static function decode($secretKey, $str) {
      
        return mcrypt_decrypt(
                MCRYPT_BLOWFISH,
                md5($secretKey),
                base64_decode($str),
                MCRYPT_MODE_CBC,
                '12345678'
        );
    }
    
}
