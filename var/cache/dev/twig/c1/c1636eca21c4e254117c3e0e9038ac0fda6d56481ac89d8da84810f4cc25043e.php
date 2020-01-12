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

/* base.html.twig */
class __TwigTemplate_0906b9eef2b18d2c282802dd6f059b6b5c623adba7561b73c9a30bf94d5ebabe extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'body' => [$this, 'block_body'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"fr\">

<head>
    <meta charset=\"UTF-8\">
    <title>";
        // line 6
        $this->displayBlock('title', $context, $blocks);
        echo " - Movilist</title>
    <link rel=\"icon\" type=\"image/png\" sizes=\"32x32\" href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/favicon/favicon-32x32.png"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css//bootstrap.min.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"https://fonts.googleapis.com/css?family=Lato:300,400,700\">
    <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css\">
    <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/pikaday/1.6.1/css/pikaday.min.css\">
    <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.css\">
    <link rel=\"stylesheet\" href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/styles.css"), "html", null, true);
        echo "\">

    ";
        // line 15
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 16
        echo "
</head>

<body>
    <header>
        ";
        // line 21
        $context["route"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 21, $this->source); })()), "request", [], "any", false, false, false, 21), "attributes", [], "any", false, false, false, 21), "get", [0 => "_route"], "method", false, false, false, 21);
        // line 22
        echo "        <nav id=\"main-navbar\" class=\"navbar navbar-expand-md navbar-dark gradient\">
            <div class=\"navbar-collapse collapse w-100 order-1 order-md-0 dual-collapse2\" id=\"navbarNav\">
                <ul class=\"navbar-nav mr-auto\">
                    <li class=\"nav-item";
        // line 25
        if (0 === twig_compare((isset($context["route"]) || array_key_exists("route", $context) ? $context["route"] : (function () { throw new RuntimeError('Variable "route" does not exist.', 25, $this->source); })()), "home")) {
            echo " active";
        }
        echo "\">
                        <a class=\"nav-link\" href=\"";
        // line 26
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home");
        echo "\">Accueil</a>
                    </li>
                    <li class=\"nav-item";
        // line 28
        if (0 === twig_compare((isset($context["route"]) || array_key_exists("route", $context) ? $context["route"] : (function () { throw new RuntimeError('Variable "route" does not exist.', 28, $this->source); })()), "search")) {
            echo " active";
        }
        echo "\">
                        <a class=\"nav-link\" href=\"";
        // line 29
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("search");
        echo "\">Rechercher</a>
                    </li>
                    <li class=\"nav-item";
        // line 31
        if (0 === twig_compare((isset($context["route"]) || array_key_exists("route", $context) ? $context["route"] : (function () { throw new RuntimeError('Variable "route" does not exist.', 31, $this->source); })()), "forum")) {
            echo " active";
        }
        echo "\">
                        <a class=\"nav-link disabled\" href=\"";
        // line 32
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("forum");
        echo "\">Forum</a>
                    </li>
                    <form class=\"form-inline\">
                        <input class=\"form-control mr-sm-2\" type=\"search\" placeholder=\"Rechercher un film, série... \" aria-label=\"Rechercher\">
                        <button class=\"btn btn-outline-light my-2 my-sm-0\" type=\"submit\">Rechercher</button>
                    </form>
                </ul>
            </div>
            <div class=\"mx-auto order-0\">
                <a class=\"navbar-brand mx-auto\" href=\"";
        // line 41
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home");
        echo "\"><img src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/logo.png"), "html", null, true);
        echo "\"
                        class=\"d-inline-block align-top mr-2\" id=\"logo\" alt=\"\"></a>
                <button data-toggle=\"collapse\" class=\"navbar-toggler\" data-target=\"#navbarNav\">
                    <span class=\"sr-only\">Dérouler Menu</span>
                    <span class=\"navbar-toggler-icon\"></span>
                </button>
            </div>
            <div class=\"navbar-collapse collapse w-100 order-3 dual-collapse2\" id=\"navbarNav\">
                <ul class=\"navbar-nav ml-auto\">
                    ";
        // line 50
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 50, $this->source); })()), "user", [], "any", false, false, false, 50)) {
            // line 51
            echo "                    <li class=\"nav-item dropdown\">
                        <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"navbarDropdown\" role=\"button\"
                            data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                            <span class='menu_text'>Mon compte</span><i class=\"fas fa-user-circle menu_icon\"></i>
                        </a>
                        <div class=\"dropdown-menu dropdown-menu-right\" aria-labelledby=\"navbarDropdown\">
                            <a class=\"dropdown-item";
            // line 57
            if (0 === twig_compare((isset($context["route"]) || array_key_exists("route", $context) ? $context["route"] : (function () { throw new RuntimeError('Variable "route" does not exist.', 57, $this->source); })()), "app_logout")) {
                echo " active";
            }
            echo "\"
                                href=\"";
            // line 58
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("profile");
            echo "\">Mon Compte</a>
                            </a>
                            <a class=\"dropdown-item";
            // line 60
            if (0 === twig_compare((isset($context["route"]) || array_key_exists("route", $context) ? $context["route"] : (function () { throw new RuntimeError('Variable "route" does not exist.', 60, $this->source); })()), "app_logout")) {
                echo " active";
            }
            echo "\"
                                href=\"";
            // line 61
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("profile");
            echo "\">Mes Watchlists</a>
                            </a>
                            <div class=\"dropdown-divider\"></div>
                            <a class=\"dropdown-item text-danger";
            // line 64
            if (0 === twig_compare((isset($context["route"]) || array_key_exists("route", $context) ? $context["route"] : (function () { throw new RuntimeError('Variable "route" does not exist.', 64, $this->source); })()), "app_logout")) {
                echo " active";
            }
            echo "\"
                                href=\"";
            // line 65
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
            echo "\">Deconnexion</a>
                            </a>
                        </div>
                    </li>
                    ";
        } else {
            // line 70
            echo "                    <li class=\"nav-item";
            if (0 === twig_compare((isset($context["route"]) || array_key_exists("route", $context) ? $context["route"] : (function () { throw new RuntimeError('Variable "route" does not exist.', 70, $this->source); })()), "app_login")) {
                echo " active";
            }
            echo "\">
                        <a class=\"nav-link\" href=\"";
            // line 71
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
            echo "\">Connexion</a>
                    </li>
                    <li class=\"nav-item";
            // line 73
            if (0 === twig_compare((isset($context["route"]) || array_key_exists("route", $context) ? $context["route"] : (function () { throw new RuntimeError('Variable "route" does not exist.', 73, $this->source); })()), "app_register")) {
                echo " active";
            }
            echo "\">
                        <a class=\"nav-link\" href=\"";
            // line 74
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_register");
            echo "\">Inscription</a>
                    </li>
                    ";
        }
        // line 77
        echo "                </ul>
            </div>
        </nav>
    </header>

    <div class=\"container-fluid\">
        ";
        // line 83
        $this->displayBlock('body', $context, $blocks);
        // line 84
        echo "    </div>
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js\"></script>
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js\"></script>
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/js/bootstrap.min.js\"></script>
    <script src=\"";
        // line 88
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/api/tmdb-api-calls.js"), "html", null, true);
        echo "\"></script>
    ";
        // line 89
        $this->displayBlock('javascripts', $context, $blocks);
        // line 90
        echo "
