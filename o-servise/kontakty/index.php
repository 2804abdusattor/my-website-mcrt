<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Контакты");
?><h2></h2>
<p>
	 Обратитесь к нашим специалистам и получите профессиональную консультацию по вопросам создания и покупки мебели (от дизайна, разработки технического задания до доставки мебели к Вам домой).
</p>
<p>
	 Вы можете обратиться к нам по телефону, по электронной почте или договориться о встрече в нашем офисе. Будем рады помочь вам и ответить на все ваши вопросы.
</p>
<h2>Телефоны</h2>
<ul>
	<li>Телефон/факс:
	<ul>
		<li>(495) 212-85-06</li>
	</ul>
 </li>
	<li>Телефоны:
	<ul>
		<li>(495) 212-85-07</li>
		<li>(495) 212-85-08</li>
	</ul>
 </li>
</ul>
<h2>Email</h2>
<ul>
	<li><a href="mailto:info@example.ru">info@example.ru</a>&nbsp;— общие вопросы</li>
	<li><a href="mailto:sales@example.ru">sales@example.ru</a>&nbsp;— приобретение продукции</li>
	<li><a href="mailto:marketing@example.ru">marketing@example.ru</a>&nbsp;— маркетинг/мероприятия/PR</li>
</ul>
<h2>Офис в Москве</h2>
<p>
 <img src="https://azizov.study.mcart.ru/bitrix/images/1.gif" title="Карта Google Maps с возможностью вывода произвольных объектов" id="bxid67413610">Google: настраиваемая карта
</p>
<p>
</p>
<h2><?$APPLICATION->IncludeComponent(
	"bitrix:map.google.view",
	"",
	Array(
		"API_KEY" => "",
		"CONTROLS" => array("SMALL_ZOOM_CONTROL","TYPECONTROL","SCALELINE"),
		"INIT_MAP_TYPE" => "ROADMAP",
		"MAP_DATA" => "a:3:{s:10:\"google_lat\";s:7:\"55.7383\";s:10:\"google_lon\";s:7:\"37.5946\";s:12:\"google_scale\";i:13;}",
		"MAP_HEIGHT" => "500",
		"MAP_ID" => "",
		"MAP_WIDTH" => "600",
		"OPTIONS" => array("ENABLE_SCROLL_ZOOM","ENABLE_DBLCLICK_ZOOM","ENABLE_DRAGGING","ENABLE_KEYBOARD")
	)
);?></h2><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>