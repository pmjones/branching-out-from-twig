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
