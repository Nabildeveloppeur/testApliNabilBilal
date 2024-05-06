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

/* emargement/_form.html.twig */
class __TwigTemplate_ac82a78a8cad41f84874342b555e8251 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "emargement/_form.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "emargement/_form.html.twig"));

        // line 1
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 1, $this->source); })()), 'form_start');
        echo "

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
        // line 16
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 16, $this->source); })()), "emargers", [], "any", false, false, false, 16));
        foreach ($context['_seq'] as $context["_key"] => $context["emergerField"]) {
            // line 17
            echo "        <tr>
            <td>";
            // line 18
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["emergerField"], "vars", [], "any", false, false, false, 18), "value", [], "any", false, false, false, 18), "utilisateur", [], "any", false, false, false, 18), "nomNaissance", [], "any", false, false, false, 18), "html", null, true);
            echo "</td>
            <td>";
            // line 19
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["emergerField"], "vars", [], "any", false, false, false, 19), "value", [], "any", false, false, false, 19), "utilisateur", [], "any", false, false, false, 19), "prenom", [], "any", false, false, false, 19), "html", null, true);
            echo "</td>
            <td>
                ";
            // line 21
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, $context["emergerField"], "presence", [], "any", false, false, false, 21), 'errors');
            echo "
                ";
            // line 22
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, $context["emergerField"], "presence", [], "any", false, false, false, 22), 'widget');
            echo "
            </td>
            <td>
                ";
            // line 25
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, $context["emergerField"], "alternative", [], "any", false, false, false, 25), 'errors');
            echo "
                ";
            // line 26
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, $context["emergerField"], "alternative", [], "any", false, false, false, 26), 'widget');
            echo "
            </td>
            <td>
                ";
            // line 29
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, $context["emergerField"], "heureArrive", [], "any", false, false, false, 29), 'errors');
            echo "
                ";
            // line 30
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, $context["emergerField"], "heureArrive", [], "any", false, false, false, 30), 'widget');
            echo "
            </td>
            <td>
                ";
            // line 33
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, $context["emergerField"], "heureDepart", [], "any", false, false, false, 33), 'errors');
            echo "
                ";
            // line 34
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, $context["emergerField"], "heureDepart", [], "any", false, false, false, 34), 'widget');
            echo "
            </td>
            <td>";
            // line 36
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["emergerField"], "vars", [], "any", false, false, false, 36), "value", [], "any", false, false, false, 36), "signature", [], "any", false, false, false, 36), "html", null, true);
            echo "</td>
        </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['emergerField'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 39
        echo "        </tbody>
    </table>

    <button class=\"btn\">";
        // line 42
        echo twig_escape_filter($this->env, ((array_key_exists("button_label", $context)) ? (_twig_default_filter((isset($context["button_label"]) || array_key_exists("button_label", $context) ? $context["button_label"] : (function () { throw new RuntimeError('Variable "button_label" does not exist.', 42, $this->source); })()), "Enregistrer")) : ("Enregistrer")), "html", null, true);
        echo "</button>
";
        // line 43
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 43, $this->source); })()), 'form_end');
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "emargement/_form.html.twig";
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
        return array (  134 => 43,  130 => 42,  125 => 39,  116 => 36,  111 => 34,  107 => 33,  101 => 30,  97 => 29,  91 => 26,  87 => 25,  81 => 22,  77 => 21,  72 => 19,  68 => 18,  65 => 17,  61 => 16,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{{ form_start(form) }}

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
        {% for emergerField in form.emargers %}
        <tr>
            <td>{{ emergerField.vars.value.utilisateur.nomNaissance }}</td>
            <td>{{ emergerField.vars.value.utilisateur.prenom }}</td>
            <td>
                {{ form_errors(emergerField.presence) }}
                {{ form_widget(emergerField.presence) }}
            </td>
            <td>
                {{ form_errors(emergerField.alternative) }}
                {{ form_widget(emergerField.alternative) }}
            </td>
            <td>
                {{ form_errors(emergerField.heureArrive) }}
                {{ form_widget(emergerField.heureArrive) }}
            </td>
            <td>
                {{ form_errors(emergerField.heureDepart) }}
                {{ form_widget(emergerField.heureDepart) }}
            </td>
            <td>{{ emergerField.vars.value.signature }}</td>
        </tr>
        {% endfor %}
        </tbody>
    </table>

    <button class=\"btn\">{{ button_label|default('Enregistrer') }}</button>
{{ form_end(form) }}", "emargement/_form.html.twig", "C:\\wamp64\\www\\bilal-project-main\\templates\\emargement\\_form.html.twig");
    }
}
