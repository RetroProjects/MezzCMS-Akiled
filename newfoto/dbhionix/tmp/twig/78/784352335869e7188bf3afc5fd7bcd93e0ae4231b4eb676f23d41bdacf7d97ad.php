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

/* privileges/add_privileges_database.twig */
class __TwigTemplate_e47ef91f5ce9837a9b6722ceb954d9471a32766b242c6986bbda84c0488afe71 extends \Twig\Template
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
        echo "<label for=\"text_dbname\">";
        echo _gettext("Add privileges on the following database(s):");
        echo "</label>";
        // line 3
        if ( !twig_test_empty((isset($context["databases"]) ? $context["databases"] : null))) {
            // line 4
            echo "    <select name=\"pred_dbname[]\" multiple=\"multiple\">
        ";
            // line 5
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["databases"]) ? $context["databases"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["database"]) {
                // line 6
                echo "            <option value=\"";
                echo twig_escape_filter($this->env, PhpMyAdmin\Util::escapeMysqlWildcards($context["database"]), "html", null, true);
                echo "\">
                ";
                // line 7
                echo twig_escape_filter($this->env, $context["database"], "html", null, true);
                echo "
            </option>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['database'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 10
            echo "    </select>
";
        }
        // line 13
        echo "<input type=\"text\" id=\"text_dbname\" name=\"dbname\" />
";
        // line 14
        echo PhpMyAdmin\Util::showHint(_gettext("Wildcards % and _ should be escaped with a \\ to use them literally."));
        echo "
";
    }

    public function getTemplateName()
    {
        return "privileges/add_privileges_database.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  64 => 14,  61 => 13,  57 => 10,  48 => 7,  43 => 6,  39 => 5,  36 => 4,  34 => 3,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "privileges/add_privileges_database.twig", "C:\\inetpub\\Hionixnew\\newfoto\\dbhionix\\templates\\privileges\\add_privileges_database.twig");
    }
}
