<?php 
		
	/** DELETE BUTTONS **/
	function __delete_button($href, $anchor = 'Delete Record', $style = 5, $size = 0, $block = false, $class = 'delete')
	{
		return __button($href, $anchor, $style, $size, $block);
	}
	
	
	/** SMALL TABLE BUTTONS **/
	function __table_button($href, $anchor = 'View', $style = 2, $size = 0, $block = false)
	{
		return __button($href, $anchor, $style, $size, $block);
	}


	/** BUTTONS **/
	function __button($href, $anchor, $style = 1, $size = 0, $block = false, $class = null)
	{
		$styles = array(
			1 => 'btn btn-primary',
			2 => 'btn btn-secondary',
			3 => 'btn btn-success',
			4 => 'btn btn-info',
			5 => 'btn btn-danger',
			6 => 'btn btn-warning',
		);

		$sizes = array(
			0 => 'btn-sm',
			1 => '',
			2 => 'btn-lg',
		);

		return '<a class="' . $styles[$style] . ' ' . $class . ' ' . $sizes[$size] .  ' ' . ( $block ? 'btn-block' : '' ) . '" href="' . $href . '">' . $anchor . '</a>';
	}


	/** BADGE **/
	function __id($str, $style = 1)
	{
		$styles = array(
			1 => 'badge-primary',
			2 => 'badge-secondary',
			3 => 'badge-success',
			4 => 'badge-info',
			5 => 'badge-danger',
			6 => 'badge-warning',
			7 => 'badge-light',
		);

		return '<span class="badge badge-pill ' . $styles[$style] . '">' . $str . '</span>';
	}


	/** SMALL TEXT **/
	function __small($str)
	{
		return '<small class="text-muted">' . $str . '</small>';
	}


	/** CARD **/
	function __card($html, $body = true, $header = null, $class = '')
	{
		return '<div class="card ' . $class . '">'
					. __card_header($header)
					. ( $body ? '<div class="card-body">' : '' )
						. ( $body === 2 ? '<div class="p-lg-4">' : '' )
							. $html
						. ( $body === 2 ? '</div>' : '' )
					. ( $body ? '</div>' : '' )
				. '</div>';
	}


	/** CARD HEADER **/
	function __card_header($str = null)
	{
		return ! is_null($str) ? '<div class="card-header"><h4 class="card-title m-0">' . $str . '</h4></div>' : '';
	}