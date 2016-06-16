<?php
/**
 * Created by PhpStorm.
 * User: chamal kuruppu
 * Date: 6/3/2016
 * Time: 11:41 AM
 */

namespace TSK\Test;

class OrderListTest extends \PHPUnit_Framework_TestCase
{
    public function setUp() {
        require_once '../../application/system/model/dataAccess/orderModel.php';
    }

    public function testOngoingOrderList() {
        $result = get_order_list();
        $this->assertEquals(sizeof($result), 1);
    }

    public function testSalesmanOrderList() {
        $userID = "S001";
        $result = get_order_list_salesman($userID);
        $this->assertEquals(sizeof($result), 1);
    }

    public function testWorkshopOrderList() {
        $result = get_order_list_workshop();
        $this->assertEquals(sizeof($result), 0);
    }

    public function testDeliveryOrderList() {
        $result = get_order_list_delivery();
        $this->assertEquals(sizeof($result), 0);
    }

    public function testAdminCompleteOrderList() {
        $result = get_complete_order_list();
        $this->assertEquals(sizeof($result), 1);
    }

    public function testAdminOnGoingOrderList() {
        $result = get_ongoing_order_list();
        $this->assertEquals(sizeof($result), 1);
    }

}