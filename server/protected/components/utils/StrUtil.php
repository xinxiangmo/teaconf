<?php
/**
 * StrUtil class file.
 *
 * @author likai<youyuge@gmail.com>
 * @link http://www.youyuge.com/
 */

/**
 * StrUtil class
 *
 * @author likai<youyuge@gmail.com>
 * @version $Id$
 */
class StrUtil
{
    /**
     * 中文字符串截取
     *
     * @static
     * @param string $string
     * @param integer $start
     * @param integer $length
     * @return string
     */
    public static function substr($string, $start, $length)
    {
        if(strlen($string) < $length)
            return $string;
        if(function_exists('iconv_substr'))
            return iconv_substr($string, $start, $length, 'utf-8');
        elseif(function_exists('mb_substr'))
            return mb_substr($string, $start, $length, '8bit');
        else
        {
            $i = $j = 0;
            $newString = '';
            while($i <= $length)
            {
                $ord = ord(substr($string, $j, 1));
                if($ord > 224)
                    $n = 3;
                elseif($ord > 192)
                    $n = 2;
                else
                    $n = 1;
                $i > $start && $newString .= substr($string, $j, $n);
                $j += $n;
                $i++;
            }
            return $newString;
        }
    }

    /**
     * 截取引用
     *
     * @static
     * @param string $content
     * @param integer $length 截取长度
     * @return string
     */
    public static function quoteFilter($content, $length)
    {
        $text = trim(strip_tags($content));
        return self::substr($text, 0, $length);
    }
}
