<?php

namespace Mtc\Dhl\Datatype\AM;

use Mtc\Dhl\Entity\Base;

/**
 * Class GetCapability
 *
 * @package Mtc\Dhl
 */
class GetCapability extends Base
{
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
     * Parent node name of the object
     * @var string
     */
    protected $xml_model_name = 'GetCapability';

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
        'From' => [
            'type' => 'DCTFrom',
            'required' => false,
            'subobject' => true,
            'multivalues' => false,
            'minOccurs' => 1,
        ],
        'BkgDetails' => [
            'type' => 'BkgDetailsType',
            'required' => false,
            'subobject' => true,
            'multivalues' => false,
            'minOccurs' => 1,
        ],
        'To' => [
            'type' => 'DCTTo',
            'required' => false,
            'subobject' => true,
            'multivalues' => false,
            'minOccurs' => 1,
        ],
        'Dutiable' => [
            'type' => 'DCTDutiable',
            'required' => false,
            'subobject' => true,
            'multivalues' => false,
            'minOccurs' => 0,
        ],
    ];
}
