<?php

namespace App\Filters\V1;

use App\Filters\ApiFilter;

class InvoicesFilter extends ApiFilter
{
  function __construct()
  {
    $safeParams = [
      'customerId' => ['eq'],
      'amount' => ['eq', 'lt', 'lte', 'gt', 'gte'],
      'status' => ['eq', 'ne'],
      'billedDate' => ['eq', 'lt', 'lte', 'gt', 'gte'],
      'paidDate' => ['eq', 'lt', 'lte', 'gt', 'gte'],
    ];

    $columnMap = [
      'customerId' => 'customer_id',
      'billedDate' => 'billed_date',
      'paidDate' => 'paidDate',
    ];

    $operatorMap = [
      'eq' => '=',
      'lt' => '<',
      'lte' => '<=',
      'gt' => '>',
      'gte' => '>=',
      'ne' => '!=',
    ];
    parent::__construct($safeParams, $columnMap, $operatorMap);
  }
}
