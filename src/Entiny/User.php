<?php 

namespace Entiny;

class User {
	public function __toString() {
		return get_class($this);
	}

	public function teste(){
		echo "<p>.....Classe user apelido teste";
	}
}