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

/* @kart/parts/footer.html.twig */
class __TwigTemplate_8d0a31eec3e4d8686fab01266ad37d4c extends Template
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
        yield "<footer class=\"footer full-width\">
  ";
        // line 2
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "footer_top", [], "any", false, false, true, 2)) {
            // line 3
            yield "  <div class=\"footer-top full-width\">
    <div class=\"container\">
      ";
            // line 5
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "footer_top", [], "any", false, false, true, 5), "html", null, true);
            yield "
    </div>
  </div>
  ";
        }
        // line 9
        yield "  <div class=\"footer-main full-width\">
    <div class=\"container\">
      ";
        // line 11
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "footer", [], "any", false, false, true, 11)) {
            // line 12
            yield "        <section class=\"footer-blocks full-width\">
          ";
            // line 13
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "footer", [], "any", false, false, true, 13), "html", null, true);
            yield "
        </section>
      ";
        }
        // line 16
        yield "      ";
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "footer_bottom", [], "any", false, false, true, 16)) {
            // line 17
            yield "        <section class=\"footer-bottom-blocks full-width\">
          ";
            // line 18
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "footer_bottom", [], "any", false, false, true, 18), "html", null, true);
            yield "
        </section>
      ";
        }
        // line 21
        yield "      ";
        if ((($context["copyright_text"] ?? null) || ($context["all_icons_show"] ?? null))) {
            // line 22
            yield "        <div class=\"footer-last\">
          ";
            // line 23
            if (($context["copyright_text"] ?? null)) {
                // line 24
                yield "            <div class=\"copyright footer-last-region\">
              &copy; ";
                // line 25
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Twig\Extension\CoreExtension']->formatDate("now", "Y"), "html", null, true);
                yield " ";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["site_name"] ?? null), "html", null, true);
                yield ", All rights reserved.
            </div>
          ";
            }
            // line 28
            yield "          ";
            if (($context["all_icons_show"] ?? null)) {
                // line 29
                yield "            <div class=\"footer-social footer-last-region\">
              ";
                // line 30
                yield from $this->loadTemplate("@kart/parts/social.html.twig", "@kart/parts/footer.html.twig", 30)->unwrap()->yield($context);
                // line 31
                yield "            </div>
          ";
            }
            // line 33
            yield "        </div>
      ";
        }
        // line 35
        yield "    </div>
  </div>
</footer>
";
        // line 38
        if (($context["scrolltotop_on"] ?? null)) {
            // line 39
            yield "  <div class=\"scrolltop\"><i class=\"bi bi-chevron-up\"></i></div>
";
        }
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["page", "copyright_text", "all_icons_show", "site_name", "scrolltotop_on"]);        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@kart/parts/footer.html.twig";
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
        return array (  129 => 39,  127 => 38,  122 => 35,  118 => 33,  114 => 31,  112 => 30,  109 => 29,  106 => 28,  98 => 25,  95 => 24,  93 => 23,  90 => 22,  87 => 21,  81 => 18,  78 => 17,  75 => 16,  69 => 13,  66 => 12,  64 => 11,  60 => 9,  53 => 5,  49 => 3,  47 => 2,  44 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<footer class=\"footer full-width\">
  {% if page.footer_top %}
  <div class=\"footer-top full-width\">
    <div class=\"container\">
      {{ page.footer_top }}
    </div>
  </div>
  {% endif %}
  <div class=\"footer-main full-width\">
    <div class=\"container\">
      {% if page.footer %}
        <section class=\"footer-blocks full-width\">
          {{ page.footer }}
        </section>
      {% endif %}
      {% if page.footer_bottom %}
        <section class=\"footer-bottom-blocks full-width\">
          {{ page.footer_bottom }}
        </section>
      {% endif %}
      {% if copyright_text or all_icons_show %}
        <div class=\"footer-last\">
          {% if copyright_text %}
            <div class=\"copyright footer-last-region\">
              &copy; {{ \"now\"|date(\"Y\") }} {{ site_name }}, All rights reserved.
            </div>
          {% endif %}
          {% if all_icons_show %}
            <div class=\"footer-social footer-last-region\">
              {% include '@kart/parts/social.html.twig' %}
            </div>
          {% endif %}
        </div>
      {% endif %}
    </div>
  </div>
</footer>
{% if scrolltotop_on %}
  <div class=\"scrolltop\"><i class=\"bi bi-chevron-up\"></i></div>
{% endif %}", "@kart/parts/footer.html.twig", "/var/www/html/themes/contrib/kart/templates/parts/footer.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = ["if" => 2, "include" => 30];
        static $filters = ["escape" => 5, "date" => 25];
        static $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['if', 'include'],
                ['escape', 'date'],
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
