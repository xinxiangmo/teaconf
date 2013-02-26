<?php
/**
 * Response class file
 *
 * @author likai<youyuge@gmail.com>
 * @link http://www.youyuge.com/
 */

/**
 * Response class
 */
class Response extends CComponent
{
    const OK = 200;
    const CREATED = 201;
    const BAD_REQUEST = 400;
    const NOT_FOUND = 404;
    const SERVER_ERROR = 500;
    const UPDATED = 200;
    const DELETED = 204;

    public function __construct($status, $body, $format = null)
    {
        $label = self::$statusLabels[$status];
        
        $formatter = Formatter::factory($format);
        header("HTTP/1.1 {$status} {$label}");
        header("Content-Type: {$formatter::$mimeType}");

        $body = empty($body) ? null : $formatter->encode($body);
        Yii::app()->end($body);
    }

    public static $statusLabels = array(
        100 => 'Continue',
        101 => 'Switching Protocols',
        200 => 'OK',
        201 => 'Created',
        202 => 'Accepted',
        203 => 'Non-Authoritative Information',
        204 => 'No Content',
        205 => 'Reset Content',
        206 => 'Partial Content',
        300 => 'Multiple Choices',
        301 => 'Moved Permanently',
        302 => 'Found',
        303 => 'See Other',
        304 => 'Not Modified',
        305 => 'Use Proxy',
        306 => '(Unused)',
        307 => 'Temporary Redirect',
        400 => 'Bad Request',
        401 => 'Unauthorized',
        402 => 'Payment Required',
        403 => 'Forbidden',
        404 => 'Not Found',
        405 => 'Method Not Allowed',
        406 => 'Not Acceptable',
        407 => 'Proxy Authentication Required',
        408 => 'Request Timeout',
        409 => 'Conflict',
        410 => 'Gone',
        411 => 'Length Required',
        412 => 'Precondition Failed',
        413 => 'Request Entity Too Large',
        414 => 'Request-URI Too Long',
        415 => 'Unsupported Media Type',
        416 => 'Requested Range Not Satisfiable',
        417 => 'Expectation Failed',
        500 => 'Internal Server Error',
        501 => 'Not Implemented',
        502 => 'Bad Gateway',
        503 => 'Service Unavailable',
        504 => 'Gateway Timeout',
        505 => 'HTTP Version Not Supported',
    );
}
