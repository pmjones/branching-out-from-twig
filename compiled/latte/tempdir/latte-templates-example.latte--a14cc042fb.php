<?php

use Latte\Runtime as LR;

/** source: /Users/pmjones/Code/template-compare/compiled/latte/templates/example.latte */
final class Templatea14cc042fb extends Latte\Runtime\Template
{

	public function main(array $ʟ_args): void
	{
		extract($ʟ_args);
		unset($ʟ_args);

		echo '<html>
<head>
<title>Example</title>
</head>
<body>
<p>Hello, ';
		echo LR\Filters::escapeHtmlText($name) /* line 6 */;
		echo '!</p>
<div foo="';
		echo LR\Filters::escapeHtmlAttr($name) /* line 7 */;
		echo '">';
		echo $name /* line 7 */;
		echo '</div>
';
		if (empty($list)) /* line 8 */ {
			echo '	<p>No items in list.</p>
';
		} else /* line 10 */ {
			echo '	<ul>
';
			foreach ($list as $item) /* line 12 */ {
				echo '		<li>';
				echo LR\Filters::escapeHtmlText($item['value']) /* line 13 */;
				echo '</li>
';

			}

			echo '	</ul>
';
		}
		echo '</body>
</html>
';
	}


	public function prepare(): array
	{
		extract($this->params);

		if (!$this->getReferringTemplate() || $this->getReferenceType() === 'extends') {
			foreach (array_intersect_key(['item' => '12'], $this->params) as $ʟ_v => $ʟ_l) {
				trigger_error("Variable \$$ʟ_v overwritten in foreach on line $ʟ_l");
			}
		}
		return get_defined_vars();
	}
}
