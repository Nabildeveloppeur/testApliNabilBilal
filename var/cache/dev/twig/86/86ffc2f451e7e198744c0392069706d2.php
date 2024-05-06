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

/* @JoseFramework/data_collector/tab/keys/jwk.html.twig */
class __TwigTemplate_596bf6adb4cc77bae2ad78656d4a439c extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@JoseFramework/data_collector/tab/keys/jwk.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@JoseFramework/data_collector/tab/keys/jwk.html.twig"));

        // line 1
        echo "<h3>Keys</h3>
<p class=\"help\">
    This table lists all keys registered as service through the bundle configuration
    or the Configuration Helper. <br>
    For each key, it shows the result of the analyze performed on the key.
</p>
<table>
    <thead>
    <tr>
        <th>Service ID</th>
        <th>Key</th>
        <th>Analyze Result</th>
    </tr>
    </thead>
    <tbody>
    ";
        // line 16
        if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 16, $this->source); })()), "getData", [], "method", false, false, false, 16), "key", [], "any", false, false, false, 16), "jwk", [], "any", false, false, false, 16))) {
            // line 17
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 17, $this->source); })()), "getData", [], "method", false, false, false, 17), "key", [], "any", false, false, false, 17), "jwk", [], "any", false, false, false, 17));
            foreach ($context['_seq'] as $context["id"] => $context["data"]) {
                // line 18
                echo "            <tr>
                <td>";
                // line 19
                echo twig_escape_filter($this->env, $context["id"], "html", null, true);
                echo "</td>
                <td>";
                // line 20
                echo $this->extensions['Symfony\Bundle\WebProfilerBundle\Twig\WebProfilerExtension']->dumpData($this->env, twig_get_attribute($this->env, $this->source, $context["data"], "jwk", [], "any", false, false, false, 20));
                echo "</td>
                <td>
                    ";
                // line 22
                if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["data"], "analyze", [], "any", false, false, false, 22), "count", [], "method", false, false, false, 22) == 0)) {
                    // line 23
                    echo "                        No message. All good!
                    ";
                } else {
                    // line 25
                    echo "                        <ul>
                            ";
                    // line 26
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["data"], "analyze", [], "any", false, false, false, 26));
                    foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                        // line 27
                        echo "                                <li class=\"severity-";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["message"], "getSeverity", [], "method", false, false, false, 27), "html", null, true);
                        echo "\">";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["message"], "getMessage", [], "method", false, false, false, 27), "html", null, true);
                        echo "</li>
                            ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 29
                    echo "                        </ul>
                    ";
                }
                // line 31
                echo "                </td>
            </tr>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['id'], $context['data'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 34
            echo "    ";
        } else {
            // line 35
            echo "        <tr>
            <td colspan=\"3\">No registered key</td>
        </tr>
    ";
        }
        // line 39
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
        return "@JoseFramework/data_collector/tab/keys/jwk.html.twig";
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
        return array (  124 => 39,  118 => 35,  115 => 34,  107 => 31,  103 => 29,  92 => 27,  88 => 26,  85 => 25,  81 => 23,  79 => 22,  74 => 20,  70 => 19,  67 => 18,  62 => 17,  60 => 16,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<h3>Keys</h3>
<p class=\"help\">
    This table lists all keys registered as service through the bundle configuration
    or the Configuration Helper. <br>
    For each key, it shows the result of the analyze performed on the key.
</p>
<table>
    <thead>
    <tr>
        <th>Service ID</th>
        <th>Key</th>
        <th>Analyze Result</th>
    </tr>
    </thead>
    <tbody>
    {% if not collector.getData().key.jwk is empty %}
        {% for id, data in collector.getData().key.jwk %}
            <tr>
                <td>{{ id }}</td>
                <td>{{ profiler_dump(data.jwk) }}</td>
                <td>
                    {% if data.analyze.count() == 0 %}
                        No message. All good!
                    {% else %}
                        <ul>
                            {% for message in data.analyze %}
                                <li class=\"severity-{{ message.getSeverity() }}\">{{ message.getMessage() }}</li>
                            {% endfor %}
                        </ul>
                    {% endif %}
                </td>
            </tr>
        {% endfor %}
    {% else %}
        <tr>
            <td colspan=\"3\">No registered key</td>
        </tr>
    {% endif %}
    </tbody>
</table>
", "@JoseFramework/data_collector/tab/keys/jwk.html.twig", "C:\\wamp64\\www\\bilal-project-main\\vendor\\web-token\\jwt-bundle\\Resources\\views\\data_collector\\tab\\keys\\jwk.html.twig");
    }
}
