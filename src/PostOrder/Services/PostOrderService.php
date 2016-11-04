<?php
namespace DTS\eBaySDK\PostOrder\Services;

class PostOrderService extends \DTS\eBaySDK\PostOrder\Services\PostOrderBaseService
{
    const API_VERSION = 'v2';

    /**
     * @param array $config Configuration option values.
     */
    public function __construct(array $config = [])
    {
        parent::__construct($config);
    }

    /**
     * Calls the approveCancellationRequest operation.
     *
     * @see approveCancellationRequestAsync() For method parameters.
     *
     * @param array $request Associative array of the request parameters.
     */
    public function approveCancellationRequest(array $request = [])
    {
        $this->approveCancellationRequestAsync($request)->wait();
    }

    /**
     * Calls the approveCancellationRequest operation.
     *
     * The request array structure is:
     *
     * <code>
     * [
     *     'params' => [
     *         'cancelId' => string
     *     ]
     * ]
     * </code>
     *
     * @param array $request Associative array of the request parameters.
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function approveCancellationRequestAsync(array $request = [])
    {
        return $this->callOperationAsync('approveCancellationRequest', $request);
    }

    /**
     * Calls the checkCancellationEligibility operation.
     *
     * @see checkCancellationEligibilityAsync() For method parameters.
     *
     * @param array $request Associative array of the request parameters.
     * @return \DTS\eBaySDK\PostOrder\Types\OrderEligibilityResult
     */
    public function checkCancellationEligibility(array $request = [])
    {
        return $this->checkCancellationEligibilityAsync($request)->wait();
    }

    /**
     * Calls the checkCancellationEligibility operation.
     *
     * The request array structure is:
     *
     * <code>
     * [
     *     'body' => \DTS\eBaySDK\PostOrder\Types\OrderEligibilityCheckInfo The request body.
     * ]
     * </code>
     *
     * @param array $request Associative array of the request parameters.
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function checkCancellationEligibilityAsync(array $request = [])
    {
        return $this->callOperationAsync('checkCancellationEligibility', $request);
    }

    /**
     * Calls the confirmCancellationRefund operation.
     *
     * @see confirmCancellationRefundAsync() For method parameters.
     *
     * @param array $request Associative array of the request parameters.
     */
    public function confirmCancellationRefund(array $request = [])
    {
        $this->confirmCancellationRefundAsync($request)->wait();
    }

    /**
     * Calls the confirmCancellationRefund operation.
     *
     * The request array structure is:
     *
     * <code>
     * [
     *     'params' => [
     *         'cancelId' => string
     *     ],
     *     'body'   => \DTS\eBaySDK\PostOrder\Types\ConfirmRefundRequest The request body.
     * ]
     * </code>
     *
     * @param array $request Associative array of the request parameters.
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function confirmCancellationRefundAsync(array $request = [])
    {
        return $this->callOperationAsync('confirmCancellationRefund', $request);
    }

    /**
     * Calls the getCancellation operation.
     *
     * @see getCancellationAsync() For method parameters.
     *
     * @param array $request Associative array of the request parameters.
     * @return \DTS\eBaySDK\PostOrder\Types\GetCancelDetailResponse
     */
    public function getCancellation(array $request = [])
    {
        return $this->getCancellationAsync($request)->wait();
    }

    /**
     * Calls the getCancellation operation.
     *
     * The request array structure is:
     *
     * <code>
     * [
     *     'params' => [
     *         'cancelId'   => string,
     *         'fieldgroups' => string
     *     ]
     * ]
     * </code>
     *
     * @param array $request Associative array of the request parameters.
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getCancellationAsync(array $request = [])
    {
        return $this->callOperationAsync('getCancellation', $request);
    }


    /**
     * Calls the rejectCancellationRequest operation.
     *
     * @see rejectCancellationRequestAsync() For method parameters.
     *
     * @param array $request Associative array of the request parameters.
     */
    public function rejectCancellationRequest(array $request = [])
    {
        $this->rejectCancellationRequestAsync($request)->wait();
    }

