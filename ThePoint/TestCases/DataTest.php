<?php
/**
 * Created by PhpStorm.
 * User: chamal kuruppu
 * Date: 6/15/2016
 * Time: 10:51 AM
 */

namespace TSK\Test;


class DataTest extends \PHPUnit_Framework_TestCase
{
    public function setUp()
    {
        require_once '../../application/system/model/dataAccess/orderModel.php';
        require_once '../../application/system/model/dataAccess/employerProfileModel.php';
    }

    public function testCustomerRegisterDate()
    {
        $userID = 1;
        $result = get_customer_register_date($userID);
        $this->assertEquals($result, '2016-06-15 00:00:00');
    }

    public function testMaterialList()
    {
        $result = get_material_list();
        $this->assertEquals(sizeof($result), 3);
        $this->assertEquals($result[0], "Flower");
        $this->assertEquals($result[1], 'Aluminium');
    }

    public function testDesignlList()
    {
        $result = get_design_list();
        $this->assertEquals(sizeof($result), 3);
        $this->assertEquals($result[0], "ZSD");
        $this->assertEquals($result[1], 'Strip');
    }



}