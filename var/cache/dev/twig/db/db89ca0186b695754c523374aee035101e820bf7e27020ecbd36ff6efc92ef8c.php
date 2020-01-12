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

/* main/search.html.twig */
class __TwigTemplate_b14f5fef3f4d121b870bbc23bba84004bfa9cd66286b98acb709e03a74743d1d extends Template
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
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 2
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "main/search.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "main/search.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "main/search.html.twig", 2);
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

        echo "Rechercher ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 4
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "
    <h1 class=\"text-center mt-3\">Rechercher :</h1>
    <main class=\"page projects-page\">

        <div class=\"container-fluid\">
            <div class=\"row col-md-6 offset-md-3 search-type\">
                <div class=\"col-6 offset\">
                    <h2 data-filter=\"type\" id=\"movie\" class=\"col-md-6 offset-3 text-center\">Films</h2>
                </div>
                <div class=\"col-6\">
                    <h2 data-filter=\"type\" id=\"tv\" class=\"col-md-6 offset-3 text-center filter-active\">Séries</h2>
                </div>
            </div>
            <div class=\"row col-xl-8 offset-xl-2 col-md-12\">

                <div class=\"col-sm-12 text-center mt-3 col-md-3\">
                    <h5 class=\"text-center\">Trier par</h5>
                    <div class=\"input-group\">
                        <select class=\"custom-select\" id=\"inputGroupSelect02\">
                            <option data-filter=\"sort\" value=\"popularity.desc\">Les plus populaires</option>
                            <option data-filter=\"sort\" value=\"popularity.asc\">Les moins populaires</option>
                            <option data-filter=\"sort\" value=\"release_date.desc\">Les plus récents</option>
                            <option data-filter=\"sort\" value=\"release_date.asc\">Les moins récents</option>
                            <option data-filter=\"sort\" value=\"original_tilte.desc\">Titre A-Z</option>
                            <option data-filter=\"sort\" value=\"original_tilte.asc\">Titre Z-A</option>
                            <option data-filter=\"sort\" value=\"vote_average.desc\">Meilleurs notes</option>
                            <option data-filter=\"sort\" value=\"vote_average.asc\">Moins bonnes notes</option>
                            <option data-filter=\"sort\" value=\"vote_count.desc\">Le plus de vote</option>
                            <option data-filter=\"sort\" value=\"vote_count.asc\">Le moins de vote</option>
                        </select>
                    </div>
                </div>

                <div class=\"mt-3 col-md-2\">
                    <h5 class=\"text-center\">Année</h5>
                    <div class=\"input-group\">
                        <select class=\"year-select custom-select\" id=\"inputGroupSelect02\">
                            <option data-filter=\"year\" value=\"none\">Aucune</option>
                        </select>
                    </div>
                </div>



                <div class=\"mt-3 col-md-7 col-sm-12\">
                    <h5 class=\"text-center\">Genres</h5>
                    <label class=\"col-12 genres-group p-0 m-0\" for=\"genres-search\">
                        <div class=\"genres-form p-0 border rounded-lg\">
                            <input type=\"text\" class=\"genres-search\" id=\"genres-search\">
                        </div>
                    </label>
                </div>
            </div>
        </div>


        <section class=\"portfolio-block projects-with-sidebar\">
            <!-- Start: portfolio heading -->
            <!-- End: portfolio heading -->



         </section>
    </main>

    


