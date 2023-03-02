<?php

declare(strict_types=1);

namespace UbereatsModels\Menu;

use CastModels\Model;

class MultiLanguageText extends Model
{
    public const DEFAULT_LANGUAGE = 'en-US';

    /** @var array<string, string> $translations */
    public array $translations;

    public static function fromString(string $text): MultiLanguageText
    {
        $obj = new MultiLanguageText();

        $obj->translations = [self::DEFAULT_LANGUAGE => $text];

        return $obj;
    }

    /** @return array<string, array<string, string>> */
    public static function toLocaleArray(string $text, string $locale = self::DEFAULT_LANGUAGE): array
    {
        return ['translations' => [$locale => $text]];
    }

    public function getTranslatedText(string $locale = self::DEFAULT_LANGUAGE): string
    {
        if ($locale && ! empty($this->translations[$locale])) {
            return strval($this->translations[$locale]);
        }

        return (empty($this->translations[$locale])) ? '' : strval($this->translations[$locale]);
    }

    public function setTranslatedText(string $text, string $locale = self::DEFAULT_LANGUAGE): string
    {
        $this->translations[$locale] = $text;

        return $text;
    }

    public function __toString()
    {
        return json_encode($this->toArray());
    }

    /**
     * Cast the given value.
     *
     * @param \Illuminate\Database\Eloquent\Model $model
     * @param string                              $key
     * @param mixed                               $value
     * @param array<string>                       $attributes
     * @return array<string>
     */
    public function get($model, $key, $value, $attributes)
    {
        if (! $value) {
            return [];
        }

        if (is_string($value)) {
            return json_decode($value);
        }

        return $value->toArray();
    }

    /**
     * Prepare the given value for storage.
     *
     * @param \Illuminate\Database\Eloquent\Model $model
     * @param string                              $key
     * @param array<string>                       $value
     * @param array<string>                       $attributes
     * @return string
     */
    public function set($model, $key, $value, $attributes)
    {
        if (is_array($value)) {
            return json_encode($value);
        }

        return strval($value);// @phpstan-ignore-line
    }
}
