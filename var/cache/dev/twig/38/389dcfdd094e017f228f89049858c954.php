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

/* @JoseFramework/data_collector/tab/jwe.html.twig */
class __TwigTemplate_3d6859546aeecc0c18237d114b4b9ec8 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@JoseFramework/data_collector/tab/jwe.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@JoseFramework/data_collector/tab/jwe.html.twig"));

        // line 1
        echo "<div class=\"tab\">
    <h2 class=\"tab-title\">JWE</h2>
    <div class=\"tab-content\">
        ";
        // line 4
        $this->loadTemplate("@JoseFramework/data_collector/tab/jwe/builders.html.twig", "@JoseFramework/data_collector/tab/jwe.html.twig", 4)->display($context);
        // line 5
        echo "        ";
        $this->loadTemplate("@JoseFramework/data_collector/tab/jwe/decrypters.html.twig", "@JoseFramework/data_collector/tab/jwe.html.twig", 5)->display($context);
        // line 6
        echo "        ";
        $this->loadTemplate("@JoseFramework/data_collector/tab/jwe/loaders.html.twig", "@JoseFramework/data_collector/tab/jwe.html.twig", 6)->display($context);
        // line 7
        echo "        ";
        $this->loadTemplate("@JoseFramework/data_collector/tab/jwe/key_encryption_algorithms.html.twig", "@JoseFramework/data_collector/tab/jwe.html.twig", 7)->display($context);
        // line 8
        echo "        ";
        $this->loadTemplate("@JoseFramework/data_collector/tab/jwe/content_encryption_algorithms.html.twig", "@JoseFramework/data_collector/tab/jwe.html.twig", 8)->display($context);
        // line 9
        echo "        ";
        $this->loadTemplate("@JoseFramework/data_collector/tab/jwe/compression_methods.html.twig", "@JoseFramework/data_collector/tab/jwe.html.twig", 9)->display($context);
        // line 10
        echo "        ";
        $this->loadTemplate("@JoseFramework/data_collector/tab/jwe/serialization_modes.html.twig", "@JoseFramework/data_collector/tab/jwe.html.twig", 10)->display($context);
        // line 11
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
        return "@JoseFramework/data_collector/tab/jwe.html.twig";
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
        return array (  68 => 11,  65 => 10,  62 => 9,  59 => 8,  56 => 7,  53 => 6,  50 => 5,  48 => 4,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"tab\">
    <h2 class=\"tab-title\">JWE</h2>
    <div class=\"tab-content\">
        {% include '@JoseFramework/data_collector/tab/jwe/builders.html.twig' %}
        {% include '@JoseFramework/data_collector/tab/jwe/decrypters.html.twig' %}
        {% include '@JoseFramework/data_collector/tab/jwe/loaders.html.twig' %}
        {% include '@JoseFramework/data_collector/tab/jwe/key_encryption_algorithms.html.twig' %}
        {% include '@JoseFramework/data_collector/tab/jwe/content_encryption_algorithms.html.twig' %}
        {% include '@JoseFramework/data_collector/tab/jwe/compression_methods.html.twig' %}
        {% include '@JoseFramework/data_collector/tab/jwe/serialization_modes.html.twig' %}
    </div>
</div>
", "@JoseFramework/data_collector/tab/jwe.html.twig", "C:\\wamp64\\www\\bilal-project-main\\vendor\\web-token\\jwt-bundle\\Resources\\views\\data_collector\\tab\\jwe.html.twig");
    }
}
