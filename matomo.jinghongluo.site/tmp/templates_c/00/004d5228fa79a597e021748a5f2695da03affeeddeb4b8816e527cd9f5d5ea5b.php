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

/* @Dashboard/_dashboardSettings.twig */
class __TwigTemplate_7a3b95edb4a1d0cffc5d01498a2ff58a7cb567f5a659c6386dd7e09e384d7e20 extends \Twig\Template
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
        echo "<a class=\"title\" title=\"";
        echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), ["Dashboard_ManageDashboard"]), "html_attr");
        echo "\" tabindex=\"4\"><span class=\"icon icon-arrow-bottom\"></span>";
        echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), ["Dashboard_Dashboard"]), "html", null, true);
        echo " </a>
<div class=\"dropdown positionInViewport\">
    <ul class=\"submenu\">
        <li>
            <div class=\"addWidget\">";
        // line 5
        echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), ["Dashboard_AddAWidget"]), "html", null, true);
        echo "</div>
            <ul class=\"widgetpreview-categorylist\"></ul>
        </li>
        ";
        // line 8
        if ((twig_length_filter($this->env, ($context["dashboardActions"] ?? $this->getContext($context, "dashboardActions"))) > 0)) {
            // line 9
            echo "            <li>
                <div class=\"manageDashboard\">";
            // line 10
            echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), ["Dashboard_ManageDashboard"]), "html", null, true);
            echo "</div>
                <ul>
                    ";
            // line 12
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["dashboardActions"] ?? $this->getContext($context, "dashboardActions")));
            foreach ($context['_seq'] as $context["action"] => $context["title"]) {
                // line 13
                echo "                        <li data-action=\"";
                echo \Piwik\piwik_escape_filter($this->env, $context["action"], "html", null, true);
                echo "\">";
                echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), [$context["title"]]), "html", null, true);
                echo "</li>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['action'], $context['title'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 15
            echo "                </ul>
            </li>
        ";
        }
        // line 18
        echo "        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["generalActions"] ?? $this->getContext($context, "generalActions")));
        foreach ($context['_seq'] as $context["action"] => $context["title"]) {
            // line 19
            echo "            <li class=\"generalAction\" data-action=\"";
            echo \Piwik\piwik_escape_filter($this->env, $context["action"], "html", null, true);
            echo "\">";
            echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), [$context["title"]]), "html", null, true);
            echo "</li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['action'], $context['title'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 21
        echo "    </ul>
    <ul class=\"widgetpreview-widgetlist\"></ul>
    <div class=\"widgetpreview-preview\"></div>
</div>
";
    }

    public function getTemplateName()
    {
        return "@Dashboard/_dashboardSettings.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  92 => 21,  81 => 19,  76 => 18,  71 => 15,  60 => 13,  56 => 12,  51 => 10,  48 => 9,  46 => 8,  40 => 5,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("<a class=\"title\" title=\"{{ 'Dashboard_ManageDashboard'|translate|e('html_attr') }}\" tabindex=\"4\"><span class=\"icon icon-arrow-bottom\"></span>{{ 'Dashboard_Dashboard'|translate }} </a>
<div class=\"dropdown positionInViewport\">
    <ul class=\"submenu\">
        <li>
            <div class=\"addWidget\">{{ 'Dashboard_AddAWidget'|translate }}</div>
            <ul class=\"widgetpreview-categorylist\"></ul>
        </li>
        {% if dashboardActions|length > 0 %}
            <li>
                <div class=\"manageDashboard\">{{ 'Dashboard_ManageDashboard'|translate }}</div>
                <ul>
                    {% for action, title in dashboardActions %}
                        <li data-action=\"{{ action }}\">{{ title|translate }}</li>
                    {% endfor %}
                </ul>
            </li>
        {% endif %}
        {% for action, title in generalActions %}
            <li class=\"generalAction\" data-action=\"{{ action }}\">{{ title|translate }}</li>
        {% endfor %}
    </ul>
    <ul class=\"widgetpreview-widgetlist\"></ul>
    <div class=\"widgetpreview-preview\"></div>
</div>
", "@Dashboard/_dashboardSettings.twig", "/var/www/matomo.jinghongluo.site/plugins/Dashboard/templates/_dashboardSettings.twig");
    }
}
