<?php

/* blog/home.html.twig */
class __TwigTemplate_0c4b5f53182a5d95d9aba6b2d226cbd1eff5c71f96a1cf7e1b02dd5873113a95 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 2
        $this->parent = $this->loadTemplate("base.html.twig", "blog/home.html.twig", 2);
        $this->blocks = [
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "blog/home.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "blog/home.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_body($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
        <h1>Bienvenue dans ce blog</h1>

                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Cupiditate eius iste fugit 
                in, officia dolorem tempora, excepturi nobis est similique facilis impedit veniam quis et vel. Inventore sunt,
                ducimus cum ab cumque nulla fugit quo molestias quod repudiandae, sint ipsum.</p>
                <p>Quos nam dolorum molestias illum laborum officiis illo! Dolor, delectus natus 
                eligendi fuga deserunt officia alias ipsum aspernatur nulla fugiat doloremque cum ut in nesciunt corrupti corporis 
                porro debitis ducimus quibusdam, 
                quam inventore consectetur voluptas. Debitis laboriosam cum atque quis.</p> 

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "blog/home.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  53 => 4,  44 => 3,  15 => 2,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("
{% extends \"base.html.twig\" %}
{% block body %}

        <h1>Bienvenue dans ce blog</h1>

                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Cupiditate eius iste fugit 
                in, officia dolorem tempora, excepturi nobis est similique facilis impedit veniam quis et vel. Inventore sunt,
                ducimus cum ab cumque nulla fugit quo molestias quod repudiandae, sint ipsum.</p>
                <p>Quos nam dolorum molestias illum laborum officiis illo! Dolor, delectus natus 
                eligendi fuga deserunt officia alias ipsum aspernatur nulla fugiat doloremque cum ut in nesciunt corrupti corporis 
                porro debitis ducimus quibusdam, 
                quam inventore consectetur voluptas. Debitis laboriosam cum atque quis.</p> 

{% endblock %}", "blog/home.html.twig", "C:\\Symfony\\etape0\\templates\\blog\\home.html.twig");
    }
}
