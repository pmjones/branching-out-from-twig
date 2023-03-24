<?php /** @var \League\Plates\Template\Template $this */ ?>
<?php /** @var string $name */ ?>
<?php /** @var array<int, array{value: string}> $list */ ?>
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
		<li><?= $this->e($this->rot13($item['value'])); ?></li>
	<?php endforeach; ?>
	</ul>
<?php endif; ?>
</body>
</html>
