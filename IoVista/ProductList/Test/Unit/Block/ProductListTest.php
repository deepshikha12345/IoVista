<?php
namespace IoVista\ProductList\Test\Unit\Block;

use Magento\Framework\TestFramework\Unit\Helper\ObjectManager;
use PHPUnit\Framework\TestCase;
use IoVista\ProductList\Block\ProductList;

class ProductListTest extends TestCase
{
    protected $objectManager;
    protected $productList;

    protected function setUp(): void
    {
        $this->objectManager = new ObjectManager($this);
        $this->productList = $this->objectManager->getObject(
            ProductList::class,
            [
                'context' => $this->objectManager->getObject(\Magento\Framework\View\Element\Template\Context::class),
                'productCollectionFactory' => $this->getMockBuilder(\Magento\Catalog\Model\ResourceModel\Product\CollectionFactory::class)
                    ->disableOriginalConstructor()
                    ->getMock(),
            ]
        );
    }

    public function testGetProducts()
    {
        $productCollection = $this->getMockBuilder(\Magento\Catalog\Model\ResourceModel\Product\Collection::class)
            ->disableOriginalConstructor()
            ->getMock();
        $productCollection->expects($this->once())
            ->method('addAttributeToSelect')
            ->willReturnSelf();
        $productCollection->expects($this->once())
            ->method('addAttributeToFilter')
            ->with('handle_display', true)
            ->willReturnSelf();
        $productCollection->expects($this->once())
            ->method('setPageSize')
            ->with(10)
            ->willReturnSelf();

        $this->productList->expects($this->once())
            ->method('getProducts')
            ->willReturn($productCollection);

        $products = $this->productList->getProducts();
        $this->assertInstanceOf(\Magento\Catalog\Model\ResourceModel\Product\Collection::class, $products);
    }
}