";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 74
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 75
        echo "    <script src=\" ";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/api/tmdb_api_calls.js"), "html", null, true);
        echo " \"></script>
    <script src=\" ";
        // line 76
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/api/tmdb_api.js"), "html", null, true);
        echo " \"></script>
    <script src=\" ";
        // line 77
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/display/display.js"), "html", null, true);
        echo " \"></script>

    <script>

    // \$(document).click(function (event) {
    //     console.log(\$(event.target));
    // })

   toggleRemoveEvent = true;

    fillGenres();
    fillYears(";
        // line 88
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, (isset($context["date"]) || array_key_exists("date", $context) ? $context["date"] : (function () { throw new RuntimeError('Variable "date" does not exist.', 88, $this->source); })()), "Y"), "html", null, true);
        echo ");
    filterSearch();

    
    \$('h2[data-filter=\"type\"]').click( function() {

        if ( \$(this)[0].className.includes('filter-active') === false )
        {
            
            \$('.selected-genre').remove();

            \$('h2[data-filter=\"type\"]').removeClass('filter-active');

            \$(this).addClass('filter-active');
                   
            fillGenres();
            filterSearch(); 
        }
    
    });

    \$('[data-filter=\"sort\"]').click(function() {

        \$('h2[data-filter=\"sort\"]').removeClass('filter-active');
        \$(this).addClass('filter-active');

        filterSearch(); 

    })

    \$('[data-filter=\"year\"]').click( function() {

        \$('[data-filter=\"year\"]').removeClass('filter-active');
        
        \$(this).addClass('filter-active');

        filterSearch();
    });

    \$('[data-filter=\"genres\"]').click( () => {

        \$(this).addClass('filter-active');

        \$('select2-selection__choice__remove').click(() => {
            console.log('here');
        });

        filterSearch();
    });

    \$('#my-div').on('click','button',function(){
    alert('button inside my-div clicked!');
});

    </script>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "main/search.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  200 => 88,  186 => 77,  182 => 76,  177 => 75,  167 => 74,  89 => 5,  79 => 4,  60 => 3,  37 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("{# pages/search.html.twig #}
{% extends \"base.html.twig\" %}
{% block title %}Rechercher {% endblock %}
{% block body %}

    <h1 class=\"text-center mt-3\">Rechercher :</h1>
    <main class=\"page projects-page\">

        <div class=\"container-fluid\">
            <div class=\"row col-md-6 offset-md-3 search-type\">
                <div class=\"col-6 offset\">
                    <h2 data-filter=\"type\" id=\"movie\" class=\"col-md-6 offset-3 text-center\">Films</h2>
                </div>
                <div class=\"col-6\">
                    <h2 data-filter=\"type\" id=\"tv\" class=\"col-md-6 offset-3 text-center filter-active\">Séries</h2>
                </div>
            </div>
            <div class=\"row col-xl-8 offset-xl-2 col-md-12\">

                <div class=\"col-sm-12 text-center mt-3 col-md-3\">
                    <h5 class=\"text-center\">Trier par</h5>
                    <div class=\"input-group\">
                        <select class=\"custom-select\" id=\"inputGroupSelect02\">
                            <option data-filter=\"sort\" value=\"popularity.desc\">Les plus populaires</option>
                            <option data-filter=\"sort\" value=\"popularity.asc\">Les moins populaires</option>
                            <option data-filter=\"sort\" value=\"release_date.desc\">Les plus récents</option>
                            <option data-filter=\"sort\" value=\"release_date.asc\">Les moins récents</option>
                            <option data-filter=\"sort\" value=\"original_tilte.desc\">Titre A-Z</option>
                            <option data-filter=\"sort\" value=\"original_tilte.asc\">Titre Z-A</option>
                            <option data-filter=\"sort\" value=\"vote_average.desc\">Meilleurs notes</option>
                            <option data-filter=\"sort\" value=\"vote_average.asc\">Moins bonnes notes</option>
                            <option data-filter=\"sort\" value=\"vote_count.desc\">Le plus de vote</option>
                            <option data-filter=\"sort\" value=\"vote_count.asc\">Le moins de vote</option>
                        </select>
                    </div>
                </div>

                <div class=\"mt-3 col-md-2\">
                    <h5 class=\"text-center\">Année</h5>
                    <div class=\"input-group\">
                        <select class=\"year-select custom-select\" id=\"inputGroupSelect02\">
                            <option data-filter=\"year\" value=\"none\">Aucune</option>
                        </select>
                    </div>
                </div>



                <div class=\"mt-3 col-md-7 col-sm-12\">
                    <h5 class=\"text-center\">Genres</h5>
                    <label class=\"col-12 genres-group p-0 m-0\" for=\"genres-search\">
                        <div class=\"genres-form p-0 border rounded-lg\">
                            <input type=\"text\" class=\"genres-search\" id=\"genres-search\">
                        </div>
                    </label>
                </div>
            </div>
        </div>


        <section class=\"portfolio-block projects-with-sidebar\">
            <!-- Start: portfolio heading -->
            <!-- End: portfolio heading -->



         </section>
    </main>

    


{% endblock %}
{% block javascripts %}
    <script src=\" {{asset('js/api/tmdb_api_calls.js')}} \"></script>
    <script src=\" {{asset('js/api/tmdb_api.js')}} \"></script>
    <script src=\" {{asset('js/display/display.js')}} \"></script>

    <script>

    // \$(document).click(function (event) {
    //     console.log(\$(event.target));
    // })

   toggleRemoveEvent = true;

    fillGenres();
    fillYears({{ date|date('Y') }});
    filterSearch();

    
    \$('h2[data-filter=\"type\"]').click( function() {

        if ( \$(this)[0].className.includes('filter-active') === false )
        {
            
            \$('.selected-genre').remove();

            \$('h2[data-filter=\"type\"]').removeClass('filter-active');

            \$(this).addClass('filter-active');
                   
            fillGenres();
            filterSearch(); 
        }
    
    });

    \$('[data-filter=\"sort\"]').click(function() {

        \$('h2[data-filter=\"sort\"]').removeClass('filter-active');
        \$(this).addClass('filter-active');

        filterSearch(); 

    })

    \$('[data-filter=\"year\"]').click( function() {

        \$('[data-filter=\"year\"]').removeClass('filter-active');
        
        \$(this).addClass('filter-active');

        filterSearch();
    });

    \$('[data-filter=\"genres\"]').click( () => {

        \$(this).addClass('filter-active');

        \$('select2-selection__choice__remove').click(() => {
            console.log('here');
        });

        filterSearch();
    });

    \$('#my-div').on('click','button',function(){
    alert('button inside my-div clicked!');
});

    </script>

{% endblock %}", "main/search.html.twig", "C:\\Users\\Alex\\Documents\\DEV\\movilist\\templates\\main\\search.html.twig");
    }
}
