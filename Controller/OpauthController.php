<?php
class OpauthController extends OpauthAppController {
	public function beforeFilter() {
		$this->Components->disable('Auth');
	}
}