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

/* privileges/resource_limits.twig */
class __TwigTemplate_6cb5fa7ca2a5b8088ecb5a54b4aab67c147510d58715d8f961b6f1d5a18d4d87 extends \Twig\Template
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
    <legend>";
        // line 2
        echo _gettext("Resource limits");
        echo "</legend>
    <p>
        <small>
            <em>";
        // line 5
        echo _gettext("Note: Setting these options to 0 (zero) removes the limit.");
        echo "</em>
        </small>
    </p>
    ";
        // line 8
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["limits"]) ? $context["limits"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["limit"]) {
            // line 9
            echo "        ";
            $this->loadTemplate("privileges/resource_limit_item.twig", "privileges/resource_limits.twig", 9)->display(twig_to_array(["limit" =>             // line 10
$context["limit"]]));
            // line 12
            echo "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['limit'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 13
        echo "</fieldset>
";
    }

    public function getTemplateName()
    {
        return "privileges/resource_limits.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  59 => 13,  53 => 12,  51 => 10,  49 => 9,  45 => 8,  39 => 5,  33 => 2,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "privileges/resource_limits.twig", "C:\\inetpub\\Hionixnew\\newfoto\\dbhionix\\templates\\privileges\\resource_limits.twig");
    }
}
