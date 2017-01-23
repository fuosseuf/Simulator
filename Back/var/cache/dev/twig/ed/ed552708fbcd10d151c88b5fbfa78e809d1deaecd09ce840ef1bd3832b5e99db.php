<?php

/* base.html.twig */
class __TwigTemplate_c2d91961538fd12e40cab21f562bc57fa9a36b8c3050ae4c9c5d1abf0eedda2e extends Twig_Template
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
        $__internal_7d654f8332a044e7a055bad08b5f315bfec82cb6a1e182d40995b097be2ccd15 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7d654f8332a044e7a055bad08b5f315bfec82cb6a1e182d40995b097be2ccd15->enter($__internal_7d654f8332a044e7a055bad08b5f315bfec82cb6a1e182d40995b097be2ccd15_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_d806ed4c4fa0ede82885723d45b7038c6687573d3b829c32785620bd33c196f8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d806ed4c4fa0ede82885723d45b7038c6687573d3b829c32785620bd33c196f8->enter($__internal_d806ed4c4fa0ede82885723d45b7038c6687573d3b829c32785620bd33c196f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_7d654f8332a044e7a055bad08b5f315bfec82cb6a1e182d40995b097be2ccd15->leave($__internal_7d654f8332a044e7a055bad08b5f315bfec82cb6a1e182d40995b097be2ccd15_prof);

        
        $__internal_d806ed4c4fa0ede82885723d45b7038c6687573d3b829c32785620bd33c196f8->leave($__internal_d806ed4c4fa0ede82885723d45b7038c6687573d3b829c32785620bd33c196f8_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_f95a04b845cc95ae52c98765dec8f824da49cf15ea11489ad145782db7a48293 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f95a04b845cc95ae52c98765dec8f824da49cf15ea11489ad145782db7a48293->enter($__internal_f95a04b845cc95ae52c98765dec8f824da49cf15ea11489ad145782db7a48293_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_98784394b36a0f8d9f32a255b828967ab9f9e74a09be809e89c9f73f3ed81e3b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_98784394b36a0f8d9f32a255b828967ab9f9e74a09be809e89c9f73f3ed81e3b->enter($__internal_98784394b36a0f8d9f32a255b828967ab9f9e74a09be809e89c9f73f3ed81e3b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_98784394b36a0f8d9f32a255b828967ab9f9e74a09be809e89c9f73f3ed81e3b->leave($__internal_98784394b36a0f8d9f32a255b828967ab9f9e74a09be809e89c9f73f3ed81e3b_prof);

        
        $__internal_f95a04b845cc95ae52c98765dec8f824da49cf15ea11489ad145782db7a48293->leave($__internal_f95a04b845cc95ae52c98765dec8f824da49cf15ea11489ad145782db7a48293_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_57edd468775c4617043c2a1846ea25b1dbb838d2e12d64ee78f5d62c31d3779c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_57edd468775c4617043c2a1846ea25b1dbb838d2e12d64ee78f5d62c31d3779c->enter($__internal_57edd468775c4617043c2a1846ea25b1dbb838d2e12d64ee78f5d62c31d3779c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_55be7cde9762cc511d7f74b81ca148b9aacdc563bcdbffb09aa5d26bf39d4b2f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_55be7cde9762cc511d7f74b81ca148b9aacdc563bcdbffb09aa5d26bf39d4b2f->enter($__internal_55be7cde9762cc511d7f74b81ca148b9aacdc563bcdbffb09aa5d26bf39d4b2f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_55be7cde9762cc511d7f74b81ca148b9aacdc563bcdbffb09aa5d26bf39d4b2f->leave($__internal_55be7cde9762cc511d7f74b81ca148b9aacdc563bcdbffb09aa5d26bf39d4b2f_prof);

        
        $__internal_57edd468775c4617043c2a1846ea25b1dbb838d2e12d64ee78f5d62c31d3779c->leave($__internal_57edd468775c4617043c2a1846ea25b1dbb838d2e12d64ee78f5d62c31d3779c_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_e4dc0d67e5454144e0086b5372e044f35092de674ebc6cdd08a4593640c48d7d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e4dc0d67e5454144e0086b5372e044f35092de674ebc6cdd08a4593640c48d7d->enter($__internal_e4dc0d67e5454144e0086b5372e044f35092de674ebc6cdd08a4593640c48d7d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_16633a573325f7064aa2ab0af06a9244c0aa13e511b1d6d1ba1bb76ae0b9a6bf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_16633a573325f7064aa2ab0af06a9244c0aa13e511b1d6d1ba1bb76ae0b9a6bf->enter($__internal_16633a573325f7064aa2ab0af06a9244c0aa13e511b1d6d1ba1bb76ae0b9a6bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_16633a573325f7064aa2ab0af06a9244c0aa13e511b1d6d1ba1bb76ae0b9a6bf->leave($__internal_16633a573325f7064aa2ab0af06a9244c0aa13e511b1d6d1ba1bb76ae0b9a6bf_prof);

        
        $__internal_e4dc0d67e5454144e0086b5372e044f35092de674ebc6cdd08a4593640c48d7d->leave($__internal_e4dc0d67e5454144e0086b5372e044f35092de674ebc6cdd08a4593640c48d7d_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_bb2b33f848a9679adb0725c849c476d13be1377c80a55678093c44c150abe6d6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bb2b33f848a9679adb0725c849c476d13be1377c80a55678093c44c150abe6d6->enter($__internal_bb2b33f848a9679adb0725c849c476d13be1377c80a55678093c44c150abe6d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_5bd6e38c4022a2c0451ca620945849bb12e6f3830b6a8e9a561c43933a3b2dd7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5bd6e38c4022a2c0451ca620945849bb12e6f3830b6a8e9a561c43933a3b2dd7->enter($__internal_5bd6e38c4022a2c0451ca620945849bb12e6f3830b6a8e9a561c43933a3b2dd7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_5bd6e38c4022a2c0451ca620945849bb12e6f3830b6a8e9a561c43933a3b2dd7->leave($__internal_5bd6e38c4022a2c0451ca620945849bb12e6f3830b6a8e9a561c43933a3b2dd7_prof);

        
        $__internal_bb2b33f848a9679adb0725c849c476d13be1377c80a55678093c44c150abe6d6->leave($__internal_bb2b33f848a9679adb0725c849c476d13be1377c80a55678093c44c150abe6d6_prof);

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
", "base.html.twig", "/var/www/html/Back/app/Resources/views/base.html.twig");
    }
}
