<?php

namespace Mtc\Dhl\Datatype\GB;

use Mtc\Dhl\Datatype\Base;

class weight extends Base
{
    /**
     * Is this object a subobject
     *
     * @var boolean
     */
    protected $_isSubObject = true;
    protected $params = array(
        'Weight' => array(
            'type' => 'float',
            'required' => false,
            'subobject' => false,
            'comment' => ''
        ),
        'WeightUnit' => array(
            'type' => 'string',
            'required' => false,
            'subobject' => false,
            'comment' => ''
        )
    );
} 