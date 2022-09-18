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

/* display/export/option_header.twig */
class __TwigTemplate_0462e5d478e41b90a40724037c283063088ba7f771f495d27bcbf619df104d15 extends \Twig\Template
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
        echo "<div class=\"exportoptions\" id=\"header\">
    <h2>
        ";
        // line 3
        echo PhpMyAdmin\Util::getImage("b_export", _gettext("Export"));
        echo "
        ";
        // line 4
        if (((isset($context["export_type"]) ? $context["export_type"] : null) == "server")) {
            // line 5
            echo "            ";
            echo _gettext("Exporting databases from the current server");
            // line 6
            echo "        ";
        } elseif (((isset($context["export_type"]) ? $context["export_type"] : null) == "database")) {
            // line 7
            echo "            ";
            echo twig_escape_filter($this->env, sprintf(_gettext("Exporting tables from \"%s\" database"), (isset($context["db"]) ? $context["db"] : null)), "html", null, true);
            echo "
        ";
        } else {
            // line 9
            echo "            ";
            echo twig_escape_filter($this->env, sprintf(_gettext("Exporting rows from \"%s\" table"), (isset($context["table"]) ? $context["table"] : null)), "html", null, true);
            echo "
        ";
        }
        // line 11
        echo "    </h2>
</div>
";
    }

    public function getTemplateName()
    {
        return "display/export/option_header.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  58 => 11,  52 => 9,  46 => 7,  43 => 6,  40 => 5,  38 => 4,  34 => 3,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "display/export/option_header.twig", "C:\\inetpub\\Hionixnew\\newfoto\\dbhionix\\templates\\display\\export\\option_header.twig");
    }
}
