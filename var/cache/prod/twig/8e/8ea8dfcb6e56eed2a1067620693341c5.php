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

/* login/login.html.twig */
class __TwigTemplate_c7821c72b9ff960c5595fa02b2de0409 extends Template
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
        $this->parent = $this->loadTemplate("base.html.twig", "login/login.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        yield "Log in!";
        return; yield '';
    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        yield "    <form method=\"post\" class=\"login-form\">
        ";
        // line 7
        if (($context["error"] ?? null)) {
            // line 8
            yield "            <div class=\"alert alert-danger\">";
            yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(CoreExtension::getAttribute($this->env, $this->source, ($context["error"] ?? null), "messageKey", [], "any", false, false, false, 8), CoreExtension::getAttribute($this->env, $this->source, ($context["error"] ?? null), "messageData", [], "any", false, false, false, 8), "security"), "html", null, true);
            yield "</div>
        ";
        }
        // line 10
        yield "
        <h1>Log in</h1>
        <input type=\"text\" value=\"";
        // line 12
        yield Twig\Extension\EscaperExtension::escape($this->env, ($context["last_username"] ?? null), "html", null, true);
        yield "\" placeholder=\"Username\" name=\"_username\" id=\"username\" class=\"form-control\" autocomplete=\"username\" required autofocus>
        <input type=\"password\" placeholder=\"Password\" name=\"_password\" id=\"password\" class=\"form-control\" autocomplete=\"current-password\" required>

        <input type=\"hidden\" name=\"_csrf_token\"
               value=\"";
        // line 16
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("authenticate"), "html", null, true);
        yield "\"
        >
        <input type=\"hidden\" name=\"_target_path\" value=\"";
        // line 18
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login_check");
        yield "\" />

        <button class=\"btn btn-lg btn-primary\" type=\"submit\">
            Sign in
        </button>
        <a href=\"";
        // line 23
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_register");
        yield "\" class=\"login-switch\">Don't have account? Register.</a>
    </form>
";
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "login/login.html.twig";
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
        return array (  95 => 23,  87 => 18,  82 => 16,  75 => 12,  71 => 10,  65 => 8,  63 => 7,  60 => 6,  56 => 5,  48 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "login/login.html.twig", "C:\\PHP Projects\\blog\\templates\\login\\login.html.twig");
    }
}
