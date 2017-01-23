<?php

/* @Twig/Exception/exception.json.twig */
class __TwigTemplate_3dba1439104ebbfd1341fcbb8da60144d4c9c1be9cba646c07eb3e3055fe9d74 extends Twig_Template
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
        $__internal_2956b018245a608d6959babe2e96ba88fe47daae9dcf4b861ebfb45711b2b78e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2956b018245a608d6959babe2e96ba88fe47daae9dcf4b861ebfb45711b2b78e->enter($__internal_2956b018245a608d6959babe2e96ba88fe47daae9dcf4b861ebfb45711b2b78e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.json.twig"));

        $__internal_dc5303e6248f7e80a740178eaf67e37d0594e47ee33dabb0b50e6df7a3995143 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dc5303e6248f7e80a740178eaf67e37d0594e47ee33dabb0b50e6df7a3995143->enter($__internal_dc5303e6248f7e80a740178eaf67e37d0594e47ee33dabb0b50e6df7a3995143_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "exception" => $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "toarray", array()))));
        echo "
";
        
        $__internal_2956b018245a608d6959babe2e96ba88fe47daae9dcf4b861ebfb45711b2b78e->leave($__internal_2956b018245a608d6959babe2e96ba88fe47daae9dcf4b861ebfb45711b2b78e_prof);

        
        $__internal_dc5303e6248f7e80a740178eaf67e37d0594e47ee33dabb0b50e6df7a3995143->leave($__internal_dc5303e6248f7e80a740178eaf67e37d0594e47ee33dabb0b50e6df7a3995143_prof);

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
", "@Twig/Exception/exception.json.twig", "/var/www/html/Back/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.json.twig");
    }
}
