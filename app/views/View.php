<?php  
	namespace views;

	class View {

		const HEADER_DEFAULT = 'header';
		const FOOTER_DEFAULT = 'footer';

		public function render($body, $header = null, $footer = null) {
			$view = true;

			if($header == null)
				include('app/views/templates/'.self::HEADER_DEFAULT.'.php');
				include('app/views/pages/'.$body.'.php');
			if($footer == null)
				include('app/views/templates/'.self::FOOTER_DEFAULT.'.php');
				die();

		}

	}
	
?>