<?php namespace Chiabit\FeedReader\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Illuminate\View\Environment
 */
class Permutater extends Facade {

    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor() { return 'permutater'; }

}