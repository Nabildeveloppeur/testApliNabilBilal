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

/* @JoseFramework/data_collector/tab/jws/verifiers.html.twig */
class __TwigTemplate_b72282d61471ec0fe8d474e6b15cd661 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@JoseFramework/data_collector/tab/jws/verifiers.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@JoseFramework/data_collector/tab/jws/verifiers.html.twig"));

        // line 1
        echo "<h3>JWS Verifiers</h3>
<p class=\"help\">
    The following table lists all JWS Verifiers declared as services in your application configuration
    or using the Configuration Helper.<br>
    Verifiers directly created through the JWS Verifier Factory cannot be listed.
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
            <td colspan=\"2\"><i>No verifier</i></td>
        </tr>
    ";
        } else {
            // line 20
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 20, $this->source); })()), "getData", [], "method", false, false, false, 20), "jws", [], "any", false, false, false, 20), "jws_verifiers", [], "any", false, false, false, 20));
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

<h4>Verified Tokens</h4>
<p class=\"help\">
    The following tables list all tokens verified (or not) by the JWS Verifiers.<br>
    Failure reason is related to the key(s) used.
</p>
<table>
    <thead>
    <tr>
        <th scope=\"col\">Status</th>
        <th scope=\"col\">JWS</th>
        <th scope=\"col\">Key set</th>
        <th scope=\"col\" width=\"35%\">Detached Payload (optional)</th>
        <th scope=\"col\">Signature index / Exception</th>
        <th scope=\"col\">Key used for verification</th>
    </tr>
    </thead>
    <tbody>
    ";
        // line 55
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 55, $this->source); })()), "getData", [], "method", false, false, false, 55), "jws", [], "any", false, false, false, 55), "events", [], "any", false, false, false, 55), "verification_success", [], "any", false, false, false, 55));
        foreach ($context['_seq'] as $context["_key"] => $context["event"]) {
            // line 56
            echo "        <tr class=\"status-success\">
            <td>Success</td>
            <td>";
            // line 58
            echo $this->extensions['Symfony\Bundle\WebProfilerBundle\Twig\WebProfilerExtension']->dumpData($this->env, twig_get_attribute($this->env, $this->source, $context["event"], "seek", ["jws"], "method", false, false, false, 58));
            echo "</td>
            <td>";
            // line 59
            echo $this->extensions['Symfony\Bundle\WebProfilerBundle\Twig\WebProfilerExtension']->dumpData($this->env, twig_get_attribute($this->env, $this->source, $context["event"], "seek", ["JWKSet"], "method", false, false, false, 59));
            echo "</td>
            <td>";
            // line 60
            if ( !(null === twig_get_attribute($this->env, $this->source, $context["event"], "detachedPayload", [], "any", false, false, false, 60))) {
                echo $this->extensions['Symfony\Bundle\WebProfilerBundle\Twig\WebProfilerExtension']->dumpData($this->env, twig_get_attribute($this->env, $this->source, $context["event"], "seek", ["detachedPayload"], "method", false, false, false, 60));
            } else {
                // line 61
                echo "                    <i>none</i>";
            }
            echo "</td>
            <td>";
            // line 62
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["event"], "signature", [], "any", false, false, false, 62), "html", null, true);
            echo "</td>
            <td>";
            // line 63
            echo $this->extensions['Symfony\Bundle\WebProfilerBundle\Twig\WebProfilerExtension']->dumpData($this->env, twig_get_attribute($this->env, $this->source, $context["event"], "seek", ["JWK"], "method", false, false, false, 63));
            echo "</td>
        </tr>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['event'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 66
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 66, $this->source); })()), "getData", [], "method", false, false, false, 66), "jws", [], "any", false, false, false, 66), "events", [], "any", false, false, false, 66), "verification_failure", [], "any", false, false, false, 66));
        foreach ($context['_seq'] as $context["_key"] => $context["event"]) {
            // line 67
            echo "        <tr class=\"status-error\">
            <td>Failure</td>
            <td>";
            // line 69
            echo $this->extensions['Symfony\Bundle\WebProfilerBundle\Twig\WebProfilerExtension']->dumpData($this->env, twig_get_attribute($this->env, $this->source, $context["event"], "seek", ["jws"], "method", false, false, false, 69));
            echo "</td>
            <td>";
            // line 70
            echo $this->extensions['Symfony\Bundle\WebProfilerBundle\Twig\WebProfilerExtension']->dumpData($this->env, twig_get_attribute($this->env, $this->source, $context["event"], "seek", ["JWKSet"], "method", false, false, false, 70));
            echo "</td>
            <td>";
            // line 71
            if ( !(null === twig_get_attribute($this->env, $this->source, $context["event"], "detachedPayload", [], "any", false, false, false, 71))) {
                echo $this->extensions['Symfony\Bundle\WebProfilerBundle\Twig\WebProfilerExtension']->dumpData($this->env, twig_get_attribute($this->env, $this->source, $context["event"], "seek", ["detachedPayload"], "method", false, false, false, 71));
            } else {
                // line 72
                echo "                    <i>none</i>";
            }
            echo "</td>
            <td><i>---</i></td>
            <td><i>---</i></td>
        </tr>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['event'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 77
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
        return "@JoseFramework/data_collector/tab/jws/verifiers.html.twig";
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
        return array (  208 => 77,  196 => 72,  192 => 71,  188 => 70,  184 => 69,  180 => 67,  175 => 66,  166 => 63,  162 => 62,  157 => 61,  153 => 60,  149 => 59,  145 => 58,  141 => 56,  137 => 55,  115 => 35,  112 => 34,  103 => 30,  94 => 27,  85 => 26,  81 => 25,  75 => 22,  72 => 21,  67 => 20,  61 => 16,  59 => 15,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<h3>JWS Verifiers</h3>
<p class=\"help\">
    The following table lists all JWS Verifiers declared as services in your application configuration
    or using the Configuration Helper.<br>
    Verifiers directly created through the JWS Verifier Factory cannot be listed.
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
            <td colspan=\"2\"><i>No verifier</i></td>
        </tr>
    {% else %}
        {% for id, data in collector.getData().jws.jws_verifiers %}
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

<h4>Verified Tokens</h4>
<p class=\"help\">
    The following tables list all tokens verified (or not) by the JWS Verifiers.<br>
    Failure reason is related to the key(s) used.
</p>
<table>
    <thead>
    <tr>
        <th scope=\"col\">Status</th>
        <th scope=\"col\">JWS</th>
        <th scope=\"col\">Key set</th>
        <th scope=\"col\" width=\"35%\">Detached Payload (optional)</th>
        <th scope=\"col\">Signature index / Exception</th>
        <th scope=\"col\">Key used for verification</th>
    </tr>
    </thead>
    <tbody>
    {% for event in collector.getData().jws.events.verification_success %}
        <tr class=\"status-success\">
            <td>Success</td>
            <td>{{ profiler_dump(event.seek(\"jws\")) }}</td>
            <td>{{ profiler_dump(event.seek(\"JWKSet\")) }}</td>
            <td>{% if not event.detachedPayload is null %}{{ profiler_dump(event.seek(\"detachedPayload\")) }}{% else %}
                    <i>none</i>{% endif %}</td>
            <td>{{ event.signature }}</td>
            <td>{{ profiler_dump(event.seek(\"JWK\")) }}</td>
        </tr>
    {% endfor %}
    {% for event in collector.getData().jws.events.verification_failure %}
        <tr class=\"status-error\">
            <td>Failure</td>
            <td>{{ profiler_dump(event.seek(\"jws\")) }}</td>
            <td>{{ profiler_dump(event.seek(\"JWKSet\")) }}</td>
            <td>{% if not event.detachedPayload is null %}{{ profiler_dump(event.seek(\"detachedPayload\")) }}{% else %}
                    <i>none</i>{% endif %}</td>
            <td><i>---</i></td>
            <td><i>---</i></td>
        </tr>
    {% endfor %}
    </tbody>
</table>
", "@JoseFramework/data_collector/tab/jws/verifiers.html.twig", "C:\\wamp64\\www\\bilal-project-main\\vendor\\web-token\\jwt-bundle\\Resources\\views\\data_collector\\tab\\jws\\verifiers.html.twig");
    }
}
