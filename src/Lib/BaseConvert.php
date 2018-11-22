<?php

namespace Emoji\Lib ;

abstract class BaseConvert{

    public $prefix = 'Em-' ;

    protected $tagTemplate = "[emoji]{{}}[/emoji]" ;

    abstract function encode($text) ;

    abstract function decode($text) ;

}