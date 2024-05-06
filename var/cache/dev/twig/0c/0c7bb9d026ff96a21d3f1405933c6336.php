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

/* @JoseFramework/data_collector/tab/jwe/builders.html.twig */
class __TwigTemplate_fb6a846f4239f15ec02e1ac1e9b35385 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@JoseFramework/data_collector/tab/jwe/builders.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@JoseFramework/data_collector/tab/jwe/builders.html.twig"));

        // line 1
        echo "<h3>JWE Builders</h3>
<p class=\"help\">
    The following table lists all JWE Builders declared as services in your application configuration
    or using the Configuration Helper.<br>
    Builders directly created through the JWE Builder Factory cannot be listed.
</p>
<table>
    <thead>
    <tr>
        <th>Service ID</th>
        <th>Key Encryption Algorithms</th>
        <th>Content Encryption Algorithms</th>
        <th>Compression Methods</th>
    </tr>
    </thead>
    <tbody>
    ";
        // line 17
        if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 17, $this->source); })()), "getData", [], "method", false, false, false, 17), "jwe", [], "any", false, false, false, 17), "jwe_builders", [], "any", false, false, false, 17))) {
            // line 18
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 18, $this->source); })()), "getData", [], "method", false, false, false, 18), "jwe", [], "any", false, false, false, 18), "jwe_builders", [], "any", false, false, false, 18));
            foreach ($context['_seq'] as $context["id"] => $context["data"]) {
                // line 19
                echo "            <tr>
                <td>";
                // line 20
                echo twig_escape_filter($this->env, $context["id"], "html", null, true);
                echo "</td>
                <td>
                    <ul>
                        ";
                // line 23
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["data"], "key_encryption_algorithms", [], "any", false, false, false, 23));
                foreach ($context['_seq'] as $context["_key"] => $context["algorithm"]) {
                    // line 24
                    echo "                            <li class=\"";
                    if (twig_in_filter($context["algorithm"], twig_get_array_keys_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 24, $this->source); })()), "getData", [], "method", false, false, false, 24), "algorithm", [], "any", false, false, false, 24), "messages", [], "any", false, false, false, 24)))) {
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 24, $this->source); })()), "getData", [], "method", false, false, false, 24), "algorithm", [], "any", false, false, false, 24), "messages", [], "any", false, false, false, 24), $context["algorithm"], [], "array", false, false, false, 24), "severity", [], "array", false, false, false, 24), "html", null, true);
                    } else {
                        echo "no-severity";
                    }
                    echo "\">
                                ";
                    // line 25
                    echo twig_escape_filter($this->env, $context["algorithm"], "html", null, true);
                    echo "
                            </li>
                        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['algorithm'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 28
                echo "                    </ul>
                </td>
                <td>
                    <ul>
                        ";
                // line 32
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["data"], "content_encryption_algorithms", [], "any", false, false, false, 32));
                foreach ($context['_seq'] as $context["_key"] => $context["algorithm"]) {
                    // line 33
                    echo "                            <li class=\"";
                    if (twig_in_filter($context["algorithm"], twig_get_array_keys_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 33, $this->source); })()), "getData", [], "method", false, false, false, 33), "algorithm", [], "any", false, false, false, 33), "messages", [], "any", false, false, false, 33)))) {
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 33, $this->source); })()), "getData", [], "method", false, false, false, 33), "algorithm", [], "any", false, false, false, 33), "messages", [], "any", false, false, false, 33), $context["algorithm"], [], "array", false, false, false, 33), "severity", [], "array", false, false, false, 33), "html", null, true);
                    } else {
                        echo "no-severity";
                    }
                    echo "\">
                                ";
                    // line 34
                    echo twig_escape_filter($this->env, $context["algorithm"], "html", null, true);
                    echo "
                            </li>
                        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['algorithm'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 37
                echo "                    </ul>
                </td>
                <td>
                    <ul>
                        ";
                // line 41
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["data"], "compression_methods", [], "any", false, false, false, 41));
                foreach ($context['_seq'] as $context["_key"] => $context["method"]) {
                    // line 42
                    echo "                            <li>";
                    echo twig_escape_filter($this->env, $context["method"], "html", null, true);
                    echo "</li>
                        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['method'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 44
                echo "                    </ul>
                </td>
            </tr>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['id'], $context['data'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 48
            echo "    ";
        } else {
            // line 49
            echo "        <tr>
            <td colspan=\"4\">There is no JWE Builder</td>
        </tr>
    ";
        }
        // line 53
        echo "    </tbody>
</table>

<h4>Built Tokens</h4>
<p class=\"help\">
    The following table list all tokens issued by the JWE Builders.
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
        // line 68
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 68, $this->source); })()), "getData", [], "method", false, false, false, 68), "jwe", [], "any", false, false, false, 68), "events", [], "any", false, false, false, 68), "built_success", [], "any", false, false, false, 68));
        foreach ($context['_seq'] as $context["_key"] => $context["event"]) {
            // line 69
            echo "        <tr class=\"status-success\">
            <td>Success</td>
            <td>";
            // line 71
            echo $this->extensions['Symfony\Bundle\WebProfilerBundle\Twig\WebProfilerExtension']->dumpData($this->env, twig_get_attribute($this->env, $this->source, $context["event"], "seek", ["jwe"], "method", false, false, false, 71));
            echo "</td>
        </tr>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['event'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 74
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 74, $this->source); })()), "getData", [], "method", false, false, false, 74), "jwe", [], "any", false, false, false, 74), "events", [], "any", false, false, false, 74), "built_failure", [], "any", false, false, false, 74));
        foreach ($context['_seq'] as $context["_key"] => $context["event"]) {
            // line 75
            echo "        <tr class=\"status-error\">
            <td>Failure</td>
            <td>";
            // line 77
            echo $this->extensions['Symfony\Bundle\WebProfilerBundle\Twig\WebProfilerExtension']->dumpData($this->env, twig_get_attribute($this->env, $this->source, $context["event"], "seek", ["jwe"], "method", false, false, false, 77));
            echo "</td>
        </tr>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['event'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 80
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
        return "@JoseFramework/data_collector/tab/jwe/builders.html.twig";
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
        return array (  216 => 80,  207 => 77,  203 => 75,  198 => 74,  189 => 71,  185 => 69,  181 => 68,  164 => 53,  158 => 49,  155 => 48,  146 => 44,  137 => 42,  133 => 41,  127 => 37,  118 => 34,  109 => 33,  105 => 32,  99 => 28,  90 => 25,  81 => 24,  77 => 23,  71 => 20,  68 => 19,  63 => 18,  61 => 17,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<h3>JWE Builders</h3>
<p class=\"help\">
    The following table lists all JWE Builders declared as services in your application configuration
    or using the Configuration Helper.<br>
    Builders directly created through the JWE Builder Factory cannot be listed.
</p>
<table>
    <thead>
    <tr>
        <th>Service ID</th>
        <th>Key Encryption Algorithms</th>
        <th>Content Encryption Algorithms</th>
        <th>Compression Methods</th>
    </tr>
    </thead>
    <tbody>
    {% if not collector.getData().jwe.jwe_builders is empty %}
        {% for id, data in collector.getData().jwe.jwe_builders %}
            <tr>
                <td>{{ id }}</td>
                <td>
                    <ul>
                        {% for algorithm in data.key_encryption_algorithms %}
                            <li class=\"{% if algorithm in collector.getData().algorithm.messages|keys %}{{ collector.getData().algorithm.messages[algorithm]['severity'] }}{% else %}no-severity{% endif %}\">
                                {{ algorithm }}
                            </li>
                        {% endfor %}
                    </ul>
                </td>
                <td>
                    <ul>
                        {% for algorithm in data.content_encryption_algorithms %}
                            <li class=\"{% if algorithm in collector.getData().algorithm.messages|keys %}{{ collector.getData().algorithm.messages[algorithm]['severity'] }}{% else %}no-severity{% endif %}\">
                                {{ algorithm }}
                            </li>
                        {% endfor %}
                    </ul>
                </td>
                <td>
                    <ul>
                        {% for method in data.compression_methods %}
                            <li>{{ method }}</li>
                        {% endfor %}
                    </ul>
                </td>
            </tr>
        {% endfor %}
    {% else %}
        <tr>
            <td colspan=\"4\">There is no JWE Builder</td>
        </tr>
    {% endif %}
    </tbody>
</table>

<h4>Built Tokens</h4>
<p class=\"help\">
    The following table list all tokens issued by the JWE Builders.
</p>
<table>
    <thead>
    <tr>
        <th scope=\"col\">Status</th>
        <th scope=\"col\">Built Token</th>
    </tr>
    </thead>
    <tbody>
    {% for event in collector.getData().jwe.events.built_success %}
        <tr class=\"status-success\">
            <td>Success</td>
            <td>{{ profiler_dump(event.seek(\"jwe\")) }}</td>
        </tr>
    {% endfor %}
    {% for event in collector.getData().jwe.events.built_failure %}
        <tr class=\"status-error\">
            <td>Failure</td>
            <td>{{ profiler_dump(event.seek(\"jwe\")) }}</td>
        </tr>
    {% endfor %}
    </tbody>
</table>
", "@JoseFramework/data_collector/tab/jwe/builders.html.twig", "C:\\wamp64\\www\\bilal-project-main\\vendor\\web-token\\jwt-bundle\\Resources\\views\\data_collector\\tab\\jwe\\builders.html.twig");
    }
}
