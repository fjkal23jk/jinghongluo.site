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

/* @UsersManager/index.twig */
class __TwigTemplate_6b1c38c67951e985397febf779925467e14f015bfbaecfc2e122087fa91f4084 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->blocks = [
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "admin.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 3
        ob_start();
        echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), ["UsersManager_ManageAccess"]), "html", null, true);
        $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 1
        $this->parent = $this->loadTemplate("admin.twig", "@UsersManager/index.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_content($context, array $blocks = [])
    {
        // line 6
        echo "
<piwik-users-manager
    initial-site-id=\"";
        // line 8
        echo \Piwik\piwik_escape_filter($this->env, ($context["idSiteSelected"] ?? $this->getContext($context, "idSiteSelected")), "html", null, true);
        echo "\"
    initial-site-name=\"";
        // line 9
        echo call_user_func_array($this->env->getFilter('rawSafeDecoded')->getCallable(), [($context["defaultReportSiteName"] ?? $this->getContext($context, "defaultReportSiteName"))]);
        echo "\"
    current-user-role=\"'";
        // line 10
        echo \Piwik\piwik_escape_filter($this->env, ($context["currentUserRole"] ?? $this->getContext($context, "currentUserRole")), "html", null, true);
        echo "'\"
    access-levels=\"";
        // line 11
        echo \Piwik\piwik_escape_filter($this->env, twig_jsonencode_filter(($context["accessLevels"] ?? $this->getContext($context, "accessLevels"))), "html_attr");
        echo "\"
    filter-access-levels=\"";
        // line 12
        echo \Piwik\piwik_escape_filter($this->env, twig_jsonencode_filter(($context["filterAccessLevels"] ?? $this->getContext($context, "filterAccessLevels"))), "html_attr");
        echo "\"
>
</piwik-users-manager>

";
    }

    public function getTemplateName()
    {
        return "@UsersManager/index.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  67 => 12,  63 => 11,  59 => 10,  55 => 9,  51 => 8,  47 => 6,  44 => 5,  39 => 1,  35 => 3,  29 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'admin.twig' %}

{% set title %}{{ 'UsersManager_ManageAccess'|translate }}{% endset %}

{% block content %}

<piwik-users-manager
    initial-site-id=\"{{ idSiteSelected }}\"
    initial-site-name=\"{{ defaultReportSiteName|rawSafeDecoded }}\"
    current-user-role=\"'{{ currentUserRole }}'\"
    access-levels=\"{{ accessLevels|json_encode|e('html_attr') }}\"
    filter-access-levels=\"{{ filterAccessLevels|json_encode|e('html_attr') }}\"
>
</piwik-users-manager>

{% endblock %}
", "@UsersManager/index.twig", "/var/www/matomo.jinghongluo.site/plugins/UsersManager/templates/index.twig");
    }
}
