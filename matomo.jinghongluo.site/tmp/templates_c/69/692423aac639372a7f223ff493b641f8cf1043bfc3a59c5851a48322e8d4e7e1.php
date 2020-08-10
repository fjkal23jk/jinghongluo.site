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

/* @SitesManager/siteWithoutData.twig */
class __TwigTemplate_01a7cac29c358b46afa964711c7a78cfb5a70b23bda8572f7f3104dd9005582a extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->blocks = [
            'notification' => [$this, 'block_notification'],
            'topcontrols' => [$this, 'block_topcontrols'],
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "dashboard.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $this->parent = $this->loadTemplate("dashboard.twig", "@SitesManager/siteWithoutData.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_notification($context, array $blocks = [])
    {
    }

    // line 5
    public function block_topcontrols($context, array $blocks = [])
    {
        // line 6
        echo "    ";
        $this->loadTemplate("@CoreHome/_siteSelectHeader.twig", "@SitesManager/siteWithoutData.twig", 6)->display($context);
    }

    // line 9
    public function block_content($context, array $blocks = [])
    {
        // line 10
        echo "
    <script type=\"text/javascript\" charset=\"utf-8\">
        \$(document).ready(function () {
            \$('<div />').insertAfter('.site-without-data').liveWidget({
                interval: 1000,
                onUpdate: function () {
                    // reload page as soon as a visit was detected
                    broadcast.propagateNewPage('date=today');
                },
                dataUrlParams: {
                    module: 'Live',
                    action: 'getLastVisitsStart'
                }
            });
        });
    </script>

    <div class=\"site-without-data\">
        <div piwik-content-block content-title=\"";
        // line 28
        echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), ["SitesManager_SiteWithoutDataTitle"]), "html_attr");
        echo "\">

        <p>
            ";
        // line 31
        echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), ["SitesManager_SiteWithoutDataDescription"]), "html", null, true);
        echo " ";
        echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), ["Installation_JSTracking_Intro"]), "html", null, true);
        echo "
            ";
        // line 32
        echo call_user_func_array($this->env->getFilter('translate')->getCallable(), ["SitesManager_SiteWithoutDataSetupTracking", (("<a href=\"" . call_user_func_array($this->env->getFunction('linkTo')->getCallable(), [["module" => "CoreAdminHome", "action" => "trackingCodeGenerator"]])) . "\">"), "</a>"]);
        // line 35
        echo "
            <br />
            <br />
            ";
        // line 38
        echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), ["SitesManager_SiteWithoutDataMessageDisappears"]), "html", null, true);
        echo "

        </p>

            <div class='trackingHelp'>
                ";
        // line 43
        if (($context["showMatomoLinks"] ?? $this->getContext($context, "showMatomoLinks"))) {
            // line 44
            echo "                <h3>";
            echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), ["SitesManager_InstallationGuides"]), "html", null, true);
            echo "</h3>
                <p>";
            // line 45
            echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), ["SitesManager_InstallationGuidesIntro"]), "html", null, true);
            echo "

                <a target=\"_blank\" rel=\"noreferrer noopener\" href='https://matomo.org/faq/new-to-piwik/how-do-i-install-the-matomo-tracking-code-on-wordpress/'>WordPress</a>
                | <a target=\"_blank\" rel=\"noreferrer noopener\" href='https://matomo.org/faq/new-to-piwik/how-do-i-integrate-matomo-with-squarespace-website/'>Squarespace</a>
                | <a target=\"_blank\" rel=\"noreferrer noopener\" href='https://matomo.org/faq/new-to-piwik/how-do-i-install-the-matomo-analytics-tracking-code-on-wix/'>Wix</a>
                | <a target=\"_blank\" rel=\"noreferrer noopener\" href='https://matomo.org/faq/how-to-install/faq_19424/'>SharePoint</a>
                | <a target=\"_blank\" rel=\"noreferrer noopener\" href='https://matomo.org/faq/new-to-piwik/how-do-i-install-the-matomo-analytics-tracking-code-on-joomla/'>Joomla</a>
                | <a target=\"_blank\" rel=\"noreferrer noopener\" href='https://matomo.org/faq/new-to-piwik/how-do-i-install-the-matomo-tracking-code-on-my-shopify-store/'>Shopify</a>
                    <br >
                    <br >
                    ";
            // line 55
            echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), ["SitesManager_ExtraInformationNeeded"]), "html", null, true);
            echo "
                    <br >
                    Matomo URL: <code piwik-select-on-focus>";
            // line 57
            echo \Piwik\piwik_escape_filter($this->env, ($context["piwikUrl"] ?? $this->getContext($context, "piwikUrl")), "html", null, true);
            echo "</code>
                    <br >
                    ";
            // line 59
            echo call_user_func_array($this->env->getFilter('translate')->getCallable(), ["SitesManager_EmailInstructionsYourSiteId", (("<code piwik-select-on-focus>" . ($context["idSite"] ?? $this->getContext($context, "idSite"))) . "</code>")]);
            echo "
                    <br >
                </p>
                ";
        }
        // line 63
        echo "
                <h3>";
        // line 64
        echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), ["SitesManager_Integrations"]), "html", null, true);
        echo "</h3>

                <p>";
        // line 66
        echo call_user_func_array($this->env->getFilter('translate')->getCallable(), ["CoreAdminHome_JSTrackingIntro3a", "<a href=\"https://matomo.org/integrate/\" rel=\"noreferrer noopener\" target=\"_blank\">", "</a>"]);
        echo " ";
        echo call_user_func_array($this->env->getFilter('translate')->getCallable(), ["CoreAdminHome_JSTrackingIntro3b"]);
        echo "</p>

                <div class=\"valign-wrapper trackingHelpHeader\">
                    <div>

                        <h3>";
        // line 71
        echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), ["General_JsTrackingTag"]), "html", null, true);
        echo "</h3>

                        <p>";
        // line 73
        echo call_user_func_array($this->env->getFilter('translate')->getCallable(), ["CoreAdminHome_JSTracking_CodeNoteBeforeClosingHead", "&lt;/head&gt;"]);
        echo "</p>
                    </div>
                    <a class=\"btn\" id=\"emailTrackingCodeBtn\"
                       href=\"mailto:?subject=";
        // line 76
        echo \Piwik\piwik_escape_filter($this->env, twig_urlencode_filter(call_user_func_array($this->env->getFilter('translate')->getCallable(), ["SitesManager_EmailInstructionsSubject"])), "html_attr");
        echo "&body=";
        echo \Piwik\piwik_escape_filter($this->env, twig_urlencode_filter(($context["emailBody"] ?? $this->getContext($context, "emailBody"))), "html_attr");
        echo "\">
                        ";
        // line 77
        echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), ["SitesManager_EmailInstructionsButton"]), "html", null, true);
        echo "
                    </a>
                </div>

                <pre piwik-select-on-focus>";
        // line 81
        echo ($context["jsTag"] ?? $this->getContext($context, "jsTag"));
        echo "</pre>

                <p>";
        // line 83
        echo call_user_func_array($this->env->getFilter('translate')->getCallable(), ["CoreAdminHome_JSTrackingIntro5", "<a rel=\"noreferrer noopener\" target=\"_blank\" href=\"https://developer.matomo.org/guides/tracking-javascript-guide\">", "</a>"]);
        echo "</p>

                <p><br />";
        // line 85
        echo call_user_func_array($this->env->getFilter('translate')->getCallable(), ["CoreAdminHome_JSTracking_EndNote", (("<a href=\"" . call_user_func_array($this->env->getFunction('linkTo')->getCallable(), [["module" => "CoreAdminHome", "action" => "trackingCodeGenerator"]])) . "\">"), "</a>"]);
        echo "
                <br />
                <br />
                    <a href=\"";
        // line 88
        echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFunction('linkTo')->getCallable(), [["module" => "CoreAdminHome", "action" => "trackingCodeGenerator"]]), "html", null, true);
        echo "\"class=\"btn\"><span class=\"icon-configure\"></span> ";
        echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), ["SitesManager_CustomizeJavaScriptTracker"]), "html", null, true);
        echo "</a></p>

                <h3>";
        // line 90
        echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), ["SitesManager_LogAnalytics"]), "html", null, true);
        echo "</h3>

                <p>";
        // line 92
        echo call_user_func_array($this->env->getFilter('translate')->getCallable(), ["SitesManager_LogAnalyticsDescription", "<a href=\"https://matomo.org/log-analytics/\" rel=\"noreferrer noopener\" target=\"_blank\">", "</a>"]);
        echo "</p>

                <h3>";
        // line 94
        echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), ["SitesManager_MobileAppsAndSDKs"]), "html", null, true);
        echo "</h3>

                <p>";
        // line 96
        echo call_user_func_array($this->env->getFilter('translate')->getCallable(), ["SitesManager_MobileAppsAndSDKsDescription", "<a href=\"https://matomo.org/integrate/#programming-language-platforms-and-frameworks\" rel=\"noreferrer noopener\" target=\"_blank\">", "</a>"]);
        echo "</p>

                <h3>";
        // line 98
        echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), ["CoreAdminHome_HttpTrackingApi"]), "html", null, true);
        echo "</h3>
                <p>";
        // line 99
        echo call_user_func_array($this->env->getFilter('translate')->getCallable(), ["CoreAdminHome_HttpTrackingApiDescription", "<a href=\"https://developer.matomo.org/api-reference/tracking-api\" rel=\"noreferrer noopener\" target=\"_blank\">", "</a>"]);
        echo "</p>

                ";
        // line 101
        if ((isset($context["googleAnalyticsImporterMessage"]) || array_key_exists("googleAnalyticsImporterMessage", $context))) {
            // line 102
            echo "                ";
            echo ($context["googleAnalyticsImporterMessage"] ?? $this->getContext($context, "googleAnalyticsImporterMessage"));
            echo "
                ";
        }
        // line 104
        echo "
                ";
        // line 105
        echo call_user_func_array($this->env->getFunction('postEvent')->getCallable(), ["Template.endTrackingHelpPage"]);
        echo "

            </div>

            ";
        // line 109
        echo call_user_func_array($this->env->getFunction('postEvent')->getCallable(), ["Template.siteWithoutData.afterIntro"]);
        echo "
            <br />
            <br />
            <a href=\"";
        // line 112
        echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFunction('linkTo')->getCallable(), [["module" => "SitesManager", "action" => "ignoreNoDataMessage"]]), "html", null, true);
        echo "\"
               class=\"btn ignoreSitesWithoutData\">";
        // line 113
        echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), ["SitesManager_SiteWithoutDataIgnoreMessage"]), "html", null, true);
        echo "</a>

        </div>

        ";
        // line 117
        echo call_user_func_array($this->env->getFunction('postEvent')->getCallable(), ["Template.siteWithoutData.afterTrackingHelp"]);
        echo "
    </div>

