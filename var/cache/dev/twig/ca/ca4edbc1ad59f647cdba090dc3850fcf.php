<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* @JoseFramework/data_collector/tab/key.html.twig */
class __TwigTemplate_cbec8e544628eefd7553a18f5ad94218 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@JoseFramework/data_collector/tab/key.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@JoseFramework/data_collector/tab/key.html.twig"));

        // line 1
        echo "<div class=\"tab\">
    <h2 class=\"tab-title\">Keys and Key Sets</h2>
    <div class=\"tab-content\">
        ";
        // line 4
        $this->loadTemplate("@JoseFramework/data_collector/tab/keys/jwk.html.twig", "@JoseFramework/data_collector/tab/key.html.twig", 4)->display($context);
        // line 5
        echo "        ";
        $this->loadTemplate("@JoseFramework/data_collector/tab/keys/jwkset.html.twig", "@JoseFramework/data_collector/tab/key.html.twig", 5)->display($context);
        // line 6
        echo "    </div>
</div>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@JoseFramework/data_collector/tab/key.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable()
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo()
    {
        return array (  53 => 6,  50 => 5,  48 => 4,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"tab\">
    <h2 class=\"tab-title\">Keys and Key Sets</h2>
    <div class=\"tab-content\">
        {% include '@JoseFramework/data_collector/tab/keys/jwk.html.twig' %}
        {% include '@JoseFramework/data_collector/tab/keys/jwkset.html.twig' %}
    </div>
</div>
", "@JoseFramework/data_collector/tab/key.html.twig", "C:\\wamp64\\www\\bilal-project-main\\vendor\\web-token\\jwt-bundle\\Resources\\views\\data_collector\\tab\\key.html.twig");
    }
}
