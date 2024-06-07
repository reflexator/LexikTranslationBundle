<?php

namespace Lexik\Bundle\TranslationBundle\EventDispatcher\Event;

use Symfony\Contracts\EventDispatcher\Event;

class TranslationCacheClearEvent extends Event
{
	public const NAME = 'lexik_translation.clean_translation_cache';

	private array $locales;

	public function __construct(array $locales)
	{
		$this->locales = $locales;
	}

	public function getLocales(): array
	{
		return $this->locales;
	}
}
