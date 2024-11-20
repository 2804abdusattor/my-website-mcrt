<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Избранное");
?><br>
<?$APPLICATION->IncludeComponent(
	"bitrix:subscribe.news",
	"",
	Array(
		"IBLOCK_TYPE" => "news",
		"ID" => "1",
		"SITE_ID" => "s1",
		"SORT_BY" => "ACTIVE_FROM",
		"SORT_ORDER" => "DESC"
	)
);?><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>