<?php

declare(strict_types=1);

namespace Tests;

use UbereatsModels\Menu\Menu;
use UbereatsModels\Menu\Category;
use UbereatsModels\Menu\ModifierGroup;
use UbereatsModels\Menu\Item;
use UbereatsModels\Menu\Menus;

class MenuTest extends \Orchestra\Testbench\TestCase
{
    use CompareArrayModel;

    public function testMenu() : void
    {
        $data = $this->getData();
        $data = $data['menus'];

        $collection = Menu::collection($data);

        $collection->each(fn ($item, $key) => $this->compareArrayModel($data[$key], $item));
    }

    public function testCategory() : void
    {
        $data = $this->getData();
        $data = $data['categories'];

        $collection = Category::collection($data);

        $collection->each(fn ($item, $key) => $this->compareArrayModel($data[$key], $item));
    }

    public function testModifierGroup() : void
    {
        $data = $this->getData();
        $data = $data['modifier_groups'];

        $collection = ModifierGroup::collection($data);

        $collection->each(fn ($item, $key) => $this->compareArrayModel($data[$key], $item));
    }

    public function testItem() : void
    {
        $data = $this->getData();
        $data = $data['items'];

        $collection = Item::collection($data);

        $collection->each(fn ($item, $key) => $this->compareArrayModel($data[$key], $item));
    }

    public function testMenus() : void
    {
        $data = $this->getData();

        $object = new Menus($data);

        $this->assertInstanceOf(Menus::class, $object);

        $this->compareArrayModel($data, $object);
    }

    /** @return array<mixed> */
    private function getData(): array
    {
        $filePath = __DIR__.'/menu.json';
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
