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

/* themes/custom/mytheme/templates/layout/page.html.twig */
class __TwigTemplate_268a4b55546d0d4e213045cc58508db2 extends Template
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
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<h1>HEADER</h1>
<header role=\"banner\">
  ";
        // line 3
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, true, 3), 3, $this->source), "html", null, true);
        echo "

  ";
        // line 5
        if (((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "nav_branding", [], "any", false, false, true, 5) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "nav_main", [], "any", false, false, true, 5)) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "nav_additional", [], "any", false, false, true, 5))) {
            // line 6
            echo "  <nav class=\"";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["nav_classes"] ?? null), 6, $this->source), "html", null, true);
            echo "\">
    <div class=\"";
            // line 7
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["b5_top_container"] ?? null), 7, $this->source), "html", null, true);
            echo " d-flex\">
      ";
            // line 8
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "nav_branding", [], "any", false, false, true, 8), 8, $this->source), "html", null, true);
            echo "

      ";
            // line 10
            if ((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "nav_main", [], "any", false, false, true, 10) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "nav_additional", [], "any", false, false, true, 10))) {
                // line 11
                echo "        <button class=\"navbar-toggler collapsed\" type=\"button\" data-bs-toggle=\"collapse\"
                data-bs-target=\"#navbarSupportedContent\" aria-controls=\"navbarSupportedContent\"
                aria-expanded=\"false\" aria-label=\"Toggle navigation\">
          <span class=\"navbar-toggler-icon\"></span>
        </button>

        <div class=\"collapse navbar-collapse justify-content-md-end\" id=\"navbarSupportedContent\">
          ";
                // line 18
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "nav_main", [], "any", false, false, true, 18), 18, $this->source), "html", null, true);
                echo "
          ";
                // line 19
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "nav_additional", [], "any", false, false, true, 19), 19, $this->source), "html", null, true);
                echo "
        </div>
      ";
            }
            // line 22
            echo "    </div>
  </nav>
  ";
        }
        // line 25
        echo "
</header>
<h1>MAIN CONTENT</h1>
<main>
 ";
        // line 29
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content", [], "any", false, false, true, 29), 29, $this->source), "html", null, true);
        echo "
</main>
<h1>FOOTER</h1>
";
        // line 32
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer", [], "any", false, false, true, 32)) {
            // line 33
            echo "<footer role=\"contentinfo\" class=\"mt-auto ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["footer_classes"] ?? null), 33, $this->source), "html", null, true);
            echo "\">
  <div class=\"";
            // line 34
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["b5_top_container"] ?? null), 34, $this->source), "html", null, true);
            echo "\">
  <div";
            // line 35
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [0 => ($context["classes"] ?? null)], "method", false, false, true, 35), 35, $this->source), "html", null, true);
            echo ">
    <div class=\"container\">
      <div class=\"row align-items-start\">
        <div class=\"col\">
          <p>First column</p>
        </div>
        <div class=\"col\">
          <p>Second column</p>
        </div>
        <div class=\"col\">
          <p>Third column</p>
        </div>
      </div>
    </div>
  </div>
  </div>
</footer>
";
        }
    }

    public function getTemplateName()
    {
        return "themes/custom/mytheme/templates/layout/page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  113 => 35,  109 => 34,  104 => 33,  102 => 32,  96 => 29,  90 => 25,  85 => 22,  79 => 19,  75 => 18,  66 => 11,  64 => 10,  59 => 8,  55 => 7,  50 => 6,  48 => 5,  43 => 3,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<h1>HEADER</h1>
<header role=\"banner\">
  {{ page.header }}

  {% if page.nav_branding or page.nav_main or page.nav_additional %}
  <nav class=\"{{ nav_classes }}\">
    <div class=\"{{ b5_top_container }} d-flex\">
      {{ page.nav_branding }}

      {% if page.nav_main or page.nav_additional %}
        <button class=\"navbar-toggler collapsed\" type=\"button\" data-bs-toggle=\"collapse\"
                data-bs-target=\"#navbarSupportedContent\" aria-controls=\"navbarSupportedContent\"
                aria-expanded=\"false\" aria-label=\"Toggle navigation\">
          <span class=\"navbar-toggler-icon\"></span>
        </button>

        <div class=\"collapse navbar-collapse justify-content-md-end\" id=\"navbarSupportedContent\">
          {{ page.nav_main }}
          {{ page.nav_additional }}
        </div>
      {% endif %}
    </div>
  </nav>
  {% endif %}

</header>
<h1>MAIN CONTENT</h1>
<main>
 {{ page.content }}
</main>
<h1>FOOTER</h1>
{% if page.footer %}
<footer role=\"contentinfo\" class=\"mt-auto {{ footer_classes }}\">
  <div class=\"{{ b5_top_container }}\">
  <div{{ attributes.addClass(classes) }}>
    <div class=\"container\">
      <div class=\"row align-items-start\">
        <div class=\"col\">
          <p>First column</p>
        </div>
        <div class=\"col\">
          <p>Second column</p>
        </div>
        <div class=\"col\">
          <p>Third column</p>
        </div>
      </div>
    </div>
  </div>
  </div>
</footer>
{% endif %}", "themes/custom/mytheme/templates/layout/page.html.twig", "C:\\xampp\\htdocs\\drupal-10.0.0\\themes\\custom\\mytheme\\templates\\layout\\page.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 5);
        static $filters = array("escape" => 3);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['if'],
                ['escape'],
                []
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
