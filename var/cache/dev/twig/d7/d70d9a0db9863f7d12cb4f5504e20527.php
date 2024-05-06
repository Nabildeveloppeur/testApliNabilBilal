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

/* emploi_temps/common/_form.html.twig */
class __TwigTemplate_e022e824c549aa402904dc24abd6b525 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "emploi_temps/common/_form.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "emploi_temps/common/_form.html.twig"));

        // line 1
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 1, $this->source); })()), 'form_start');
        echo "
    ";
        // line 2
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 2, $this->source); })()), 'errors');
        echo "

    ";
        // line 4
        if (((isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new RuntimeError('Variable "admin" does not exist.', 4, $this->source); })()) == true)) {
            // line 5
            echo "    <div>
        <div class=\"form-group-search\">
            ";
            // line 7
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 7, $this->source); })()), "promotion", [], "any", false, false, false, 7), 'label', ["label_attr" => ["class" => "search-label"], "label" => "Promotion"]);
            echo "
            ";
            // line 8
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 8, $this->source); })()), "promotion", [], "any", false, false, false, 8), 'widget', ["attr" => ["class" => "search-input"]]);
            echo "
            ";
            // line 9
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 9, $this->source); })()), "promotion", [], "any", false, false, false, 9), 'errors');
            echo "
        </div>
        <div class=\"form-group-search\">
            ";
            // line 12
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 12, $this->source); })()), "eleve", [], "any", false, false, false, 12), 'label', ["label_attr" => ["class" => "search-label"], "label" => "Eleve"]);
            echo "
            ";
            // line 13
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 13, $this->source); })()), "eleve", [], "any", false, false, false, 13), 'widget', ["attr" => ["class" => "search-input"]]);
            echo "
            ";
            // line 14
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 14, $this->source); })()), "eleve", [], "any", false, false, false, 14), 'errors');
            echo "
        </div>
        <div class=\"form-group-search\">
            ";
            // line 17
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 17, $this->source); })()), "formateur", [], "any", false, false, false, 17), 'label', ["label_attr" => ["class" => "search-label"], "label" => "Formateur"]);
            echo "
            ";
            // line 18
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 18, $this->source); })()), "formateur", [], "any", false, false, false, 18), 'widget', ["attr" => ["class" => "search-input"]]);
            echo "
            ";
            // line 19
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 19, $this->source); })()), "formateur", [], "any", false, false, false, 19), 'errors');
            echo "
        </div>
    </div>
    ";
        }
        // line 23
        echo "
    <div class=\"form-group-search\">
        ";
        // line 25
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 25, $this->source); })()), "dateDebut", [], "any", false, false, false, 25), 'label', ["label_attr" => ["class" => "search-label"], "label" => "Date aprés"]);
        echo "
        ";
        // line 26
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 26, $this->source); })()), "dateDebut", [], "any", false, false, false, 26), 'widget', ["attr" => ["class" => "search-input"]]);
        echo "
        ";
        // line 27
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 27, $this->source); })()), "dateDebut", [], "any", false, false, false, 27), 'errors');
        echo "
    </div>
    <div class=\"form-group-search\">
        ";
        // line 30
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 30, $this->source); })()), "dateFin", [], "any", false, false, false, 30), 'label', ["label_attr" => ["class" => "search-label"], "label" => "Date avant"]);
        echo "
        ";
        // line 31
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 31, $this->source); })()), "dateFin", [], "any", false, false, false, 31), 'widget', ["attr" => ["class" => "search-input"]]);
        echo "
        ";
        // line 32
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 32, $this->source); })()), "dateFin", [], "any", false, false, false, 32), 'errors');
        echo "
    </div>

    <button class=\"btn\">";
        // line 35
        echo twig_escape_filter($this->env, ((array_key_exists("button_label", $context)) ? (_twig_default_filter((isset($context["button_label"]) || array_key_exists("button_label", $context) ? $context["button_label"] : (function () { throw new RuntimeError('Variable "button_label" does not exist.', 35, $this->source); })()), "Rechercher")) : ("Rechercher")), "html", null, true);
        echo "</button>
";
        // line 36
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 36, $this->source); })()), 'form_end');
        echo "
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "emploi_temps/common/_form.html.twig";
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
        return array (  137 => 36,  133 => 35,  127 => 32,  123 => 31,  119 => 30,  113 => 27,  109 => 26,  105 => 25,  101 => 23,  94 => 19,  90 => 18,  86 => 17,  80 => 14,  76 => 13,  72 => 12,  66 => 9,  62 => 8,  58 => 7,  54 => 5,  52 => 4,  47 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{{ form_start(form) }}
    {{ form_errors(form) }}

    {% if admin == true %}
    <div>
        <div class=\"form-group-search\">
            {{ form_label(form.promotion, 'Promotion', {'label_attr': {'class': 'search-label'}}) }}
            {{ form_widget(form.promotion, {'attr': {'class': 'search-input'}}) }}
            {{ form_errors(form.promotion) }}
        </div>
        <div class=\"form-group-search\">
            {{ form_label(form.eleve, 'Eleve', {'label_attr': {'class': 'search-label'}}) }}
            {{ form_widget(form.eleve, {'attr': {'class': 'search-input'}}) }}
            {{ form_errors(form.eleve) }}
        </div>
        <div class=\"form-group-search\">
            {{ form_label(form.formateur, 'Formateur', {'label_attr': {'class': 'search-label'}}) }}
            {{ form_widget(form.formateur, {'attr': {'class': 'search-input'}}) }}
            {{ form_errors(form.formateur) }}
        </div>
    </div>
    {% endif %}

    <div class=\"form-group-search\">
        {{ form_label(form.dateDebut, 'Date aprés', {'label_attr': {'class': 'search-label'}}) }}
        {{ form_widget(form.dateDebut, {'attr': {'class': 'search-input'}}) }}
        {{ form_errors(form.dateDebut) }}
    </div>
    <div class=\"form-group-search\">
        {{ form_label(form.dateFin, 'Date avant', {'label_attr': {'class': 'search-label'}}) }}
        {{ form_widget(form.dateFin, {'attr': {'class': 'search-input'}}) }}
        {{ form_errors(form.dateFin) }}
    </div>

    <button class=\"btn\">{{ button_label|default('Rechercher') }}</button>
{{ form_end(form) }}
", "emploi_temps/common/_form.html.twig", "C:\\wamp64\\www\\bilal-project-main\\templates\\emploi_temps\\common\\_form.html.twig");
    }
}
