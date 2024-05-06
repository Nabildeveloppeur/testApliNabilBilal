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

/* promotion/index.html.twig */
class __TwigTemplate_aef4697133ce13fc662e50648c56d4dc extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "promotion/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "promotion/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "promotion/index.html.twig", 1);
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
        echo "    <h1>Promotion Liste</h1>
    <div class=\"row-block\">
        <a class=\"btn btn-primary\" href=\"";
        // line 8
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_promotion_new");
        echo "\">Créer Promotion</a>
    </div>
    <table class=\"table basic-table\" id=\"myTable\">
        <thead>
            <tr>
                <th>Id</th>
                <th>Nom</th>
                <th>Annee</th>
                <th>Formation</th>
                <th>DateDebut</th>
                <th>DateFin</th>
                <th>actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 23
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["promotions"]) || array_key_exists("promotions", $context) ? $context["promotions"] : (function () { throw new RuntimeError('Variable "promotions" does not exist.', 23, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["promotion"]) {
            // line 24
            echo "            <tr>
                <td>";
            // line 25
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["promotion"], "id", [], "any", false, false, false, 25), "html", null, true);
            echo "</td>
                <td>";
            // line 26
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["promotion"], "nom", [], "any", false, false, false, 26), "html", null, true);
            echo "</td>
                <td>";
            // line 27
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["promotion"], "annee", [], "any", false, false, false, 27), "html", null, true);
            echo "</td>
                <td>";
            // line 28
            if ( !(null === twig_get_attribute($this->env, $this->source, $context["promotion"], "formation", [], "any", false, false, false, 28))) {
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["promotion"], "formation", [], "any", false, false, false, 28), "specialite", [], "any", false, false, false, 28), "html", null, true);
                (( !(null === twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["promotion"], "formation", [], "any", false, false, false, 28), "options", [], "any", false, false, false, 28))) ? (print (twig_escape_filter($this->env, (" - " . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["promotion"], "formation", [], "any", false, false, false, 28), "options", [], "any", false, false, false, 28), "nomOption", [], "any", false, false, false, 28)), "html", null, true))) : (print ("")));
            }
            echo "</td>
                <td>";
            // line 29
            ((twig_get_attribute($this->env, $this->source, $context["promotion"], "dateDebut", [], "any", false, false, false, 29)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["promotion"], "dateDebut", [], "any", false, false, false, 29), "Y-m-d"), "html", null, true))) : (print ("")));
            echo "</td>
                <td>";
            // line 30
            ((twig_get_attribute($this->env, $this->source, $context["promotion"], "dateFin", [], "any", false, false, false, 30)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["promotion"], "dateFin", [], "any", false, false, false, 30), "Y-m-d"), "html", null, true))) : (print ("")));
            echo "</td>
                <td>
                    <a href=\"";
            // line 32
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_promotion_show", ["id" => twig_get_attribute($this->env, $this->source, $context["promotion"], "id", [], "any", false, false, false, 32)]), "html", null, true);
            echo "\"><i class=\"fa-solid fa-eye\"></i></a>
                    <a href=\"";
            // line 33
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_promotion_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["promotion"], "id", [], "any", false, false, false, 33)]), "html", null, true);
            echo "\"><i class=\"fa-solid fa-pen-to-square\"></i></a>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['promotion'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 37
        echo "        </tbody>
    </table>

    <script>
        \$('#myTable').DataTable( {
        \"language\": {
            \"lengthMenu\": \"_MENU_ elements par page\",
            \"info\": \"page _PAGE_ de _PAGES_\",
            \"search\": 'recherche',
            \"emptyTable\": \"Aucune donnée disponible dans le tableau\"
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
        return "promotion/index.html.twig";
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
        return array (  159 => 37,  149 => 33,  145 => 32,  140 => 30,  136 => 29,  129 => 28,  125 => 27,  121 => 26,  117 => 25,  114 => 24,  110 => 23,  92 => 8,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}{{ title }}{% endblock %}

{% block body %}
    <h1>Promotion Liste</h1>
    <div class=\"row-block\">
        <a class=\"btn btn-primary\" href=\"{{ path('app_promotion_new') }}\">Créer Promotion</a>
    </div>
    <table class=\"table basic-table\" id=\"myTable\">
        <thead>
            <tr>
                <th>Id</th>
                <th>Nom</th>
                <th>Annee</th>
                <th>Formation</th>
                <th>DateDebut</th>
                <th>DateFin</th>
                <th>actions</th>
            </tr>
        </thead>
        <tbody>
        {% for promotion in promotions %}
            <tr>
                <td>{{ promotion.id }}</td>
                <td>{{ promotion.nom }}</td>
                <td>{{ promotion.annee }}</td>
                <td>{% if promotion.formation is not null %}{{ promotion.formation.specialite }}{{ (promotion.formation.options is not null) ? ' - ' ~ promotion.formation.options.nomOption : '' }}{% endif %}</td>
                <td>{{ promotion.dateDebut ? promotion.dateDebut|date('Y-m-d') : '' }}</td>
                <td>{{ promotion.dateFin ? promotion.dateFin|date('Y-m-d') : '' }}</td>
                <td>
                    <a href=\"{{ path('app_promotion_show', {'id': promotion.id}) }}\"><i class=\"fa-solid fa-eye\"></i></a>
                    <a href=\"{{ path('app_promotion_edit', {'id': promotion.id}) }}\"><i class=\"fa-solid fa-pen-to-square\"></i></a>
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
            \"emptyTable\": \"Aucune donnée disponible dans le tableau\"
        }
        } );
    </script>
{% endblock %}
", "promotion/index.html.twig", "C:\\wamp64\\www\\bilal-project-main\\templates\\promotion\\index.html.twig");
    }
}
