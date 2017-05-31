<?php

/*
 * Created by KhanhNQ16@viettel.com.vn
 * Alright reserve by Viettel Group 
 */

namespace common\helpers;

/**
 * Description of MemcacheServer
 *
 * @author khanhnq16
 */
class MemCacheServer extends \yii\base\Object {
    /**
     * @var string memcache server hostname or IP address
     */
    public $host;
    /**
     * @var integer memcache server port
     */
    public $port = 11211;
    /**
     * @var integer probability of using this server among all servers.
     */
    public $weight = 1;
    /**
     * @var boolean whether to use a persistent connection. This is used by memcache only.
     */
    public $persistent = true;
    /**
     * @var integer timeout in milliseconds which will be used for connecting to the server.
     * This is used by memcache only. For old versions of memcache that only support specifying
     * timeout in seconds this will be rounded up to full seconds.
     */
    public $timeout = 1000;
    /**
     * @var integer how often a failed server will be retried (in seconds). This is used by memcache only.
     */
    public $retryInterval = 15;
    /**
     * @var boolean if the server should be flagged as online upon a failure. This is used by memcache only.
     */
    public $status = true;
    /**
     * @var \Closure this callback function will run upon encountering an error.
     * The callback is run before fail over is attempted. The function takes two parameters,
     * the [[host]] and the [[port]] of the failed server.
     * This is used by memcache only.
     */
    public $failureCallback;
}