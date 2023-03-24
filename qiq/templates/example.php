<html>
<head>
<title>Example</title>
</head>
<body>
<p>Hello, <?= $this->h($name) ?>!</p>
<div foo="<?= $this->a($name) ?>"><?= $name ?></div>
<?php if (empty($list)): ?>
	<p>No items in list.</p>
<?php else: ?>
	<ul>
	<?php foreach ($list as $item): ?>
		<li><?= $this->h($item['value']) ?></li>
	<?php endforeach ?>
	</ul>
<?php endif ?>
</body>
</html>