</body>

</html>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 6
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo " ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 15
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 83
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 89
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  306 => 89,  288 => 83,  270 => 15,  251 => 6,  238 => 90,  236 => 89,  232 => 88,  226 => 84,  224 => 83,  216 => 77,  210 => 74,  204 => 73,  199 => 71,  192 => 70,  184 => 65,  178 => 64,  172 => 61,  166 => 60,  161 => 58,  155 => 57,  147 => 51,  145 => 50,  131 => 41,  119 => 32,  113 => 31,  108 => 29,  102 => 28,  97 => 26,  91 => 25,  86 => 22,  84 => 21,  77 => 16,  75 => 15,  70 => 13,  62 => 8,  58 => 7,  54 => 6,  47 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"fr\">

<head>
    <meta charset=\"UTF-8\">
    <title>{% block title %} {% endblock %} - Movilist</title>
    <link rel=\"icon\" type=\"image/png\" sizes=\"32x32\" href=\"{{ asset('img/favicon/favicon-32x32.png') }}\">
    <link rel=\"stylesheet\" href=\"{{ asset('css//bootstrap.min.css') }}\">
    <link rel=\"stylesheet\" href=\"https://fonts.googleapis.com/css?family=Lato:300,400,700\">
    <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css\">
    <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/pikaday/1.6.1/css/pikaday.min.css\">
    <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.css\">
    <link rel=\"stylesheet\" href=\"{{ asset('css/styles.css') }}\">

    {% block stylesheets %}{% endblock %}

