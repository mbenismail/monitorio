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

/* user/index.html.twig */
class __TwigTemplate_45268e95fe05d5ec333eb1d60896210a extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "user/index.html.twig", 1);
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

        echo "User index";
        
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
        echo "    <h1>User index</h1>

    <table class=\"table\">
        <thead>
            <tr>
                <th>Id</th>
                <th>Login</th>
                <th>Nom</th>
                <th>Prenom</th>
                <th>Pwd</th>
                <th>EtatActiv</th>
                <th>EtatConnect</th>
                <th>IsAdminOng</th>
                <th>DateDernCon</th>
                <th>Photo</th>
                <th>DateCreat</th>
                <th>UserCreat</th>
                <th>DateModif</th>
                <th>UserModif</th>
                <th>actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 29
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["users"]) || array_key_exists("users", $context) ? $context["users"] : (function () { throw new RuntimeError('Variable "users" does not exist.', 29, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 30
            echo "            <tr>
                <td>";
            // line 31
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 31), "html", null, true);
            echo "</td>
                <td>";
            // line 32
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "Login", [], "any", false, false, false, 32), "html", null, true);
            echo "</td>
                <td>";
            // line 33
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "Nom", [], "any", false, false, false, 33), "html", null, true);
            echo "</td>
                <td>";
            // line 34
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "Prenom", [], "any", false, false, false, 34), "html", null, true);
            echo "</td>
                <td>";
            // line 35
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "Pwd", [], "any", false, false, false, 35), "html", null, true);
            echo "</td>
                <td>";
            // line 36
            echo ((twig_get_attribute($this->env, $this->source, $context["user"], "EtatActiv", [], "any", false, false, false, 36)) ? ("Yes") : ("No"));
            echo "</td>
                <td>";
            // line 37
            echo ((twig_get_attribute($this->env, $this->source, $context["user"], "EtatConnect", [], "any", false, false, false, 37)) ? ("Yes") : ("No"));
            echo "</td>
                <td>";
            // line 38
            echo ((twig_get_attribute($this->env, $this->source, $context["user"], "IsAdminOng", [], "any", false, false, false, 38)) ? ("Yes") : ("No"));
            echo "</td>
                <td>";
            // line 39
            ((twig_get_attribute($this->env, $this->source, $context["user"], "DateDernCon", [], "any", false, false, false, 39)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "DateDernCon", [], "any", false, false, false, 39), "Y-m-d"), "html", null, true))) : (print ("")));
            echo "</td>
                <td>";
            // line 40
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "photo", [], "any", false, false, false, 40), "html", null, true);
            echo "</td>
                <td>";
            // line 41
            ((twig_get_attribute($this->env, $this->source, $context["user"], "DateCreat", [], "any", false, false, false, 41)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "DateCreat", [], "any", false, false, false, 41), "Y-m-d"), "html", null, true))) : (print ("")));
            echo "</td>
                <td>";
            // line 42
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "UserCreat", [], "any", false, false, false, 42), "html", null, true);
            echo "</td>
                <td>";
            // line 43
            ((twig_get_attribute($this->env, $this->source, $context["user"], "DateModif", [], "any", false, false, false, 43)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "DateModif", [], "any", false, false, false, 43), "Y-m-d"), "html", null, true))) : (print ("")));
            echo "</td>
                <td>";
            // line 44
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "UserModif", [], "any", false, false, false, 44), "html", null, true);
            echo "</td>
                <td>
                    <a href=\"";
            // line 46
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("user_show", ["id" => twig_get_attribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 46)]), "html", null, true);
            echo "\">show</a>
                    <a href=\"";
            // line 47
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("user_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 47)]), "html", null, true);
            echo "\">edit</a>
                </td>
            </tr>
        ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 51
            echo "            <tr>
                <td colspan=\"15\">no records found</td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 55
        echo "        </tbody>
    </table>

    <a href=\"";
        // line 58
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("user_new");
        echo "\">Create new</a>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "user/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  205 => 58,  200 => 55,  191 => 51,  182 => 47,  178 => 46,  173 => 44,  169 => 43,  165 => 42,  161 => 41,  157 => 40,  153 => 39,  149 => 38,  145 => 37,  141 => 36,  137 => 35,  133 => 34,  129 => 33,  125 => 32,  121 => 31,  118 => 30,  113 => 29,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}User index{% endblock %}

{% block body %}
    <h1>User index</h1>

    <table class=\"table\">
        <thead>
            <tr>
                <th>Id</th>
                <th>Login</th>
                <th>Nom</th>
                <th>Prenom</th>
                <th>Pwd</th>
                <th>EtatActiv</th>
                <th>EtatConnect</th>
                <th>IsAdminOng</th>
                <th>DateDernCon</th>
                <th>Photo</th>
                <th>DateCreat</th>
                <th>UserCreat</th>
                <th>DateModif</th>
                <th>UserModif</th>
                <th>actions</th>
            </tr>
        </thead>
        <tbody>
        {% for user in users %}
            <tr>
                <td>{{ user.id }}</td>
                <td>{{ user.Login }}</td>
                <td>{{ user.Nom }}</td>
                <td>{{ user.Prenom }}</td>
                <td>{{ user.Pwd }}</td>
                <td>{{ user.EtatActiv ? 'Yes' : 'No' }}</td>
                <td>{{ user.EtatConnect ? 'Yes' : 'No' }}</td>
                <td>{{ user.IsAdminOng ? 'Yes' : 'No' }}</td>
                <td>{{ user.DateDernCon ? user.DateDernCon|date('Y-m-d') : '' }}</td>
                <td>{{ user.photo }}</td>
                <td>{{ user.DateCreat ? user.DateCreat|date('Y-m-d') : '' }}</td>
                <td>{{ user.UserCreat }}</td>
                <td>{{ user.DateModif ? user.DateModif|date('Y-m-d') : '' }}</td>
                <td>{{ user.UserModif }}</td>
                <td>
                    <a href=\"{{ path('user_show', {'id': user.id}) }}\">show</a>
                    <a href=\"{{ path('user_edit', {'id': user.id}) }}\">edit</a>
                </td>
            </tr>
        {% else %}
            <tr>
                <td colspan=\"15\">no records found</td>
            </tr>
        {% endfor %}
        </tbody>
    </table>

    <a href=\"{{ path('user_new') }}\">Create new</a>
{% endblock %}
", "user/index.html.twig", "/home/user/Documents/GitHub/monitorio/symfony_monitorio/templates/user/index.html.twig");
    }
}
