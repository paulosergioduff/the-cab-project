<?php 

namespace Entiny;

class Product {
	public function __toString() {
		return get_class($this);
	}

	public function teste(){
		echo "<p>.....Classe product apelido teste";
	}
}