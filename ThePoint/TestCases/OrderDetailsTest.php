<?php
/**
 * Created by PhpStorm.
 * User: chamal kuruppu
 * Date: 6/15/2016
 * Time: 9:30 AM
 */

namespace TSK\Test;


class OrderDetailsTest extends \PHPUnit_Framework_TestCase
{
    public function setUp()
    {
        require_once '../../application/system/model/dataAccess/orderModel.php';
    }

    public function testOrderDetails()
    {
        $userID = 1;
        $result = get_order_details($userID);
        $this->assertEquals(sizeof($result), 5);
        $this->assertEquals($result[3], 'gedara');
        $this->assertEquals($result[1], '2016-05-24');
    }

    public function testSalesmanDetails()
    {
        $userID = 1;
        $result = get_salesman_details($userID);
        $this->assertEquals(sizeof($result), 3);
        $this->assertEquals($result[0], 'S001');
        $this->assertEquals($result[1], 'Vindula');
    }

    public function testForwardDetails()
    {
        $userID = 1;
        $result = get_forward_details($userID);
        $this->assertEquals(sizeof($result), 3);
        $this->assertEquals($result[0], 'C001');
        $this->assertEquals($result[1], 'Malsha Ranawaka');
    }

    public function testMeasurementsDetails()
    {
        $userID = 1;
        $result = get_measurements_details($userID);
        $this->assertEquals(sizeof($result), 6);
        $this->assertEquals($result[0], 145);
        $this->assertEquals($result[1], 54);
        $this->assertEquals($result[2], 'Yes');
        $this->assertEquals($result[3], 'Flower');
        $this->assertEquals($result[4], 'ZSD');
        $this->assertEquals($result[5], '@ colomns');
    }


}