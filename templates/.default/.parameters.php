<?php
include __DIR__ . '/../../Helpers/TemplateParam.php';

// Список параметров компонента
/** @var array $set */
$set = array(
	'param1' => [
		'TYPE' => 'S',
		'NAME' => 'Строковый параметр',
	],
	'param2' => [
		'TYPE' => 'F',
		'NAME' => 'Файл изображения',
	],
);

// Формируем параметры
$arTemplateParameters = [];
foreach ($set as $k => $arField) {
	$obParam = new TemplateParam($arField);
	$arTemplateParameters[$k] = $obParam->getParam();
}

