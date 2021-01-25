<?php


class Form
{
    private static function array_to_string($args){
        $out = "";
        foreach (array_keys($args) as $key){
            if ($args[$key] == null){
                $out = "{$out} {$key}";
            } else {
                $out = "{$out} {$key}='{$args[$key]}'";
            }
        }
        return $out;
    }
    public static function open($args){
        return "<form ".self::array_to_string($args).">";
    }
    public static function close($args){
        return "</form>";
    }
    public static function input($args){
        return "<input ".self::array_to_string($args).">";
    }
    public static function password($args){
        return "<input type='password' ".self::array_to_string($args).">";
    }
    public static function submit($args){
        return "<input type='submit' ".self::array_to_string($args).">";
    }

}