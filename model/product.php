<?php
class Product
{
	private $prodTitle;
	private $prodDescription;
	private $price;

	public function getTitle()
	{
		return $this->prodTitle;
	}

	public function getDescription()
	{
		return $this->prodDescription;
	}

	public function getPrice()
	{
		return $this->price;
	}

	public function setTitle($title)
	{
		$this->prodTitle = $title;
	}

	public function setDescription($desc)
	{
		$this->prodDescription = $desc;
	}


	public function setPrice($price)
	{
		$this->price = $price;
	}
}
