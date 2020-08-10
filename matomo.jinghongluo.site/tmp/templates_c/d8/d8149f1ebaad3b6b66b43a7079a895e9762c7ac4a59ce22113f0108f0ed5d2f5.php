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

/* @CoreHome/_shortcuts.twig */
class __TwigTemplate_e36b7acc98c79cc25dd1b3677a8e5411ea82658a3f8a3aab9f8b4eaff7e29e47 extends \Twig\Template
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
        echo "<div class=\"ui-confirm\" id=\"shortcuthelp\">
    <h2>";
        // line 2
        echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), ["CoreHome_ShortcutsAvailable"]), "html", null, true);
        echo "</h2>
    <dl></dl>
</div>";
    }

    public function getTemplateName()
    {
        return "@CoreHome/_shortcuts.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  33 => 2,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"ui-confirm\" id=\"shortcuthelp\">
    <h2>{{ 'CoreHome_ShortcutsAvailable'|translate }}</h2>
    <dl></dl>
</div>", "@CoreHome/_shortcuts.twig", "/var/www/matomo.jinghongluo.site/plugins/CoreHome/templates/_shortcuts.twig");
    }
}
