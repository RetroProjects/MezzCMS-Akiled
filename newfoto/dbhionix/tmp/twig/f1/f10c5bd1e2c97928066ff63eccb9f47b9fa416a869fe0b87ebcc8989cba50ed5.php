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

/* database/search/selection_form.twig */
class __TwigTemplate_eac7f2ce2b9e672901fb132d832b246d4e3dc71a74220eb04a2d066d98f3941d extends \Twig\Template
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
        echo "<a id=\"db_search\"></a>
<form id=\"db_search_form\" method=\"post\" action=\"db_search.php\" name=\"db_search\" class=\"ajax lock-page\">
    ";
        // line 3
        echo PhpMyAdmin\Url::getHiddenInputs((isset($context["db"]) ? $context["db"] : null));
        echo "
    <fieldset>
        <legend>";
        // line 5
        echo _gettext("Search in database");
        echo "</legend>
        <p>
            <label for=\"criteriaSearchString\" class=\"displayblock\">
                ";
        // line 8
        echo _gettext("Words or values to search for (wildcard: \"%\"):");
        // line 9
        echo "            </label>
            <input id=\"criteriaSearchString\" name=\"criteriaSearchString\" class=\"all85\" type=\"text\" value=\"";
        // line 11
        echo twig_escape_filter($this->env, (isset($context["criteria_search_string"]) ? $context["criteria_search_string"] : null), "html", null, true);
        echo "\">
        </p>

        <fieldset>
            <legend>";
        // line 15
        echo _gettext("Find:");
        echo "</legend>
            ";
        // line 17
        echo "            ";
        // line 19
        echo "            ";
        echo PhpMyAdmin\Util::getRadioFields("criteriaSearchType",         // line 21
(isset($context["choices"]) ? $context["choices"] : null),         // line 22
(isset($context["criteria_search_type"]) ? $context["criteria_search_type"] : null), true, false);
        // line 25
        echo "
        </fieldset>

        <fieldset>
            <legend>";
        // line 29
        echo _gettext("Inside tables:");
        echo "</legend>
            <p>
                <a href=\"#\" onclick=\"setSelectOptions('db_search', 'criteriaTables[]', true); return false;\">
                    ";
        // line 32
        echo _gettext("Select all");
        // line 33
        echo "                </a> /
                <a href=\"#\" onclick=\"setSelectOptions('db_search', 'criteriaTables[]', false); return false;\">
                    ";
        // line 35
        echo _gettext("Unselect all");
        // line 36
        echo "                </a>
            </p>
            <select name=\"criteriaTables[]\" multiple>
                ";
        // line 39
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["tables_names_only"]) ? $context["tables_names_only"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["each_table"]) {
            // line 40
            echo "                    <option value=\"";
            echo twig_escape_filter($this->env, $context["each_table"], "html", null, true);
            echo "\"";
            // line 41
            echo ((twig_in_filter($context["each_table"], (isset($context["criteria_tables"]) ? $context["criteria_tables"] : null))) ? (" selected") : (""));
            echo ">
                        ";
            // line 42
            echo twig_escape_filter($this->env, $context["each_table"], "html", null, true);
            echo "
                    </option>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['each_table'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 45
        echo "            </select>
        </fieldset>

        <p>
            ";
        // line 50
        echo "            <label for=\"criteriaColumnName\" class=\"displayblock\">
                ";
        // line 51
        echo _gettext("Inside column:");
        // line 52
        echo "            </label>
            <input id=\"criteriaColumnName\" type=\"text\" name=\"criteriaColumnName\" class=\"all85\" value=\"";
        // line 54
        (( !twig_test_empty((isset($context["criteria_column_name"]) ? $context["criteria_column_name"] : null))) ? (print (twig_escape_filter($this->env, (isset($context["criteria_column_name"]) ? $context["criteria_column_name"] : null), "html", null, true))) : (print ("")));
        echo "\">
        </p>
    </fieldset>
    <fieldset class=\"tblFooters\">
        <input type=\"submit\" name=\"submit_search\" value=\"";
        // line 58
        echo _gettext("Go");
        echo "\" id=\"buttonGo\">
    </fieldset>
</form>
<div id=\"togglesearchformdiv\">
    <a id=\"togglesearchformlink\"></a>
</div>
";
    }

    public function getTemplateName()
    {
        return "database/search/selection_form.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  135 => 58,  128 => 54,  125 => 52,  123 => 51,  120 => 50,  114 => 45,  105 => 42,  101 => 41,  97 => 40,  93 => 39,  88 => 36,  86 => 35,  82 => 33,  80 => 32,  74 => 29,  68 => 25,  66 => 22,  65 => 21,  63 => 19,  61 => 17,  57 => 15,  50 => 11,  47 => 9,  45 => 8,  39 => 5,  34 => 3,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "database/search/selection_form.twig", "C:\\inetpub\\Hionixnew\\newfoto\\dbhionix\\templates\\database\\search\\selection_form.twig");
    }
}
