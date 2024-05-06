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

/* nav.html.twig */
class __TwigTemplate_502d9d534668ecd42d63b22124255483 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "nav.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "nav.html.twig"));

        // line 1
        echo "<div class=\"navbar\">
    <ul class=\"nav-links\">
        ";
        // line 3
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 3, $this->source); })()), "user", [], "any", false, false, false, 3), "roles", [], "any", false, false, false, 3), 0, [], "array", false, false, false, 3) == "ROLE_ADMIN")) {
            // line 4
            echo "            <li><a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_emploi_admin");
            echo "\">Emploi du temps</a></li>
            <li><a href=\"";
            // line 5
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_utilisateur_index");
            echo "\">Gestion Utilisateurs</a></li>
            <li><a href=\"";
            // line 6
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_inscription_index");
            echo "\">Gestion Inscription</a></li>
            <li><a href=\"";
            // line 7
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_session_index");
            echo "\">Gestion Sessions</a></li>
            <li><a href=\"";
            // line 8
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_promotion_index");
            echo "\">Gestions Promotions</a></li>
            <li><a href=\"";
            // line 9
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_formation_index");
            echo "\">Gestion Formations</a></li>
        ";
        }
        // line 11
        echo "        ";
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 11, $this->source); })()), "user", [], "any", false, false, false, 11), "roles", [], "any", false, false, false, 11), 0, [], "array", false, false, false, 11) == "ROLE_FORMATEUR")) {
            // line 12
            echo "            <li><a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_emploi_formateur");
            echo "\">Emploi du temps</a></li>
        ";
        }
        // line 14
        echo "        ";
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 14, $this->source); })()), "user", [], "any", false, false, false, 14), "roles", [], "any", false, false, false, 14), 0, [], "array", false, false, false, 14) == "ROLE_ELEVE")) {
            // line 15
            echo "            <li><a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_emploi_eleve");
            echo "\">Emploi du temps</a></li>
            <li><a href=\"";
            // line 16
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_emargement_eleve");
            echo "\">Emargement</a></li>
        ";
        }
        // line 18
        echo "
        <li><a href=\"";
        // line 19
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
        echo "\">Déconnexion</a></li>
    </ul>
</div>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "nav.html.twig";
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
        return array (  100 => 19,  97 => 18,  92 => 16,  87 => 15,  84 => 14,  78 => 12,  75 => 11,  70 => 9,  66 => 8,  62 => 7,  58 => 6,  54 => 5,  49 => 4,  47 => 3,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"navbar\">
    <ul class=\"nav-links\">
        {% if app.user.roles[0] == 'ROLE_ADMIN' %}
            <li><a href=\"{{ path('app_emploi_admin') }}\">Emploi du temps</a></li>
            <li><a href=\"{{ path('app_utilisateur_index') }}\">Gestion Utilisateurs</a></li>
            <li><a href=\"{{ path('app_inscription_index') }}\">Gestion Inscription</a></li>
            <li><a href=\"{{ path('app_session_index') }}\">Gestion Sessions</a></li>
            <li><a href=\"{{ path('app_promotion_index') }}\">Gestions Promotions</a></li>
            <li><a href=\"{{ path('app_formation_index') }}\">Gestion Formations</a></li>
        {% endif %}
        {% if app.user.roles[0] == 'ROLE_FORMATEUR' %}
            <li><a href=\"{{ path('app_emploi_formateur') }}\">Emploi du temps</a></li>
        {% endif %}
        {% if app.user.roles[0] == 'ROLE_ELEVE' %}
            <li><a href=\"{{ path('app_emploi_eleve') }}\">Emploi du temps</a></li>
            <li><a href=\"{{ path('app_emargement_eleve') }}\">Emargement</a></li>
        {% endif %}

        <li><a href=\"{{ path('app_logout') }}\">Déconnexion</a></li>
    </ul>
</div>", "nav.html.twig", "C:\\wamp64\\www\\bilal-project-main\\templates\\nav.html.twig");
    }
}
