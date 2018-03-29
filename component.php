<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();

use Bitrix\Main\Loader;

Loader::includeModule("fileman");
CMedialib::Init();
$arResult['ITEMS'] = CMedialibItem::GetList(array('arCollections' => array("0" => $arParams['SECTION_ID'])));
$this->IncludeComponentTemplate();