    /**
     * Calls the rejectCancellationRequest operation.
     *
     * The request array structure is:
     *
     * <code>
     * [
     *     'params' => [
     *         'cancelId' => string
     *     ],
     *     'body'   => \DTS\eBaySDK\PostOrder\Types\RejectCancelRequest The request body.
     * ]
     * </code>
     *
     * @param array $request Associative array of the request parameters.
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function rejectCancellationRequestAsync(array $request = [])
    {
        return $this->callOperationAsync('rejectCancellationRequest', $request);
    }

    /**
     * Calls the searchCancellations operation.
     *
     * @see searchCancellationsAsync() For method parameters.
     *
     * @param array $request Associative array of the request parameters.
     * @return \DTS\eBaySDK\PostOrder\Types\FindCancelResponse
     */
    public function searchCancellations(array $request = [])
    {
        return $this->searchCancellationsAsync($request)->wait();
    }

    /**
     * Calls the searchCancellations operation.
     *
     * The request array structure is:
     *
     * <code>
     * [
     *     'params' => [
     *         'buyer_login_name'         => string,
     *         'cancel_id'                => string,
     *         'creation_date_range_from' => string,
     *         'creation_date_range_to'   => string,
     *         'item_id'                  => string,
     *         'legacy_order_id'          => string,
     *         'limit'                    => string,
     *         'offset'                   => string,
     *         'seller_login_name'        => string,
     *         'sort'                     => string,
     *         'transaction_id'           => string
     *     ]
     * ]
     *</code>
     *
     * @param array $request Associative array of the request parameters.
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function searchCancellationsAsync(array $request = [])
    {
        return $this->callOperationAsync('searchCancellations', $request);
    }

    /**
     * Calls the submitCancellationRequest operation.
     *
     * @see submitCancellationRequestAsync() For method parameters.
     *
     * @param array $request Associative array of the request parameters.
     * @return \DTS\eBaySDK\PostOrder\Types\CreateCancelResponse
     */
    public function submitCancellationRequest(array $request = [])
    {
        return $this->submitCancellationRequestAsync($request)->wait();
    }

    /**
     * Calls the submitCancellationRequest operation.
     *
     * The request array structure is:
     *
     * <code>
     * [
     *     'body' => \DTS\eBaySDK\PostOrder\Types\CreateCancelRequest The request body.
     * ]
     * </code>
     *
     * @param array $request Associative array of the request parameters.
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function submitCancellationRequestAsync(array $request = [])
    {
        return $this->callOperationAsync('submitCancellationRequest', $request);
    }

    /**
     * Calls the appealCaseDecision operation.
     *
     * @see appealCaseDecisionAsync() For method parameters.
     *
     * @param array $request Associative array of the request parameters.
     */
    public function appealCaseDecision(array $request = [])
    {
        $this->appealCaseDecisionAsync($request)->wait();
    }

    /**
     * Calls the appealCaseDecision operation.
     *
     * The request array structure is:
     *
     * <code>
     * [
     *     'params' => [
     *         'caseId' => string
     *     ],
     *     'body' => \DTS\eBaySDK\PostOrder\Types\AppealRequest The request body.
     * ]
     * </code>
     *
     * @param array $request Associative array of the request parameters.
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function appealCaseDecisionAsync(array $request = [])
    {
        return $this->callOperationAsync('appealCaseDecision', $request);
    }

    /**
     * Calls the closeCase operation.
     *
     * @see closeCaseAsync() For method parameters.
     *
     * @param array $request Associative array of the request parameters.
     */
    public function closeCase(array $request = [])
    {
        $this->closeCaseAsync($request)->wait();
    }

    /**
     * Calls the closeCase operation.
     *
     * The request array structure is:
     *
     * <code>
     * [
     *     'params' => [
     *         'caseId' => string
     *     ],
     *     'body' => \DTS\eBaySDK\PostOrder\Types\BuyerCloseCaseRequest The request body.
     * ]
     * </code>
     *
     * @param array $request Associative array of the request parameters.
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function closeCaseAsync(array $request = [])
    {
        return $this->callOperationAsync('closeCase', $request);
    }

    /**
     * Calls the getCase operation.
     *
     * @see getCaseAsync() For method parameters.
     *
     * @param array $request Associative array of the request parameters.
     * @return \DTS\eBaySDK\PostOrder\Types\CaseDetailsResponse
     */
    public function getCase(array $request = [])
    {
        return $this->getCaseAsync($request)->wait();
    }

