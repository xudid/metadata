<?php


use PHPUnit\Framework\TestCase;
use Xudid\MetaData\Holder\ClassInformationHolder;
use Xudid\MetaData\Field\Field;

class ClassInformationHolderTest extends TestCase
{

    public function testGetSettersNameReturnArray()
    {
        $classInformationHolder = new ClassInformationHolder("Xudid\MetaData\Field\Field");
        $gettersName = $classInformationHolder->getSettersName();
        $this->assertIsArray($gettersName);
    }

    public function testGetShortClassName()
    {
        $classInformationHolder = new ClassInformationHolder("Xudid\MetaData\Field\Field");
        $className = $classInformationHolder->getShortClassName();
        $this->assertIsString($className);
        $this->assertEquals("Field",$className);
    }

    public function testGetClassName()
    {
        $classInformationHolder = new ClassInformationHolder("Xudid\MetaData\Field\Field");
        $className = $classInformationHolder->getClassName();
        $this->assertIsString($className);
        $this->assertEquals("Xudid\MetaData\Field\Field",$className);
    }

    public function test__construct()
    {
        $classInformationHolder = new ClassInformationHolder("Xudid\MetaData\Field\Field");
        $this->assertInstanceOf(ClassInformationHolder::class,$classInformationHolder);
    }

    public function testHasAssociationReturnBool()
    {
        $classInformationHolder = new ClassInformationHolder("Xudid\MetaData\Field\Field");
        $isAssociated = $classInformationHolder->hasAssociation();
        $this->assertIsBool($isAssociated);
    }

    public function testGetGettersNameReturnsArray()
    {
        $classInformationHolder = new ClassInformationHolder("Xudid\MetaData\Field\Field");
        $gettersName = $classInformationHolder->getGettersName();
        $this->assertIsArray($gettersName);
    }

    public function testGetAssociationReturnsArray()
    {
        $classInformationHolder = new ClassInformationHolder("Xudid\MetaData\Field\Field");
        $associations = $classInformationHolder->getAssociations();
        $this->assertIsArray($associations);
    }
}
