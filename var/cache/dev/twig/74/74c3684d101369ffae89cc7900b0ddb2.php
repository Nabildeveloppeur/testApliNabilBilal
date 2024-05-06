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

/* @JoseFramework/data_collector/tab/jws/builders.html.twig */
class __TwigTemplate_7067168c144804934bfa0128597b7775 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@JoseFramework/data_collector/tab/jws/builders.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@JoseFramework/data_collector/tab/jws/builders.html.twig"));

        // line 1
        echo "<h3>JWS Builders</h3>
<p class=\"help\">
    The following table lists all JWS Builders declared as services in your application configuration
    or using the Configuration Helper.<br>
    Builders directly created through the JWS Builder Factory cannot be listed.
</p>
<table>
    <thead>
    <tr>
        <th>Service ID</th>
        <th>Algorithms</th>
    </tr>
    </thead>
    <tbody>
    ";
        // line 15
        if (twig_test_empty(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 15, $this->source); })()), "getData", [], "method", false, false, false, 15), "jws", [], "any", false, false, false, 15), "jws_builders", [], "any", false, false, false, 15))) {
            // line 16
            echo "        <tr>
            <td colspan=\"3\"><i>No builder</i></td>
        </tr>
    ";
        } else {
            // line 20
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 20, $this->source); })()), "getData", [], "method", false, false, false, 20), "jws", [], "any", false, false, false, 20), "jws_builders", [], "any", false, false, false, 20));
            foreach ($context['_seq'] as $context["id"] => $context["data"]) {
                // line 21
                echo "            <tr>
                <td>";
                // line 22
                echo twig_escape_filter($this->env, $context["id"], "html", null, true);
                echo "</td>
                <td>
                    <ul>
                        ";
                // line 25
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["data"], "signature_algorithms", [], "any", false, false, false, 25));
                foreach ($context['_seq'] as $context["_key"] => $context["algorithm"]) {
                    // line 26
                    echo "                            <li class=\"";
                    if (twig_in_filter($context["algorithm"], twig_get_array_keys_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 26, $this->source); })()), "getData", [], "method", false, false, false, 26), "algorithm", [], "any", false, false, false, 26), "messages", [], "any", false, false, false, 26)))) {
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 26, $this->source); })()), "getData", [], "method", false, false, false, 26), "algorithm", [], "any", false, false, false, 26), "messages", [], "any", false, false, false, 26), $context["algorithm"], [], "array", false, false, false, 26), "severity", [], "array", false, false, false, 26), "html", null, true);
                    } else {
                        echo "no-severity";
                    }
                    echo "\">
                                ";
                    // line 27
                    echo twig_escape_filter($this->env, $context["algorithm"], "html", null, true);
                    echo "
                            </li>
                        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['algorithm'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 30
                echo "                    </ul>
                </td>
            </tr>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['id'], $context['data'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 34
            echo "    ";
        }
        // line 35
        echo "    </tbody>
</table>

<h4>Built Tokens</h4>
<p class=\"help\">
    The following table list all tokens issued by the JWS Builders.
</p>
<table>
    <thead>
    <tr>
        <th scope=\"col\">Status</th>
        <th scope=\"col\">Built Token</th>
    </tr>
    </thead>
    <tbody>
    ";
        // line 50
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 50, $this->source); })()), "getData", [], "method", false, false, false, 50), "jws", [], "any", false, false, false, 50), "events", [], "any", false, false, false, 50), "built_success", [], "any", false, false, false, 50));
        foreach ($context['_seq'] as $context["_key"] => $context["event"]) {
            // line 51
            echo "        <tr class=\"status-success\">
            <td>Success</td>
            <td>";
            // line 53
            echo $this->extensions['Symfony\Bundle\WebProfilerBundle\Twig\WebProfilerExtension']->dumpData($this->env, twig_get_attribute($this->env, $this->source, $context["event"], "seek", ["jws"], "method", false, false, false, 53));
            echo "</td>
        </tr>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['event'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 56
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 56, $this->source); })()), "getData", [], "method", false, false, false, 56), "jws", [], "any", false, false, false, 56), "events", [], "any", false, false, false, 56), "built_failure", [], "any", false, false, false, 56));
        foreach ($context['_seq'] as $context["_key"] => $context["event"]) {
            // line 57
            echo "        <tr class=\"status-error\">
            <td>Failure</td>
            <td>";
            // line 59
            echo $this->extensions['Symfony\Bundle\WebProfilerBundle\Twig\WebProfilerExtension']->dumpData($this->env, twig_get_attribute($this->env, $this->source, $context["event"], "seek", ["jws"], "method", false, false, false, 59));
            echo "</td>
        </tr>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['event'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 62
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
        return "@JoseFramework/data_collector/tab/jws/builders.html.twig";
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
        return array (  167 => 62,  158 => 59,  154 => 57,  149 => 56,  140 => 53,  136 => 51,  132 => 50,  115 => 35,  112 => 34,  103 => 30,  94 => 27,  85 => 26,  81 => 25,  75 => 22,  72 => 21,  67 => 20,  61 => 16,  59 => 15,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<h3>JWS Builders</h3>
<p class=\"help\">
    The following table lists all JWS Builders declared as services in your application configuration
    or using the Configuration Helper.<br>
    Builders directly created through the JWS Builder Factory cannot be listed.
</p>
<table>
    <thead>
    <tr>
        <th>Service ID</th>
        <th>Algorithms</th>
    </tr>
    </thead>
    <tbody>
    {% if collector.getData().jws.jws_builders is empty %}
        <tr>
            <td colspan=\"3\"><i>No builder</i></td>
        </tr>
    {% else %}
        {% for id, data in collector.getData().jws.jws_builders %}
            <tr>
                <td>{{ id }}</td>
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

<h4>Built Tokens</h4>
<p class=\"help\">
    The following table list all tokens issued by the JWS Builders.
</p>
<table>
    <thead>
    <tr>
        <th scope=\"col\">Status</th>
        <th scope=\"col\">Built Token</th>
    </tr>
    </thead>
    <tbody>
    {% for event in collector.getData().jws.events.built_success %}
        <tr class=\"status-success\">
            <td>Success</td>
            <td>{{ profiler_dump(event.seek(\"jws\")) }}</td>
        </tr>
    {% endfor %}
    {% for event in collector.getData().jws.events.built_failure %}
        <tr class=\"status-error\">
            <td>Failure</td>
            <td>{{ profiler_dump(event.seek(\"jws\")) }}</td>
        </tr>
    {% endfor %}
    </tbody>
</table>
", "@JoseFramework/data_collector/tab/jws/builders.html.twig", "C:\\wamp64\\www\\bilal-project-main\\vendor\\web-token\\jwt-bundle\\Resources\\views\\data_collector\\tab\\jws\\builders.html.twig");
    }
}
