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

/* utilisateur/show.html.twig */
class __TwigTemplate_e160f815a4b034aa9a87649cb4150931 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "utilisateur/show.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "utilisateur/show.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "utilisateur/show.html.twig", 1);
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
        echo "    <h1>Utilisateur</h1>

    <table class=\"table basic-table\">
        <tbody>
            <tr>
                <th>Id</th>
                <td>";
        // line 12
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["utilisateur"]) || array_key_exists("utilisateur", $context) ? $context["utilisateur"] : (function () { throw new RuntimeError('Variable "utilisateur" does not exist.', 12, $this->source); })()), "id", [], "any", false, false, false, 12), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Email</th>
                <td>";
        // line 16
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["utilisateur"]) || array_key_exists("utilisateur", $context) ? $context["utilisateur"] : (function () { throw new RuntimeError('Variable "utilisateur" does not exist.', 16, $this->source); })()), "email", [], "any", false, false, false, 16), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Role</th>
                <td>";
        // line 20
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_split_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["utilisateur"]) || array_key_exists("utilisateur", $context) ? $context["utilisateur"] : (function () { throw new RuntimeError('Variable "utilisateur" does not exist.', 20, $this->source); })()), "roles", [], "any", false, false, false, 20), 0, [], "array", false, false, false, 20), "_"), 1, [], "array", false, false, false, 20), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Civilite</th>
                <td>";
        // line 24
        if ( !(null === twig_get_attribute($this->env, $this->source, (isset($context["utilisateur"]) || array_key_exists("utilisateur", $context) ? $context["utilisateur"] : (function () { throw new RuntimeError('Variable "utilisateur" does not exist.', 24, $this->source); })()), "civilite", [], "any", false, false, false, 24))) {
            echo ((twig_get_attribute($this->env, $this->source, (isset($context["utilisateur"]) || array_key_exists("utilisateur", $context) ? $context["utilisateur"] : (function () { throw new RuntimeError('Variable "utilisateur" does not exist.', 24, $this->source); })()), "civilite", [], "any", false, false, false, 24)) ? ("Mr") : ("Mme"));
        }
        echo "</td>
            </tr>
            <tr>
                <th>NomUsuel</th>
                <td>";
        // line 28
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["utilisateur"]) || array_key_exists("utilisateur", $context) ? $context["utilisateur"] : (function () { throw new RuntimeError('Variable "utilisateur" does not exist.', 28, $this->source); })()), "nomUsuel", [], "any", false, false, false, 28), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>NomNaissance</th>
                <td>";
        // line 32
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["utilisateur"]) || array_key_exists("utilisateur", $context) ? $context["utilisateur"] : (function () { throw new RuntimeError('Variable "utilisateur" does not exist.', 32, $this->source); })()), "nomNaissance", [], "any", false, false, false, 32), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Prenom</th>
                <td>";
        // line 36
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["utilisateur"]) || array_key_exists("utilisateur", $context) ? $context["utilisateur"] : (function () { throw new RuntimeError('Variable "utilisateur" does not exist.', 36, $this->source); })()), "prenom", [], "any", false, false, false, 36), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Numtel</th>
                <td>";
        // line 40
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["utilisateur"]) || array_key_exists("utilisateur", $context) ? $context["utilisateur"] : (function () { throw new RuntimeError('Variable "utilisateur" does not exist.', 40, $this->source); })()), "numtel", [], "any", false, false, false, 40), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Promotions</th>
                <td>
                    ";
        // line 45
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["utilisateur"]) || array_key_exists("utilisateur", $context) ? $context["utilisateur"] : (function () { throw new RuntimeError('Variable "utilisateur" does not exist.', 45, $this->source); })()), "inscriptions", [], "any", false, false, false, 45));
        foreach ($context['_seq'] as $context["_key"] => $context["insc"]) {
            // line 46
            echo "                        ";
            if ( !(null === twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["insc"], "promotion", [], "any", false, false, false, 46), "formation", [], "any", false, false, false, 46))) {
                // line 47
                echo "                            ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["insc"], "promotion", [], "any", false, false, false, 47), "formation", [], "any", false, false, false, 47), "specialite", [], "any", false, false, false, 47), "html", null, true);
                (( !(null === twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["insc"], "promotion", [], "any", false, false, false, 47), "formation", [], "any", false, false, false, 47), "options", [], "any", false, false, false, 47))) ? (print (twig_escape_filter($this->env, (" - " . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["insc"], "promotion", [], "any", false, false, false, 47), "formation", [], "any", false, false, false, 47), "options", [], "any", false, false, false, 47), "nomOption", [], "any", false, false, false, 47)), "html", null, true))) : (print ("")));
                echo "
                        ";
            }
            // line 49
            echo "                        ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["insc"], "promotion", [], "any", false, false, false, 49), "annee", [], "any", false, false, false, 49), "html", null, true);
            echo "<br>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['insc'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 51
        echo "                </td>
            </tr>
        </tbody>
    </table>

    <div class=\"row-block\">
        <a class=\"btn btn-primary\" href=\"";
        // line 57
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_utilisateur_index");
        echo "\">Liste</a>
        <a class=\"btn btn-primary\" href=\"";
        // line 58
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_utilisateur_edit", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["utilisateur"]) || array_key_exists("utilisateur", $context) ? $context["utilisateur"] : (function () { throw new RuntimeError('Variable "utilisateur" does not exist.', 58, $this->source); })()), "id", [], "any", false, false, false, 58)]), "html", null, true);
        echo "\">Modifier</a>
        ";
        // line 59
        echo twig_include($this->env, $context, "utilisateur/_delete_form.html.twig");
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
        return "utilisateur/show.html.twig";
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
        return array (  194 => 59,  190 => 58,  186 => 57,  178 => 51,  169 => 49,  162 => 47,  159 => 46,  155 => 45,  147 => 40,  140 => 36,  133 => 32,  126 => 28,  117 => 24,  110 => 20,  103 => 16,  96 => 12,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}{{ title }}{% endblock %}

