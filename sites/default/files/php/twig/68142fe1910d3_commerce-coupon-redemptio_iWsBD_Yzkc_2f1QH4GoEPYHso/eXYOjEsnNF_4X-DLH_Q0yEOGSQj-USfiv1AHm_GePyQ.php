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

/* modules/contrib/commerce/modules/promotion/templates/commerce-coupon-redemption-form.html.twig */
class __TwigTemplate_b04c40f142bfa06fa4d5017a0715bd43 extends Template
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
        // line 14
        if (Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "coupons", [], "any", false, false, true, 14))) {
            // line 15
            yield "  ";
            if (((($_v0 = ($context["form"] ?? null)) && is_array($_v0) || $_v0 instanceof ArrayAccess && in_array($_v0::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($_v0["#cardinality"] ?? null) : CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "#cardinality", [], "array", false, false, true, 15)) == 1)) {
                // line 16
                yield "    <div class=\"coupon-redemption-form__coupons coupon-redemption-form__coupons--single\">
      <p>
        <br>";
                // line 18
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("You applied the coupon %code to the order.", ["%code" => $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "coupons", [], "any", false, false, true, 18), 0, [], "any", false, false, true, 18), "code", [], "any", false, false, true, 18))]));
                yield "
      </p>
      ";
                // line 20
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "coupons", [], "any", false, false, true, 20), 0, [], "any", false, false, true, 20), "remove_button", [], "any", false, false, true, 20), "html", null, true);
                yield "
    </div>
  ";
            } else {
                // line 23
                yield "    <div class=\"coupon-redemption-form__coupons coupon-redemption-form__coupons--multiple\">
      <h3> ";
                // line 24
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Applied coupons"));
                yield " </h3>
      <table>
        ";
                // line 26
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(Twig\Extension\CoreExtension::filter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "coupons", [], "any", false, false, true, 26), function ($__coupon__, $__key__) use ($context, $macros) { $context["coupon"] = $__coupon__; $context["key"] = $__key__; return (Twig\Extension\CoreExtension::first($this->env->getCharset(), $context["key"]) != "#"); }));
                foreach ($context['_seq'] as $context["key"] => $context["coupon"]) {
                    // line 27
                    yield "          <tr>
            <td> ";
                    // line 28
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["coupon"], "code", [], "any", false, false, true, 28), "html", null, true);
                    yield " </td>
            <td> ";
                    // line 29
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["coupon"], "remove_button", [], "any", false, false, true, 29), "html", null, true);
                    yield " </td>
          </tr>
        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['key'], $context['coupon'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 32
                yield "      </table>
    </div>
  ";
            }
        }
        // line 36
        yield "
";
        // line 37
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->withoutFilter(($context["form"] ?? null), "coupons"), "html", null, true);
        yield "
";
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["form"]);        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "modules/contrib/commerce/modules/promotion/templates/commerce-coupon-redemption-form.html.twig";
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
        return array (  101 => 37,  98 => 36,  92 => 32,  83 => 29,  79 => 28,  76 => 27,  72 => 26,  67 => 24,  64 => 23,  58 => 20,  53 => 18,  49 => 16,  46 => 15,  44 => 14,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{#
/**
 * @file
 * Template for the coupon redemption form.
 *
 * Available variables:
 * - form: The form. Contains the currently applied coupons in form.coupons,
 *         each containing a code, display_name, remove_button.
 *         For example: form.coupons.0.code.
 *
 * @ingroup themeable
 */
#}
{% if form.coupons|length %}
  {% if form['#cardinality'] == 1 %}
    <div class=\"coupon-redemption-form__coupons coupon-redemption-form__coupons--single\">
      <p>
        <br>{{ 'You applied the coupon %code to the order.'|t({'%code': form.coupons.0.code|render}) }}
      </p>
      {{ form.coupons.0.remove_button }}
    </div>
  {% else %}
    <div class=\"coupon-redemption-form__coupons coupon-redemption-form__coupons--multiple\">
      <h3> {{ 'Applied coupons'|t }} </h3>
      <table>
        {% for key, coupon in form.coupons|filter((coupon, key) => key|first != '#') %}
          <tr>
            <td> {{ coupon.code }} </td>
            <td> {{ coupon.remove_button }} </td>
          </tr>
        {% endfor %}
      </table>
    </div>
  {% endif %}
{% endif %}

{{ form|without('coupons') }}
", "modules/contrib/commerce/modules/promotion/templates/commerce-coupon-redemption-form.html.twig", "/var/www/html/modules/contrib/commerce/modules/promotion/templates/commerce-coupon-redemption-form.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = ["if" => 14, "for" => 26];
        static $filters = ["length" => 14, "t" => 18, "render" => 18, "escape" => 20, "filter" => 26, "first" => 26, "without" => 37];
        static $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['if', 'for'],
                ['length', 't', 'render', 'escape', 'filter', 'first', 'without'],
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
