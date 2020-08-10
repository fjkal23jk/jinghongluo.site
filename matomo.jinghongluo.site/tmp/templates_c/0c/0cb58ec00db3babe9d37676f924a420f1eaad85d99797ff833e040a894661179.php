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

/* @MultiSites/getSitesInfo.twig */
class __TwigTemplate_4a2ca737d8516ca9cbf9f653ee2b9380036391841842a2ee44ce4616137b4df0 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->blocks = [
            'topcontrols' => [$this, 'block_topcontrols'],
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return $this->loadTemplate(((($context["isWidgetized"] ?? $this->getContext($context, "isWidgetized"))) ? ("empty.twig") : ("dashboard.twig")), "@MultiSites/getSitesInfo.twig", 1);
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_topcontrols($context, array $blocks = [])
    {
        // line 4
        echo "    ";
        if ( !($context["isWidgetized"] ?? $this->getContext($context, "isWidgetized"))) {
            // line 5
            echo "        ";
            $this->loadTemplate("@CoreHome/_periodSelect.twig", "@MultiSites/getSitesInfo.twig", 5)->display($context);
            // line 6
            echo "        ";
            $this->loadTemplate("@CoreHome/_headerMessage.twig", "@MultiSites/getSitesInfo.twig", 6)->display($context);
            // line 7
            echo "    ";
        }
    }

    // line 10
    public function block_content($context, array $blocks = [])
    {
        // line 11
        echo "<div class=\"row\" id=\"multisites\">
    <div class=\"col s12 m12 l10 offset-l1\">
        ";
        // line 13
        if (($context["isWidgetized"] ?? $this->getContext($context, "isWidgetized"))) {
            // line 14
            echo "            <div id=\"main\">
        ";
        } else {
            // line 16
            echo "            <div id=\"main\" class=\"card\">
                <div class=\"card-content\">
        ";
        }
        // line 19
        echo "                <div piwik-multisites-dashboard
                     display-revenue-column=\"";
        // line 20
        if (($context["displayRevenueColumn"] ?? $this->getContext($context, "displayRevenueColumn"))) {
            echo "true";
        } else {
            echo "false";
        }
        echo "\"
                     page-size=\"";
        // line 21
        echo \Piwik\piwik_escape_filter($this->env, ($context["limit"] ?? $this->getContext($context, "limit")), "html", null, true);
        echo "\"
                     show-sparklines=\"";
        // line 22
        if (($context["show_sparklines"] ?? $this->getContext($context, "show_sparklines"))) {
            echo "true";
        } else {
            echo "false";
        }
        echo "\"
                     date-sparkline=\"";
        // line 23
        echo \Piwik\piwik_escape_filter($this->env, ($context["dateSparkline"] ?? $this->getContext($context, "dateSparkline")), "html", null, true);
        echo "\"
                     auto-refresh-today-report=\"";
        // line 24
        echo \Piwik\piwik_escape_filter($this->env, ($context["autoRefreshTodayReport"] ?? $this->getContext($context, "autoRefreshTodayReport")), "html", null, true);
        echo "\">
                </div>
        ";
        // line 26
        if (($context["isWidgetized"] ?? $this->getContext($context, "isWidgetized"))) {
            // line 27
            echo "            </div>
        ";
        } else {
            // line 29
            echo "            </div></div>
        ";
        }
        // line 31
        echo "    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "@MultiSites/getSitesInfo.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  116 => 31,  112 => 29,  108 => 27,  106 => 26,  101 => 24,  97 => 23,  89 => 22,  85 => 21,  77 => 20,  74 => 19,  69 => 16,  65 => 14,  63 => 13,  59 => 11,  56 => 10,  51 => 7,  48 => 6,  45 => 5,  42 => 4,  39 => 3,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% extends isWidgetized ? 'empty.twig' : 'dashboard.twig' %}

{% block topcontrols %}
    {% if not isWidgetized %}
        {% include \"@CoreHome/_periodSelect.twig\" %}
        {% include \"@CoreHome/_headerMessage.twig\" %}
    {% endif %}
{% endblock %}

{% block content %}
<div class=\"row\" id=\"multisites\">
    <div class=\"col s12 m12 l10 offset-l1\">
        {% if isWidgetized %}
            <div id=\"main\">
        {% else %}
            <div id=\"main\" class=\"card\">
                <div class=\"card-content\">
        {% endif %}
                <div piwik-multisites-dashboard
                     display-revenue-column=\"{% if displayRevenueColumn %}true{% else %}false{%endif%}\"
                     page-size=\"{{ limit }}\"
                     show-sparklines=\"{% if show_sparklines %}true{% else %}false{%endif%}\"
                     date-sparkline=\"{{ dateSparkline }}\"
                     auto-refresh-today-report=\"{{ autoRefreshTodayReport }}\">
                </div>
        {% if isWidgetized %}
            </div>
        {% else %}
            </div></div>
        {% endif %}
    </div>
</div>
{% endblock %}
", "@MultiSites/getSitesInfo.twig", "/var/www/matomo.jinghongluo.site/plugins/MultiSites/templates/getSitesInfo.twig");
    }
}
