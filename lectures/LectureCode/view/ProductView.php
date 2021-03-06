<?php
namespace view;


class ProductView {

	/**
	 * @var \model\Product
	 */
	private $product;

	public function __construct(\model\Product $product, 
								NavigationView $nav,
								PopularityView $pview) {
		$this->product = $product;
		$this->navigationView = $nav;

		$this->popularityView = $pview;
	}

	/**
	 * @return String HTML
	 */
	public function getHTML() {

		$title = $this->product->getTitle();
		$desciption = $this->product->getDescription();
		$price = $this->product->getPrice();
		$popularity = $this->popularityView->getHTML();
		$backLink = $this->navigationView->getLinkToCatalog(); 

		return "<div>
					<h2>$title</h2>
					$popularity
					<p>Price: $price sek</p>
					<p>$desciption</p>
					$backLink
				</div>";
	}
}