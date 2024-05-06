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

/* promotion/show.html.twig */
class __TwigTemplate_1ea34d6a21cfb8d85a521352c7d51016 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "promotion/show.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "promotion/show.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "promotion/show.html.twig", 1);
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
        echo "    <h1>Promotion</h1>

    <div class=\"row-block\">
        <a class=\"btn btn-primary\" href=\"";
        // line 9
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_promotion_index");
        echo "\">Liste</a>
        <a class=\"btn btn-primary\" href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_promotion_edit", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["promotion"]) || array_key_exists("promotion", $context) ? $context["promotion"] : (function () { throw new RuntimeError('Variable "promotion" does not exist.', 10, $this->source); })()), "id", [], "any", false, false, false, 10)]), "html", null, true);
        echo "\">Modifier</a>
        ";
        // line 11
        echo twig_include($this->env, $context, "promotion/_delete_form.html.twig");
        echo "
    </div>
    <table class=\"table basic-table\">
        <tbody>
            <tr>
                <th>Id</th>
                <td>";
        // line 17
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["promotion"]) || array_key_exists("promotion", $context) ? $context["promotion"] : (function () { throw new RuntimeError('Variable "promotion" does not exist.', 17, $this->source); })()), "id", [], "any", false, false, false, 17), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Nom</th>
                <td>";
        // line 21
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["promotion"]) || array_key_exists("promotion", $context) ? $context["promotion"] : (function () { throw new RuntimeError('Variable "promotion" does not exist.', 21, $this->source); })()), "nom", [], "any", false, false, false, 21), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Annee</th>
                <td>";
        // line 25
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["promotion"]) || array_key_exists("promotion", $context) ? $context["promotion"] : (function () { throw new RuntimeError('Variable "promotion" does not exist.', 25, $this->source); })()), "annee", [], "any", false, false, false, 25), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Formation</th>
                <td>";
        // line 29
        if ( !(null === twig_get_attribute($this->env, $this->source, (isset($context["promotion"]) || array_key_exists("promotion", $context) ? $context["promotion"] : (function () { throw new RuntimeError('Variable "promotion" does not exist.', 29, $this->source); })()), "formation", [], "any", false, false, false, 29))) {
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["promotion"]) || array_key_exists("promotion", $context) ? $context["promotion"] : (function () { throw new RuntimeError('Variable "promotion" does not exist.', 29, $this->source); })()), "formation", [], "any", false, false, false, 29), "specialite", [], "any", false, false, false, 29), "html", null, true);
            (( !(null === twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["promotion"]) || array_key_exists("promotion", $context) ? $context["promotion"] : (function () { throw new RuntimeError('Variable "promotion" does not exist.', 29, $this->source); })()), "formation", [], "any", false, false, false, 29), "options", [], "any", false, false, false, 29))) ? (print (twig_escape_filter($this->env, (" - " . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["promotion"]) || array_key_exists("promotion", $context) ? $context["promotion"] : (function () { throw new RuntimeError('Variable "promotion" does not exist.', 29, $this->source); })()), "formation", [], "any", false, false, false, 29), "options", [], "any", false, false, false, 29), "nomOption", [], "any", false, false, false, 29)), "html", null, true))) : (print ("")));
        }
        echo "</td>
            </tr>
            <tr>
                <th>DateDebut</th>
                <td>";
        // line 33
        ((twig_get_attribute($this->env, $this->source, (isset($context["promotion"]) || array_key_exists("promotion", $context) ? $context["promotion"] : (function () { throw new RuntimeError('Variable "promotion" does not exist.', 33, $this->source); })()), "dateDebut", [], "any", false, false, false, 33)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["promotion"]) || array_key_exists("promotion", $context) ? $context["promotion"] : (function () { throw new RuntimeError('Variable "promotion" does not exist.', 33, $this->source); })()), "dateDebut", [], "any", false, false, false, 33), "Y-m-d"), "html", null, true))) : (print ("")));
        echo "</td>
            </tr>
            <tr>
                <th>DateFin</th>
                <td>";
        // line 37
        ((twig_get_attribute($this->env, $this->source, (isset($context["promotion"]) || array_key_exists("promotion", $context) ? $context["promotion"] : (function () { throw new RuntimeError('Variable "promotion" does not exist.', 37, $this->source); })()), "dateFin", [], "any", false, false, false, 37)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["promotion"]) || array_key_exists("promotion", $context) ? $context["promotion"] : (function () { throw new RuntimeError('Variable "promotion" does not exist.', 37, $this->source); })()), "dateFin", [], "any", false, false, false, 37), "Y-m-d"), "html", null, true))) : (print ("")));
        echo "</td>
            </tr>
            <tr>
                <th>Eleves</th>
                <td>
                    ";
        // line 42
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["promotion"]) || array_key_exists("promotion", $context) ? $context["promotion"] : (function () { throw new RuntimeError('Variable "promotion" does not exist.', 42, $this->source); })()), "inscriptions", [], "any", false, false, false, 42));
        foreach ($context['_seq'] as $context["_key"] => $context["insc"]) {
            // line 43
            echo "                        ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["insc"], "eleve", [], "any", false, false, false, 43), "NomNaissance", [], "any", false, false, false, 43), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["insc"], "eleve", [], "any", false, false, false, 43), "prenom", [], "any", false, false, false, 43), "html", null, true);
            echo "<br>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['insc'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 45
        echo "                </td>
            </tr>
        </tbody>
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
        return "promotion/show.html.twig";
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
        return array (  171 => 45,  160 => 43,  156 => 42,  148 => 37,  141 => 33,  131 => 29,  124 => 25,  117 => 21,  110 => 17,  101 => 11,  97 => 10,  93 => 9,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}{{ title }}{% endblock %}

{% block body %}
    <h1>Promotion</h1>

    <div class=\"row-block\">
        <a class=\"btn btn-primary\" href=\"{{ path('app_promotion_index') }}\">Liste</a>
        <a class=\"btn btn-primary\" href=\"{{ path('app_promotion_edit', {'id': promotion.id}) }}\">Modifier</a>
        {{ include('promotion/_delete_form.html.twig') }}
    </div>
    <table class=\"table basic-table\">
        <tbody>
            <tr>
                <th>Id</th>
                <td>{{ promotion.id }}</td>
            </tr>
            <tr>
                <th>Nom</th>
                <td>{{ promotion.nom }}</td>
            </tr>
            <tr>
                <th>Annee</th>
                <td>{{ promotion.annee }}</td>
            </tr>
            <tr>
                <th>Formation</th>
                <td>{% if promotion.formation is not null %}{{ promotion.formation.specialite }}{{ (promotion.formation.options is not null) ? ' - ' ~ promotion.formation.options.nomOption : '' }}{% endif %}</td>
            </tr>
            <tr>
                <th>DateDebut</th>
                <td>{{ promotion.dateDebut ? promotion.dateDebut|date('Y-m-d') : '' }}</td>
            </tr>
            <tr>
                <th>DateFin</th>
                <td>{{ promotion.dateFin ? promotion.dateFin|date('Y-m-d') : '' }}</td>
            </tr>
            <tr>
                <th>Eleves</th>
                <td>
                    {% for insc in promotion.inscriptions %}
                        {{ insc.eleve.NomNaissance }} {{ insc.eleve.prenom }}<br>
                    {% endfor %}
                </td>
            </tr>
        </tbody>
    </table>

    
{% endblock %}
", "promotion/show.html.twig", "C:\\wamp64\\www\\bilal-project-main\\templates\\promotion\\show.html.twig");
    }
}
