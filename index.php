<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Главная страница");
?><p style="text-align: justify;">
	 Наша компания успешно работает на рынке недвижимости с 2005 года. За это время мы зарекомендовали себя как надежного партнера в сфере купли-продажи, аренды и инвестиций в недвижимость.
</p>
<p style="text-align: justify;">
</p>
<p style="text-align: justify;">
	 Мы специализируемся на продаже жилой и коммерческой недвижимости, предоставляя полный спектр услуг: от оценки объекта до сопровождения сделки. Наш профессиональный подход позволяет нашим клиентам находить идеальные варианты, будь то уютная квартира для семьи, просторный офис для бизнеса или выгодный инвестиционный проект.
</p>
<p style="text-align: justify;">
</p>
<p style="text-align: justify;">
	 В своей работе мы используем современные технологии и базу данных объектов, чтобы предложить клиентам максимально удобный и прозрачный процесс поиска и покупки недвижимости. Индивидуальный подход к каждому клиенту, качественное сопровождение сделок и соблюдение всех правовых норм делают нас лидером в отрасли.
</p>
<p style="text-align: justify;">
</p>
<p style="text-align: justify;">
	 Выбирая нашу компанию, вы получаете не только недвижимость вашей мечты, но и уверенность в безопасности и прозрачности сделки.
</p>
<p style="text-align: justify;">
</p>
<h3 style="text-align: justify;"></h3>
<p style="text-align: justify;">
</p>
<h2 style="text-align: justify;"></h2>
<div>
	Список новостей <br>
	 <?$APPLICATION->IncludeComponent(
	"bitrix:news.list",
	"",
	Array(
		"ACTIVE_DATE_FORMAT" => "d.m.Y",
		"ADD_SECTIONS_CHAIN" => "Y",
		"AJAX_MODE" => "N",
		"AJAX_OPTION_ADDITIONAL" => "",
		"AJAX_OPTION_HISTORY" => "N",
		"AJAX_OPTION_JUMP" => "N",
		"AJAX_OPTION_STYLE" => "Y",
		"CACHE_FILTER" => "N",
		"CACHE_GROUPS" => "Y",
		"CACHE_TIME" => "36000000",
		"CACHE_TYPE" => "A",
		"CHECK_DATES" => "Y",
		"DETAIL_URL" => "",
		"DISPLAY_BOTTOM_PAGER" => "Y",
		"DISPLAY_DATE" => "Y",
		"DISPLAY_NAME" => "Y",
		"DISPLAY_PICTURE" => "Y",
		"DISPLAY_PREVIEW_TEXT" => "Y",
		"DISPLAY_TOP_PAGER" => "N",
		"FIELD_CODE" => array("",""),
		"FILTER_NAME" => "",
		"HIDE_LINK_WHEN_NO_DETAIL" => "N",
		"IBLOCK_ID" => "1",
		"IBLOCK_TYPE" => "news",
		"INCLUDE_IBLOCK_INTO_CHAIN" => "Y",
		"INCLUDE_SUBSECTIONS" => "Y",
		"MESSAGE_404" => "",
		"NEWS_COUNT" => "20",
		"PAGER_BASE_LINK_ENABLE" => "N",
		"PAGER_DESC_NUMBERING" => "N",
		"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
		"PAGER_SHOW_ALL" => "N",
		"PAGER_SHOW_ALWAYS" => "N",
		"PAGER_TEMPLATE" => ".default",
		"PAGER_TITLE" => "Новости",
		"PARENT_SECTION" => "",
		"PARENT_SECTION_CODE" => "",
		"PREVIEW_TRUNCATE_LEN" => "",
		"PROPERTY_CODE" => array("",""),
		"SET_BROWSER_TITLE" => "Y",
		"SET_LAST_MODIFIED" => "N",
		"SET_META_DESCRIPTION" => "Y",
		"SET_META_KEYWORDS" => "Y",
		"SET_STATUS_404" => "N",
		"SET_TITLE" => "Y",
		"SHOW_404" => "N",
		"SORT_BY1" => "ACTIVE_FROM",
		"SORT_BY2" => "SORT",
		"SORT_ORDER1" => "DESC",
		"SORT_ORDER2" => "ASC",
		"STRICT_SECTION_CHECK" => "N"
	)
);?> <br>
	 Блок с 9 последними объявлениями <br>
	 <?$APPLICATION->IncludeComponent(
	"bitrix:news.line",
	"",
	Array(
		"ACTIVE_DATE_FORMAT" => "d.m.Y",
		"CACHE_GROUPS" => "Y",
		"CACHE_TIME" => "300",
		"CACHE_TYPE" => "A",
		"DETAIL_URL" => "",
		"FIELD_CODE" => array("",""),
		"IBLOCKS" => array(),
		"IBLOCK_TYPE" => "anntype",
		"NEWS_COUNT" => "9",
		"SORT_BY1" => "ACTIVE_FROM",
		"SORT_BY2" => "SORT",
		"SORT_ORDER1" => "DESC",
		"SORT_ORDER2" => "ASC"
	)
);?>
</div>
<p style="text-align: justify;">
 <br>
 <br>
</p>
<p style="text-align: justify;">
</p>
<p style="text-align: justify;">
</p><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>