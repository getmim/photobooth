<?php
/**
 * Photobooth
 * @package photobooth
 * @version 0.0.1
 */

namespace Photobooth\Model;

class Photobooth extends \Mim\Model
{

    protected static $table = 'photobooth';

    protected static $chains = [];

    protected static $q = ['fullname','phone'];
}