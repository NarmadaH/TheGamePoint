<?php
/**
 * Created by PhpStorm.
 * User: chamal kuruppu
 * Date: 6/15/2016
 * Time: 10:32 AM
 */

namespace TSK\Test;


class AlgoTest extends \PHPUnit_Framework_TestCase
{
    public function setUp()
    {
        require_once '../../application/system/model/dataAccess/orderModel.php';
    }

    public function testSalesmanAllocation()
    {
        $userID = 1;
        $result = get_salesman_allocation($userID);
        $this->assertEquals($result, 1);

        $userID = 2;
        $result = get_salesman_allocation($userID);
        $this->assertEquals($result, 2);
    }

    public function testOrderConfirmation()
    {
        $userID = 1;
        $result = get_order_confirmation($userID);
        $this->assertEquals($result, 1);

        $userID = 2;
        $result = get_order_confirmation($userID);
        $this->assertEquals($result, 0);
    }

}