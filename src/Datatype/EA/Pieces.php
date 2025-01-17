<?php

namespace Mtc\Dhl\Datatype\EA;

use Mtc\Dhl\Datatype\Base;

/**
 * Pieces Request model for DHL API
 */
class Pieces extends Base
{
    /**
     * Is this object a subobject
     * @var boolean
     */
    protected $_isSubobject = true;

    /**
     * Parameters of the datatype
     * @var array
     */
    protected $params = [
        'Piece' => [
            'type' => 'Piece',
            'required' => false,
            'subobject' => true,
        ],
    ];
}
