<?php

/* @Twig/Exception/exception.json.twig */
class __TwigTemplate_fac84c786e0cfe0d1baf5b4ac9f16ac5d255d11a2c114e76ebd777e54ea07ea3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_fe88744d09fae176a9b58989ab5793f35c9449ae40b6cb8e09ecbfd63df3af9f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fe88744d09fae176a9b58989ab5793f35c9449ae40b6cb8e09ecbfd63df3af9f->enter($__internal_fe88744d09fae176a9b58989ab5793f35c9449ae40b6cb8e09ecbfd63df3af9f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.json.twig"));

        $__internal_3fec7fc42ae6653d344f2be22a7a7106e691066fa2e466297cb1a7b485cce5cf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3fec7fc42ae6653d344f2be22a7a7106e691066fa2e466297cb1a7b485cce5cf->enter($__internal_3fec7fc42ae6653d344f2be22a7a7106e691066fa2e466297cb1a7b485cce5cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => ($context["status_code"] ?? $this->getContext($context, "status_code")), "message" => ($context["status_text"] ?? $this->getContext($context, "status_text")), "exception" => $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "toarray", array()))));
        echo "
";
        
        $__internal_fe88744d09fae176a9b58989ab5793f35c9449ae40b6cb8e09ecbfd63df3af9f->leave($__internal_fe88744d09fae176a9b58989ab5793f35c9449ae40b6cb8e09ecbfd63df3af9f_prof);

        
        $__internal_3fec7fc42ae6653d344f2be22a7a7106e691066fa2e466297cb1a7b485cce5cf->leave($__internal_3fec7fc42ae6653d344f2be22a7a7106e691066fa2e466297cb1a7b485cce5cf_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.json.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{{ { 'error': { 'code': status_code, 'message': status_text, 'exception': exception.toarray } }|json_encode|raw }}
", "@Twig/Exception/exception.json.twig", "/media/www-dev/private/Simulator/Back/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.json.twig");
    }
}
