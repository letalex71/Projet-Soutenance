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

/* registration/register.html.twig */
class __TwigTemplate_8c06d84e6b26b44bb3a08ba660fe1a93e38f8ad5e04d5521cbeb9104ac30ea30 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "registration/register.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "registration/register.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "registration/register.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Inscription ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "<main class=\"page projects-page\">
    <section class=\"portfolio-block projects-with-sidebar\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg-10 col-xl-9 mx-auto\">
                    <div class=\"card card-signin flex-row my-5\">
                        <div class=\"card-img-left d-none d-md-flex\">
                            <!-- Background image for card set in CSS! -->
                        </div>
                        <div class=\"card-body\">
                            <h5 class=\"card-title text-center\">Inscription</h5>
                            <form class=\"form-signin\" method=\"POST\">
                                ";
        // line 18
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 18, $this->source); })()), 'form_start');
        echo "
                                <div class=\"form-label-group\">
                                    ";
        // line 20
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 20, $this->source); })()), "email", [], "any", false, false, false, 20), 'row', ["label" => "Adresse Email ", "attr" => ["placeholder" => "Adresse email"]]);
        // line 24
        echo "
                                </div>
                                <div class=\"form-label-group\">
                                    ";
        // line 27
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 27, $this->source); })()), "plainPassword", [], "any", false, false, false, 27), 'row', ["label" => "Mot de passe ", "attr" => ["placeholder" => "Mot de passe"]]);
        // line 31
        echo "
                                </div>
                                <button class=\"btn btn-sm btn-primary btn-block text-uppercase mt-3\"
                                    type=\"submit\">Inscription</button>
                                <p class=\"d-block text-center mt-2 small\">Déjà un compte ? <a
                                        href=\"";
        // line 36
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
        echo "\">Cliquez ici pour vous connecter</a></p>
                                <hr class=\"my-4\">
                                <button class=\"btn btn-sm btn-danger btn-google btn-block text-uppercase\"
                                    type=\"submit\"><i class=\"fab fa-google mr-2\"></i>Connexion avec
                                    Google</button>
                                <button class=\"btn btn-sm btn-info btn-facebook btn-block text-uppercase\"
                                    type=\"submit\"><i class=\"fab fa-facebook-f mr-2\"></i>Connexion avec
                                    Facebook</button>
                                ";
        // line 44
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 44, $this->source); })()), 'form_end');
        echo "
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "registration/register.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  134 => 44,  123 => 36,  116 => 31,  114 => 27,  109 => 24,  107 => 20,  102 => 18,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Inscription {% endblock %}

{% block body %}
<main class=\"page projects-page\">
    <section class=\"portfolio-block projects-with-sidebar\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg-10 col-xl-9 mx-auto\">
                    <div class=\"card card-signin flex-row my-5\">
                        <div class=\"card-img-left d-none d-md-flex\">
                            <!-- Background image for card set in CSS! -->
                        </div>
                        <div class=\"card-body\">
                            <h5 class=\"card-title text-center\">Inscription</h5>
                            <form class=\"form-signin\" method=\"POST\">
                                {{ form_start(registrationForm) }}
                                <div class=\"form-label-group\">
                                    {{ form_row(registrationForm.email, {
                                        'label': 'Adresse Email ',
                                        'attr': {'placeholder': 'Adresse email'}
                                        }) 
                                    }}
                                </div>
                                <div class=\"form-label-group\">
                                    {{ form_row(registrationForm.plainPassword, {
                                        'label': 'Mot de passe ',
                                        'attr': {'placeholder': 'Mot de passe'}
                                        })
                                    }}
                                </div>
                                <button class=\"btn btn-sm btn-primary btn-block text-uppercase mt-3\"
                                    type=\"submit\">Inscription</button>
                                <p class=\"d-block text-center mt-2 small\">Déjà un compte ? <a
                                        href=\"{{ path('app_login') }}\">Cliquez ici pour vous connecter</a></p>
                                <hr class=\"my-4\">
                                <button class=\"btn btn-sm btn-danger btn-google btn-block text-uppercase\"
                                    type=\"submit\"><i class=\"fab fa-google mr-2\"></i>Connexion avec
                                    Google</button>
                                <button class=\"btn btn-sm btn-info btn-facebook btn-block text-uppercase\"
                                    type=\"submit\"><i class=\"fab fa-facebook-f mr-2\"></i>Connexion avec
                                    Facebook</button>
                                {{ form_end(registrationForm) }}
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
{% endblock %}", "registration/register.html.twig", "C:\\Users\\Alex\\Documents\\DEV\\movilist\\templates\\registration\\register.html.twig");
    }
}
