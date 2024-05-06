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

/* emploi_temps/common/emploi_temps.html.twig */
class __TwigTemplate_92e6d10f10e7c9035dccb8966460e2ea extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "emploi_temps/common/emploi_temps.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "emploi_temps/common/emploi_temps.html.twig"));

        // line 1
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["dataArray"]) || array_key_exists("dataArray", $context) ? $context["dataArray"] : (function () { throw new RuntimeError('Variable "dataArray" does not exist.', 1, $this->source); })()));
        foreach ($context['_seq'] as $context["key"] => $context["dataWeek"]) {
            // line 2
            echo "    <table class=\"table basic-table\" style=\"margin-top: 20px\">
        <caption class=\"caption-custom\"><b>Semaine de ";
            // line 3
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_split_filter($this->env, $context["key"], "_"), 0, [], "array", false, false, false, 3), "html", null, true);
            echo " - ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_split_filter($this->env, $context["key"], "_"), 1, [], "array", false, false, false, 3), "html", null, true);
            echo "</b></caption>
        <thead>
            <tr>
                <th>JOUR DATE</th>
                <th>De...</th>
                <th>A...</th>
                ";
            // line 9
            if ((twig_get_attribute($this->env, $this->source, (isset($context["criteria"]) || array_key_exists("criteria", $context) ? $context["criteria"] : (function () { throw new RuntimeError('Variable "criteria" does not exist.', 9, $this->source); })()), "promotion", [], "array", false, false, false, 9) == "")) {
                // line 10
                echo "                    <th>PROMOTION</th>
                ";
            }
            // line 12
            echo "                <th>MATIERE</th>
                <th>SALLE</th>
                ";
            // line 14
            if ((twig_get_attribute($this->env, $this->source, (isset($context["criteria"]) || array_key_exists("criteria", $context) ? $context["criteria"] : (function () { throw new RuntimeError('Variable "criteria" does not exist.', 14, $this->source); })()), "formateur", [], "array", false, false, false, 14) == "")) {
                // line 15
                echo "                    <th>FORMATEUR</th>
                ";
            }
            // line 17
            echo "                ";
            if (($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_FORMATEUR") || $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN"))) {
                // line 18
                echo "                    <th>Emargement</th>
                ";
            }
            // line 20
            echo "            </tr>
        </thead>
        <tbody>
            ";
            // line 23
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["dataWeek"]);
            foreach ($context['_seq'] as $context["key2"] => $context["data"]) {
                // line 24
                echo "                ";
                $context["dateIsSet"] = false;
                // line 25
                echo "                ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($context["data"]);
                foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                    echo "    
                    <tr>
                        ";
                    // line 27
                    if (((isset($context["dateIsSet"]) || array_key_exists("dateIsSet", $context) ? $context["dateIsSet"] : (function () { throw new RuntimeError('Variable "dateIsSet" does not exist.', 27, $this->source); })()) == false)) {
                        // line 28
                        echo "                            <td rowspan=\"";
                        echo twig_escape_filter($this->env, twig_length_filter($this->env, $context["data"]), "html", null, true);
                        echo "\">
                                <b>";
                        // line 29
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_split_filter($this->env, $context["key2"], "_"), 0, [], "array", false, false, false, 29), "html", null, true);
                        echo "</b> ";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_split_filter($this->env, $context["key2"], "_"), 1, [], "array", false, false, false, 29), "html", null, true);
                        echo "
                            </td>
                            ";
                        // line 31
                        $context["dateIsSet"] = true;
                        // line 32
                        echo "                        ";
                    }
                    // line 33
                    echo "                        <td>";
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "heureDebut", [], "any", false, false, false, 33), "H:i"), "html", null, true);
                    echo "</td>
                        <td>";
                    // line 34
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "heureFin", [], "any", false, false, false, 34), "H:i"), "html", null, true);
                    echo "</td>
                        ";
                    // line 35
                    if ((twig_get_attribute($this->env, $this->source, (isset($context["criteria"]) || array_key_exists("criteria", $context) ? $context["criteria"] : (function () { throw new RuntimeError('Variable "criteria" does not exist.', 35, $this->source); })()), "promotion", [], "array", false, false, false, 35) == "")) {
                        // line 36
                        echo "                            <td>";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "promotion", [], "any", false, false, false, 36), "formation", [], "any", false, false, false, 36), "specialite", [], "any", false, false, false, 36), "html", null, true);
                        (( !(null === twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "promotion", [], "any", false, false, false, 36), "formation", [], "any", false, false, false, 36), "options", [], "any", false, false, false, 36))) ? (print (twig_escape_filter($this->env, (" - " . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "promotion", [], "any", false, false, false, 36), "formation", [], "any", false, false, false, 36), "options", [], "any", false, false, false, 36), "nomOption", [], "any", false, false, false, 36)), "html", null, true))) : (print ("")));
                        echo " ";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "promotion", [], "any", false, false, false, 36), "annee", [], "any", false, false, false, 36), "html", null, true);
                        echo "</td>
                        ";
                    }
                    // line 38
                    echo "                        <td>
                            ";
                    // line 39
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "intitule", [], "any", false, false, false, 39), "html", null, true);
                    echo "
                            ";
                    // line 40
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "matiere", [], "any", false, false, false, 40), "nomMatiere", [], "any", false, false, false, 40), "html", null, true);
                    echo "
                        </td>
                        <td>";
                    // line 42
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "salle", [], "any", false, false, false, 42), "nomSalle", [], "any", false, false, false, 42), "html", null, true);
                    echo "</td>
                        ";
                    // line 43
                    if ((twig_get_attribute($this->env, $this->source, (isset($context["criteria"]) || array_key_exists("criteria", $context) ? $context["criteria"] : (function () { throw new RuntimeError('Variable "criteria" does not exist.', 43, $this->source); })()), "formateur", [], "array", false, false, false, 43) == "")) {
                        // line 44
                        echo "                            <td>";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "formateur", [], "any", false, false, false, 44), "nomNaissance", [], "any", false, false, false, 44), "html", null, true);
                        echo " ";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "formateur", [], "any", false, false, false, 44), "prenom", [], "any", false, false, false, 44), "html", null, true);
                        echo "</td>
                        ";
                    }
                    // line 46
                    echo "                        ";
                    if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_FORMATEUR")) {
                        // line 47
                        echo "                            <td>
                                <a href=\"";
                        // line 48
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_emargement_show", ["id" => twig_get_attribute($this->env, $this->source, $context["item"], "id", [], "any", false, false, false, 48)]), "html", null, true);
                        echo "\"><i class=\"fa-solid fa-eye\"></i></a>
                                <a href=\"";
                        // line 49
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_emargement_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["item"], "id", [], "any", false, false, false, 49)]), "html", null, true);
                        echo "\"><i class=\"fa-solid fa-pen-to-square\"></i></a>
                            </td>
                        ";
                    } elseif ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
                        // line 52
                        echo "                            <td>
                                <a href=\"";
                        // line 53
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_emargement_show_admin", ["id" => twig_get_attribute($this->env, $this->source, $context["item"], "id", [], "any", false, false, false, 53)]), "html", null, true);
                        echo "\"><i class=\"fa-solid fa-eye\"></i></a>
                            </td>
                        ";
                    }
                    // line 56
                    echo "                    </tr>
                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 58
                echo "            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key2'], $context['data'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 59
            echo "        </tbody>
    </table>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['dataWeek'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "emploi_temps/common/emploi_temps.html.twig";
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
        return array (  207 => 59,  201 => 58,  194 => 56,  188 => 53,  185 => 52,  179 => 49,  175 => 48,  172 => 47,  169 => 46,  161 => 44,  159 => 43,  155 => 42,  150 => 40,  146 => 39,  143 => 38,  134 => 36,  132 => 35,  128 => 34,  123 => 33,  120 => 32,  118 => 31,  111 => 29,  106 => 28,  104 => 27,  96 => 25,  93 => 24,  89 => 23,  84 => 20,  80 => 18,  77 => 17,  73 => 15,  71 => 14,  67 => 12,  63 => 10,  61 => 9,  50 => 3,  47 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% for key,dataWeek in dataArray %}
    <table class=\"table basic-table\" style=\"margin-top: 20px\">
        <caption class=\"caption-custom\"><b>Semaine de {{ key|split('_')[0] }} - {{ key|split('_')[1] }}</b></caption>
        <thead>
            <tr>
                <th>JOUR DATE</th>
                <th>De...</th>
                <th>A...</th>
                {% if criteria['promotion'] == '' %}
                    <th>PROMOTION</th>
                {% endif %}
                <th>MATIERE</th>
                <th>SALLE</th>
                {% if criteria['formateur'] == '' %}
                    <th>FORMATEUR</th>
                {% endif %}
                {% if is_granted('ROLE_FORMATEUR') or is_granted('ROLE_ADMIN') %}
                    <th>Emargement</th>
                {% endif %}
            </tr>
        </thead>
        <tbody>
            {% for key2,data in dataWeek %}
                {% set dateIsSet = false %}
                {% for item in data %}    
                    <tr>
                        {% if dateIsSet == false %}
                            <td rowspan=\"{{ data|length }}\">
                                <b>{{ key2|split('_')[0] }}</b> {{ key2|split('_')[1] }}
                            </td>
                            {% set dateIsSet = true %}
                        {% endif %}
                        <td>{{ item.heureDebut|date('H:i') }}</td>
                        <td>{{ item.heureFin|date('H:i') }}</td>
                        {% if criteria['promotion'] == '' %}
                            <td>{{ item.promotion.formation.specialite }}{{ (item.promotion.formation.options is not null) ? ' - ' ~ item.promotion.formation.options.nomOption : '' }} {{ item.promotion.annee }}</td>
                        {% endif %}
                        <td>
                            {{ item.intitule }}
                            {{ item.matiere.nomMatiere }}
                        </td>
                        <td>{{ item.salle.nomSalle }}</td>
                        {% if criteria['formateur'] == '' %}
                            <td>{{ item.formateur.nomNaissance }} {{ item.formateur.prenom }}</td>
                        {% endif %}
                        {% if is_granted('ROLE_FORMATEUR') %}
                            <td>
                                <a href=\"{{ path('app_emargement_show', {'id' : item.id}) }}\"><i class=\"fa-solid fa-eye\"></i></a>
                                <a href=\"{{ path('app_emargement_edit', {'id' : item.id}) }}\"><i class=\"fa-solid fa-pen-to-square\"></i></a>
                            </td>
                        {% elseif is_granted('ROLE_ADMIN') %}
                            <td>
                                <a href=\"{{ path('app_emargement_show_admin', {'id' : item.id}) }}\"><i class=\"fa-solid fa-eye\"></i></a>
                            </td>
                        {% endif %}
                    </tr>
                {% endfor %}
            {% endfor %}
        </tbody>
    </table>
{% endfor %}", "emploi_temps/common/emploi_temps.html.twig", "C:\\wamp64\\www\\bilal-project-main\\templates\\emploi_temps\\common\\emploi_temps.html.twig");
    }
}
