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

/* session/show.html.twig */
class __TwigTemplate_bf5753e89804c945742a8a207f471339 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "session/show.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "session/show.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "session/show.html.twig", 1);
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
        echo "    <h1>Session</h1>

    <table class=\"table basic-table\">
        <tbody>
            <tr>
                <th>Intitule</th>
                <td>";
        // line 12
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["session"]) || array_key_exists("session", $context) ? $context["session"] : (function () { throw new RuntimeError('Variable "session" does not exist.', 12, $this->source); })()), "intitule", [], "any", false, false, false, 12), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Promotion</th>
                <td>";
        // line 16
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["session"]) || array_key_exists("session", $context) ? $context["session"] : (function () { throw new RuntimeError('Variable "session" does not exist.', 16, $this->source); })()), "promotion", [], "any", false, false, false, 16), "formation", [], "any", false, false, false, 16), "specialite", [], "any", false, false, false, 16), "html", null, true);
        (( !(null === twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["session"]) || array_key_exists("session", $context) ? $context["session"] : (function () { throw new RuntimeError('Variable "session" does not exist.', 16, $this->source); })()), "promotion", [], "any", false, false, false, 16), "formation", [], "any", false, false, false, 16), "options", [], "any", false, false, false, 16))) ? (print (twig_escape_filter($this->env, (" - " . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["session"]) || array_key_exists("session", $context) ? $context["session"] : (function () { throw new RuntimeError('Variable "session" does not exist.', 16, $this->source); })()), "promotion", [], "any", false, false, false, 16), "formation", [], "any", false, false, false, 16), "options", [], "any", false, false, false, 16), "nomOption", [], "any", false, false, false, 16)), "html", null, true))) : (print ("")));
        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["session"]) || array_key_exists("session", $context) ? $context["session"] : (function () { throw new RuntimeError('Variable "session" does not exist.', 16, $this->source); })()), "promotion", [], "any", false, false, false, 16), "annee", [], "any", false, false, false, 16), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Matiere</th>
                <td>";
        // line 20
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["session"]) || array_key_exists("session", $context) ? $context["session"] : (function () { throw new RuntimeError('Variable "session" does not exist.', 20, $this->source); })()), "matiere", [], "any", false, false, false, 20), "nomMatiere", [], "any", false, false, false, 20), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Salle</th>
                <td>";
        // line 24
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["session"]) || array_key_exists("session", $context) ? $context["session"] : (function () { throw new RuntimeError('Variable "session" does not exist.', 24, $this->source); })()), "salle", [], "any", false, false, false, 24), "nomSalle", [], "any", false, false, false, 24), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Formateur</th>
                <td>";
        // line 28
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["session"]) || array_key_exists("session", $context) ? $context["session"] : (function () { throw new RuntimeError('Variable "session" does not exist.', 28, $this->source); })()), "formateur", [], "any", false, false, false, 28), "nomNaissance", [], "any", false, false, false, 28), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["session"]) || array_key_exists("session", $context) ? $context["session"] : (function () { throw new RuntimeError('Variable "session" does not exist.', 28, $this->source); })()), "formateur", [], "any", false, false, false, 28), "prenom", [], "any", false, false, false, 28), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>DateSession</th>
                <td>";
        // line 32
        ((twig_get_attribute($this->env, $this->source, (isset($context["session"]) || array_key_exists("session", $context) ? $context["session"] : (function () { throw new RuntimeError('Variable "session" does not exist.', 32, $this->source); })()), "dateSession", [], "any", false, false, false, 32)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["session"]) || array_key_exists("session", $context) ? $context["session"] : (function () { throw new RuntimeError('Variable "session" does not exist.', 32, $this->source); })()), "dateSession", [], "any", false, false, false, 32), "Y-m-d"), "html", null, true))) : (print ("")));
        echo "</td>
            </tr>
            <tr>
                <th>HeureDebut</th>
                <td>";
        // line 36
        ((twig_get_attribute($this->env, $this->source, (isset($context["session"]) || array_key_exists("session", $context) ? $context["session"] : (function () { throw new RuntimeError('Variable "session" does not exist.', 36, $this->source); })()), "heureDebut", [], "any", false, false, false, 36)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["session"]) || array_key_exists("session", $context) ? $context["session"] : (function () { throw new RuntimeError('Variable "session" does not exist.', 36, $this->source); })()), "heureDebut", [], "any", false, false, false, 36), "H:i"), "html", null, true))) : (print ("")));
        echo "</td>
            </tr>
            <tr>
                <th>HeureFin</th>
                <td>";
        // line 40
        ((twig_get_attribute($this->env, $this->source, (isset($context["session"]) || array_key_exists("session", $context) ? $context["session"] : (function () { throw new RuntimeError('Variable "session" does not exist.', 40, $this->source); })()), "heureFin", [], "any", false, false, false, 40)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["session"]) || array_key_exists("session", $context) ? $context["session"] : (function () { throw new RuntimeError('Variable "session" does not exist.', 40, $this->source); })()), "heureFin", [], "any", false, false, false, 40), "H:i"), "html", null, true))) : (print ("")));
        echo "</td>
            </tr>
            <tr>
                <th>Commentaire</th>
                <td>";
        // line 44
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["session"]) || array_key_exists("session", $context) ? $context["session"] : (function () { throw new RuntimeError('Variable "session" does not exist.', 44, $this->source); })()), "commentaire", [], "any", false, false, false, 44), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>

    <div class=\"row-block\">
        <a class=\"btn btn-primary\" href=\"";
        // line 50
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_session_index");
        echo "\">Liste</a>
        <a class=\"btn btn-primary\" href=\"";
        // line 51
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_session_edit", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["session"]) || array_key_exists("session", $context) ? $context["session"] : (function () { throw new RuntimeError('Variable "session" does not exist.', 51, $this->source); })()), "id", [], "any", false, false, false, 51)]), "html", null, true);
        echo "\">Modifier</a>
        ";
        // line 52
        echo twig_include($this->env, $context, "session/_delete_form.html.twig");
        echo "
    </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "session/show.html.twig";
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
        return array (  174 => 52,  170 => 51,  166 => 50,  157 => 44,  150 => 40,  143 => 36,  136 => 32,  127 => 28,  120 => 24,  113 => 20,  103 => 16,  96 => 12,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}{{ title }}{% endblock %}

