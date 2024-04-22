<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\CoreExtension;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* base.html.twig */
class __TwigTemplate_3bd341300a0291a4cf05713b38e01761 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'javascripts' => [$this, 'block_javascripts'],
            'importmap' => [$this, 'block_importmap'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        yield "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, maximum-scale=1\" />
        <title>";
        // line 6
        yield from $this->unwrap()->yieldBlock('title', $context, $blocks);
        yield "</title>
        <link rel=\"icon\" href=\"data:image/svg+xml,<svg xmlns=%22http://www.w3.org/2000/svg%22 viewBox=%220 0 128 128%22><text y=%221.2em%22 font-size=%2296%22>⚫️</text><text y=%221.3em%22 x=%220.2em%22 font-size=%2276%22 fill=%22%23fff%22>sf</text></svg>\">
        <link rel=\"preload\" href=\"https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200\" as=\"style\" />
        <link rel=\"stylesheet\" href=\"https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200\" />
        <link rel=\"preconnect\" href=\"https://fonts.googleapis.com\">
        <link rel=\"preconnect\" href=\"https://fonts.gstatic.com\" crossorigin>
        <link href=\"https://fonts.googleapis.com/css2?family=family=Lugrasimo&display=swap\" rel=\"stylesheet\">
        ";
        // line 13
        yield from $this->unwrap()->yieldBlock('stylesheets', $context, $blocks);
        // line 15
        yield "
        ";
        // line 16
        yield from $this->unwrap()->yieldBlock('javascripts', $context, $blocks);
        // line 19
        yield "    </head>
    <body>
        ";
        // line 21
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 21)) {
            // line 22
            yield "        <a href=\"";
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
            yield "\" class=\"logout-button\">
            <span class=\"material-symbols-outlined\">
                logout
            </span>
        </a>
        ";
        }
        // line 28
        yield "        ";
        yield from $this->unwrap()->yieldBlock('body', $context, $blocks);
        // line 29
        yield "    </body>
</html>
";
        return; yield '';
    }

    // line 6
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        yield "Welcome!";
        return; yield '';
    }

    // line 13
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        yield "        ";
        return; yield '';
    }

    // line 16
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 17
        yield "            ";
        yield from $this->unwrap()->yieldBlock('importmap', $context, $blocks);
        // line 18
        yield "        ";
        return; yield '';
    }

    // line 17
    public function block_importmap($context, array $blocks = [])
    {
        $macros = $this->macros;
        yield $this->env->getRuntime('Symfony\Bridge\Twig\Extension\ImportMapRuntime')->importmap("app");
        return; yield '';
    }

    // line 28
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "base.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable()
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo()
    {
        return array (  129 => 28,  121 => 17,  116 => 18,  113 => 17,  109 => 16,  101 => 13,  93 => 6,  86 => 29,  83 => 28,  73 => 22,  71 => 21,  67 => 19,  65 => 16,  62 => 15,  60 => 13,  50 => 6,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "base.html.twig", "C:\\PHP Projects\\blog\\templates\\base.html.twig");
    }
}
