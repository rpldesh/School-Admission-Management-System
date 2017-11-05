<?php

/**
 * Created by PhpStorm.
 * User: sudu
 * Date: 11/5/2017
 * Time: 11:42 AM
 */
class Hash
{
    public static function create($algo,$data,$salt)
    {
        $context=hash_init($algo,HASH_HMAC,$salt);
        hash_update($context,$data);
        return hash_final($context);
    }
}
?>

