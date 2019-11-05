<?php 

	include(dirname(__FILE__).'/config/config.inc.php');
	include(dirname(__FILE__).'/init.php');

	$default_lang = Configuration::get('PS_LANG_DEFAULT');
	$product = new Product();
	$product->name = [$default_lang => 'Test Product'];
	$product-> link_rewite = [$default_lang => 'test_product'];
	$product->price = 11.99;
	$product->quantily = 10;
	$product->id_category = [3,4];
	$product->id_category_default = 3;

	if($product->add()){
		$product->updateCategoried($product->id_category);
		StockAvailable::setQuantity((int)$product->id, 0, $product->quantily, Context::getContext()->shop->id);
	}



 ?>