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
     * @see approveCancellationRequestAsync() For method parameters.
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
     * @see checkCancellationEligibilityAsync() For method parameters.
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
     * @see confirmCancellationRefundAsync() For method parameters.
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
     * @see getCancellationAsync() For method parameters.
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
     * @see rejectCancellationRequestAsync() For method parameters.
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
     * @see searchCancellationsAsync() For method parameters.
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
     * @see submitCancellationRequestAsync() For method parameters.
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
     * @see appealCaseDecisionAsync() For method parameters.
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
     * @see closeCaseAsync() For method parameters.
     */
    public function closeCase(array $request = [])
    {
        return $this->closeCaseAsync($request)->wait();
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
     * @see getCaseAsync() For method parameters.
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
}
