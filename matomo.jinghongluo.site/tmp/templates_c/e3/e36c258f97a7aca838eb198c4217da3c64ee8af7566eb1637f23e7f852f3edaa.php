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

/* @Marketplace/getPremiumFeatures.twig */
class __TwigTemplate_06c8ca06bd89f6d82d11706efe1e2a07f69faddcc3af89998bd73d9fb9448ad8 extends \Twig\Template
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
        echo "<div class=\"getNewPlugins getPremiumFeatures widgetBody\">
    <div class=\"row\">
        <div class=\"col s12 m12\">
            <h3 style=\"margin-bottom: 28px;\">";
        // line 4
        echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), ["Marketplace_SupportMatomoThankYou"]), "html", null, true);
        echo "</h3></div>

        ";
        // line 6
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["plugins"] ?? $this->getContext($context, "plugins")));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["plugin"]) {
            // line 7
            echo "            <div class=\"col s12 m4\">

                <h3 class=\"pluginName\" piwik-plugin-name=\"";
            // line 9
            echo \Piwik\piwik_escape_filter($this->env, $this->getAttribute($context["plugin"], "name", []), "html_attr");
            echo "\">";
            echo \Piwik\piwik_escape_filter($this->env, $this->getAttribute($context["plugin"], "displayName", []), "html", null, true);
            echo "</h3>
                <span class=\"pluginBody\">
                    ";
            // line 11
            echo \Piwik\piwik_escape_filter($this->env, $this->getAttribute($context["plugin"], "description", []), "html", null, true);
            echo "
                    <br />
                    <a href=\"javascript:;\" class=\"pluginMoreDetails\" piwik-plugin-name=\"";
            // line 13
            echo \Piwik\piwik_escape_filter($this->env, $this->getAttribute($context["plugin"], "name", []), "html_attr");
            echo "\">";
            echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), ["General_MoreDetails"]), "html", null, true);
            echo "</a>
                </span>
            </div>
            ";
            // line 16
            if ((($this->getAttribute($context["loop"], "index", []) % 3) == 0)) {
                // line 17
                echo "                </div><div class=\"row\">
            ";
            }
            // line 19
            echo "        ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['plugin'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 20
        echo "    </div>

    <div class=\"widgetBody\">
        <a href=\"";
        // line 23
        echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFunction('linkTo')->getCallable(), [["module" => "Marketplace", "action" => "overview", "show" => "premium"]]), "html", null, true);
        echo "\"
            >";
        // line 24
        echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), ["CorePluginsAdmin_ViewAllMarketplacePlugins"]), "html", null, true);
        echo "</a>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "@Marketplace/getPremiumFeatures.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  110 => 24,  106 => 23,  101 => 20,  87 => 19,  83 => 17,  81 => 16,  73 => 13,  68 => 11,  61 => 9,  57 => 7,  40 => 6,  35 => 4,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"getNewPlugins getPremiumFeatures widgetBody\">
    <div class=\"row\">
        <div class=\"col s12 m12\">
            <h3 style=\"margin-bottom: 28px;\">{{ 'Marketplace_SupportMatomoThankYou'|translate }}</h3></div>

        {% for plugin in plugins %}
            <div class=\"col s12 m4\">

                <h3 class=\"pluginName\" piwik-plugin-name=\"{{ plugin.name|e('html_attr') }}\">{{ plugin.displayName }}</h3>
                <span class=\"pluginBody\">
                    {{ plugin.description }}
                    <br />
                    <a href=\"javascript:;\" class=\"pluginMoreDetails\" piwik-plugin-name=\"{{ plugin.name|e('html_attr') }}\">{{ 'General_MoreDetails'|translate }}</a>
                </span>
            </div>
            {% if loop.index % 3 == 0 %}
                </div><div class=\"row\">
            {% endif %}
        {% endfor %}
    </div>

    <div class=\"widgetBody\">
        <a href=\"{{ linkTo({'module': 'Marketplace', 'action': 'overview', 'show': 'premium'}) }}\"
            >{{ 'CorePluginsAdmin_ViewAllMarketplacePlugins'|translate }}</a>
    </div>
</div>", "@Marketplace/getPremiumFeatures.twig", "/var/www/matomo.jinghongluo.site/plugins/Marketplace/templates/getPremiumFeatures.twig");
    }
}
