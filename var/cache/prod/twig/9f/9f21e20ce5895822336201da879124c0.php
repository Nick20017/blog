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

/* registration/register.html.twig */
class __TwigTemplate_f17126456c7dbfaa442b08fa8e041aa3 extends Template
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
        $this->parent = $this->loadTemplate("base.html.twig", "registration/register.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        yield "Register";
        return; yield '';
    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        yield "    ";
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["registrationForm"] ?? null), 'form_start');
        yield "
        ";
        // line 7
        if ((Twig\Extension\CoreExtension::lengthFilter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["registrationForm"] ?? null), 'errors')) > 0)) {
            // line 8
            yield "        <div class=\"alert alert-danger\">
            ";
            // line 9
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["registrationForm"] ?? null), 'errors');
            yield "
        </div>
        ";
        }
        // line 12
        yield "        <h1>Register</h1>
        ";
        // line 13
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["registrationForm"] ?? null), "username", [], "any", false, false, false, 13), 'widget');
        yield "
        ";
        // line 14
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["registrationForm"] ?? null), "plainPassword", [], "any", false, false, false, 14), 'row');
        yield "

        <button type=\"submit\" class=\"btn\">Sign up</button>
        <a href=\"";
        // line 17
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
        yield "\" class=\"login-switch\">Already have an account? Log in.</a>
    ";
        // line 18
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["registrationForm"] ?? null), 'form_end');
        yield "
";
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "registration/register.html.twig";
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
        return array (  93 => 18,  89 => 17,  83 => 14,  79 => 13,  76 => 12,  70 => 9,  67 => 8,  65 => 7,  60 => 6,  56 => 5,  48 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "registration/register.html.twig", "C:\\PHP Projects\\blog\\templates\\registration\\register.html.twig");
    }
}
