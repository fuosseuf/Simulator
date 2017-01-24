<?php

/* base.html.twig */
class __TwigTemplate_f666efd4eecd3444daa067c68fb7e22797b21129ff05c7644e3a35849998cbc2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_7033028f27bdffb06353ccc8f63d9c9e03c63cc637b67a75c577d32987c9a3ff = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7033028f27bdffb06353ccc8f63d9c9e03c63cc637b67a75c577d32987c9a3ff->enter($__internal_7033028f27bdffb06353ccc8f63d9c9e03c63cc637b67a75c577d32987c9a3ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_5f540370c8d0dc500e20e1c2d16d3d668aef33c7cb260b7157362a7e5698588b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5f540370c8d0dc500e20e1c2d16d3d668aef33c7cb260b7157362a7e5698588b->enter($__internal_5f540370c8d0dc500e20e1c2d16d3d668aef33c7cb260b7157362a7e5698588b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_7033028f27bdffb06353ccc8f63d9c9e03c63cc637b67a75c577d32987c9a3ff->leave($__internal_7033028f27bdffb06353ccc8f63d9c9e03c63cc637b67a75c577d32987c9a3ff_prof);

        
        $__internal_5f540370c8d0dc500e20e1c2d16d3d668aef33c7cb260b7157362a7e5698588b->leave($__internal_5f540370c8d0dc500e20e1c2d16d3d668aef33c7cb260b7157362a7e5698588b_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_1d01a6682126963e555dbe47849d8aba2790687782289d8f3bf2845803e83d51 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1d01a6682126963e555dbe47849d8aba2790687782289d8f3bf2845803e83d51->enter($__internal_1d01a6682126963e555dbe47849d8aba2790687782289d8f3bf2845803e83d51_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_e7c07964eaf9b4cba83bc4ce75dbaf62020343e2dfbf4a528b148857f79d6c4a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e7c07964eaf9b4cba83bc4ce75dbaf62020343e2dfbf4a528b148857f79d6c4a->enter($__internal_e7c07964eaf9b4cba83bc4ce75dbaf62020343e2dfbf4a528b148857f79d6c4a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_e7c07964eaf9b4cba83bc4ce75dbaf62020343e2dfbf4a528b148857f79d6c4a->leave($__internal_e7c07964eaf9b4cba83bc4ce75dbaf62020343e2dfbf4a528b148857f79d6c4a_prof);

        
        $__internal_1d01a6682126963e555dbe47849d8aba2790687782289d8f3bf2845803e83d51->leave($__internal_1d01a6682126963e555dbe47849d8aba2790687782289d8f3bf2845803e83d51_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_07d8338e4e72b2b6aabbdb22a78b512112fe497fc5997240b88fc17c2ab5e420 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_07d8338e4e72b2b6aabbdb22a78b512112fe497fc5997240b88fc17c2ab5e420->enter($__internal_07d8338e4e72b2b6aabbdb22a78b512112fe497fc5997240b88fc17c2ab5e420_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_e9cf13bce980a978505eb7a984c1bce3e9f5aa4e96e351169620a77da463b9b3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e9cf13bce980a978505eb7a984c1bce3e9f5aa4e96e351169620a77da463b9b3->enter($__internal_e9cf13bce980a978505eb7a984c1bce3e9f5aa4e96e351169620a77da463b9b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_e9cf13bce980a978505eb7a984c1bce3e9f5aa4e96e351169620a77da463b9b3->leave($__internal_e9cf13bce980a978505eb7a984c1bce3e9f5aa4e96e351169620a77da463b9b3_prof);

        
        $__internal_07d8338e4e72b2b6aabbdb22a78b512112fe497fc5997240b88fc17c2ab5e420->leave($__internal_07d8338e4e72b2b6aabbdb22a78b512112fe497fc5997240b88fc17c2ab5e420_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_f65e077b032d9d46c77f2f9d1d5b192b7dfe9e47db509f9b769c929114215f04 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f65e077b032d9d46c77f2f9d1d5b192b7dfe9e47db509f9b769c929114215f04->enter($__internal_f65e077b032d9d46c77f2f9d1d5b192b7dfe9e47db509f9b769c929114215f04_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_f69f3341b161f0d2bd2204f0db25df76891d25c74232e2aaf7c74ccde762bcc6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f69f3341b161f0d2bd2204f0db25df76891d25c74232e2aaf7c74ccde762bcc6->enter($__internal_f69f3341b161f0d2bd2204f0db25df76891d25c74232e2aaf7c74ccde762bcc6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_f69f3341b161f0d2bd2204f0db25df76891d25c74232e2aaf7c74ccde762bcc6->leave($__internal_f69f3341b161f0d2bd2204f0db25df76891d25c74232e2aaf7c74ccde762bcc6_prof);

        
        $__internal_f65e077b032d9d46c77f2f9d1d5b192b7dfe9e47db509f9b769c929114215f04->leave($__internal_f65e077b032d9d46c77f2f9d1d5b192b7dfe9e47db509f9b769c929114215f04_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_06ca26e638ba0ab4e8cc005dff4b31b13d093ff7e27b032787f92cf22fcb43a2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_06ca26e638ba0ab4e8cc005dff4b31b13d093ff7e27b032787f92cf22fcb43a2->enter($__internal_06ca26e638ba0ab4e8cc005dff4b31b13d093ff7e27b032787f92cf22fcb43a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_0b0478d8964bd47bd6dacb858963331c6e5a380eb683a24f880af1d67d701dc1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0b0478d8964bd47bd6dacb858963331c6e5a380eb683a24f880af1d67d701dc1->enter($__internal_0b0478d8964bd47bd6dacb858963331c6e5a380eb683a24f880af1d67d701dc1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_0b0478d8964bd47bd6dacb858963331c6e5a380eb683a24f880af1d67d701dc1->leave($__internal_0b0478d8964bd47bd6dacb858963331c6e5a380eb683a24f880af1d67d701dc1_prof);

        
        $__internal_06ca26e638ba0ab4e8cc005dff4b31b13d093ff7e27b032787f92cf22fcb43a2->leave($__internal_06ca26e638ba0ab4e8cc005dff4b31b13d093ff7e27b032787f92cf22fcb43a2_prof);

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
        return array (  117 => 11,  100 => 10,  83 => 6,  65 => 5,  53 => 12,  50 => 11,  48 => 10,  41 => 7,  39 => 6,  35 => 5,  29 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>{% block title %}Welcome!{% endblock %}</title>
        {% block stylesheets %}{% endblock %}
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
    </head>
    <body>
        {% block body %}{% endblock %}
        {% block javascripts %}{% endblock %}
    </body>
</html>
", "base.html.twig", "/media/www-dev/private/Simulator/Back/app/Resources/views/base.html.twig");
    }
}
