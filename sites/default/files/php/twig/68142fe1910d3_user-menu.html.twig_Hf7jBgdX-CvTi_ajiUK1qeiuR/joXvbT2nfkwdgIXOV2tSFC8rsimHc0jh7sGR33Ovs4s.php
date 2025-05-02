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
use Twig\TemplateWrapper;

/* @kart/parts/header/user-menu.html.twig */
class __TwigTemplate_b76ac226dfbea28e52fcdf78edf5b931 extends Template
{
    private Source $source;
    /**
     * @var array<string, Template>
     */
    private array $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->extensions[SandboxExtension::class];
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 1
        if (($context["logged_in"] ?? null)) {
            // line 2
            yield "  <ul class=\"menu\">
    <li><a href=\"";
            // line 3
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["front_page"] ?? null), "html", null, true);
            yield "user\"><i class=\"bi bi-person\"></i> My Account</a></li>
    <li><a href=\"";
            // line 4
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["front_page"] ?? null), "html", null, true);
            yield "user/logout\"><i class=\"bi bi-box-arrow-in-right\"></i> Logout</a></li>
  </ul>   
";
        } else {
            // line 7
            yield "  <ul class=\"menu\">
    <li><a href=\"";
            // line 8
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["front_page"] ?? null), "html", null, true);
            yield "user/login\"><i class=\"bi bi-box-arrow-in-right\"></i> Login</a></li>
    <li><a href=\"";
            // line 9
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["front_page"] ?? null), "html", null, true);
            yield "user/register\"><i class=\"bi bi-person\"></i> Register</a></li>
  </ul>   
";
        }
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["logged_in", "front_page"]);        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@kart/parts/header/user-menu.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable(): bool
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  66 => 9,  62 => 8,  59 => 7,  53 => 4,  49 => 3,  46 => 2,  44 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% if logged_in %}
  <ul class=\"menu\">
    <li><a href=\"{{ front_page }}user\"><i class=\"bi bi-person\"></i> My Account</a></li>
    <li><a href=\"{{ front_page }}user/logout\"><i class=\"bi bi-box-arrow-in-right\"></i> Logout</a></li>
  </ul>   
{% else %}
  <ul class=\"menu\">
    <li><a href=\"{{ front_page }}user/login\"><i class=\"bi bi-box-arrow-in-right\"></i> Login</a></li>
    <li><a href=\"{{ front_page }}user/register\"><i class=\"bi bi-person\"></i> Register</a></li>
  </ul>   
{% endif %}
", "@kart/parts/header/user-menu.html.twig", "/var/www/html/themes/contrib/kart/templates/parts/header/user-menu.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = ["if" => 1];
        static $filters = ["escape" => 3];
        static $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['if'],
                ['escape'],
                [],
                $this->source
            );
        } catch (SecurityError $e) {
            $e->setSourceContext($this->source);

            if ($e instanceof SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

    }
}
