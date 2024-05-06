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

/* session/index.html.twig */
class __TwigTemplate_9f978ed857b144783eb385b7fbf33cb6 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "session/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "session/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "session/index.html.twig", 1);
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
        echo "    <h1>Sessions Liste</h1>
    <div class=\"row-block\">
        <a class=\"btn btn-primary\" href=\"";
        // line 8
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_session_new");
        echo "\">Ajouter Session</a>
    </div>
    <table class=\"table basic-table\" id=\"myTable\">
        <thead>
            <tr>
                <th>Promotion</th>
                <th>Matiere</th>
                <th>Intitule</th>
                <th>DateSession</th>
                <th>HeureDebut</th>
                <th>HeureFin</th>
                <th>Salle</th>
                <th>Formateur</th>
                <th>Commentaire</th>
                <th>actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 26
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["sessions"]) || array_key_exists("sessions", $context) ? $context["sessions"] : (function () { throw new RuntimeError('Variable "sessions" does not exist.', 26, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["session"]) {
            // line 27
            echo "            <tr>
                <td>";
            // line 28
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["session"], "promotion", [], "any", false, false, false, 28), "formation", [], "any", false, false, false, 28), "specialite", [], "any", false, false, false, 28), "html", null, true);
            (( !(null === twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["session"], "promotion", [], "any", false, false, false, 28), "formation", [], "any", false, false, false, 28), "options", [], "any", false, false, false, 28))) ? (print (twig_escape_filter($this->env, (" - " . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["session"], "promotion", [], "any", false, false, false, 28), "formation", [], "any", false, false, false, 28), "options", [], "any", false, false, false, 28), "nomOption", [], "any", false, false, false, 28)), "html", null, true))) : (print ("")));
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["session"], "promotion", [], "any", false, false, false, 28), "annee", [], "any", false, false, false, 28), "html", null, true);
            echo "</td>
                <td>";
            // line 29
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["session"], "matiere", [], "any", false, false, false, 29), "nomMatiere", [], "any", false, false, false, 29), "html", null, true);
            echo "</td>
                <td>";
            // line 30
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["session"], "intitule", [], "any", false, false, false, 30), "html", null, true);
            echo "</td>
                <td>";
            // line 31
            ((twig_get_attribute($this->env, $this->source, $context["session"], "dateSession", [], "any", false, false, false, 31)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["session"], "dateSession", [], "any", false, false, false, 31), "Y-m-d"), "html", null, true))) : (print ("")));
            echo "</td>
                <td>";
            // line 32
            ((twig_get_attribute($this->env, $this->source, $context["session"], "heureDebut", [], "any", false, false, false, 32)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["session"], "heureDebut", [], "any", false, false, false, 32), "H:i"), "html", null, true))) : (print ("")));
            echo "</td>
                <td>";
            // line 33
            ((twig_get_attribute($this->env, $this->source, $context["session"], "heureFin", [], "any", false, false, false, 33)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["session"], "heureFin", [], "any", false, false, false, 33), "H:i"), "html", null, true))) : (print ("")));
            echo "</td>
                <td>";
            // line 34
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["session"], "salle", [], "any", false, false, false, 34), "nomSalle", [], "any", false, false, false, 34), "html", null, true);
            echo "</td>
                <td>";
            // line 35
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["session"], "formateur", [], "any", false, false, false, 35), "nomNaissance", [], "any", false, false, false, 35), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["session"], "formateur", [], "any", false, false, false, 35), "prenom", [], "any", false, false, false, 35), "html", null, true);
            echo "</td>
                <td>";
            // line 36
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["session"], "commentaire", [], "any", false, false, false, 36), "html", null, true);
            echo "</td>
                <td>
                    <a href=\"";
            // line 38
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_session_show", ["id" => twig_get_attribute($this->env, $this->source, $context["session"], "id", [], "any", false, false, false, 38)]), "html", null, true);
            echo "\"><i class=\"fa-solid fa-eye\"></i></a>
                    <a href=\"";
            // line 39
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_session_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["session"], "id", [], "any", false, false, false, 39)]), "html", null, true);
            echo "\"><i class=\"fa-solid fa-pen-to-square\"></i></a>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['session'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 43
        echo "        </tbody>
    </table>

    <script>
        \$('#myTable').DataTable( {
        \"language\": {
            \"lengthMenu\": \"_MENU_ elements par page\",
            \"info\": \"page _PAGE_ de _PAGES_\",
            \"search\": 'recherche',
            \"emptyTable\": \"Aucune donnée disponible dans le tableau\",
        }
    } );
    </script>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "session/index.html.twig";
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
        return array (  176 => 43,  166 => 39,  162 => 38,  157 => 36,  151 => 35,  147 => 34,  143 => 33,  139 => 32,  135 => 31,  131 => 30,  127 => 29,  120 => 28,  117 => 27,  113 => 26,  92 => 8,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}{{ title }}{% endblock %}

{% block body %}
    <h1>Sessions Liste</h1>
    <div class=\"row-block\">
        <a class=\"btn btn-primary\" href=\"{{ path('app_session_new') }}\">Ajouter Session</a>
    </div>
    <table class=\"table basic-table\" id=\"myTable\">
        <thead>
            <tr>
                <th>Promotion</th>
                <th>Matiere</th>
                <th>Intitule</th>
                <th>DateSession</th>
                <th>HeureDebut</th>
                <th>HeureFin</th>
                <th>Salle</th>
                <th>Formateur</th>
                <th>Commentaire</th>
                <th>actions</th>
            </tr>
        </thead>
        <tbody>
        {% for session in sessions %}
            <tr>
                <td>{{ session.promotion.formation.specialite }}{{ (session.promotion.formation.options is not null) ? ' - ' ~ session.promotion.formation.options.nomOption : '' }} {{ session.promotion.annee }}</td>
                <td>{{ session.matiere.nomMatiere }}</td>
                <td>{{ session.intitule }}</td>
                <td>{{ session.dateSession ? session.dateSession|date('Y-m-d') : '' }}</td>
                <td>{{ session.heureDebut ? session.heureDebut|date('H:i') : '' }}</td>
                <td>{{ session.heureFin ? session.heureFin|date('H:i') : '' }}</td>
                <td>{{ session.salle.nomSalle }}</td>
                <td>{{ session.formateur.nomNaissance }} {{ session.formateur.prenom }}</td>
                <td>{{ session.commentaire }}</td>
                <td>
                    <a href=\"{{ path('app_session_show', {'id': session.id}) }}\"><i class=\"fa-solid fa-eye\"></i></a>
                    <a href=\"{{ path('app_session_edit', {'id': session.id}) }}\"><i class=\"fa-solid fa-pen-to-square\"></i></a>
                </td>
            </tr>
        {% endfor %}
        </tbody>
    </table>

    <script>
        \$('#myTable').DataTable( {
        \"language\": {
            \"lengthMenu\": \"_MENU_ elements par page\",
            \"info\": \"page _PAGE_ de _PAGES_\",
            \"search\": 'recherche',
            \"emptyTable\": \"Aucune donnée disponible dans le tableau\",
        }
    } );
    </script>
{% endblock %}
", "session/index.html.twig", "C:\\wamp64\\www\\bilal-project-main\\templates\\session\\index.html.twig");
    }
}
