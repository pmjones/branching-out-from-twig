<html>
<head>
<title>Example</title>
</head>
<body>
<p>Hello, {$name|escape}!</p>
<div foo="{$name|escape:'htmlall'}">{$name}</div>
{if empty($list)}
	<p>No items in list</p>
{else}
	<ul>
	{foreach from=$list item=$item}
		<li>{$item['value']|escape}</li>
	{/foreach}
	</ul>
{/if}
</body>
</html>
