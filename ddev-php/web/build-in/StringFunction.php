<?php
namespace Web\BuildIn;

class StringFunction
{
    public function __construct()
    {
    }
    public function search_string($haystack, $needle)
    {
        return mb_strpos($haystack, $needle);
    }
    public function search_string_last($haystack, $needle)
    {
        return mb_strrpos($haystack, $needle);
    }
    public function my_mb_substr($str, $start)
    {
        return mb_substr($str, $start);
    }
    public function my_strstr($haystack, $needle)
    {
        return strstr($haystack, $needle);
    }
    public function my_str_replace($search, $replace, $subject)
    {
        return str_replace($search, $replace, $subject);
    }
    public function my_substr_replace($string, $replacement, $start)
    {
        return substr_replace($string, $replacement, $start);

    }
    public function my_explode($delimiter, $string)
    {
        return explode($delimiter, $string);
    }
    public function my_str_pad($input, $pad_length){
        return str_pad($input, $pad_length);
    }
    public function my_mb_convert_case($str, $mode)
    {
        return mb_convert_case($str, $mode);
    }
    public function my_mb_convert_kana($str, $option)
    {
        return mb_convert_kana($str, $option);
    }
    public function my_mb_strimwidth($str, $start, $width)
    {
        return mb_strimwidth($str, $start, $width);
    }
    public function my_trim($str)
    {
        return trim($str);
    }
    public function my_strlen($str)
    {
        return strlen($str);
    }
    public function my_urlencode($str){
        return urlencode($str);
    }
}

