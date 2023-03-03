<?php

declare(strict_types=1);

namespace UbereatsModels\Menu;

use CastModels\Model;
use Illuminate\Support\Collection;
use stdClass;

class TimePeriods extends Model
{
    /** \UbereatsModels\Menu\TimePeriod */
	public Collection $periods;

    /** @param array<mixed> $data */
	public function update(array|stdClass $data = []): void
	{
		if (empty($data)) {
			return;
		}

		$this->periods = TimePeriod::collection($data);
	}

    /** @return array<mixed> $data */
    public function toArray(): array
    {
        $result = [];

		if (empty($this->periods) || ! $this->periods->count()) {
			return $result;
		}

        $this->periods->each(
            function ($item) use (&$result) {
                $result[] = $item->toArray();
            }
        );

        return $result;
    }

    public function __get(mixed $name): mixed
    {
		if (empty($this->periods)) {
			return false;
		}

		$length = $this->periods->count();

		if (! $length) {
			return false;
		}

		$i = intval($name);

		return $this->periods->slice($i, 1)->first();
    }

    public function __set(mixed $name, mixed $value): void
    {
		if (empty($this->periods)) {
			$this->periods = new Collection();
		}

		$this->periods->add($value);
    }

    public function __isset(mixed $name): bool
    {
        if (empty($this->periods)) {
			return false;
		}

		$length = $this->periods->count();

		if (! $length) {
			return false;
		}

		$i = intval($name);

		--$length;

		return (($i > 0) && ($i <= $length));
    }

    public function __unset(mixed $name): void
    {
		if (empty($this->periods)) {
			return;
		}

		$length = $this->periods->count();

		if (! $length) {
			return;
		}

		$i = intval($name);

		$this->periods->splice($i);
    }
}
