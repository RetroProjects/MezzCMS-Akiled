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

/* privileges/privileges_summary_row.twig */
class __TwigTemplate_376b82f28a10dc115f61fe857bf5f87043fa4dd35247e1f19de0ced3a655763a extends \Twig\Template
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
        echo "<tr>
    <td>";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : null), "html", null, true);
        echo "</td>
    <td><code>";
        // line 3
        echo (isset($context["privileges"]) ? $context["privileges"] : null);
        echo "</code></td>
    <td>";
        // line 4
        echo twig_escape_filter($this->env, (((isset($context["grant"]) ? $context["grant"] : null)) ? (_gettext("Yes")) : (_gettext("No"))), "html", null, true);
        echo "</td>

    ";
        // line 6
        if (((isset($context["type"]) ? $context["type"] : null) == "database")) {
            // line 7
            echo "        <td>";
            echo twig_escape_filter($this->env, (((isset($context["table_privs"]) ? $context["table_privs"] : null)) ? (_gettext("Yes")) : (_gettext("No"))), "html", null, true);
            echo "</td>
    ";
        } elseif ((        // line 8
(isset($context["type"]) ? $context["type"] : null) == "table")) {
            // line 9
            echo "        <td>";
            echo twig_escape_filter($this->env, (((isset($context["column_privs"]) ? $context["column_privs"] : null)) ? (_gettext("Yes")) : (_gettext("No"))), "html", null, true);
            echo "</td>
    ";
        }
        // line 11
        echo "
    <td>";
        // line 12
        echo (isset($context["edit_link"]) ? $context["edit_link"] : null);
        echo "</td>
    <td>";
        // line 13
        echo (isset($context["revoke_link"]) ? $context["revoke_link"] : null);
        echo "</td>
</tr>
";
    }

    public function getTemplateName()
    {
        return "privileges/privileges_summary_row.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  68 => 13,  64 => 12,  61 => 11,  55 => 9,  53 => 8,  48 => 7,  46 => 6,  41 => 4,  37 => 3,  33 => 2,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "privileges/privileges_summary_row.twig", "C:\\inetpub\\Hionixnew\\newfoto\\dbhionix\\templates\\privileges\\privileges_summary_row.twig");
    }
}
