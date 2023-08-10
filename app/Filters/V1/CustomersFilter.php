<?php

namespace App\Filters\V1;

use App\Filters\ApiFilter;

class CustomersFilter extends ApiFilter
{
  function __construct()
  {
    $safeParams = [
      'name' => ['eq'],
      'type' => ['eq'],
      'email' => ['eq'],
      'address' => ['eq'],
      'city' => ['eq'],
      'state' => ['eq'],
      'postalCode' => ['eq', 'gt', 'lt'],
    ];

    $columnMap = [
      'postalCode' => 'postal_code'
    ];

    $operatorMap = [
      'eq' => '=',
      'lt' => '<',
      'lte' => '<=',
      'gt' => '>',
      'gte' => '>='
    ];
    parent::__construct($safeParams, $columnMap, $operatorMap);
  }
}
