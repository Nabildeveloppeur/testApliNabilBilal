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

/* formation/index.html.twig */
class __TwigTemplate_628194bfbfd928de172d40824fe05e95 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "formation/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "formation/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "formation/index.html.twig", 1);
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
        echo "    <h1>Formations Liste</h1>
    <div class=\"row-block\">
        <a class=\"btn btn-primary\" href=\"";
        // line 8
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_formation_new");
        echo "\">Créer Formation</a>
    </div>
    <table class=\"table basic-table\" id=\"myTable\">
        <thead>
            <tr>
                <th>Id</th>
                <th>Specialite</th>
                <th>Certification</th>
                <th>Option</th>
                <th>actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 21
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["formations"]) || array_key_exists("formations", $context) ? $context["formations"] : (function () { throw new RuntimeError('Variable "formations" does not exist.', 21, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["formation"]) {
            // line 22
            echo "            <tr>
                <td>";
            // line 23
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["formation"], "id", [], "any", false, false, false, 23), "html", null, true);
            echo "</td>
                <td>";
            // line 24
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["formation"], "specialite", [], "any", false, false, false, 24), "html", null, true);
            echo "</td>
                <td>";
            // line 25
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["formation"], "certification", [], "any", false, false, false, 25), "html", null, true);
            echo "</td>
                <td>";
            // line 26
            (( !(null === twig_get_attribute($this->env, $this->source, $context["formation"], "options", [], "any", false, false, false, 26))) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["formation"], "options", [], "any", false, false, false, 26), "nomOption", [], "any", false, false, false, 26), "html", null, true))) : (print ("")));
            echo "</td>
                <td>
                    <a href=\"";
            // line 28
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_formation_show", ["id" => twig_get_attribute($this->env, $this->source, $context["formation"], "id", [], "any", false, false, false, 28)]), "html", null, true);
            echo "\"><i class=\"fa-solid fa-eye\"></i></a>
                    <a href=\"";
            // line 29
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_formation_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["formation"], "id", [], "any", false, false, false, 29)]), "html", null, true);
            echo "\"><i class=\"fa-solid fa-pen-to-square\"></i></a>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['formation'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 33
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
        return "formation/index.html.twig";
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
        return array (  146 => 33,  136 => 29,  132 => 28,  127 => 26,  123 => 25,  119 => 24,  115 => 23,  112 => 22,  108 => 21,  92 => 8,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}{{ title }}{% endblock %}

{% block body %}
    <h1>Formations Liste</h1>
    <div class=\"row-block\">
        <a class=\"btn btn-primary\" href=\"{{ path('app_formation_new') }}\">Créer Formation</a>
    </div>
    <table class=\"table basic-table\" id=\"myTable\">
        <thead>
            <tr>
                <th>Id</th>
                <th>Specialite</th>
                <th>Certification</th>
                <th>Option</th>
                <th>actions</th>
            </tr>
        </thead>
        <tbody>
        {% for formation in formations %}
            <tr>
                <td>{{ formation.id }}</td>
                <td>{{ formation.specialite }}</td>
                <td>{{ formation.certification }}</td>
                <td>{{ (formation.options is not null) ? formation.options.nomOption : '' }}</td>
                <td>
                    <a href=\"{{ path('app_formation_show', {'id': formation.id}) }}\"><i class=\"fa-solid fa-eye\"></i></a>
                    <a href=\"{{ path('app_formation_edit', {'id': formation.id}) }}\"><i class=\"fa-solid fa-pen-to-square\"></i></a>
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
", "formation/index.html.twig", "C:\\wamp64\\www\\bilal-project-main\\templates\\formation\\index.html.twig");
    }
}
