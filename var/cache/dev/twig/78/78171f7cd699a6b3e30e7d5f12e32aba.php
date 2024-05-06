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

/* @JoseFramework/data_collector/tab/jwe/key_encryption_algorithms.html.twig */
class __TwigTemplate_a32ce73709581ad4b169e6cef454aa8e extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@JoseFramework/data_collector/tab/jwe/key_encryption_algorithms.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@JoseFramework/data_collector/tab/jwe/key_encryption_algorithms.html.twig"));

        // line 1
        echo "<h3>Available Key Encryption Algorithms</h3>
<p class=\"help\">
    The following table lists all key encryption algorithms available in this environment.
</p>
<table>
    <thead>
    <tr>
        <th>Name</th>
        <th>Alias</th>
        <th>Message</th>
    </tr>
    </thead>
    <tbody>
    ";
        // line 14
        $context["encryptionAlgorithms"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 14, $this->source); })()), "getData", [], "method", false, false, false, 14), "algorithm", [], "any", false, false, false, 14), "algorithms", [], "any", false, false, false, 14);
        // line 15
        echo "    ";
        if (twig_get_attribute($this->env, $this->source, ($context["encryptionAlgorithms"] ?? null), "Key Encryption", [], "array", true, true, false, 15)) {
            // line 16
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["encryptionAlgorithms"]) || array_key_exists("encryptionAlgorithms", $context) ? $context["encryptionAlgorithms"] : (function () { throw new RuntimeError('Variable "encryptionAlgorithms" does not exist.', 16, $this->source); })()), "Key Encryption", [], "array", false, false, false, 16));
            foreach ($context['_seq'] as $context["alias"] => $context["alg"]) {
                // line 17
                echo "            <tr class=\"";
                if (twig_in_filter(twig_get_attribute($this->env, $this->source, $context["alg"], "name", [], "any", false, false, false, 17), twig_get_array_keys_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 17, $this->source); })()), "getData", [], "method", false, false, false, 17), "algorithm", [], "any", false, false, false, 17), "messages", [], "any", false, false, false, 17)))) {
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 17, $this->source); })()), "getData", [], "method", false, false, false, 17), "algorithm", [], "any", false, false, false, 17), "messages", [], "any", false, false, false, 17), twig_get_attribute($this->env, $this->source, $context["alg"], "name", [], "any", false, false, false, 17), [], "array", false, false, false, 17), "severity", [], "array", false, false, false, 17), "html", null, true);
                } else {
                    echo "no-severity";
                }
                echo "\">
                <td>";
                // line 18
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["alg"], "name", [], "any", false, false, false, 18), "html", null, true);
                echo "</td>
                <td>";
                // line 19
                echo twig_escape_filter($this->env, $context["alias"], "html", null, true);
                echo "</td>
                <td>
                    ";
                // line 21
                if (twig_in_filter(twig_get_attribute($this->env, $this->source, $context["alg"], "name", [], "any", false, false, false, 21), twig_get_array_keys_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 21, $this->source); })()), "getData", [], "method", false, false, false, 21), "algorithm", [], "any", false, false, false, 21), "messages", [], "any", false, false, false, 21)))) {
                    // line 22
                    echo "                        ";
                    echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 22, $this->source); })()), "getData", [], "method", false, false, false, 22), "algorithm", [], "any", false, false, false, 22), "messages", [], "any", false, false, false, 22), twig_get_attribute($this->env, $this->source, $context["alg"], "name", [], "any", false, false, false, 22), [], "array", false, false, false, 22), "message", [], "array", false, false, false, 22);
                    echo "
                    ";
                }
                // line 24
                echo "                </td>
            </tr>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['alias'], $context['alg'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 27
            echo "    ";
        } else {
            // line 28
            echo "        <tr>
            <td colspan=\"3\">
                No algorithm. Please consider the installation of the following packages or create your own algorithm:
                <ul>
                    <li>web-token/jwt-library</li>
                </ul>
            </td>
        </tr>
    ";
        }
        // line 37
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
        return "@JoseFramework/data_collector/tab/jwe/key_encryption_algorithms.html.twig";
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
        return array (  116 => 37,  105 => 28,  102 => 27,  94 => 24,  88 => 22,  86 => 21,  81 => 19,  77 => 18,  68 => 17,  63 => 16,  60 => 15,  58 => 14,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<h3>Available Key Encryption Algorithms</h3>
<p class=\"help\">
    The following table lists all key encryption algorithms available in this environment.
</p>
<table>
    <thead>
    <tr>
        <th>Name</th>
        <th>Alias</th>
        <th>Message</th>
    </tr>
    </thead>
    <tbody>
    {% set encryptionAlgorithms = collector.getData().algorithm.algorithms %}
    {% if encryptionAlgorithms['Key Encryption'] is defined %}
        {% for alias, alg in encryptionAlgorithms['Key Encryption'] %}
            <tr class=\"{% if alg.name in collector.getData().algorithm.messages|keys %}{{ collector.getData().algorithm.messages[alg.name]['severity'] }}{% else %}no-severity{% endif %}\">
                <td>{{ alg.name }}</td>
                <td>{{ alias }}</td>
                <td>
                    {% if alg.name in collector.getData().algorithm.messages|keys %}
                        {{ collector.getData().algorithm.messages[alg.name]['message']|raw }}
                    {% endif %}
                </td>
            </tr>
        {% endfor %}
    {% else %}
        <tr>
            <td colspan=\"3\">
                No algorithm. Please consider the installation of the following packages or create your own algorithm:
                <ul>
                    <li>web-token/jwt-library</li>
                </ul>
            </td>
        </tr>
    {% endif %}
    </tbody>
</table>
", "@JoseFramework/data_collector/tab/jwe/key_encryption_algorithms.html.twig", "C:\\wamp64\\www\\bilal-project-main\\vendor\\web-token\\jwt-bundle\\Resources\\views\\data_collector\\tab\\jwe\\key_encryption_algorithms.html.twig");
    }
}