{% block body %}
    <h1>Session</h1>

    <table class=\"table basic-table\">
        <tbody>
            <tr>
                <th>Intitule</th>
                <td>{{ session.intitule }}</td>
            </tr>
            <tr>
                <th>Promotion</th>
                <td>{{ session.promotion.formation.specialite }}{{ (session.promotion.formation.options is not null) ? ' - ' ~ session.promotion.formation.options.nomOption : '' }} {{ session.promotion.annee }}</td>
            </tr>
            <tr>
                <th>Matiere</th>
                <td>{{ session.matiere.nomMatiere }}</td>
            </tr>
            <tr>
                <th>Salle</th>
                <td>{{ session.salle.nomSalle }}</td>
            </tr>
            <tr>
                <th>Formateur</th>
                <td>{{ session.formateur.nomNaissance }} {{ session.formateur.prenom }}</td>
            </tr>
            <tr>
                <th>DateSession</th>
                <td>{{ session.dateSession ? session.dateSession|date('Y-m-d') : '' }}</td>
            </tr>
            <tr>
                <th>HeureDebut</th>
                <td>{{ session.heureDebut ? session.heureDebut|date('H:i') : '' }}</td>
            </tr>
            <tr>
                <th>HeureFin</th>
                <td>{{ session.heureFin ? session.heureFin|date('H:i') : '' }}</td>
            </tr>
            <tr>
                <th>Commentaire</th>
                <td>{{ session.commentaire }}</td>
            </tr>
        </tbody>
    </table>

    <div class=\"row-block\">
        <a class=\"btn btn-primary\" href=\"{{ path('app_session_index') }}\">Liste</a>
        <a class=\"btn btn-primary\" href=\"{{ path('app_session_edit', {'id': session.id}) }}\">Modifier</a>
        {{ include('session/_delete_form.html.twig') }}
    </div>
{% endblock %}
", "session/show.html.twig", "C:\\wamp64\\www\\bilal-project-main\\templates\\session\\show.html.twig");
    }
}
