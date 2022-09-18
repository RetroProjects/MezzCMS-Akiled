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

/* table/search/fields_table.twig */
class __TwigTemplate_5cdd77185a11a4c20808a6d778018b2eb9106f1d2f233fed2f198d3116c3c15b extends \Twig\Template
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
        echo "<table class=\"data\"";
        echo ((((isset($context["search_type"]) ? $context["search_type"] : null) == "zoom")) ? (" id=\"tableFieldsId\"") : (""));
        echo ">
    ";
        // line 2
        $this->loadTemplate("table/search/table_header.twig", "table/search/fields_table.twig", 2)->display(twig_to_array(["geom_column_flag" =>         // line 3
(isset($context["geom_column_flag"]) ? $context["geom_column_flag"] : null)]));
        // line 5
        echo "    <tbody>
    ";
        // line 6
        if (((isset($context["search_type"]) ? $context["search_type"] : null) == "zoom")) {
            // line 7
            echo "        ";
            $this->loadTemplate("table/search/rows_zoom.twig", "table/search/fields_table.twig", 7)->display(twig_to_array(["self" =>             // line 8
(isset($context["self"]) ? $context["self"] : null), "column_names" =>             // line 9
(isset($context["column_names"]) ? $context["column_names"] : null), "criteria_column_names" =>             // line 10
(isset($context["criteria_column_names"]) ? $context["criteria_column_names"] : null), "criteria_column_types" =>             // line 11
(isset($context["criteria_column_types"]) ? $context["criteria_column_types"] : null)]));
            // line 13
            echo "    ";
        } else {
            // line 14
            echo "        ";
            $this->loadTemplate("table/search/rows_normal.twig", "table/search/fields_table.twig", 14)->display(twig_to_array(["self" =>             // line 15
(isset($context["self"]) ? $context["self"] : null), "geom_column_flag" =>             // line 16
(isset($context["geom_column_flag"]) ? $context["geom_column_flag"] : null), "column_names" =>             // line 17
(isset($context["column_names"]) ? $context["column_names"] : null), "column_types" =>             // line 18
(isset($context["column_types"]) ? $context["column_types"] : null), "column_collations" =>             // line 19
(isset($context["column_collations"]) ? $context["column_collations"] : null)]));
            // line 21
            echo "    ";
        }
        // line 22
        echo "    </tbody>
</table>
";
    }

    public function getTemplateName()
    {
        return "table/search/fields_table.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  64 => 22,  61 => 21,  59 => 19,  58 => 18,  57 => 17,  56 => 16,  55 => 15,  53 => 14,  50 => 13,  48 => 11,  47 => 10,  46 => 9,  45 => 8,  43 => 7,  41 => 6,  38 => 5,  36 => 3,  35 => 2,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "table/search/fields_table.twig", "C:\\inetpub\\Hionixnew\\newfoto\\dbhionix\\templates\\table\\search\\fields_table.twig");
    }
}
