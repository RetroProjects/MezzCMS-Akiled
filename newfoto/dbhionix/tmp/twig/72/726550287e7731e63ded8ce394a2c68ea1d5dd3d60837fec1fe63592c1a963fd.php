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

/* privileges/add_privileges_table.twig */
class __TwigTemplate_8bc08518f13ac63e97c28aa96e2c28bf2753dce662d88d405fd2b389880a2491 extends \Twig\Template
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
        echo "<input type=\"hidden\" name=\"dbname\" value=\"";
        echo twig_escape_filter($this->env, (isset($context["database"]) ? $context["database"] : null), "html", null, true);
        echo "\"/>

<label for=\"text_tablename\">";
        // line 3
        echo _gettext("Add privileges on the following table:");
        echo "</label>";
        // line 5
        if ( !twig_test_empty((isset($context["tables"]) ? $context["tables"] : null))) {
            // line 6
            echo "    <select name=\"pred_tablename\" class=\"autosubmit\">
        <option value=\"\" selected=\"selected\">";
            // line 7
            echo _gettext("Use text field");
            echo ":</option>
        ";
            // line 8
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["tables"]) ? $context["tables"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["table"]) {
                // line 9
                echo "            <option value=\"";
                echo twig_escape_filter($this->env, $context["table"], "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $context["table"], "html", null, true);
                echo "</option>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['table'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 11
            echo "    </select>
";
        }
        // line 14
        echo "<input type=\"text\" id=\"text_tablename\" name=\"tablename\" />
";
    }

    public function getTemplateName()
    {
        return "privileges/add_privileges_table.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  67 => 14,  63 => 11,  52 => 9,  48 => 8,  44 => 7,  41 => 6,  39 => 5,  36 => 3,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "privileges/add_privileges_table.twig", "C:\\inetpub\\Hionixnew\\newfoto\\dbhionix\\templates\\privileges\\add_privileges_table.twig");
    }
}
