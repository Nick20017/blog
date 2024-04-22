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

/* post/index.html.twig */
class __TwigTemplate_4877ac36e91a46c4524626d37b932046 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("base.html.twig", "post/index.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        yield "Posts";
        return; yield '';
    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        yield "
<main class=\"posts-container\">
\t";
        // line 8
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "flashes", ["success"], "method", false, false, false, 8));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 9
            yield "\t\t<div class=\"alert alert-success\">
\t\t\t";
            // line 10
            yield Twig\Extension\EscaperExtension::escape($this->env, $context["flashMessage"], "html", null, true);
            yield "
\t\t</div>
\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 13
        yield "\t";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "flashes", ["error"], "method", false, false, false, 13));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 14
            yield "\t\t<div class=\"alert alert-danger\">
\t\t\t";
            // line 15
            yield Twig\Extension\EscaperExtension::escape($this->env, $context["flashMessage"], "html", null, true);
            yield "
\t\t</div>
\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 18
        yield "    <h1>Posts</h1>
    <div class=\"posts\">
        ";
        // line 20
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["posts"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["post"]) {
            // line 21
            yield "            <div class=\"post\">
                <img src=\"";
            // line 22
            yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/post.webp"), "html", null, true);
            yield "\" alt=\"";
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["post"], "title", [], "any", false, false, false, 22), "html", null, true);
            yield " image\" loading=\"lazy\" />
                <a href=\"/post/delete/";
            // line 23
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["post"], "id", [], "any", false, false, false, 23), "html", null, true);
            yield "\" class=\"delete-post-button\">
                    <span class=\"material-symbols-outlined\">
                        delete
                    </span>
                </a>
                <div>
                    <div class=\"post-title\">";
            // line 29
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["post"], "title", [], "any", false, false, false, 29), "html", null, true);
            yield "</div>
                    <div class=\"post-content\">";
            // line 30
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["post"], "content", [], "any", false, false, false, 30), "html", null, true);
            yield "</div>
                </div>
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['post'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 34
        yield "    </div>
</main>

";
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "post/index.html.twig";
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
        return array (  137 => 34,  127 => 30,  123 => 29,  114 => 23,  108 => 22,  105 => 21,  101 => 20,  97 => 18,  88 => 15,  85 => 14,  80 => 13,  71 => 10,  68 => 9,  64 => 8,  60 => 6,  56 => 5,  48 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "post/index.html.twig", "C:\\PHP Projects\\blog\\templates\\post\\index.html.twig");
    }
}
