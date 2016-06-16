<?php

/**
 * Created by PhpStorm.
 * User: Achini
 * Date: 6/16/2016
 * Time: 10:11 AM
 */
class test3 extends TestCase
{

    /**
     * A basic functional test example.
     *
     * @return void
     */
    public function testDB()
    {
        //Testing Database
        $this->seeInDatabase('users', ['username' => 'admin']);
    }

    public function testURL()
    {
        //Testing routing
        $this->visit('/')
            ->see('Sign in');
    }

    public function testIndex()
    {
        //Testing index
        $response = $this->call('GET', '/');

        $this->assertEquals(200, $response->status());
    }

    public function testWarning()
    {
        //Testing add Warning page
        $response = $this->call('GET', '/addwarnings');

        $this->assertEquals(200, $response->status());
    }

    public function testViewWarnings()
    {
        //Testing view Warnings page
        $response = $this->call('GET', '/viewwarnings');

        $this->assertEquals(200, $response->status());
    }

}
