<?php
class TemplateParam
{
	protected $arField;

	public function __construct($arField)
	{
		$this->arField = $arField;
	}

	public function getParam() {

		switch ($this->arField['TYPE']) {
			case 'F':
				$arParam = $this->makeFParam();
				break;
			default:
				$arParam = $this->makeSParam();
		}

		return $arParam;
	}

	protected function makeSParam() {
		return [
			'NAME' => $this->arField['NAME'],
			'COLS' => 35,
			'ROWS' => 3
		];
	}

	protected function makeFParam() {
		$ext = 'jpg,jpeg,gif,png,svg';
		return [
			'PARENT' => 'BASE_SETTINGS',
			'NAME' => $this->arField['NAME'],
			'TYPE' => 'FILE',
			'FD_TARGET' => 'F',
			'FD_EXT' => $ext,
			'FD_UPLOAD' => true,
			'FD_USE_MEDIALIB' => true,
			'FD_MEDIALIB_TYPES' => ['image']
		];
	}
}