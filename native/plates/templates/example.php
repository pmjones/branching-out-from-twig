<html>
<head>
<title>Example</title>
</head>
<body>
<p>Hello, <?= $this->e($name) ?>!</p>
<div foo="<?= $this->e($name) ?>"><?= $name ?></div>
<?php if (empty($list)): ?>
	<p>No items in list.</p>
<?php else: ?>
	<ul>
	<?php foreach ($list as $item): ?>
		<li><?= $this->e($item['value']); ?></li>
	<?php endforeach; ?>
	</ul>
<?php endif; ?>
</body>
</html>
