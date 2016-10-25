<?php
namespace DTS\eBaySDK\PostOrder\Services;

/**
 * Base class for the PostOrder service.
 */
class PostOrderBaseService extends \DTS\eBaySDK\Services\BaseRestService
{
    /**
     * @property array $endPoints The API endpoints.
     */
    protected static $endPoints = [
        'sandbox'    => 'https://api.sandbox.ebay.com/post-order',
        'production' => 'https://api.ebay.com/post-order'
    ];

    /**
     * @property array $operations Associative array of operations provided by the service.
     */
    protected static $operations = [
        'submitCancellationRequest' => [
            'method' => 'POST',
            'resource' => 'cancellation',
            'responseClass' => '\DTS\eBaySDK\PostOrder\Types\CreateCancelResponse',
            'params' => [
            ]
        ],

        'checkCancellationEligibility' => [
            'method' => 'POST',
            'resource' => 'cancellation/check_eligibility',
            'responseClass' => '\DTS\eBaySDK\PostOrder\Types\OrderEligibilityResult',
            'params' => [
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

        'getCase' => [
            'method' => '',
            'resource' => '',
            'responseClass' => '\DTS\eBaySDK\PostOrder\Types',
            'params' => [
            ]
        ],

        'appealCaseDecision' => [
            'method' => '',
            'resource' => '',
            'responseClass' => '\DTS\eBaySDK\PostOrder\Types',
            'params' => [
            ]
        ],

        'closeCase' => [
            'method' => '',
            'resource' => '',
            'responseClass' => '\DTS\eBaySDK\PostOrder\Types',
            'params' => [
            ]
        ],

        'issueCaseRefund' => [
            'method' => '',
            'resource' => '',
            'responseClass' => '\DTS\eBaySDK\PostOrder\Types',
            'params' => [
            ]
        ],

        'provideCaseReturnAddress' => [
            'method' => '',
            'resource' => '',
            'responseClass' => '\DTS\eBaySDK\PostOrder\Types',
            'params' => [
            ]
        ],

        'provideCaseShipmentInfo' => [
            'method' => '',
            'resource' => '',
            'responseClass' => '\DTS\eBaySDK\PostOrder\Types',
            'params' => [
            ]
        ],

        'createInquiry' => [
            'method' => '',
            'resource' => '',
            'responseClass' => '\DTS\eBaySDK\PostOrder\Types',
            'params' => [
            ]
        ],

        'checkInquiryEligibility' => [
            'method' => '',
            'resource' => '',
            'responseClass' => '\DTS\eBaySDK\PostOrder\Types',
            'params' => [
            ]
        ],

        'getInquiry' => [
            'method' => '',
            'resource' => '',
            'responseClass' => '\DTS\eBaySDK\PostOrder\Types',
            'params' => [
            ]
        ],

        'closeInquiry' => [
            'method' => '',
            'resource' => '',
            'responseClass' => '\DTS\eBaySDK\PostOrder\Types',
            'params' => [
            ]
        ],

        'confirmInquiryRefund' => [
            'method' => '',
            'resource' => '',
            'responseClass' => '\DTS\eBaySDK\PostOrder\Types',
            'params' => [
            ]
        ],

        'escalateInquiry' => [
            'method' => '',
            'resource' => '',
            'responseClass' => '\DTS\eBaySDK\PostOrder\Types',
            'params' => [
            ]
        ],

        'issueInquiryRefund' => [
            'method' => '',
            'resource' => '',
            'responseClass' => '\DTS\eBaySDK\PostOrder\Types',
            'params' => [
            ]
        ],

        'provideInquiryRefundInfo' => [
            'method' => '',
            'resource' => '',
            'responseClass' => '\DTS\eBaySDK\PostOrder\Types',
            'params' => [
            ]
        ],

        'provideInquiryShipmentInfo' => [
            'method' => '',
            'resource' => '',
            'responseClass' => '\DTS\eBaySDK\PostOrder\Types',
            'params' => [
            ]
        ],

        'sendInquiryMessage' => [
            'method' => '',
            'resource' => '',
            'responseClass' => '\DTS\eBaySDK\PostOrder\Types',
            'params' => [
            ]
        ],

        'createReturnRequest' => [
            'method' => '',
            'resource' => '',
            'responseClass' => '\DTS\eBaySDK\PostOrder\Types',
            'params' => [
            ]
        ],

        'checkReturnEligibility' => [
            'method' => '',
            'resource' => '',
            'responseClass' => '\DTS\eBaySDK\PostOrder\Types',
            'params' => [
            ]
        ],

        'createReturnDraft' => [
            'method' => '',
            'resource' => '',
            'responseClass' => '\DTS\eBaySDK\PostOrder\Types',
            'params' => [
            ]
        ],

        'getReturnDraft' => [
            'method' => '',
            'resource' => '',
            'responseClass' => '\DTS\eBaySDK\PostOrder\Types',
            'params' => [
            ]
        ],

        'updateReturnDraft' => [
            'method' => '',
            'resource' => '',
            'responseClass' => '\DTS\eBaySDK\PostOrder\Types',
            'params' => [
            ]
        ],

        'uploadReturnDraftFile' => [
            'method' => '',
            'resource' => '',
            'responseClass' => '\DTS\eBaySDK\PostOrder\Types',
            'params' => [
            ]
        ],

        '' => [
            'method' => '',
            'resource' => '',
            'responseClass' => '\DTS\eBaySDK\PostOrder\Types',
            'params' => [
            ]
        ],

        'removeReturnDraftFile' => [
            'method' => '',
            'resource' => '',
            'responseClass' => '\DTS\eBaySDK\PostOrder\Types',
            'params' => [
            ]
        ],

        'getReturnDraftFiles' => [
            'method' => '',
            'resource' => '',
            'responseClass' => '\DTS\eBaySDK\PostOrder\Types',
            'params' => [
            ]
        ],

        'getReturnEstimate' => [
            'method' => '',
            'resource' => '',
            'responseClass' => '\DTS\eBaySDK\PostOrder\Types',
            'params' => [
            ]
        ],

        'getReturnMetadata' => [
            'method' => '',
            'resource' => '',
            'responseClass' => '\DTS\eBaySDK\PostOrder\Types',
            'params' => [
            ]
        ],

        'searchReturnRequests' => [
            'method' => '',
            'resource' => '',
            'responseClass' => '\DTS\eBaySDK\PostOrder\Types',
            'params' => [
            ]
        ],

        'getReturn' => [
            'method' => '',
            'resource' => '',
            'responseClass' => '\DTS\eBaySDK\PostOrder\Types',
            'params' => [
            ]
        ],

        'addShippingLabelInfo' => [
            'method' => '',
            'resource' => '',
            'responseClass' => '\DTS\eBaySDK\PostOrder\Types',
            'params' => [
            ]
        ],

        'cancelReturnRequest' => [
            'method' => '',
            'resource' => '',
            'responseClass' => '\DTS\eBaySDK\PostOrder\Types',
            'params' => [
            ]
        ],

        'checkReturnLabelPrintEligibility' => [
            'method' => '',
            'resource' => '',
            'responseClass' => '\DTS\eBaySDK\PostOrder\Types',
            'params' => [
            ]
        ],

        'processReturnRequest' => [
            'method' => '',
            'resource' => '',
            'responseClass' => '\DTS\eBaySDK\PostOrder\Types',
            'params' => [
            ]
        ],

        'escalateReturn' => [
            'method' => '',
            'resource' => '',
            'responseClass' => '\DTS\eBaySDK\PostOrder\Types',
            'params' => [
            ]
        ],

        'submitReturnFiles' => [
            'method' => '',
            'resource' => '',
            'responseClass' => '\DTS\eBaySDK\PostOrder\Types',
            'params' => [
            ]
        ],

        'uploadReturnFile' => [
            'method' => '',
            'resource' => '',
            'responseClass' => '\DTS\eBaySDK\PostOrder\Types',
            'params' => [
            ]
        ],

        'removeReturnFile' => [
            'method' => '',
            'resource' => '',
            'responseClass' => '\DTS\eBaySDK\PostOrder\Types',
            'params' => [
            ]
        ],

        'getReturnFiles' => [
            'method' => '',
            'resource' => '',
            'responseClass' => '\DTS\eBaySDK\PostOrder\Types',
            'params' => [
            ]
        ],

        'getReturnShippingLabel' => [
            'method' => '',
            'resource' => '',
            'responseClass' => '\DTS\eBaySDK\PostOrder\Types',
            'params' => [
            ]
        ],

        'createBuyerShippingLabel' => [
            'method' => '',
            'resource' => '',
            'responseClass' => '\DTS\eBaySDK\PostOrder\Types',
            'params' => [
            ]
        ],

        'issueReturnRefund' => [
            'method' => '',
            'resource' => '',
            'responseClass' => '\DTS\eBaySDK\PostOrder\Types',
            'params' => [
            ]
        ],

        'markItemReceived' => [
            'method' => '',
            'resource' => '',
            'responseClass' => '\DTS\eBaySDK\PostOrder\Types',
            'params' => [
            ]
        ],

        'markItemSent' => [
            'method' => '',
            'resource' => '',
            'responseClass' => '\DTS\eBaySDK\PostOrder\Types',
            'params' => [
            ]
        ],

        'markReturnRefundReceived' => [
            'method' => '',
            'resource' => '',
            'responseClass' => '\DTS\eBaySDK\PostOrder\Types',
            'params' => [
            ]
        ],

        'markReturnRefundSent' => [
            'method' => '',
            'resource' => '',
            'responseClass' => '\DTS\eBaySDK\PostOrder\Types',
            'params' => [
            ]
        ],

        'sendReturnMessage' => [
            'method' => '',
            'resource' => '',
            'responseClass' => '\DTS\eBaySDK\PostOrder\Types',
            'params' => [
            ]
        ],

        'sendShippingLabel' => [
            'method' => '',
            'resource' => '',
            'responseClass' => '\DTS\eBaySDK\PostOrder\Types',
            'params' => [
            ]
        ],

        'getReturnTrackingInfo' => [
            'method' => '',
            'resource' => '',
            'responseClass' => '\DTS\eBaySDK\PostOrder\Types',
            'params' => [
            ]
        ],

        'voidShippingLabel' => [
            'method' => '',
            'resource' => '',
            'responseClass' => '\DTS\eBaySDK\PostOrder\Types',
            'params' => [
            ]
        ]
    ];

    /**
     * Constants for the various HTTP headers required by the API.
     */
    const HDR_AUTHORIZATION = 'Authorization';
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
     * @return array An associative array of eBay http headers.
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
