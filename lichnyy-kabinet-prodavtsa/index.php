<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Личный кабинет продавца");
?><h3>Личный кабинет продавца</h3>
 <?$APPLICATION->IncludeComponent(
	"bitrix:main.profile",
	"",
	Array(
		"CHECK_RIGHTS" => "N",
		"SEND_INFO" => "N",
		"SET_TITLE" => "Y",
		"USER_PROPERTY" => array("UF_IM_SEARCH"),
		"USER_PROPERTY_NAME" => ""
	)
);?><br><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>