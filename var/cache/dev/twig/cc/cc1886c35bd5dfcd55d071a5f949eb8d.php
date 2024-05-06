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

/* @JoseFramework/data_collector/tab/keys/jwkset.html.twig */
class __TwigTemplate_748cbbb37045591b552a927375574937 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@JoseFramework/data_collector/tab/keys/jwkset.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@JoseFramework/data_collector/tab/keys/jwkset.html.twig"));

        // line 1
        echo "<h3>Key Sets</h3>
<p class=\"help\">
    This table lists all key sets registered as service through the bundle configuration
    or the Configuration Helper. <br>
    For each key in the key sets, it shows the result of the analyze performed on that key.
</p>
<table>
    <thead>
    <tr>
        <th>Service ID</th>
        <th>keys</th>
        <th>Analyze Result</th>
    </tr>
    </thead>
    <tbody>
    ";
        // line 16
        if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 16, $this->source); })()), "getData", [], "method", false, false, false, 16), "key", [], "any", false, false, false, 16), "jwkset", [], "any", false, false, false, 16))) {
            // line 17
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 17, $this->source); })()), "getData", [], "method", false, false, false, 17), "key", [], "any", false, false, false, 17), "jwkset", [], "any", false, false, false, 17));
            foreach ($context['_seq'] as $context["id"] => $context["data"]) {
                // line 18
                echo "            <tr>
                <td>";
                // line 19
                echo twig_escape_filter($this->env, $context["id"], "html", null, true);
                echo "</td>
                <td>";
                // line 20
                echo $this->extensions['Symfony\Bundle\WebProfilerBundle\Twig\WebProfilerExtension']->dumpData($this->env, twig_get_attribute($this->env, $this->source, $context["data"], "jwkset", [], "any", false, false, false, 20));
                echo "</td>
                <td>
                    ";
                // line 22
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["data"], "analyze_jwkset", [], "any", false, false, false, 22));
                foreach ($context['_seq'] as $context["kid"] => $context["messages"]) {
                    // line 23
                    echo "                        <h5>Key set:</h5>
                        <ul>
                            ";
                    // line 25
                    if ((twig_length_filter($this->env, $context["messages"]) == 0)) {
                        // line 26
                        echo "                                <li>No message. All good!</li>
                            ";
                    } else {
                        // line 28
                        echo "                                ";
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable($context["messages"]);
                        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                            // line 29
                            echo "                                    <li class=\"severity-";
                            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["message"], "getSeverity", [], "method", false, false, false, 29), "html", null, true);
                            echo "\">";
                            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["message"], "getMessage", [], "method", false, false, false, 29), "html", null, true);
                            echo "</li>
                                ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 31
                        echo "                            ";
                    }
                    // line 32
                    echo "                        </ul>
                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['kid'], $context['messages'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 34
                echo "                    <hr>
                    ";
                // line 35
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["data"], "analyze", [], "any", false, false, false, 35));
                foreach ($context['_seq'] as $context["kid"] => $context["messages"]) {
                    // line 36
                    echo "                        <h5>Key index / Key ID \"";
                    echo twig_escape_filter($this->env, $context["kid"], "html", null, true);
                    echo "\":</h5>
                        <ul>
                            ";
                    // line 38
                    if ((twig_length_filter($this->env, $context["messages"]) == 0)) {
                        // line 39
                        echo "                                <li>No message. All good!</li>
                            ";
                    } else {
                        // line 41
                        echo "                                ";
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable($context["messages"]);
                        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                            // line 42
                            echo "                                    <li class=\"severity-";
                            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["message"], "getSeverity", [], "method", false, false, false, 42), "html", null, true);
                            echo "\">";
                            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["message"], "getMessage", [], "method", false, false, false, 42), "html", null, true);
                            echo "</li>
                                ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 44
                        echo "                            ";
                    }
                    // line 45
                    echo "                        </ul>
                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['kid'], $context['messages'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 47
                echo "                </td>
            </tr>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['id'], $context['data'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 50
            echo "    ";
        } else {
            // line 51
            echo "        <tr>
            <td colspan=\"3\">No registered key set</td>
        </tr>
    ";
        }
        // line 55
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
        return "@JoseFramework/data_collector/tab/keys/jwkset.html.twig";
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
        return array (  181 => 55,  175 => 51,  172 => 50,  164 => 47,  157 => 45,  154 => 44,  143 => 42,  138 => 41,  134 => 39,  132 => 38,  126 => 36,  122 => 35,  119 => 34,  112 => 32,  109 => 31,  98 => 29,  93 => 28,  89 => 26,  87 => 25,  83 => 23,  79 => 22,  74 => 20,  70 => 19,  67 => 18,  62 => 17,  60 => 16,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<h3>Key Sets</h3>
<p class=\"help\">
    This table lists all key sets registered as service through the bundle configuration
    or the Configuration Helper. <br>
    For each key in the key sets, it shows the result of the analyze performed on that key.
</p>
<table>
    <thead>
    <tr>
        <th>Service ID</th>
        <th>keys</th>
        <th>Analyze Result</th>
    </tr>
    </thead>
    <tbody>
    {% if not collector.getData().key.jwkset is empty %}
        {% for id, data in collector.getData().key.jwkset %}
            <tr>
                <td>{{ id }}</td>
                <td>{{ profiler_dump(data.jwkset) }}</td>
                <td>
                    {% for kid, messages in data.analyze_jwkset %}
                        <h5>Key set:</h5>
                        <ul>
                            {% if messages|length == 0 %}
                                <li>No message. All good!</li>
                            {% else %}
                                {% for message in messages %}
                                    <li class=\"severity-{{ message.getSeverity() }}\">{{ message.getMessage() }}</li>
                                {% endfor %}
                            {% endif %}
                        </ul>
                    {% endfor %}
                    <hr>
                    {% for kid, messages in data.analyze %}
                        <h5>Key index / Key ID \"{{ kid }}\":</h5>
                        <ul>
                            {% if messages|length == 0 %}
                                <li>No message. All good!</li>
                            {% else %}
                                {% for message in messages %}
                                    <li class=\"severity-{{ message.getSeverity() }}\">{{ message.getMessage() }}</li>
                                {% endfor %}
                            {% endif %}
                        </ul>
                    {% endfor %}
                </td>
            </tr>
        {% endfor %}
    {% else %}
        <tr>
            <td colspan=\"3\">No registered key set</td>
        </tr>
    {% endif %}
    </tbody>
</table>
", "@JoseFramework/data_collector/tab/keys/jwkset.html.twig", "C:\\wamp64\\www\\bilal-project-main\\vendor\\web-token\\jwt-bundle\\Resources\\views\\data_collector\\tab\\keys\\jwkset.html.twig");
    }
}
