<?php
/**
 * @package    twitterfeed
 * @date       Thu Dec 10 2015 20:39:34
 * @version    2.1.3
 * @author     Askupa Software <contact@askupasoftware.com>
 * @link       http://products.askupasoftware.com/twitter-feed/
 * @copyright  2015 Askupa Software
 */

namespace TwitterFeed\Parser;

/**
 * Tweet
 * 
 * The Tweet object is used throughout the plugin as a means to store and 
 * retrieve tweet data
 */
class Tweet 
{
    private $params;
    
    public function __construct( array $params ) 
    {
        $this->params = $params;
    }
    
    public function __get($name) 
    {
        return $this->params[$name];
    }
}