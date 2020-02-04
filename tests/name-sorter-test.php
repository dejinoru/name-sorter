<?php

use PHPUnit\Framework\TestCase;

Class SorterTest extends TestCase {

	public function testSuccessGetArraySort(){
        $this->assertInstanceOf(
            Sorter::class,
            Sorter::getArraySort();
        );
	}

	public function testFailureGetArraySort(){

	}

    public function testSuccessViewContent(){
        $data = array();
        $this->assertInstanceOf(
            Sorter::class,
            Sorter::viewContent($data);
        );
    }

    public function testFailureViewContent(){
        $this->expectException(InvalidArgumentException::class);
        Sorter::viewContent('invalid');
    }

    public function testSuccessPutContent(){
        $data = array();
        $this->assertInstanceOf(
            Sorter::class,
            Sorter::putContent($data);
        );
    }

    public function testFailurePutContent(){
        $this->expectException(InvalidArgumentException::class);
        Sorter::putContent('invalid');

    }

    public function testSuccessNameSorter(){
        $this->assertInstanceOf(
            Sorter::class,
            Sorter::nameSorter();
        );
    }

    public function testFailureNameSorter(){

    }

}
?>