</head>

<body>
    <header>
        {% set route = app.request.attributes.get('_route') %}
        <nav id=\"main-navbar\" class=\"navbar navbar-expand-md navbar-dark gradient\">
            <div class=\"navbar-collapse collapse w-100 order-1 order-md-0 dual-collapse2\" id=\"navbarNav\">
                <ul class=\"navbar-nav mr-auto\">
                    <li class=\"nav-item{% if route == 'home' %} active{% endif %}\">
                        <a class=\"nav-link\" href=\"{{ path('home') }}\">Accueil</a>
                    </li>
                    <li class=\"nav-item{% if route == 'search' %} active{% endif %}\">
                        <a class=\"nav-link\" href=\"{{ path('search') }}\">Rechercher</a>
                    </li>
                    <li class=\"nav-item{% if route == 'forum' %} active{% endif %}\">
                        <a class=\"nav-link disabled\" href=\"{{ path('forum') }}\">Forum</a>
                    </li>
                    <form class=\"form-inline\">
                        <input class=\"form-control mr-sm-2\" type=\"search\" placeholder=\"Rechercher un film, série... \" aria-label=\"Rechercher\">
                        <button class=\"btn btn-outline-light my-2 my-sm-0\" type=\"submit\">Rechercher</button>
                    </form>
                </ul>
            </div>
            <div class=\"mx-auto order-0\">
                <a class=\"navbar-brand mx-auto\" href=\"{{ path('home') }}\"><img src=\"{{ asset('img/logo.png') }}\"
                        class=\"d-inline-block align-top mr-2\" id=\"logo\" alt=\"\"></a>
                <button data-toggle=\"collapse\" class=\"navbar-toggler\" data-target=\"#navbarNav\">
                    <span class=\"sr-only\">Dérouler Menu</span>
                    <span class=\"navbar-toggler-icon\"></span>
                </button>
            </div>
            <div class=\"navbar-collapse collapse w-100 order-3 dual-collapse2\" id=\"navbarNav\">
                <ul class=\"navbar-nav ml-auto\">
                    {% if app.user %}
                    <li class=\"nav-item dropdown\">
                        <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"navbarDropdown\" role=\"button\"
                            data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                            <span class='menu_text'>Mon compte</span><i class=\"fas fa-user-circle menu_icon\"></i>
                        </a>
                        <div class=\"dropdown-menu dropdown-menu-right\" aria-labelledby=\"navbarDropdown\">
                            <a class=\"dropdown-item{% if route == 'app_logout' %} active{% endif %}\"
                                href=\"{{ path('profile') }}\">Mon Compte</a>
                            </a>
                            <a class=\"dropdown-item{% if route == 'app_logout' %} active{% endif %}\"
                                href=\"{{ path('profile') }}\">Mes Watchlists</a>
                            </a>
                            <div class=\"dropdown-divider\"></div>
                            <a class=\"dropdown-item text-danger{% if route == 'app_logout' %} active{% endif %}\"
                                href=\"{{ path('app_logout') }}\">Deconnexion</a>
                            </a>
                        </div>
                    </li>
                    {% else %}
                    <li class=\"nav-item{% if route == 'app_login' %} active{% endif %}\">
                        <a class=\"nav-link\" href=\"{{ path('app_login') }}\">Connexion</a>
                    </li>
                    <li class=\"nav-item{% if route == 'app_register' %} active{% endif %}\">
                        <a class=\"nav-link\" href=\"{{ path('app_register') }}\">Inscription</a>
                    </li>
                    {% endif %}
                </ul>
            </div>
        </nav>
    </header>

    <div class=\"container-fluid\">
        {% block body %}{% endblock %}
    </div>
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js\"></script>
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js\"></script>
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/js/bootstrap.min.js\"></script>
    <script src=\"{{ asset('js/api/tmdb-api-calls.js') }}\"></script>
    {% block javascripts %}{% endblock %}

</body>

</html>", "base.html.twig", "C:\\Users\\Alex\\Documents\\DEV\\movilist\\templates\\base.html.twig");
    }
}
