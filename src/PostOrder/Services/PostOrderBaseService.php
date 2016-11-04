<?php
namespace DTS\eBaySDK\PostOrder\Services;

/**
 * Base class for the PostOrder service.
 */
class PostOrderBaseService extends \DTS\eBaySDK\Services\BaseRestService
{
    /**
     * @var array $endPoints The API endpoints.
     */
    protected static $endPoints = [
        'sandbox'    => 'https://api.sandbox.ebay.com/post-order',
        'production' => 'https://api.ebay.com/post-order'
    ];

    /**
     * @var array $operations Associative array of operations provided by the service.
     */
    protected static $operations = [
        'approveCancellationRequest' => [
            'method' => 'POST',
            'resource' => 'cancellation/{cancelId}/approve',
            'responseClass' => '',
            'params' => [
                'cancelId' => [
                    'valid' => ['string'],
                    'required' => true
                ]
            ]
        ],

        'checkCancellationEligibility' => [
            'method' => 'POST',
            'resource' => 'cancellation/check_eligibility',
            'responseClass' => '\DTS\eBaySDK\PostOrder\Types\OrderEligibilityResult',
            'params' => [
            ]
        ],

        'confirmCancellationRefund' => [
            'method' => 'POST',
            'resource' => 'cancellation/{cancelId}/confirm',
            'responseClass' => '',
            'params' => [
                'cancelId' => [
                    'valid' => ['string'],
                    'required' => true
                ]
            ]
        ],

        'getCancellation' => [
            'method' => 'GET',
            'resource' => 'cancellation/{cancelId}',
            'responseClass' => '\DTS\eBaySDK\PostOrder\Types\GetCancelDetailResponse',
            'params' => [
                'cancelId' => [
                    'valid' => ['string'],
                    'required' => true
                ],
                'fieldgroups' => [
                    'valid' => ['string']
                ]
            ]
        ],

        'rejectCancellationRequest' => [
            'method' => 'POST',
            'resource' => 'cancellation/{cancelId}/reject',
            'responseClass' => '',
            'params' => [
                'cancelId' => [
                    'valid' => ['string'],
                    'required' => true
                ]
            ]
        ],

        'searchCancellations' => [
            'method' => 'GET',
            'resource' => 'cancellation/search',
            'responseClass' => '\DTS\eBaySDK\PostOrder\Types\FindCancelResponse',
            'params' => [
                'buyer_login_name' => [
                    'valid' => ['string']
                ],
                'cancel_id' => [
                    'valid' => ['string']
                ],
                'creation_date_range_from' => [
                    'valid' => ['string']
                ],
                'creation_date_range_to' => [
                    'valid' => ['string']
                ],
                'item_id' => [
                    'valid' => ['string']
                ],
                'legacy_order_id' => [
                    'valid' => ['string']
                ],
                'limit' => [
                    'valid' => ['string']
                ],
                'offset' => [
                    'valid' => ['string']
                ],
                'seller_login_name' => [
                    'valid' => ['string']
                ],
                'sort' => [
                    'valid' => ['string']
                ],
                'transaction_id' => [
                    'valid' => ['string']
                ]
            ]
        ],

        'submitCancellationRequest' => [
            'method' => 'POST',
            'resource' => 'cancellation',
            'responseClass' => '\DTS\eBaySDK\PostOrder\Types\CreateCancelResponse',
            'params' => [
            ]
        ],

        'appealCaseDecision' => [
            'method' => 'POST',
            'resource' => 'casemanagement/{caseId}/appeal',
            'responseClass' => '',
            'params' => [
                'caseId' => [
                    'valid' => ['string'],
                    'required' => true
                ]
            ]
        ],

        'closeCase' => [
            'method' => 'POST',
            'resource' => 'casemanagement/{caseId}/close',
            'responseClass' => '',
            'params' => [
                'caseId' => [
                    'valid' => ['string'],
                    'required' => true
                ]
            ]
        ],

        'getCase' => [
            'method' => 'GET',
            'resource' => 'casemanagement/{caseId}',
            'responseClass' => '\DTS\eBaySDK\PostOrder\Types\CaseDetailsResponse',
            'params' => [
                'caseId' => [
                    'valid' => ['string'],
                    'required' => true
                ]
            ]
        ],

        'issueCaseRefund' => [
            'method' => 'POST',
            'resource' => 'casemanagement/{caseId}/issue_refund',
            'responseClass' => '\DTS\eBaySDK\PostOrder\Types\VoluntaryRefundResponse',
            'params' => [
                'caseId' => [
                    'valid' => ['string'],
                    'required' => true
                ]
            ]
        ],

        'provideReturnShipmentInfo' => [
            'method' => 'POST',
            'resource' => 'casemanagement/{caseId}/provide_shipment_info',
            'responseClass' => '',
            'params' => [
                'caseId' => [
                    'valid' => ['string'],
                    'required' => true
                ]
            ]
        ],

        'provideReturnAddress' => [
            'method' => 'POST',
            'resource' => 'casemanagement/{caseId}/provide_return_address',
            'responseClass' => '',
            'params' => [
                'caseId' => [
                    'valid' => ['string'],
                    'required' => true
                ]
            ]
        ],

        'searchCases' => [
            'method' => 'GET',
            'resource' => 'casemanagement/search',
            'responseClass' => '\DTS\eBaySDK\PostOrder\Types\CaseSearchResponse',
            'params' => [
                'case_creation_date_range_from' => [
                    'valid' => ['string']
                ],
                'case_creation_date_range_to' => [
                    'valid' => ['string']
                ],
                'case_status_filter' => [
                    'valid' => ['string']
                ],
                'fieldgroups' => [
                    'valid' => ['string']
                ],
                'item_id' => [
                    'valid' => ['string']
                ],
                'limit' => [
                    'valid' => ['string']
                ],
                'offset' => [
                    'valid' => ['string']
                ],
                'order_id' => [
                    'valid' => ['string']
                ],
                'return_id' => [
                    'valid' => ['string']
                ],
                'sort' => [
                    'valid' => ['string']
                ],
                'transaction_id' => [
                    'valid' => ['string']
                ]
            ]
        ],
    ];

    /**
     * HTTP header constant. The Authentication Token that is used to validate the caller has permission to access the eBay servers.
     */
    const HDR_AUTHORIZATION = 'Authorization';

    /**
     * HTTP header constant. The global ID of the eBay site on which the transaction took place.
     */
    const HDR_MARKETPLACE_ID = 'X-EBAY-C-MARKETPLACE-ID';

    /**
     * @param array $config Configuration option values.
     */
    public function __construct(array $config)
    {
        parent::__construct($config);
    }

    public static function getConfigDefinitions()
    {
        $definitions = parent::getConfigDefinitions();

        return $definitions + [
            'apiVersion' => [
                'valid' => ['string'],
                'default' => \DTS\eBaySDK\PostOrder\Services\PostOrderService::API_VERSION,
                'required' => true
            ],
            'marketplaceId' => [
                'valid' => ['string']
            ]
        ];
    }

    /**
     * Build the needed eBay HTTP headers.
     *
     * @return array An associative array of eBay HTTP headers.
     */
    protected function getEbayHeaders()
    {
        $headers = [];

        // Add required headers first.
        $headers[self::HDR_AUTHORIZATION] = 'TOKEN '.$this->getConfig('authorization');

        // Add optional headers.
        if ($this->getConfig('marketplaceId')) {
            $headers[self::HDR_MARKETPLACE_ID] = $this->getConfig('marketplaceId');
        }

        return $headers;
    }
}
