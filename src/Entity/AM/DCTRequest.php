<?php

namespace Mtc\Dhl\Entity\AM;

use Mtc\Dhl\Entity\Base;

/**
 * Class DCTRequest
 *
 * @package Mtc\Dhl
 */
class DCTRequest extends Base
{
    /**
     * Is this object a subobject
     * @var boolean
     */
    protected $is_sub_object = false;

    /**
     * Name of the service
     * @var string
     */
    protected $service_name = 'DCTRequest';

    /**
     * @var string
     * Service XSD
     */
    protected $service_xsd = 'DCT-req.xsd';

        /**
     * @var string
     * The schema version
     */
    protected $schema_version = '2.0';

        /**
     * Display the schema version
     * @var boolean
     */
    protected $display_schema_version = true;

    /**
     * Parameters to be send in the body
     * @var array
     */
    protected $body_params = [
        'GetCapability' => [
            'type' => 'GetCapability',
            'required' => false,
            'subobject' => true,
            'multivalues' => false,
            'minOccurs' => 0,
        ],
    ];
}
