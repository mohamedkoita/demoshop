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

/* @kart/parts/social.html.twig */
class __TwigTemplate_3c57153b04424c4b8d99de52231cf55c extends Template
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
        yield "<ul class=\"social-icons\">
  ";
        // line 2
        if ((($context["facebook_url"] ?? null) != "")) {
            // line 3
            yield "    <li><a href=\"";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["facebook_url"] ?? null), "html", null, true);
            yield "\" target=\"_blank\"><i class=\"bi bi-facebook\"></i></a></li>
  ";
        }
        // line 5
        yield "  ";
        if ((($context["twitter_url"] ?? null) != "")) {
            // line 6
            yield "    <li><a href=\"";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["twitter_url"] ?? null), "html", null, true);
            yield "\" target=\"_blank\"><i class=\"bi bi-twitter-x\"></i></a></li>
  ";
        }
        // line 8
        yield "  ";
        if ((($context["instagram_url"] ?? null) != "")) {
            // line 9
            yield "    <li><a href=\"";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["instagram_url"] ?? null), "html", null, true);
            yield "\" target=\"_blank\"><i class=\"bi bi-instagram\"></i></a></li>
  ";
        }
        // line 11
        yield "  ";
        if ((($context["linkedin_url"] ?? null) != "")) {
            // line 12
            yield "    <li><a href=\"";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["linkedin_url"] ?? null), "html", null, true);
            yield "\" target=\"_blank\"><i class=\"bi bi-linkedin\"></i></a></li>
  ";
        }
        // line 14
        yield "  ";
        if ((($context["youtube_url"] ?? null) != "")) {
            // line 15
            yield "    <li><a href=\"";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["youtube_url"] ?? null), "html", null, true);
            yield "\" target=\"_blank\"><i class=\"bi bi-youtube\"></i></a></li>
  ";
        }
        // line 17
        yield "  ";
        if ((($context["vimeo_url"] ?? null) != "")) {
            // line 18
            yield "    <li><a href=\"";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["vimeo_url"] ?? null), "html", null, true);
            yield "\" target=\"_blank\"><i class=\"bi bi-vimeo\"></i></a></li>
  ";
        }
        // line 20
        yield "  ";
        if ((($context["telegram_url"] ?? null) != "")) {
            // line 21
            yield "    <li><a href=\"";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["telegram_url"] ?? null), "html", null, true);
            yield "\" target=\"_blank\"><i class=\"bi bi-telegram\"></i></a></li>
  ";
        }
        // line 23
        yield "  ";
        if ((($context["whatsapp_url"] ?? null) != "")) {
            // line 24
            yield "    <li><a href=\"";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["whatsapp_url"] ?? null), "html", null, true);
            yield "\" target=\"_blank\"><i class=\"bi bi-whatsapp\"></i></a></li>
  ";
        }
        // line 26
        yield "  ";
        if ((($context["github_url"] ?? null) != "")) {
            // line 27
            yield "    <li><a href=\"";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["github_url"] ?? null), "html", null, true);
            yield "\" target=\"_blank\"><i class=\"bi bi-github\"></i></a></li>
  ";
        }
        // line 29
        yield "</ul>
";
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["facebook_url", "twitter_url", "instagram_url", "linkedin_url", "youtube_url", "vimeo_url", "telegram_url", "whatsapp_url", "github_url"]);        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@kart/parts/social.html.twig";
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
        return array (  127 => 29,  121 => 27,  118 => 26,  112 => 24,  109 => 23,  103 => 21,  100 => 20,  94 => 18,  91 => 17,  85 => 15,  82 => 14,  76 => 12,  73 => 11,  67 => 9,  64 => 8,  58 => 6,  55 => 5,  49 => 3,  47 => 2,  44 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<ul class=\"social-icons\">
  {% if facebook_url != '' %}
    <li><a href=\"{{ facebook_url }}\" target=\"_blank\"><i class=\"bi bi-facebook\"></i></a></li>
  {% endif %}
  {% if twitter_url != '' %}
    <li><a href=\"{{ twitter_url }}\" target=\"_blank\"><i class=\"bi bi-twitter-x\"></i></a></li>
  {% endif %}
  {% if instagram_url != '' %}
    <li><a href=\"{{ instagram_url }}\" target=\"_blank\"><i class=\"bi bi-instagram\"></i></a></li>
  {% endif %}
  {% if linkedin_url != '' %}
    <li><a href=\"{{ linkedin_url }}\" target=\"_blank\"><i class=\"bi bi-linkedin\"></i></a></li>
  {% endif %}
  {% if youtube_url != '' %}
    <li><a href=\"{{ youtube_url }}\" target=\"_blank\"><i class=\"bi bi-youtube\"></i></a></li>
  {% endif %}
  {% if vimeo_url != '' %}
    <li><a href=\"{{ vimeo_url }}\" target=\"_blank\"><i class=\"bi bi-vimeo\"></i></a></li>
  {% endif %}
  {% if telegram_url != '' %}
    <li><a href=\"{{ telegram_url }}\" target=\"_blank\"><i class=\"bi bi-telegram\"></i></a></li>
  {% endif %}
  {% if whatsapp_url != '' %}
    <li><a href=\"{{ whatsapp_url }}\" target=\"_blank\"><i class=\"bi bi-whatsapp\"></i></a></li>
  {% endif %}
  {% if github_url != '' %}
    <li><a href=\"{{ github_url }}\" target=\"_blank\"><i class=\"bi bi-github\"></i></a></li>
  {% endif %}
</ul>
", "@kart/parts/social.html.twig", "/var/www/html/themes/contrib/kart/templates/parts/social.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = ["if" => 2];
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
