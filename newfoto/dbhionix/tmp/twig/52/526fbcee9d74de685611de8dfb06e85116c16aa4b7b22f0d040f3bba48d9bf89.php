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

/* privileges/require_options_item.twig */
class __TwigTemplate_a4eda54118f4b35687bef912427b6484737d0ec75324814d8a91ecba5ba1b334 extends \Twig\Template
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
        echo "<div class=\"item\">
    ";
        // line 2
        if ($this->getAttribute((isset($context["require_option"]) ? $context["require_option"] : null), "radio", [], "array")) {
            // line 3
            echo "        <input type=\"radio\" name=\"ssl_type\"
            id=\"";
            // line 4
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["require_option"]) ? $context["require_option"] : null), "name", [], "array"), "html", null, true);
            echo "_";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["require_option"]) ? $context["require_option"] : null), "value", [], "array"), "html", null, true);
            echo "\"
            title=\"";
            // line 5
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["require_option"]) ? $context["require_option"] : null), "description", [], "array"), "html", null, true);
            echo "\"
            value=\"";
            // line 6
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["require_option"]) ? $context["require_option"] : null), "value", [], "array"), "html", null, true);
            echo "\" ";
            echo $this->getAttribute((isset($context["require_option"]) ? $context["require_option"] : null), "checked", [], "array");
            // line 7
            echo "/>
        <label for=\"";
            // line 8
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["require_option"]) ? $context["require_option"] : null), "name", [], "array"), "html", null, true);
            echo "_";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["require_option"]) ? $context["require_option"] : null), "value", [], "array"), "html", null, true);
            echo "\">
            <code>";
            // line 9
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["require_option"]) ? $context["require_option"] : null), "label", [], "array"), "html", null, true);
            echo "</code>
        </label>
    ";
        } else {
            // line 12
            echo "        <label for=\"text_";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["require_option"]) ? $context["require_option"] : null), "name", [], "array"), "html", null, true);
            echo "\">
            <code>";
            // line 13
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["require_option"]) ? $context["require_option"] : null), "label", [], "array"), "html", null, true);
            echo "</code>
        </label>
        <input type=\"text\" name=\"";
            // line 15
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["require_option"]) ? $context["require_option"] : null), "name", [], "array"), "html", null, true);
            echo "\"
            id=\"text_";
            // line 16
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["require_option"]) ? $context["require_option"] : null), "name", [], "array"), "html", null, true);
            echo "\" value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["require_option"]) ? $context["require_option"] : null), "value", [], "array"), "html", null, true);
            echo "\"
            size=\"80\" title=\"";
            // line 17
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["require_option"]) ? $context["require_option"] : null), "description", [], "array"), "html", null, true);
            echo "\"";
            // line 18
            if ($this->getAttribute((isset($context["require_option"]) ? $context["require_option"] : null), "disabled", [], "array")) {
                // line 19
                echo "                disabled";
            }
            // line 21
            echo "/>
    ";
        }
        // line 23
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "privileges/require_options_item.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  99 => 23,  95 => 21,  92 => 19,  90 => 18,  87 => 17,  81 => 16,  77 => 15,  72 => 13,  67 => 12,  61 => 9,  55 => 8,  52 => 7,  48 => 6,  44 => 5,  38 => 4,  35 => 3,  33 => 2,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "privileges/require_options_item.twig", "C:\\inetpub\\Hionixnew\\newfoto\\dbhionix\\templates\\privileges\\require_options_item.twig");
    }
}
