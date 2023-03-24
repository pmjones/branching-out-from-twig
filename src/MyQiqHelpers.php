<?php

use Qiq\Template;
use Qiq\Helper\Html\HtmlHelpers;

class MyQiqHelpers extends HtmlHelpers
{
	public function rot13(string $str) : string
	{
		return str_rot13($str);
	}
}
