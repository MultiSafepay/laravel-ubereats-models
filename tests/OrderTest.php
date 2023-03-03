<?php

declare(strict_types=1);

namespace Tests;

use UbereatsModels\Order\Cart;
use UbereatsModels\Order\EatsDelivery;
use UbereatsModels\Order\Eater;
use UbereatsModels\Order\Order;
use UbereatsModels\Order\Payment;
use UbereatsModels\Order\Store;

class OrderTest extends \Orchestra\Testbench\TestCase
{
    use CompareArrayModel;

    public function testStore() : void
    {
        $data = $this->getData();
        $data = $data['store'];

        $object = new Store($data);

        $this->compareArrayModel($data, $object);
    }

    public function testEater() : void
    {
        $data = $this->getData();
        $data = $data['eater'];

        $object = new Eater($data);

        $this->compareArrayModel($data, $object);
    }

    public function testEaters() : void
    {
        $data = $this->getData();
        $data = $data['eaters'];

        $collection = Eater::collection($data);

        $collection->each(fn ($item, $key) => $this->compareArrayModel($data[$key], $item));
    }

    public function testCart() : void
    {
        $data = $this->getData();
        $data = $data['cart'];

        $object = new Cart($data);

        $this->compareArrayModel($data, $object);
    }

    public function testPayment() : void
    {
        $data = $this->getData();
        $data = $data['payment'];

        $object = new Payment($data);

        $this->compareArrayModel($data, $object);
    }

    public function testDeliveries() : void
    {
        $data = $this->getData();
        $data = $data['deliveries'];

        $collection = EatsDelivery::collection($data);

        $collection->each(fn ($item, $key) => $this->compareArrayModel($data[$key], $item));
    }

    public function testOrder() : void
    {
        $data = $this->getData();

        $object = new Order($data);

        $this->compareArrayModel($data, $object);
    }

    /** @return array<mixed> */
    private function getData(): array
    {
        $filePath = __DIR__.'/order.json';
        $this->assertFileExists($filePath);
        $this->assertFileIsReadable($filePath);

        $jsonData = file_get_contents($filePath);

        $this->assertIsString($jsonData);

        $data = json_decode($jsonData, true);

        $this->assertNotEmpty($data);
        $this->assertIsArray($data);

        return $data;
    }

}
