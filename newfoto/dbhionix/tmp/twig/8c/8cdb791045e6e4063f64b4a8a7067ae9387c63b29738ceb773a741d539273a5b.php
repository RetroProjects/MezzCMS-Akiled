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

/* table/search/rows_zoom.twig */
class __TwigTemplate_cd50b22f257abb237e7b4f328344638c00c68f99753e11a6f219150da1428894 extends \Twig\Template
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
        // line 2
        $context["type"] = [];
        // line 3
        $context["collation"] = [];
        // line 4
        $context["func"] = [];
        // line 5
        $context["value"] = [];
        // line 6
        echo "
";
        // line 7
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(0, 3));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 8
            echo "    ";
            // line 9
            echo "    ";
            if (($context["i"] == 2)) {
                // line 10
                echo "        <tr>
            <td>
                ";
                // line 12
                echo _gettext("Additional search criteria");
                // line 13
                echo "            </td>
        </tr>
    ";
            }
            // line 16
            echo "    <tr class=\"noclick\">
        <th>
            <select name=\"criteriaColumnNames[]\" id=\"tableid_";
            // line 18
            echo twig_escape_filter($this->env, $context["i"], "html", null, true);
            echo "\" >
                <option value=\"pma_null\">
                    ";
            // line 20
            echo _gettext("None");
            // line 21
            echo "                </option>
                ";
            // line 22
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(0, (twig_length_filter($this->env, (isset($context["column_names"]) ? $context["column_names"] : null)) - 1)));
            foreach ($context['_seq'] as $context["_key"] => $context["j"]) {
                // line 23
                echo "                    ";
                if (($this->getAttribute((isset($context["criteria_column_names"]) ? $context["criteria_column_names"] : null), $context["i"], [], "array", true, true) && ($this->getAttribute(                // line 24
(isset($context["criteria_column_names"]) ? $context["criteria_column_names"] : null), $context["i"], [], "array") == $this->getAttribute((isset($context["column_names"]) ? $context["column_names"] : null), $context["j"], [], "array")))) {
                    // line 25
                    echo "                        <option value=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["column_names"]) ? $context["column_names"] : null), $context["j"], [], "array"), "html", null, true);
                    echo "\" selected=\"selected\">
                            ";
                    // line 26
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["column_names"]) ? $context["column_names"] : null), $context["j"], [], "array"), "html", null, true);
                    echo "
                        </option>
                    ";
                } else {
                    // line 29
                    echo "                        <option value=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["column_names"]) ? $context["column_names"] : null), $context["j"], [], "array"), "html", null, true);
                    echo "\">
                            ";
                    // line 30
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["column_names"]) ? $context["column_names"] : null), $context["j"], [], "array"), "html", null, true);
                    echo "
                        </option>
                    ";
                }
                // line 33
                echo "                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['j'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 34
            echo "            </select>
        </th>
        ";
            // line 36
            if (((isset($context["criteria_column_names"]) || array_key_exists("criteria_column_names", $context)) && ($this->getAttribute(            // line 37
(isset($context["criteria_column_names"]) ? $context["criteria_column_names"] : null), $context["i"], [], "array") != "pma_null"))) {
                // line 38
                echo "            ";
                $context["key"] = array_search($this->getAttribute((isset($context["criteria_column_names"]) ? $context["criteria_column_names"] : null), $context["i"], [], "array"), (isset($context["column_names"]) ? $context["column_names"] : null));
                // line 39
                echo "            ";
                $context["properties"] = $this->getAttribute((isset($context["self"]) ? $context["self"] : null), "getColumnProperties", [0 => $context["i"], 1 => (isset($context["key"]) ? $context["key"] : null)], "method");
                // line 40
                echo "            ";
                $context["type"] = twig_array_merge((isset($context["type"]) ? $context["type"] : null), ["i" => $this->getAttribute((isset($context["properties"]) ? $context["properties"] : null), "type", [], "array")]);
                // line 41
                echo "            ";
                $context["collation"] = twig_array_merge((isset($context["collation"]) ? $context["collation"] : null), ["i" => $this->getAttribute((isset($context["properties"]) ? $context["properties"] : null), "collation", [], "array")]);
                // line 42
                echo "            ";
                $context["func"] = twig_array_merge((isset($context["func"]) ? $context["func"] : null), ["i" => $this->getAttribute((isset($context["properties"]) ? $context["properties"] : null), "func", [], "array")]);
                // line 43
                echo "            ";
                $context["value"] = twig_array_merge((isset($context["value"]) ? $context["value"] : null), ["i" => $this->getAttribute((isset($context["properties"]) ? $context["properties"] : null), "value", [], "array")]);
                // line 44
                echo "        ";
            }
            // line 45
            echo "        ";
            // line 46
            echo "        <td dir=\"ltr\">
            ";
            // line 47
            (($this->getAttribute((isset($context["type"]) ? $context["type"] : null), $context["i"], [], "array", true, true)) ? (print (twig_escape_filter($this->env, $this->getAttribute((isset($context["type"]) ? $context["type"] : null), $context["i"], [], "array"), "html", null, true))) : (print ("")));
            echo "
        </td>
        ";
            // line 50
            echo "        <td>
            ";
            // line 51
            (($this->getAttribute((isset($context["collation"]) ? $context["collation"] : null), $context["i"], [], "array", true, true)) ? (print (twig_escape_filter($this->env, $this->getAttribute((isset($context["collation"]) ? $context["collation"] : null), $context["i"], [], "array"), "html", null, true))) : (print ("")));
            echo "
        </td>
        ";
            // line 54
            echo "        <td>
            ";
            // line 55
            echo (($this->getAttribute((isset($context["func"]) ? $context["func"] : null), $context["i"], [], "array", true, true)) ? ($this->getAttribute((isset($context["func"]) ? $context["func"] : null), $context["i"], [], "array")) : (""));
            echo "
        </td>
        ";
            // line 58
            echo "        <td>
        </td>
        <td>
            ";
            // line 61
            echo (($this->getAttribute((isset($context["value"]) ? $context["value"] : null), $context["i"], [], "array", true, true)) ? ($this->getAttribute((isset($context["value"]) ? $context["value"] : null), $context["i"], [], "array")) : (""));
            echo "
            ";
            // line 63
            echo "            <input type=\"hidden\"
                name=\"criteriaColumnTypes[";
            // line 64
            echo twig_escape_filter($this->env, $context["i"], "html", null, true);
            echo "]\"
                id=\"types_";
            // line 65
            echo twig_escape_filter($this->env, $context["i"], "html", null, true);
            echo "\"";
            // line 66
            if ($this->getAttribute((isset($context["criteria_column_types"]) ? $context["criteria_column_types"] : null), $context["i"], [], "array", true, true)) {
                // line 67
                echo "                    value=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["criteria_column_types"]) ? $context["criteria_column_types"] : null), $context["i"], [], "array"), "html", null, true);
                echo "\"";
            }
            // line 68
            echo " />
            <input type=\"hidden\"
                name=\"criteriaColumnCollations[";
            // line 70
            echo twig_escape_filter($this->env, $context["i"], "html", null, true);
            echo "]\"
                id=\"collations_";
            // line 71
            echo twig_escape_filter($this->env, $context["i"], "html", null, true);
            echo "\" />
        </td>
    </tr>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    public function getTemplateName()
    {
        return "table/search/rows_zoom.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  199 => 71,  195 => 70,  191 => 68,  186 => 67,  184 => 66,  181 => 65,  177 => 64,  174 => 63,  170 => 61,  165 => 58,  160 => 55,  157 => 54,  152 => 51,  149 => 50,  144 => 47,  141 => 46,  139 => 45,  136 => 44,  133 => 43,  130 => 42,  127 => 41,  124 => 40,  121 => 39,  118 => 38,  116 => 37,  115 => 36,  111 => 34,  105 => 33,  99 => 30,  94 => 29,  88 => 26,  83 => 25,  81 => 24,  79 => 23,  75 => 22,  72 => 21,  70 => 20,  65 => 18,  61 => 16,  56 => 13,  54 => 12,  50 => 10,  47 => 9,  45 => 8,  41 => 7,  38 => 6,  36 => 5,  34 => 4,  32 => 3,  30 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "table/search/rows_zoom.twig", "C:\\inetpub\\Hionixnew\\newfoto\\dbhionix\\templates\\table\\search\\rows_zoom.twig");
    }
}
