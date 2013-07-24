<?php

Use \Mockery as m;

class PracticeTest extends PHPUnit_Framework_TestCase {
    
    public function setUp(){
        $this->test = new TestableFunctions;
    }
    
    public function tearDown() {
        m::close();
    }
    
    public function testHelloWorld() {
        $greeting = "Hello World";
        $this->assertTrue($greeting === "Hello World", $greeting);
    }
    
    public function testShouldBeTrue() {
        $greeting = "Goodbye World";
        $this->assertEquals("Goodbye World", $greeting);
    }
    
    public function testEquality() {
        $val = 0;
        $this->assertSame(0, $val);
    }
    
    public function testSomeFunctionsFunctions() {
        $this->assertEquals("What!", $this->test->sayWhat());
    }
    
    public function testGiantBombStaff() {
        $this->assertContains("ryan", $this->test->sayArray());
    }
    
    public function testAssocArray() {
        $this->assertArrayHasKey("pod",$this->test->assocArray());
    }
    
    public function testMockeryTest() {
        $mock = m::mock('TestableFunctions');
        $mock->shouldReceive('sayWhat')
             ->once()
             ->andReturn('What!');
        
        $example = new UnClass($mock);
        $example->noexist();
    }
    

}