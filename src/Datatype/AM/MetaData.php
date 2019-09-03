<?php

namespace Mtc\Dhl\Datatype\AM;

use Mtc\Dhl\Datatype\Base;

/**
 * MetaData Request model for DHL API
 */
class MetaData extends Base
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
        'SoftwareName' => [
            'type' => 'string',
            'required' => false,
            'subobject' => false,
            'comment' => 'Name of software using this package (whatever you want)',
            'minLength' => '1',
            'maxLength' => '32',
        ],
        'SoftwareVersion' => [
            'type' => 'string',
            'required' => false,
            'subobject' => false,
            'comment' => 'Version of software using this package',
            'minLength' => '1',
            'maxLength' => '32',
        ],
    ];
}
