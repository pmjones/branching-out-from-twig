<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* example.html */
class __TwigTemplate_34d531aaced23bdf1d74a8250f00da1620e1e9989a7505215b8b909c2013b73a extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<html>
<head>
<title>Example</title>
</head>
<body>
<p>Hello, ";
        // line 6
        echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
        echo "!</p>
<div foo=\"";
        // line 7
        echo twig_escape_filter($this->env, ($context["name"] ?? null), "html_attr");
        echo "\">";
        echo ($context["name"] ?? null);
        echo "</div>
";
        // line 8
        if ( !($context["list"] ?? null)) {
            // line 9
            echo "\t<p>No items in list.</p>
";
        } else {
            // line 11
            echo "\t<ul>
\t";
            // line 12
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["list"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 13
                echo "\t\t<li>";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "value", [], "any", false, false, false, 13), "html", null, true);
                echo "</li>
\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 15
            echo "\t</ul>
";
        }
        // line 17
        echo "</body>
</html>
";
    }

    public function getTemplateName()
    {
        return "example.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  80 => 17,  76 => 15,  67 => 13,  63 => 12,  60 => 11,  56 => 9,  54 => 8,  48 => 7,  44 => 6,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "example.html", "/Users/pmjones/Code/template-compare/compiled/twig/templates/example.html");
    }
}
