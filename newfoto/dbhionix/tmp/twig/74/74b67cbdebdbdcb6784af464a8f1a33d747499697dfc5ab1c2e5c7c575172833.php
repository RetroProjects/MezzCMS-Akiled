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

/* privileges/require_options.twig */
class __TwigTemplate_c2122afd138b886da82b536166f2dfd0a25b3d24f775e69d06b38bd1c3412020 extends \Twig\Template
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
        echo "<fieldset>
    <legend>SSL</legend>
    <div id=\"require_ssl_div\">
        ";
        // line 4
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["require_options"]) ? $context["require_options"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["require_option"]) {
            // line 5
            echo "            ";
            if (($this->getAttribute($context["require_option"], "name", [], "array") === "ssl_cipher")) {
                // line 6
                echo "                <div id=\"specified_div\" style=\"padding-left:20px;\">
            ";
            }
            // line 8
            echo "            ";
            $this->loadTemplate("privileges/require_options_item.twig", "privileges/require_options.twig", 8)->display(twig_to_array(["require_option" =>             // line 9
$context["require_option"]]));
            // line 11
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['require_option'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 12
        echo "        </div>";
        // line 13
        echo "    </div>";
        // line 14
        echo "</fieldset>
";
    }

    public function getTemplateName()
    {
        return "privileges/require_options.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  60 => 14,  58 => 13,  56 => 12,  50 => 11,  48 => 9,  46 => 8,  42 => 6,  39 => 5,  35 => 4,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "privileges/require_options.twig", "C:\\inetpub\\Hionixnew\\newfoto\\dbhionix\\templates\\privileges\\require_options.twig");
    }
}
