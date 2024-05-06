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

/* utilisateur/index.html.twig */
class __TwigTemplate_03d013c703786238a3ff32ed70f0ecbe extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "utilisateur/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "utilisateur/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "utilisateur/index.html.twig", 1);
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
        echo "    <h1>Utilisateur Liste</h1>
    <div class=\"row-block\">
        <a class=\"btn btn-primary\" href=\"";
        // line 8
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_utilisateur_new");
        echo "\">Ajouter Utilisateur</a>
    </div>
    <table class=\"table basic-table\" id=\"myTable\">
        <thead>
            <tr>
                <th>Email</th>
                <th>Role</th>
                <th>Civilité</th>
                <th>NomUsuel</th>
                <th>NomNaissance</th>
                <th>Prenom</th>
                <th>Numtel</th>
                <th>actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 24
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["utilisateurs"]) || array_key_exists("utilisateurs", $context) ? $context["utilisateurs"] : (function () { throw new RuntimeError('Variable "utilisateurs" does not exist.', 24, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["utilisateur"]) {
            // line 25
            echo "            <tr>
                <td>";
            // line 26
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["utilisateur"], "email", [], "any", false, false, false, 26), "html", null, true);
            echo "</td>
                <td>";
            // line 27
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_split_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["utilisateur"], "roles", [], "any", false, false, false, 27), 0, [], "array", false, false, false, 27), "_"), 1, [], "array", false, false, false, 27), "html", null, true);
            echo "</td>
                <td>";
            // line 28
            if ( !(null === twig_get_attribute($this->env, $this->source, $context["utilisateur"], "civilite", [], "any", false, false, false, 28))) {
                echo ((twig_get_attribute($this->env, $this->source, $context["utilisateur"], "civilite", [], "any", false, false, false, 28)) ? ("Mr") : ("Mme"));
            }
            echo "</td>
                <td>";
            // line 29
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["utilisateur"], "nomUsuel", [], "any", false, false, false, 29), "html", null, true);
            echo "</td>
                <td>";
            // line 30
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["utilisateur"], "nomNaissance", [], "any", false, false, false, 30), "html", null, true);
            echo "</td>
                <td>";
            // line 31
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["utilisateur"], "prenom", [], "any", false, false, false, 31), "html", null, true);
            echo "</td>
                <td>";
            // line 32
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["utilisateur"], "numtel", [], "any", false, false, false, 32), "html", null, true);
            echo "</td>
                <td>
                    <a href=\"";
            // line 34
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_utilisateur_show", ["id" => twig_get_attribute($this->env, $this->source, $context["utilisateur"], "id", [], "any", false, false, false, 34)]), "html", null, true);
            echo "\"><i class=\"fa-solid fa-eye\"></i></a>
                    <a href=\"";
            // line 35
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_utilisateur_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["utilisateur"], "id", [], "any", false, false, false, 35)]), "html", null, true);
            echo "\"><i class=\"fa-solid fa-pen-to-square\"></i></a>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['utilisateur'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 39
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
        return "utilisateur/index.html.twig";
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
        return array (  163 => 39,  153 => 35,  149 => 34,  144 => 32,  140 => 31,  136 => 30,  132 => 29,  126 => 28,  122 => 27,  118 => 26,  115 => 25,  111 => 24,  92 => 8,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}{{ title }}{% endblock %}

{% block body %}
    <h1>Utilisateur Liste</h1>
    <div class=\"row-block\">
        <a class=\"btn btn-primary\" href=\"{{ path('app_utilisateur_new') }}\">Ajouter Utilisateur</a>
    </div>
    <table class=\"table basic-table\" id=\"myTable\">
        <thead>
            <tr>
                <th>Email</th>
                <th>Role</th>
                <th>Civilité</th>
                <th>NomUsuel</th>
                <th>NomNaissance</th>
                <th>Prenom</th>
                <th>Numtel</th>
                <th>actions</th>
            </tr>
        </thead>
        <tbody>
        {% for utilisateur in utilisateurs %}
            <tr>
                <td>{{ utilisateur.email }}</td>
                <td>{{ utilisateur.roles[0]|split('_')[1] }}</td>
                <td>{% if utilisateur.civilite is not null %}{{utilisateur.civilite ? 'Mr' : 'Mme' }}{% endif %}</td>
                <td>{{ utilisateur.nomUsuel }}</td>
                <td>{{ utilisateur.nomNaissance }}</td>
                <td>{{ utilisateur.prenom }}</td>
                <td>{{ utilisateur.numtel }}</td>
                <td>
                    <a href=\"{{ path('app_utilisateur_show', {'id': utilisateur.id}) }}\"><i class=\"fa-solid fa-eye\"></i></a>
                    <a href=\"{{ path('app_utilisateur_edit', {'id': utilisateur.id}) }}\"><i class=\"fa-solid fa-pen-to-square\"></i></a>
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
", "utilisateur/index.html.twig", "C:\\wamp64\\www\\bilal-project-main\\templates\\utilisateur\\index.html.twig");
    }
}