    /**
     * Calls the getCase operation.
     *
     * The request array structure is:
     *
     * <code>
     * [
     *     'params' => [
     *         'caseId' => string
     *     ]
     * ]
     * </code>
     *
     * @param array $request Associative array of the request parameters.
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getCaseAsync(array $request = [])
    {
        return $this->callOperationAsync('getCase', $request);
    }

    /**
     * Calls the issueCaseRefund operation.
     *
     * @see issueCaseRefundAsync() For method parameters.
     *
     * @param array $request Associative array of the request parameters.
     * @return \DTS\eBaySDK\PostOrder\Types\VoluntaryRefundResponse
     */
    public function issueCaseRefund(array $request = [])
    {
        return $this->issueCaseRefundAsync($request)->wait();
    }

    /**
     * Calls the issueCaseRefund operation.
     *
     * The request array structure is:
     *
     * <code>
     * [
     *     'params' => [
     *         'caseId' => string
     *     ],
     *     'body' => \DTS\eBaySDK\PostOrder\Types\CaseVoluntaryRefundRequest The request body.
     * ]
     * </code>
     *
     * @param array $request Associative array of the request parameters.
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function issueCaseRefundAsync(array $request = [])
    {
        return $this->callOperationAsync('issueCaseRefund', $request);
    }

    /**
     * Calls the provideReturnShipmentInfo operation.
     *
     * @see provideReturnShipmentInfoAsync() For method parameters.
     *
     * @param array $request Associative array of the request parameters.
     */
    public function provideReturnShipmentInfo(array $request = [])
    {
        $this->provideReturnShipmentInfoAsync($request)->wait();
    }

    /**
     * Calls the provideReturnShipmentInfo operation.
     *
     * The request array structure is:
     *
     * <code>
     * [
     *     'params' => [
     *         'caseId' => string
     *     ],
     *     'body' => \DTS\eBaySDK\PostOrder\Types\ProvideShipmentInfoRequest The request body.
     * ]
     * </code>
     *
     * @param array $request Associative array of the request parameters.
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function provideReturnShipmentInfoAsync(array $request = [])
    {
        return $this->callOperationAsync('provideReturnShipmentInfo', $request);
    }

    /**
     * Calls the provideReturnAddress operation.
     *
     * @see provideReturnAddressAsync() For method parameters.
     *
     * @param array $request Associative array of the request parameters.
     */
    public function provideReturnAddress(array $request = [])
    {
        $this->provideReturnAddressAsync($request)->wait();
    }

    /**
     * Calls the provideReturnAddress operation.
     *
     * The request array structure is:
     *
     * <code>
     * [
     *     'params' => [
     *         'caseId' => string
     *     ],
     *     'body' => \DTS\eBaySDK\PostOrder\Types\ReturnAddressRequest The request body.
     * ]
     * </code>
     *
     * @param array $request Associative array of the request parameters.
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function provideReturnAddressAsync(array $request = [])
    {
        return $this->callOperationAsync('provideReturnAddress', $request);
    }

    /**
     * Calls the searchCases operation.
     *
     * @see searchCasesAsync() For method parameters.
     *
     * @param array $request Associative array of the request parameters.
     * @return \DTS\eBaySDK\PostOrder\Types\CaseSearchResponse
     */
    public function searchCases(array $request = [])
    {
        return $this->searchCasesAsync($request)->wait();
    }

    /**
     * Calls the searchCases operation.
     *
     * The request array structure is:
     *
     * <code>
     * [
     *     'params' => [
     *         'case_creation_date_range_from' => string,
     *         'case_creation_date_range_to'   => string,
     *         'case_status_filter'            => string,
     *         'fieldgroups'                   => string,
     *         'item_id'                       => string,
     *         'limit'                         => string,
     *         'offset'                        => string,
     *         'order_id'                      => string,
     *         'return_id'                     => string,
     *         'sort'                          => string,
     *         'transaction_id'                => string
     *     ]
     * ]
     * </code>
     *
     * @param array $request Associative array of the request parameters.
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function searchCasesAsync(array $request = [])
    {
        return $this->callOperationAsync('searchCases', $request);
    }
}