";
    }

    public function getTemplateName()
    {
        return "@SitesManager/siteWithoutData.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  270 => 117,  263 => 113,  259 => 112,  253 => 109,  246 => 105,  243 => 104,  237 => 102,  235 => 101,  230 => 99,  226 => 98,  221 => 96,  216 => 94,  211 => 92,  206 => 90,  199 => 88,  193 => 85,  188 => 83,  183 => 81,  176 => 77,  170 => 76,  164 => 73,  159 => 71,  149 => 66,  144 => 64,  141 => 63,  134 => 59,  129 => 57,  124 => 55,  111 => 45,  106 => 44,  104 => 43,  96 => 38,  91 => 35,  89 => 32,  83 => 31,  77 => 28,  57 => 10,  54 => 9,  49 => 6,  46 => 5,  41 => 3,  31 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"dashboard.twig\" %}

{% block notification %}{% endblock %}

{% block topcontrols %}
    {% include \"@CoreHome/_siteSelectHeader.twig\" %}
{% endblock %}

{% block content %}

    <script type=\"text/javascript\" charset=\"utf-8\">
        \$(document).ready(function () {
            \$('<div />').insertAfter('.site-without-data').liveWidget({
                interval: 1000,
                onUpdate: function () {
                    // reload page as soon as a visit was detected
                    broadcast.propagateNewPage('date=today');
                },
                dataUrlParams: {
                    module: 'Live',
                    action: 'getLastVisitsStart'
                }
            });
        });
    </script>

    <div class=\"site-without-data\">
        <div piwik-content-block content-title=\"{{ 'SitesManager_SiteWithoutDataTitle'|translate|e('html_attr') }}\">

        <p>
            {{ 'SitesManager_SiteWithoutDataDescription'|translate }} {{ 'Installation_JSTracking_Intro'|translate }}
            {{ 'SitesManager_SiteWithoutDataSetupTracking'|translate('<a href=\"' ~ linkTo({
                'module': 'CoreAdminHome',
                'action': 'trackingCodeGenerator',
            }) ~ '\">', \"</a>\")|raw }}
            <br />
            <br />
            {{ 'SitesManager_SiteWithoutDataMessageDisappears'|translate }}

        </p>

            <div class='trackingHelp'>
                {% if showMatomoLinks %}
                <h3>{{ 'SitesManager_InstallationGuides'|translate }}</h3>
                <p>{{ 'SitesManager_InstallationGuidesIntro'|translate }}

                <a target=\"_blank\" rel=\"noreferrer noopener\" href='https://matomo.org/faq/new-to-piwik/how-do-i-install-the-matomo-tracking-code-on-wordpress/'>WordPress</a>
                | <a target=\"_blank\" rel=\"noreferrer noopener\" href='https://matomo.org/faq/new-to-piwik/how-do-i-integrate-matomo-with-squarespace-website/'>Squarespace</a>
                | <a target=\"_blank\" rel=\"noreferrer noopener\" href='https://matomo.org/faq/new-to-piwik/how-do-i-install-the-matomo-analytics-tracking-code-on-wix/'>Wix</a>
                | <a target=\"_blank\" rel=\"noreferrer noopener\" href='https://matomo.org/faq/how-to-install/faq_19424/'>SharePoint</a>
                | <a target=\"_blank\" rel=\"noreferrer noopener\" href='https://matomo.org/faq/new-to-piwik/how-do-i-install-the-matomo-analytics-tracking-code-on-joomla/'>Joomla</a>
                | <a target=\"_blank\" rel=\"noreferrer noopener\" href='https://matomo.org/faq/new-to-piwik/how-do-i-install-the-matomo-tracking-code-on-my-shopify-store/'>Shopify</a>
                    <br >
                    <br >
                    {{ 'SitesManager_ExtraInformationNeeded'|translate }}
                    <br >
                    Matomo URL: <code piwik-select-on-focus>{{ piwikUrl }}</code>
                    <br >
                    {{ 'SitesManager_EmailInstructionsYourSiteId'|translate('<code piwik-select-on-focus>' ~ idSite ~ '</code>')|raw }}
                    <br >
                </p>
                {% endif %}

                <h3>{{ 'SitesManager_Integrations'|translate }}</h3>

                <p>{{ 'CoreAdminHome_JSTrackingIntro3a'|translate('<a href=\"https://matomo.org/integrate/\" rel=\"noreferrer noopener\" target=\"_blank\">','</a>')|raw }} {{ 'CoreAdminHome_JSTrackingIntro3b'|translate|raw }}</p>

                <div class=\"valign-wrapper trackingHelpHeader\">
                    <div>

                        <h3>{{ 'General_JsTrackingTag'|translate }}</h3>

                        <p>{{ 'CoreAdminHome_JSTracking_CodeNoteBeforeClosingHead'|translate(\"&lt;/head&gt;\")|raw }}</p>
                    </div>
                    <a class=\"btn\" id=\"emailTrackingCodeBtn\"
                       href=\"mailto:?subject={{ 'SitesManager_EmailInstructionsSubject'|translate|url_encode|e('html_attr') }}&body={{ emailBody|url_encode|e('html_attr') }}\">
                        {{ 'SitesManager_EmailInstructionsButton'|translate }}
                    </a>
                </div>

                <pre piwik-select-on-focus>{{ jsTag|raw }}</pre>

                <p>{{ 'CoreAdminHome_JSTrackingIntro5'|translate('<a rel=\"noreferrer noopener\" target=\"_blank\" href=\"https://developer.matomo.org/guides/tracking-javascript-guide\">','</a>')|raw }}</p>

                <p><br />{{ 'CoreAdminHome_JSTracking_EndNote'|translate('<a href=\"' ~ linkTo({'module': 'CoreAdminHome', 'action': 'trackingCodeGenerator'}) ~'\">','</a>')|raw }}
                <br />
                <br />
                    <a href=\"{{ linkTo({module: 'CoreAdminHome', action: 'trackingCodeGenerator'}) }}\"class=\"btn\"><span class=\"icon-configure\"></span> {{ 'SitesManager_CustomizeJavaScriptTracker'|translate }}</a></p>

                <h3>{{ 'SitesManager_LogAnalytics'|translate }}</h3>

                <p>{{ 'SitesManager_LogAnalyticsDescription'|translate('<a href=\"https://matomo.org/log-analytics/\" rel=\"noreferrer noopener\" target=\"_blank\">', '</a>')|raw }}</p>

                <h3>{{ 'SitesManager_MobileAppsAndSDKs'|translate }}</h3>

                <p>{{ 'SitesManager_MobileAppsAndSDKsDescription'|translate('<a href=\"https://matomo.org/integrate/#programming-language-platforms-and-frameworks\" rel=\"noreferrer noopener\" target=\"_blank\">','</a>')|raw }}</p>

                <h3>{{ 'CoreAdminHome_HttpTrackingApi'|translate }}</h3>
                <p>{{ 'CoreAdminHome_HttpTrackingApiDescription'|translate('<a href=\"https://developer.matomo.org/api-reference/tracking-api\" rel=\"noreferrer noopener\" target=\"_blank\">','</a>')|raw }}</p>

                {% if googleAnalyticsImporterMessage is defined %}
                {{ googleAnalyticsImporterMessage|raw }}
                {% endif %}

                {{ postEvent('Template.endTrackingHelpPage') }}

            </div>

            {{ postEvent('Template.siteWithoutData.afterIntro') }}
            <br />
            <br />
            <a href=\"{{ linkTo({module: 'SitesManager', action: 'ignoreNoDataMessage'}) }}\"
               class=\"btn ignoreSitesWithoutData\">{{ 'SitesManager_SiteWithoutDataIgnoreMessage'|translate }}</a>

        </div>

        {{ postEvent('Template.siteWithoutData.afterTrackingHelp') }}
    </div>

{% endblock %}
", "@SitesManager/siteWithoutData.twig", "/var/www/matomo.jinghongluo.site/plugins/SitesManager/templates/siteWithoutData.twig");
    }
}
