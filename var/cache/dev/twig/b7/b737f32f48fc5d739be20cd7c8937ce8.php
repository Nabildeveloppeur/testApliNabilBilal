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

/* emargement/show.html.twig */
class __TwigTemplate_5c115958214a014291dd6b4f8bcc1014 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "emargement/show.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "emargement/show.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "emargement/show.html.twig", 1);
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
        echo "    <h1>Emargement
        ";
        // line 7
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_FORMATEUR")) {
            // line 8
            echo "            <a href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_emargement_edit", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["session"]) || array_key_exists("session", $context) ? $context["session"] : (function () { throw new RuntimeError('Variable "session" does not exist.', 8, $this->source); })()), "id", [], "any", false, false, false, 8)]), "html", null, true);
            echo "\" style=\"color: blue\"><i class=\"fa-solid fa-pen-to-square\"></i></a>
        ";
        }
        // line 10
        echo "    </h1>
    <h4>
    Session: ";
        // line 12
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["session"]) || array_key_exists("session", $context) ? $context["session"] : (function () { throw new RuntimeError('Variable "session" does not exist.', 12, $this->source); })()), "intitule", [], "any", false, false, false, 12), "html", null, true);
        echo "<br>
    Date: ";
        // line 13
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["session"]) || array_key_exists("session", $context) ? $context["session"] : (function () { throw new RuntimeError('Variable "session" does not exist.', 13, $this->source); })()), "dateSession", [], "any", false, false, false, 13), "d/m/Y"), "html", null, true);
        echo "<br>
    Heure Debut: ";
        // line 14
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["session"]) || array_key_exists("session", $context) ? $context["session"] : (function () { throw new RuntimeError('Variable "session" does not exist.', 14, $this->source); })()), "heureDebut", [], "any", false, false, false, 14), "H:i"), "html", null, true);
        echo "<br>
    Heure Fin: ";
        // line 15
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["session"]) || array_key_exists("session", $context) ? $context["session"] : (function () { throw new RuntimeError('Variable "session" does not exist.', 15, $this->source); })()), "heureFin", [], "any", false, false, false, 15), "H:i"), "html", null, true);
        echo "<br>
    </h4>

    
    <table class=\"table basic-table\">
        <thead>
            <tr>
                <th>Nom</th>
                <th>Prenom</th>
                <th>Presence</th>
                <th>Alternative</th>
                <th>Heure Arrive</th>
                <th>Heure Départ</th>
                <th>Signature</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 32
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["emargements"]) || array_key_exists("emargements", $context) ? $context["emargements"] : (function () { throw new RuntimeError('Variable "emargements" does not exist.', 32, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["emarger"]) {
            // line 33
            echo "        <tr>
            <td>";
            // line 34
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["emarger"], "utilisateur", [], "any", false, false, false, 34), "nomNaissance", [], "any", false, false, false, 34), "html", null, true);
            echo "</td>
            <td>";
            // line 35
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["emarger"], "utilisateur", [], "any", false, false, false, 35), "prenom", [], "any", false, false, false, 35), "html", null, true);
            echo "</td>
            <td>
                ";
            // line 37
            if ( !(null === twig_get_attribute($this->env, $this->source, $context["emarger"], "presence", [], "any", false, false, false, 37))) {
                // line 38
                echo "                    ";
                echo (((twig_get_attribute($this->env, $this->source, $context["emarger"], "presence", [], "any", false, false, false, 38) == 1)) ? ("Présent") : ("Absent"));
                echo "
                ";
            }
            // line 40
            echo "            </td>
            <td>
                ";
            // line 42
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["emarger"], "alternative", [], "any", false, false, false, 42), "html", null, true);
            echo "
            </td>
            <td>
                ";
            // line 45
            (( !(null === twig_get_attribute($this->env, $this->source, $context["emarger"], "heureArrive", [], "any", false, false, false, 45))) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["emarger"], "heureArrive", [], "any", false, false, false, 45), "H:i"), "html", null, true))) : (print ("")));
            echo "
            </td>
            <td>
                ";
            // line 48
            (( !(null === twig_get_attribute($this->env, $this->source, $context["emarger"], "heureDepart", [], "any", false, false, false, 48))) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["emarger"], "heureDepart", [], "any", false, false, false, 48), "H:i"), "html", null, true))) : (print ("")));
            echo "
            </td>
            <td>";
            // line 50
            if ((twig_get_attribute($this->env, $this->source, $context["emarger"], "signature", [], "any", false, false, false, 50) == 1)) {
                echo "Signé";
            }
            echo "</td>
        </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['emarger'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 53
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
        return "emargement/show.html.twig";
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
        return array (  191 => 53,  180 => 50,  175 => 48,  169 => 45,  163 => 42,  159 => 40,  153 => 38,  151 => 37,  146 => 35,  142 => 34,  139 => 33,  135 => 32,  115 => 15,  111 => 14,  107 => 13,  103 => 12,  99 => 10,  93 => 8,  91 => 7,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}{{ title }}{% endblock %}

{% block body %}
    <h1>Emargement
        {% if is_granted('ROLE_FORMATEUR') %}
            <a href=\"{{ path('app_emargement_edit', {'id' : session.id}) }}\" style=\"color: blue\"><i class=\"fa-solid fa-pen-to-square\"></i></a>
        {% endif %}
    </h1>
    <h4>
    Session: {{ session.intitule }}<br>
    Date: {{ session.dateSession|date('d/m/Y') }}<br>
    Heure Debut: {{ session.heureDebut|date('H:i') }}<br>
    Heure Fin: {{ session.heureFin|date('H:i') }}<br>
    </h4>

    
    <table class=\"table basic-table\">
        <thead>
            <tr>
                <th>Nom</th>
                <th>Prenom</th>
                <th>Presence</th>
                <th>Alternative</th>
                <th>Heure Arrive</th>
                <th>Heure Départ</th>
                <th>Signature</th>
            </tr>
        </thead>
        <tbody>
        {% for emarger in emargements %}
        <tr>
            <td>{{ emarger.utilisateur.nomNaissance }}</td>
            <td>{{ emarger.utilisateur.prenom }}</td>
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
            <td>{% if emarger.signature == 1 %}Signé{% endif %}</td>
        </tr>
        {% endfor %}
        </tbody>
    </table>
{% endblock %}
", "emargement/show.html.twig", "C:\\wamp64\\www\\bilal-project-main\\templates\\emargement\\show.html.twig");
    }
}