{% block body %}
    <h1>Utilisateur</h1>

    <table class=\"table basic-table\">
        <tbody>
            <tr>
                <th>Id</th>
                <td>{{ utilisateur.id }}</td>
            </tr>
            <tr>
                <th>Email</th>
                <td>{{ utilisateur.email }}</td>
            </tr>
            <tr>
                <th>Role</th>
                <td>{{ utilisateur.roles[0]|split('_')[1] }}</td>
            </tr>
            <tr>
                <th>Civilite</th>
                <td>{% if utilisateur.civilite is not null %}{{utilisateur.civilite ? 'Mr' : 'Mme' }}{% endif %}</td>
            </tr>
            <tr>
                <th>NomUsuel</th>
                <td>{{ utilisateur.nomUsuel }}</td>
            </tr>
            <tr>
                <th>NomNaissance</th>
                <td>{{ utilisateur.nomNaissance }}</td>
            </tr>
            <tr>
                <th>Prenom</th>
                <td>{{ utilisateur.prenom }}</td>
            </tr>
            <tr>
                <th>Numtel</th>
                <td>{{ utilisateur.numtel }}</td>
            </tr>
            <tr>
                <th>Promotions</th>
                <td>
                    {% for insc in utilisateur.inscriptions %}
                        {% if insc.promotion.formation is not null %}
                            {{ insc.promotion.formation.specialite }}{{ (insc.promotion.formation.options is not null) ? ' - ' ~ insc.promotion.formation.options.nomOption : '' }}
                        {% endif %}
                        {{insc.promotion.annee}}<br>
                    {% endfor %}
                </td>
            </tr>
        </tbody>
    </table>

    <div class=\"row-block\">
        <a class=\"btn btn-primary\" href=\"{{ path('app_utilisateur_index') }}\">Liste</a>
        <a class=\"btn btn-primary\" href=\"{{ path('app_utilisateur_edit', {'id': utilisateur.id}) }}\">Modifier</a>
        {{ include('utilisateur/_delete_form.html.twig') }}
    </div>
    
{% endblock %}
", "utilisateur/show.html.twig", "C:\\wamp64\\www\\bilal-project-main\\templates\\utilisateur\\show.html.twig");
    }
}
