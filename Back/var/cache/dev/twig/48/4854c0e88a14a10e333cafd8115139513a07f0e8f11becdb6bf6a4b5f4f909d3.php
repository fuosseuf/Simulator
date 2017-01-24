<?php

/* @Twig/Exception/traces.txt.twig */
class __TwigTemplate_539e2a30abffa517b3156b7910c3924023c4a7b8e0d9886a4f9fc88ba55b8808 extends Twig_Template
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
        $__internal_25f4cd07c4c1e9a61ebf0f088dae95ae3a6951f44ca78bb8c01901929dccb607 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_25f4cd07c4c1e9a61ebf0f088dae95ae3a6951f44ca78bb8c01901929dccb607->enter($__internal_25f4cd07c4c1e9a61ebf0f088dae95ae3a6951f44ca78bb8c01901929dccb607_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/traces.txt.twig"));

        $__internal_260bf093719645b266a76473f75d36ed807cd31ddb24c0108f1a836994b30b9d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_260bf093719645b266a76473f75d36ed807cd31ddb24c0108f1a836994b30b9d->enter($__internal_260bf093719645b266a76473f75d36ed807cd31ddb24c0108f1a836994b30b9d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/traces.txt.twig"));

        // line 1
        if (twig_length_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "trace", array()))) {
            // line 2
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "trace", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["trace"]) {
                // line 3
                $this->loadTemplate("@Twig/Exception/trace.txt.twig", "@Twig/Exception/traces.txt.twig", 3)->display(array("trace" => $context["trace"]));
                // line 4
                echo "
";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['trace'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        
        $__internal_25f4cd07c4c1e9a61ebf0f088dae95ae3a6951f44ca78bb8c01901929dccb607->leave($__internal_25f4cd07c4c1e9a61ebf0f088dae95ae3a6951f44ca78bb8c01901929dccb607_prof);

        
        $__internal_260bf093719645b266a76473f75d36ed807cd31ddb24c0108f1a836994b30b9d->leave($__internal_260bf093719645b266a76473f75d36ed807cd31ddb24c0108f1a836994b30b9d_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/traces.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  33 => 4,  31 => 3,  27 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% if exception.trace|length %}
{% for trace in exception.trace %}
{% include '@Twig/Exception/trace.txt.twig' with { 'trace': trace } only %}

{% endfor %}
{% endif %}
", "@Twig/Exception/traces.txt.twig", "/media/www-dev/private/Simulator/Back/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/traces.txt.twig");
    }
}
