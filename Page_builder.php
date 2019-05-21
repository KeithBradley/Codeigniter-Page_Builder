<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Page_builder
{
	protected $ci;

	protected $title;

	protected $buttons;

	protected $breadcrumb;

	public function __construct()
	{
        $this->ci =& get_instance();
	}

	/**
	 * ADD BREADCRUMB
	 * @author Logic Design & Consultancy Ltd
	 *  
	 * @param  string $anchor
	 * @param  string $target
	 */
	function addCrumb($anchor = 'Page', $target = null)
	{
		$this->breadcrumb[] = array('target' => $target, 'anchor' => $anchor);
		return $this;
	}


	/**
	 * OUTPUT BREADCRUMBS
	 * @author Logic Design & Consultancy Ltd
	 *  
	 * @return string
	 */
	function outputCrumb()
	{
		if ( empty($this->breadcrumb) ) {
			return false;
		}

		$html = '<nav aria-label="breadcrumb">';
			$html .= '<ol class="breadcrumb">';
			$i = 1;
			foreach ( $this->breadcrumb as $crumb ) {
				if ( $i < count($this->breadcrumb) ) {
					$html .= '<li class="breadcrumb-item">' . anchor($crumb['target'], $crumb['anchor']) . '</li>';
				} else {
					$html .= '<li class="breadcrumb-item active" aria-current="page">' . $crumb['anchor'] . '</li>';
				}
				$i++;
			}
			$html .= '</ol>';
		$html .= '</nav>';
		
		return $html;
	}


	/**
	 * SET PAGE TITLE
	 * @author Logic Design & Consultancy Ltd
	 *  
	 * @param  string $text
	 */
	function setTitle($text = 'Page Title', $pre_title = null)
	{
		$this->title = ( $pre_title ? '<small>' . $pre_title . '</small>' : '' ) . str_replace('/', '<span class="px-2">/</span>', $text);
		return $this;
	}


	/**
	 * OUTPUT PAGE TITLE
	 * @author Logic Design & Consultancy Ltd
	 *  
	 * @return string
	 */
	function outputTitle()
	{
		return ! empty($this->title) ? $this->title : false;
	}



	/**
	 * ADD PAGE BUTTON
	 * @author Logic Design & Consultancy Ltd
	 *  
	 * @param  string  $target
	 * @param  string  $anchor
	 * @param  integer $style
	 * @param  integer $size 
	 */
	function addButton($target, $anchor = 'Click Here', $style = 1, $size = 2)
	{
		$this->buttons[] = array( 'target' => $target, 'anchor' => $anchor, 'style' => $style, 'size' => $size );
		return $this;
	}


	/**
	 * OUTPUT PAGE BUTTONS 
	 * @author Logic Design & Consultancy Ltd
	 *  
	 * @return string 
	 */
	function outputButtons()
	{
		if ( empty($this->buttons) ) {
			return false;
		}

		$html = '<div class="btn-group" role="group">';
			foreach ( $this->buttons as $btn ) {
				$html .= __button($btn['target'], $btn['anchor'], $btn['style'], $btn['size']);
			}
		$html .= '</div>';
		
		return $html;
	}
}