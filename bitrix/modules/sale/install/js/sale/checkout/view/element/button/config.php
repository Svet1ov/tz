<?
if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true)
{
	die();
}

return [
	'css' => 'dist/registry.bundle.css',
	'js' => 'dist/registry.bundle.js',
	'rel' => [
		'main.polyfill.core',
		'sale.checkout.view.mixins',
		'ui.vue',
		'main.core.events',
		'sale.checkout.const',
	],
	'skip_core' => true,
];