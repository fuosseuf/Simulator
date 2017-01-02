<?php

/* @Twig/Exception/exception.json.twig */
class __TwigTemplate_590f51e40b439fd1107ab0209035a0224d870b2c3bdc657c8e554d4b3aca615c extends Twig_Template
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
        $__internal_a4dd80adc8b8492b36cf2ba40c468e94b80bda81d1b236bfc55182fccfff1487 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a4dd80adc8b8492b36cf2ba40c468e94b80bda81d1b236bfc55182fccfff1487->enter($__internal_a4dd80adc8b8492b36cf2ba40c468e94b80bda81d1b236bfc55182fccfff1487_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.json.twig"));

        $__internal_bdaa312731a1e6e87867c01e7f0a1eefa3b6434d4e9208aca9252060916cac1c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bdaa312731a1e6e87867c01e7f0a1eefa3b6434d4e9208aca9252060916cac1c->enter($__internal_bdaa312731a1e6e87867c01e7f0a1eefa3b6434d4e9208aca9252060916cac1c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => ($context["status_code"] ?? $this->getContext($context, "status_code")), "message" => ($context["status_text"] ?? $this->getContext($context, "status_text")), "exception" => $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "toarray", array()))));
        echo "
";
        
        $__internal_a4dd80adc8b8492b36cf2ba40c468e94b80bda81d1b236bfc55182fccfff1487->leave($__internal_a4dd80adc8b8492b36cf2ba40c468e94b80bda81d1b236bfc55182fccfff1487_prof);

        
        $__internal_bdaa312731a1e6e87867c01e7f0a1eefa3b6434d4e9208aca9252060916cac1c->leave($__internal_bdaa312731a1e6e87867c01e7f0a1eefa3b6434d4e9208aca9252060916cac1c_prof);

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
", "@Twig/Exception/exception.json.twig", "/media/www-dev/private/Simulator/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.json.twig");
    }
}
