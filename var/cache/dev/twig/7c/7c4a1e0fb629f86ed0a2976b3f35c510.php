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

/* @JoseFramework/data_collector/tab/jws/loaders.html.twig */
class __TwigTemplate_4539c257a2161ebe9107a068c9b06fc5 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@JoseFramework/data_collector/tab/jws/loaders.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@JoseFramework/data_collector/tab/jws/loaders.html.twig"));

        // line 1
        echo "<h3>JWS Loaders</h3>
<p class=\"help\">
    The following table lists all JWS Loaders declared as services in your application configuration
    or using the Configuration Helper.<br>
    Loaders directly created through the JWS Loader Factory cannot be listed.
</p>
<table>
    <thead>
    <tr>
        <th>Service ID</th>
        <th>Serializers</th>
        <th>Algorithms</th>
    </tr>
    </thead>
    <tbody>
    ";
        // line 16
        if (twig_test_empty(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 16, $this->source); })()), "getData", [], "method", false, false, false, 16), "jws", [], "any", false, false, false, 16), "jws_loaders", [], "any", false, false, false, 16))) {
            // line 17
            echo "        <tr>
            <td colspan=\"3\"><i>No loader</i></td>
        </tr>
    ";
        } else {
            // line 21
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 21, $this->source); })()), "getData", [], "method", false, false, false, 21), "jws", [], "any", false, false, false, 21), "jws_loaders", [], "any", false, false, false, 21));
            foreach ($context['_seq'] as $context["id"] => $context["data"]) {
                // line 22
                echo "            <tr>
                <td>";
                // line 23
                echo twig_escape_filter($this->env, $context["id"], "html", null, true);
                echo "</td>
                <td>
                    <ul>
                        ";
                // line 26
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["data"], "serializers", [], "any", false, false, false, 26));
                foreach ($context['_seq'] as $context["_key"] => $context["serializer"]) {
                    // line 27
                    echo "                            <li>";
                    echo twig_escape_filter($this->env, $context["serializer"], "html", null, true);
                    echo "</li>
                        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['serializer'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 29
                echo "                    </ul>
                </td>
                <td>
                    <ul>
                        ";
                // line 33
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["data"], "signature_algorithms", [], "any", false, false, false, 33));
                foreach ($context['_seq'] as $context["_key"] => $context["algorithm"]) {
                    // line 34
                    echo "                            <li class=\"";
                    if (twig_in_filter($context["algorithm"], twig_get_array_keys_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 34, $this->source); })()), "getData", [], "method", false, false, false, 34), "algorithm", [], "any", false, false, false, 34), "messages", [], "any", false, false, false, 34)))) {
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 34, $this->source); })()), "getData", [], "method", false, false, false, 34), "algorithm", [], "any", false, false, false, 34), "messages", [], "any", false, false, false, 34), $context["algorithm"], [], "array", false, false, false, 34), "severity", [], "array", false, false, false, 34), "html", null, true);
                    } else {
                        echo "no-severity";
                    }
                    echo "\">
                                ";
                    // line 35
                    echo twig_escape_filter($this->env, $context["algorithm"], "html", null, true);
                    echo "
                            </li>
                        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['algorithm'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 38
                echo "                    </ul>
                </td>
            </tr>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['id'], $context['data'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 42
            echo "    ";
        }
        // line 43
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
        return "@JoseFramework/data_collector/tab/jws/loaders.html.twig";
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
        return array (  135 => 43,  132 => 42,  123 => 38,  114 => 35,  105 => 34,  101 => 33,  95 => 29,  86 => 27,  82 => 26,  76 => 23,  73 => 22,  68 => 21,  62 => 17,  60 => 16,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<h3>JWS Loaders</h3>
<p class=\"help\">
    The following table lists all JWS Loaders declared as services in your application configuration
    or using the Configuration Helper.<br>
    Loaders directly created through the JWS Loader Factory cannot be listed.
</p>
<table>
    <thead>
    <tr>
        <th>Service ID</th>
        <th>Serializers</th>
        <th>Algorithms</th>
    </tr>
    </thead>
    <tbody>
    {% if collector.getData().jws.jws_loaders is empty %}
        <tr>
            <td colspan=\"3\"><i>No loader</i></td>
        </tr>
    {% else %}
        {% for id, data in collector.getData().jws.jws_loaders %}
            <tr>
                <td>{{ id }}</td>
                <td>
                    <ul>
                        {% for serializer in data.serializers %}
                            <li>{{ serializer }}</li>
                        {% endfor %}
                    </ul>
                </td>
                <td>
                    <ul>
                        {% for algorithm in data.signature_algorithms %}
                            <li class=\"{% if algorithm in collector.getData().algorithm.messages|keys %}{{ collector.getData().algorithm.messages[algorithm]['severity'] }}{% else %}no-severity{% endif %}\">
                                {{ algorithm }}
                            </li>
                        {% endfor %}
                    </ul>
                </td>
            </tr>
        {% endfor %}
    {% endif %}
    </tbody>
</table>
", "@JoseFramework/data_collector/tab/jws/loaders.html.twig", "C:\\wamp64\\www\\bilal-project-main\\vendor\\web-token\\jwt-bundle\\Resources\\views\\data_collector\\tab\\jws\\loaders.html.twig");
    }
}
