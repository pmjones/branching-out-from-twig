{{ /** @var \Qiq\Engine&Qiq\Helper\Html\HtmlHelpers $this */ }}
{{ /** @var string $name */ }}
{{ /** @var array<int, array{value: string}> $list */ }}
<html>
<head>
<title>Example</title>
</head>
<body>
<p>Hello, {{h $name }}!</p>
<div foo="{{a $name }}">{{= $name }}</div>
{{ if (empty($list)): }}
	<p>No items in list.</p>
{{ else: }}
	<ul>
	{{ foreach ($list as $item): }}
		<li>{{h $item['value'] }}</li>
	{{ endforeach }}
	</ul>
{{ endif }}
</body>
</html>
