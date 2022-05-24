<?php

require_once('model/product.php');

class PaymentsController
{
	protected $model;

	public function __construct()
	{
		$this->model = new Product();
	}

	public function index()
	{
		require_once('view/header.php');
		require_once('view/products.php');
	}

	public function confirmPayment()
	{
		$data = base64_decode($_POST['product-data']);
		$jsonData = array_values(json_decode($data, true));

		$this->model->setTitle($jsonData[0]);
		$this->model->setDescription($jsonData[1]);
		$this->model->setPrice($jsonData[2]);

		ob_start();
		require_once('view/header.php');
		require_once('view/confirm_payment.php');
		$output = ob_get_contents();
		ob_end_clean();
		echo $output;
	}
}
