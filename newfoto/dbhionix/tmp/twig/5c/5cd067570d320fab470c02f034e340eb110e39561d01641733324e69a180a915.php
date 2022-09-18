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

/* privileges/global_priv_table.twig */
class __TwigTemplate_9066fef8bccd81776aae4d99d2c44c5930435fcd1806861966410fea791c0e08 extends \Twig\Template
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
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["priv_table"]) ? $context["priv_table"] : null));
        foreach ($context['_seq'] as $context["key"] => $context["table"]) {
            // line 2
            echo "    <fieldset>
        <legend>
            <input type=\"checkbox\" class=\"sub_checkall_box\" id=\"checkall_";
            // line 4
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["priv_table_names"]) ? $context["priv_table_names"] : null), $context["key"], [], "array"), "html", null, true);
            echo "_priv\"
                title=\"";
            // line 5
            echo _gettext("Check all");
            echo "\" />
            <label for=\"checkall_";
            // line 6
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["priv_table_names"]) ? $context["priv_table_names"] : null), $context["key"], [], "array"), "html", null, true);
            echo "_priv\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["priv_table_names"]) ? $context["priv_table_names"] : null), $context["key"], [], "array"), "html", null, true);
            echo "</label>
        </legend>
        ";
            // line 8
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["table"]);
            foreach ($context['_seq'] as $context["_key"] => $context["priv"]) {
                // line 9
                echo "            ";
                $context["checked"] = ((($this->getAttribute((isset($context["row"]) ? $context["row"] : null), ($this->getAttribute($context["priv"], 0, [], "array") . "_priv"), [], "array", true, true) && ($this->getAttribute((isset($context["row"]) ? $context["row"] : null), ($this->getAttribute($context["priv"], 0, [], "array") . "_priv"), [], "array") == "Y"))) ? (" checked=\"checked\"") : (""));
                // line 10
                echo "            ";
                $context["formatted_priv"] = PhpMyAdmin\Server\Privileges::formatPrivilege($context["priv"], true);
                // line 11
                echo "            ";
                $this->loadTemplate("privileges/global_priv_tbl_item.twig", "privileges/global_priv_table.twig", 11)->display(twig_to_array(["checked" =>                 // line 12
(isset($context["checked"]) ? $context["checked"] : null), "formatted_priv" =>                 // line 13
(isset($context["formatted_priv"]) ? $context["formatted_priv"] : null), "priv" =>                 // line 14
$context["priv"]]));
                // line 16
                echo "        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['priv'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 17
            echo "    </fieldset>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['table'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    public function getTemplateName()
    {
        return "privileges/global_priv_table.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  75 => 17,  69 => 16,  67 => 14,  66 => 13,  65 => 12,  63 => 11,  60 => 10,  57 => 9,  53 => 8,  46 => 6,  42 => 5,  38 => 4,  34 => 2,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "privileges/global_priv_table.twig", "C:\\inetpub\\Hionixnew\\newfoto\\dbhionix\\templates\\privileges\\global_priv_table.twig");
    }
}
