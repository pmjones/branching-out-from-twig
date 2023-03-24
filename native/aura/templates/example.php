<?php use Aura\Html\Escaper as e; ?>
<html>
<head>
<title>Example</title>
</head>
<body>
<p>Hello, <?= e::h($this->name) ?>!</p>
<div foo="<?= e::a($this->name) ?>"><?= $this->name ?></div>
<?php if (empty($this->list)): ?>
	<p>No items in list.</p>
<?php else: ?>
	<ul>
	<?php foreach ($this->list as $item): ?>
		<li><?= e::h($item['value']); ?></li>
	<?php endforeach; ?>
	</ul>
<?php endif; ?>
</body>
</html>
