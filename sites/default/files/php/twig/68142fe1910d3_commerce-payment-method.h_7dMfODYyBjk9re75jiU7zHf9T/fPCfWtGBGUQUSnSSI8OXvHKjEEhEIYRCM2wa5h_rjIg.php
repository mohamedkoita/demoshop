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

/* modules/contrib/commerce/modules/payment/templates/commerce-payment-method.html.twig */
class __TwigTemplate_2d2e58eadd09c4b6907891a170a9b81c extends Template
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
        // line 21
        yield "<article";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["attributes"] ?? null), "html", null, true);
        yield ">
  <div class=\"field field--name-label\">
    ";
        // line 23
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["payment_method"] ?? null), "label", [], "any", false, false, true, 23), "html", null, true);
        yield "
  </div>
  ";
        // line 25
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["payment_method_entity"] ?? null), "isReusable", [], "any", false, false, true, 25) && CoreExtension::getAttribute($this->env, $this->source, ($context["payment_method_entity"] ?? null), "expiresTime", [], "any", false, false, true, 25))) {
            // line 26
            yield "    <div class=\"field field--name-expires\">
      ";
            // line 27
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Expires"));
            yield " ";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->env->getFilter('format_date')->getCallable()(CoreExtension::getAttribute($this->env, $this->source, ($context["payment_method_entity"] ?? null), "expiresTime", [], "any", false, false, true, 27), "custom", "n/Y"), "html", null, true);
            yield "
    </div>
  ";
        }
        // line 30
        yield "  ";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["payment_method"] ?? null), "billing_profile", [], "any", false, false, true, 30), "html", null, true);
        yield "
</article>
";
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["attributes", "payment_method", "payment_method_entity"]);        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "modules/contrib/commerce/modules/payment/templates/commerce-payment-method.html.twig";
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
        return array (  68 => 30,  60 => 27,  57 => 26,  55 => 25,  50 => 23,  44 => 21,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{#
/**
 * @file
 *
 * Default template for payment methods.
 *
 * Available variables:
 * - attributes: HTML attributes for the wrapper.
 * - payment_method: The rendered payment_method fields.
 *   Use 'payment_method' to print them all, or print a subset such as
 *   'payment_method.label'. Use the following code to exclude the
 *   printing of a given field:
 *   @code
 *   {{ payment_method|without('label') }}
 *   @endcode
 * - payment_method_entity: The payment_method entity.
 *
 * @ingroup themeable
 */
#}
<article{{ attributes }}>
  <div class=\"field field--name-label\">
    {{ payment_method.label }}
  </div>
  {% if payment_method_entity.isReusable and payment_method_entity.expiresTime %}
    <div class=\"field field--name-expires\">
      {{ 'Expires'|t }} {{ payment_method_entity.expiresTime|format_date('custom', 'n/Y') }}
    </div>
  {% endif %}
  {{ payment_method.billing_profile }}
</article>
", "modules/contrib/commerce/modules/payment/templates/commerce-payment-method.html.twig", "/var/www/html/modules/contrib/commerce/modules/payment/templates/commerce-payment-method.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = ["if" => 25];
        static $filters = ["escape" => 21, "t" => 27, "format_date" => 27];
        static $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['if'],
                ['escape', 't', 'format_date'],
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
