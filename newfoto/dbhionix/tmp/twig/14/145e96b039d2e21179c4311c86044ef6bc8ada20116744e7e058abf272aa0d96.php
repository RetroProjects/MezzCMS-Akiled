<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* navigation/logo.twig */
class __TwigTemplate_175c8b727a750a9c4589284fa2a4e22a3751b1ba76a274f686b0843cdcd10ebf extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 1
        if ((isset($context["display_logo"]) ? $context["display_logo"] : null)) {
            // line 2
            echo "    <div id=\"pmalogo\">
        ";
            // line 3
            if ((isset($context["use_logo_link"]) ? $context["use_logo_link"] : null)) {
                // line 4
                echo "            <a href=\"";
                echo (((isset($context["logo_link"]) || array_key_exists("logo_link", $context))) ? (_twig_default_filter((isset($context["logo_link"]) ? $context["logo_link"] : null), "#")) : ("#"));
                echo "\"";
                // line 5
                (((isset($context["link_attribs"]) || array_key_exists("link_attribs", $context))) ? (print (twig_escape_filter($this->env, (" " . (isset($context["link_attribs"]) ? $context["link_attribs"] : null)), "html", null, true))) : (print ("")));
                echo ">
        ";
            }
            // line 7
            echo "        ";
            echo (isset($context["logo"]) ? $context["logo"] : null);
            echo "
        ";
            // line 8
            if ((isset($context["use_logo_link"]) ? $context["use_logo_link"] : null)) {
                // line 9
                echo "            </a>
        ";
            }
            // line 11
            echo "    </div>
";
        }
    }

    public function getTemplateName()
    {
        return "navigation/logo.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 11,  53 => 9,  51 => 8,  46 => 7,  41 => 5,  37 => 4,  35 => 3,  32 => 2,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "navigation/logo.twig", "C:\\inetpub\\Hionixnew\\newfoto\\dbhionix\\templates\\navigation\\logo.twig");
    }
}
