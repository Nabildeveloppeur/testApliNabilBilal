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

/* @JoseFramework/data_collector/tab/jwe/compression_methods.html.twig */
class __TwigTemplate_340ed79dd3f6908c818c0f1d52fd942b extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@JoseFramework/data_collector/tab/jwe/compression_methods.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@JoseFramework/data_collector/tab/jwe/compression_methods.html.twig"));

        // line 1
        echo "<h3>Compression Methods</h3>
<p class=\"help\">
    The compression methods are used to shrink the size of the tokens.<br>
    Their use is NOT recommended and will be removed in the next major release.
</p>
<table>
    <thead>
    <tr>
        <th>Name</th>
        <th>Alias</th>
    </tr>
    </thead>
    <tbody>
    ";
        // line 14
        if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 14, $this->source); })()), "getData", [], "method", false, false, false, 14), "jwe", [], "any", false, false, false, 14), "compression_methods", [], "any", false, false, false, 14))) {
            // line 15
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 15, $this->source); })()), "getData", [], "method", false, false, false, 15), "jwe", [], "any", false, false, false, 15), "compression_methods", [], "any", false, false, false, 15));
            foreach ($context['_seq'] as $context["alias"] => $context["name"]) {
                // line 16
                echo "            <tr>
                <td>";
                // line 17
                echo twig_escape_filter($this->env, $context["name"], "html", null, true);
                echo "</td>
                <td>";
                // line 18
                echo twig_escape_filter($this->env, $context["alias"], "html", null, true);
                echo "</td>
            </tr>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['alias'], $context['name'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 21
            echo "    ";
        } else {
            // line 22
            echo "        <tr>
            <td colspan=\"2\">There is no compression method.</td>
        </tr>
    ";
        }
        // line 26
        echo "    </tbody>
</table>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@JoseFramework/data_collector/tab/jwe/compression_methods.html.twig";
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
        return array (  90 => 26,  84 => 22,  81 => 21,  72 => 18,  68 => 17,  65 => 16,  60 => 15,  58 => 14,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<h3>Compression Methods</h3>
<p class=\"help\">
    The compression methods are used to shrink the size of the tokens.<br>
    Their use is NOT recommended and will be removed in the next major release.
</p>
<table>
    <thead>
    <tr>
        <th>Name</th>
        <th>Alias</th>
    </tr>
    </thead>
    <tbody>
    {% if not collector.getData().jwe.compression_methods is empty %}
        {% for alias, name in collector.getData().jwe.compression_methods %}
            <tr>
                <td>{{ name }}</td>
                <td>{{ alias }}</td>
            </tr>
        {% endfor %}
    {% else %}
        <tr>
            <td colspan=\"2\">There is no compression method.</td>
        </tr>
    {% endif %}
    </tbody>
</table>
", "@JoseFramework/data_collector/tab/jwe/compression_methods.html.twig", "C:\\wamp64\\www\\bilal-project-main\\vendor\\web-token\\jwt-bundle\\Resources\\views\\data_collector\\tab\\jwe\\compression_methods.html.twig");
    }
}
