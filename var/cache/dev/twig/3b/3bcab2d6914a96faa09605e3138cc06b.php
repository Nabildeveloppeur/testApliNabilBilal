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

/* emargement/eleve.html.twig */
class __TwigTemplate_4a3d9c1c1c7813f367b841ab7f05b8d4 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "emargement/eleve.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "emargement/eleve.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "emargement/eleve.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo twig_escape_filter($this->env, (isset($context["title"]) || array_key_exists("title", $context) ? $context["title"] : (function () { throw new RuntimeError('Variable "title" does not exist.', 3, $this->source); })()), "html", null, true);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <h1>Emargement</h1>

    <table class=\"table basic-table\">
        <thead>
            <tr>
                <th>Session</th>
                <th>Date Session</th>
                <th>Presence</th>
                <th>Alternative</th>
                <th>Heure Arrive</th>
                <th>Heure Départ</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 20
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["emargements"]) || array_key_exists("emargements", $context) ? $context["emargements"] : (function () { throw new RuntimeError('Variable "emargements" does not exist.', 20, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["emarger"]) {
            // line 21
            echo "        <tr>
            <td>";
            // line 22
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["emarger"], "session", [], "any", false, false, false, 22), "intitule", [], "any", false, false, false, 22), "html", null, true);
            echo "</td>
            <td>";
            // line 23
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["emarger"], "session", [], "any", false, false, false, 23), "dateSession", [], "any", false, false, false, 23), "d/m/Y"), "html", null, true);
            echo "</td>
            <td>
                ";
            // line 25
            if ( !(null === twig_get_attribute($this->env, $this->source, $context["emarger"], "presence", [], "any", false, false, false, 25))) {
                // line 26
                echo "                    ";
                echo (((twig_get_attribute($this->env, $this->source, $context["emarger"], "presence", [], "any", false, false, false, 26) == 1)) ? ("Présent") : ("Absent"));
                echo "
                ";
            }
            // line 28
            echo "            </td>
            <td>
                ";
            // line 30
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["emarger"], "alternative", [], "any", false, false, false, 30), "html", null, true);
            echo "
            </td>
            <td>
                ";
            // line 33
            (( !(null === twig_get_attribute($this->env, $this->source, $context["emarger"], "heureArrive", [], "any", false, false, false, 33))) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["emarger"], "heureArrive", [], "any", false, false, false, 33), "H:i"), "html", null, true))) : (print ("")));
            echo "
            </td>
            <td>
                ";
            // line 36
            (( !(null === twig_get_attribute($this->env, $this->source, $context["emarger"], "heureDepart", [], "any", false, false, false, 36))) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["emarger"], "heureDepart", [], "any", false, false, false, 36), "H:i"), "html", null, true))) : (print ("")));
            echo "
            </td>
        </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['emarger'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 40
        echo "        </tbody>
    </table>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "emargement/eleve.html.twig";
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
        return array (  154 => 40,  144 => 36,  138 => 33,  132 => 30,  128 => 28,  122 => 26,  120 => 25,  115 => 23,  111 => 22,  108 => 21,  104 => 20,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}{{ title }}{% endblock %}

{% block body %}
    <h1>Emargement</h1>

    <table class=\"table basic-table\">
        <thead>
            <tr>
                <th>Session</th>
                <th>Date Session</th>
                <th>Presence</th>
                <th>Alternative</th>
                <th>Heure Arrive</th>
                <th>Heure Départ</th>
            </tr>
        </thead>
        <tbody>
        {% for emarger in emargements %}
        <tr>
            <td>{{ emarger.session.intitule }}</td>
            <td>{{ emarger.session.dateSession|date('d/m/Y') }}</td>
            <td>
                {% if emarger.presence is not null %}
                    {{ (emarger.presence == 1) ? 'Présent' : 'Absent' }}
                {% endif %}
            </td>
            <td>
                {{ emarger.alternative }}
            </td>
            <td>
                {{ (emarger.heureArrive is not null) ? emarger.heureArrive|date('H:i') : '' }}
            </td>
            <td>
                {{ (emarger.heureDepart is not null) ? emarger.heureDepart|date('H:i') : '' }}
            </td>
        </tr>
        {% endfor %}
        </tbody>
    </table>
{% endblock %}
", "emargement/eleve.html.twig", "C:\\wamp64\\www\\bilal-project-main\\templates\\emargement\\eleve.html.twig");
    }
}
