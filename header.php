<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=<?echo LANG_CHARSET;?>">
<?$APPLICATION->ShowMeta("keywords");?>
<?$APPLICATION->ShowMeta("description");?>
<meta http-equiv="X-UA-Compatible" content="IE=edge" />
<?$APPLICATION->ShowHead()?>
<title><?$APPLICATION->ShowTitle()?></title>
</head>

<body>
<div id="panel"><?$APPLICATION->ShowPanel();?></div>

<div id="header">
	<div class="logo">
        <a href="index.html">
			<img class="logo-img" src="<?=SITE_TEMPLATE_PATH?>/images/logo.png">
			<?$APPLICATION->IncludeFile(
			$APPLICATION->GetTemplatePath("include_areas/company_name.php"),
			Array(),
			Array("MODE"=>"html")
		);?>
		</a>
      </div>
      <div class="login-registation">
	    <?$APPLICATION->IncludeFile(
			$APPLICATION->GetTemplatePath("include_areas/login_menu.php"),
			Array(),
			Array("MODE"=>"php")
		);?>
      </div>
      <div class="menu-header">
	    <?$APPLICATION->IncludeFile(
			$APPLICATION->GetTemplatePath("include_areas/menu_links.php"),
			Array(),
			Array("MODE"=>"php")
		);?> 
		<?$APPLICATION->IncludeComponent("bitrix:main.include", ".default", array(
				"AREA_FILE_SHOW" => "sect",
				"AREA_FILE_SUFFIX" => "headerinc",
				"AREA_FILE_RECURSIVE" => "Y",
				"EDIT_TEMPLATE" => "sect_headerinc.php"
			),
			false
		);?>
		<?$APPLICATION->IncludeComponent("bitrix:main.include", ".default", array(
				"AREA_FILE_SHOW" => "sect",
				"AREA_FILE_SUFFIX" => "headerinc2",
				"AREA_FILE_RECURSIVE" => "Y",
				"EDIT_TEMPLATE" => "sect_headerinc2.php"
			),
			false
		);?>
	</div>

<div id="zebra"></div>