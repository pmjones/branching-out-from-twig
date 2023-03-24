# clear caches

rm -rf ./compiled/latte/tempdir/*
rm -rf ./compiled/mustache/cache/*
rm -rf ./compiled/smarty/templates_c/*
rm -rf ./compiled/twig/cache/*
rm -rf ./qiq/compiled/*

# run all templates

php native/aura/aura.php > ./native/aura/aura.html

php native/plates/plates.php > ./native/plates/plates.html
php native/plates/plates-stan.php > /dev/null
php native/plates/plates-helper.php > /dev/null

php compiled/latte/latte.php > ./compiled/latte/latte.html
php compiled/mustache/mustache.php > ./compiled/mustache/mustache.html
php compiled/smarty/smarty.php > ./compiled/smarty/smarty.html
php compiled/twig/twig.php > ./compiled/twig/twig.html

php qiq/qiq.php > ./qiq/qiq.html
php qiq/qiq-compiled.php > /dev/null
php qiq/qiq-compiled-stan.php > /dev/null
php qiq/qiq-compiled-helper.php > /dev/null
