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

/* modules/custom/bt_mobile_phone/templates/mobile-phone-block.html.twig */
class __TwigTemplate_d581b985f87fd40759f385d277f69a5c extends Template
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
        if (($context["entity"] ?? null)) {
            // line 2
            echo "<div class=\"mobile-phone-block\">
  ";
            // line 3
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["entity"] ?? null), "field_bt_image", [], "any", false, false, true, 3), "entity", [], "any", false, false, true, 3)) {
                // line 4
                echo "    <div class=\"mobile-phone-block__image\">
      <img width=\"250\" src=\"";
                // line 5
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->getFileUrl($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["entity"] ?? null), "field_bt_image", [], "any", false, false, true, 5), "entity", [], "any", false, false, true, 5), "fileuri", [], "any", false, false, true, 5), 5, $this->source)), "html", null, true);
                echo "\">
    </div>
  ";
            }
            // line 8
            echo "  ";
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["entity"] ?? null), "field_brand", [], "any", false, false, true, 8), "entity", [], "any", false, false, true, 8) || twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["entity"] ?? null), "field_model", [], "any", false, false, true, 8), "value", [], "any", false, false, true, 8))) {
                // line 9
                echo "    <h3 class=\"mobile-phone-block__title\">
      ";
                // line 10
                if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["entity"] ?? null), "field_brand", [], "any", false, false, true, 10), "entity", [], "any", false, false, true, 10)) {
                    // line 11
                    echo "        ";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["entity"] ?? null), "field_brand", [], "any", false, false, true, 11), "entity", [], "any", false, false, true, 11), "label", [], "any", false, false, true, 11), 11, $this->source), "html", null, true);
                    echo "
      ";
                }
                // line 13
                echo "      ";
                if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["entity"] ?? null), "field_model", [], "any", false, false, true, 13), "value", [], "any", false, false, true, 13)) {
                    // line 14
                    echo "        ";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["entity"] ?? null), "field_model", [], "any", false, false, true, 14), "value", [], "any", false, false, true, 14), 14, $this->source), "html", null, true);
                    echo "
      ";
                }
                // line 16
                echo "    </h3>
  ";
            }
            // line 18
            echo "  ";
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["entity"] ?? null), "field_price", [], "any", false, false, true, 18), "value", [], "any", false, false, true, 18)) {
                // line 19
                echo "    <div class=\"mobile-phone-block__price\">
      ";
                // line 20
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["entity"] ?? null), "field_price", [], "any", false, false, true, 20), "value", [], "any", false, false, true, 20), 20, $this->source), "html", null, true);
                echo " &euro;
    </div>
  ";
            }
            // line 23
            echo "  ";
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["entity"] ?? null), "field_available", [], "any", false, false, true, 23), "value", [], "any", false, false, true, 23)) {
                // line 24
                echo "    <div class=\"mobile-phone-block__availability\">
      ";
                // line 25
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar((((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["entity"] ?? null), "field_available", [], "any", false, false, true, 25), "value", [], "any", false, false, true, 25) == "yes")) ? ("Available") : ("Out Of Stock")));
                echo "
    </div>
  ";
            }
            // line 28
            echo "</div>
";
        }
    }

    public function getTemplateName()
    {
        return "modules/custom/bt_mobile_phone/templates/mobile-phone-block.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  106 => 28,  100 => 25,  97 => 24,  94 => 23,  88 => 20,  85 => 19,  82 => 18,  78 => 16,  72 => 14,  69 => 13,  63 => 11,  61 => 10,  58 => 9,  55 => 8,  49 => 5,  46 => 4,  44 => 3,  41 => 2,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "modules/custom/bt_mobile_phone/templates/mobile-phone-block.html.twig", "/var/www/html/web/modules/custom/bt_mobile_phone/templates/mobile-phone-block.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 1);
        static $filters = array("escape" => 5);
        static $functions = array("file_url" => 5);

        try {
            $this->sandbox->checkSecurity(
                ['if'],
                ['escape'],
                ['file_url']
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
