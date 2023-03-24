[-] Blade -- no easy way to use outside of laravel
[x] Aura.View (for escape examples)
[x] Latte
[x] Qiq
[x] Smarty
[x] Twig

cf. https://github.com/php-fig/fig-standards/pull/1280

maybe use this as the example code: https://www.sitepoint.com/twig-popular-stand-alone-php-template-engine/

for examples, want:

- escape HTML
- escape attribute
- no escape (raw)
- if/then
- foreach

https://en.wikipedia.org/wiki/Twig_(template_engine)

http://fabien.potencier.org/templating-engines-in-php.html

https://www.massassi.com/php/articles/template_engines/ (from 2003!)

Laminas-View and Plates, so vanilla-adjecent.

Handlebars, Mustache

Transphporm

* * *

How many kinds of escaping are there in an HTML document? Five!

- html body
- html attribute
- css
- js
- url elements (not entire urls)

cf. https://docs.laminas.dev/laminas-escaper/

* * *

Categories:

- "classical" include-oriented (include head.php, echo body, include foot.php) -- htmlspecialchars
- "manipulated" from PHPLib https://web.archive.org/web/20130704160030/http://www.sanisoft.com/phplib/manual/TemplateExamples.php, see also bTemplate and Horde_Template
- "logic-less" compiled (mustache, handlebars) -- the *template* is logic-less, but *something* has to build up the conditionals. so you have yet another layer to deal with, perhaps one PHP file per Mustache template.
- declarative compiled (PHPTAL, transphporm)
- imperative compiled (smarty, twig)
- LOZIER -- does a template system make sense?
- imperative native PHP (zend/laminas, plates, savant, aura)
- qiq? straddles imperative native and compiled

* * *

Examples -- do these things:

- output an HTML-escaped value $name
- output an attribute-escaped value $name
- output a raw value $name
- loop over an array $list as $item and output each HTML escaped $item['value']

* * *

https://www.cs.usfca.edu/~parrt/papers/mvc.templates.pdf

* * *

"separate php code from html code" -- no, you want preso logic separate from biz logic.

"compiles to PHP" -- yeah, but maybe not to "plain" PHP. Twig/Latte become a class.

"trust" -- if you cannot trust your designers, you have another problem entirely. but some cases this is true (e.g. end users saving template code to a DB to be evaluated by the template system).

* * *

"automatic (implicit) escaping" is only interesting if (explicit) escaping is verbose.

"automatic escaping" is the safest? well, "no output" is safest.

{{ $foo }} outputs nothing in Qiq.

{{h $foo }} outputs escaped for html. Not verbose at all!

{{= $foo }} outputs raw.

a for attribute (incl arrays), c for css, j for js, c for css.

* * *

2-step views vs "inheritance" -- EXCEPT ITS NOT A 2-STEP VIEW.

* * *

Qiq WILL NOT:

- render an individual block (use a template partial)
- do "embed" (?)
- do "filters" (use a helper)

* * *

https://old.reddit.com/r/PHP/comments/10nzmw1/honest_question_what_am_i_missing_by_using_just/

https://old.reddit.com/r/PHP/comments/103n0pw/template_engine_vs_classical_include_template_and/

https://old.reddit.com/r/PHP/comments/z1qaeg/which_template_engine_do_you_use/

Why use one in the first place? (Separated presentation -- at least, of HTML.)

2-step vs "inheritance"

What does a template system get you?

pros:

- Escaping by default
- some extra security guardrails
- utility bits and bobs
- arguably nicer syntax for some things
- clearer/enforced separation of duties
- possibly portability of your templates to other languages/environments
- possibly portability of the skills for working with those templating languages to other projects or other teams
- cleaner syntax with prebuilt funtions, like a loop tag instead of writing it yourself
- escaping strings
- (if you kept improving php used in html by yourself you’ll end up making your own templating engine)
- auto-escaping, function/filter chaining, template inheritance, block overrides etc.
- Extending templates is the thing I wish I could do in PHP.
- It’d also be really nice to have blocks.
- extends, block, printable blocks, even shorter ternary like {{ user ? user.name }}, macros, .dot syntax for both arrays and objects, else for empty loops, form theming
- Using plain php is just reinventing the wheel for no reason. (???)
- Replicating all this in vanilla PHP would be very hard and unreadable.
- easier to understand syntax for filters using pipes instead of method calls, I'll give it that. But is it worth it?
	```
	{{ variable | filterFoo | filterBar }}
	instead of
	<?= filterBar(filterFoo($variable)) ?>
	```
- keeps devs from writing domain logic in templates

cons:

- you have to learn the idiosyncrasies of that tech
- You also become locked into it
- when it becomes incompatible with the next version of PHP you have to refactor. (Just ask people of were evangelists of Laravel3 how they felt about Laravel when version 5 came around.)
- it's just a matter weighing the trade offs, benefits vs costs.
- The reason you don't know why blade is beneficial is because you've never seen it implemented in a way that makes it beneficial.
- instead of 1 lang I have two to manage: twig and php.
- Adding an additional dependency to maintain and integrating it into a legacy application.

All PHP template engines compile the templates to regular PHP in the end.

If you mean what can you fundamentally do with a template engine you can't do with a bunch of PHP files, the answer is nothing.

There is not much difference between {{ user.name }} and <?= $user->name ?> for example. PHP was designed and still is a templating engine in itself.

Also, twig compiles to plain php anyway, so there's no real performance hit either.

as long as your your web-application is a 5-page blog about your pet, indeed you don't care. Once your app grows, you need more control, more security, more automation and more usability.
