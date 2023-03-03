<?php

declare(strict_types=1);

namespace Tests;

use UbereatsModels\Store\Location;
use UbereatsModels\Store\PosData;
use UbereatsModels\Store\Store;

class StoreTest extends \Orchestra\Testbench\TestCase
{
    use CompareArrayModel;

    public function testLocation() : void
    {
        $data = $this->getData();
        $data = $data['location'];

        $object = new Location($data);

        $this->compareArrayModel($data, $object);
    }

    public function testPosData() : void
    {
        $data = $this->getData();
        $data = $data['pos_data'];

        $object = new PosData($data);

        $this->compareArrayModel($data, $object);
    }

    public function testStore() : void
    {
        $data = $this->getData();

        $object = new Store($data);

        $this->compareArrayModel($data, $object);
    }

    /** @return array<mixed> */
    private function getData(): array
    {
        $filePath = __DIR__.'/store.json';
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
