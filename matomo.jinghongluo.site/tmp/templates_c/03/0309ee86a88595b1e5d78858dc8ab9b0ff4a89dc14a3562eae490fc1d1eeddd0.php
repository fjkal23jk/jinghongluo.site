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

/* @Morpheus/javascriptCode.twig */
class __TwigTemplate_36964e4b28ce69de5aa0461a7f235bd78a5c6569c513403ec587b06f52ef323c extends \Twig\Template
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
        echo "<!-- Matomo -->
<script type=\"text/javascript\">
  var _paq = window._paq = window._paq || [];
  /* tracker methods like \"setCustomDimension\" should be called before \"trackPageView\" */
{\$options}  _paq.push(['trackPageView']);
  _paq.push(['enableLinkTracking']);
  (function() {
    {\$setTrackerUrl}
    {\$optionsBeforeTrackerUrl}_paq.push(['setTrackerUrl', u+'{\$matomoPhpFilename}']);
    _paq.push(['setSiteId', '{\$idSite}']);
    ";
        // line 11
        if (($context["loadAsync"] ?? $this->getContext($context, "loadAsync"))) {
            echo "var d=document, g=d.createElement('script'), s=d.getElementsByTagName('script')[0];
    g.type='text/javascript'; g.async=true; g.src=u+'{\$matomoJsFilename}'; s.parentNode.insertBefore(g,s);";
        }
        // line 13
        echo "
  })();
</script>
";
        // line 16
        if ( !($context["loadAsync"] ?? $this->getContext($context, "loadAsync"))) {
            echo "<script type='text/javascript' src=\"{\$protocol}{\$piwikUrl}/{\$matomoJsFilename}\"></script>
";
        }
        // line 18
        if (($context["trackNoScript"] ?? $this->getContext($context, "trackNoScript"))) {
            echo "<noscript><p><img src=\"{\$protocol}{\$piwikUrl}/{\$matomoPhpFilename}?idsite={\$idSite}&amp;rec=1\" style=\"border:0;\" alt=\"\" /></p></noscript>
";
        }
        // line 20
        echo "<!-- End Matomo Code -->
";
    }

    public function getTemplateName()
    {
        return "@Morpheus/javascriptCode.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  62 => 20,  57 => 18,  52 => 16,  47 => 13,  42 => 11,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("<!-- Matomo -->
<script type=\"text/javascript\">
  var _paq = window._paq = window._paq || [];
  /* tracker methods like \"setCustomDimension\" should be called before \"trackPageView\" */
{\$options}  _paq.push(['trackPageView']);
  _paq.push(['enableLinkTracking']);
  (function() {
    {\$setTrackerUrl}
    {\$optionsBeforeTrackerUrl}_paq.push(['setTrackerUrl', u+'{\$matomoPhpFilename}']);
    _paq.push(['setSiteId', '{\$idSite}']);
    {% if loadAsync %}var d=document, g=d.createElement('script'), s=d.getElementsByTagName('script')[0];
    g.type='text/javascript'; g.async=true; g.src=u+'{\$matomoJsFilename}'; s.parentNode.insertBefore(g,s);{% endif %}

  })();
</script>
{% if not loadAsync %}<script type='text/javascript' src=\"{\$protocol}{\$piwikUrl}/{\$matomoJsFilename}\"></script>
{% endif %}
{% if trackNoScript %}<noscript><p><img src=\"{\$protocol}{\$piwikUrl}/{\$matomoPhpFilename}?idsite={\$idSite}&amp;rec=1\" style=\"border:0;\" alt=\"\" /></p></noscript>
{% endif %}
<!-- End Matomo Code -->
", "@Morpheus/javascriptCode.twig", "/var/www/matomo.jinghongluo.site/plugins/Morpheus/templates/javascriptCode.twig");
    }
}
