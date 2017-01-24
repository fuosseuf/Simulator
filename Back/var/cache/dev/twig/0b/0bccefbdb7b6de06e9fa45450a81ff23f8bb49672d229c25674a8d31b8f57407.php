<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_4f8fa482ed003b5d7728a8ef3d4971e862191ac46eeee5204dbbc77af03ae802 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_4e02f8c6db9c4f9a3a21bdf173b2f56a1fbbbc4146948f64be0c835886bd27ae = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4e02f8c6db9c4f9a3a21bdf173b2f56a1fbbbc4146948f64be0c835886bd27ae->enter($__internal_4e02f8c6db9c4f9a3a21bdf173b2f56a1fbbbc4146948f64be0c835886bd27ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $__internal_173f7276b3c61ad5c65c3ad47e9ad2000ae61d419ac45c196306a3087ef82895 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_173f7276b3c61ad5c65c3ad47e9ad2000ae61d419ac45c196306a3087ef82895->enter($__internal_173f7276b3c61ad5c65c3ad47e9ad2000ae61d419ac45c196306a3087ef82895_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4e02f8c6db9c4f9a3a21bdf173b2f56a1fbbbc4146948f64be0c835886bd27ae->leave($__internal_4e02f8c6db9c4f9a3a21bdf173b2f56a1fbbbc4146948f64be0c835886bd27ae_prof);

        
        $__internal_173f7276b3c61ad5c65c3ad47e9ad2000ae61d419ac45c196306a3087ef82895->leave($__internal_173f7276b3c61ad5c65c3ad47e9ad2000ae61d419ac45c196306a3087ef82895_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_8328b340d6b53cb5f8389592b044d14cab31203d74364e924762d70bf9b02003 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8328b340d6b53cb5f8389592b044d14cab31203d74364e924762d70bf9b02003->enter($__internal_8328b340d6b53cb5f8389592b044d14cab31203d74364e924762d70bf9b02003_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_66e13f701d6cff8278df9e4d7b50386f6b50b75a770ddecc3bd35bf9f792fad8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_66e13f701d6cff8278df9e4d7b50386f6b50b75a770ddecc3bd35bf9f792fad8->enter($__internal_66e13f701d6cff8278df9e4d7b50386f6b50b75a770ddecc3bd35bf9f792fad8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
";
        
        $__internal_66e13f701d6cff8278df9e4d7b50386f6b50b75a770ddecc3bd35bf9f792fad8->leave($__internal_66e13f701d6cff8278df9e4d7b50386f6b50b75a770ddecc3bd35bf9f792fad8_prof);

        
        $__internal_8328b340d6b53cb5f8389592b044d14cab31203d74364e924762d70bf9b02003->leave($__internal_8328b340d6b53cb5f8389592b044d14cab31203d74364e924762d70bf9b02003_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_816736df1b0c3af6a7736c89edb71fb283c58bd60eeff2fd34e4cc56e1392cc7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_816736df1b0c3af6a7736c89edb71fb283c58bd60eeff2fd34e4cc56e1392cc7->enter($__internal_816736df1b0c3af6a7736c89edb71fb283c58bd60eeff2fd34e4cc56e1392cc7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_eb245fbf8c3bafd6b809a47edfaafffdf08ff5d09101df68b83ea3b349a37133 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eb245fbf8c3bafd6b809a47edfaafffdf08ff5d09101df68b83ea3b349a37133->enter($__internal_eb245fbf8c3bafd6b809a47edfaafffdf08ff5d09101df68b83ea3b349a37133_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_eb245fbf8c3bafd6b809a47edfaafffdf08ff5d09101df68b83ea3b349a37133->leave($__internal_eb245fbf8c3bafd6b809a47edfaafffdf08ff5d09101df68b83ea3b349a37133_prof);

        
        $__internal_816736df1b0c3af6a7736c89edb71fb283c58bd60eeff2fd34e4cc56e1392cc7->leave($__internal_816736df1b0c3af6a7736c89edb71fb283c58bd60eeff2fd34e4cc56e1392cc7_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_85f45fc40c64d8c03753a92101232c540a9d93702d11b4ca99efedc2fd547624 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_85f45fc40c64d8c03753a92101232c540a9d93702d11b4ca99efedc2fd547624->enter($__internal_85f45fc40c64d8c03753a92101232c540a9d93702d11b4ca99efedc2fd547624_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_9865219cb24d7ccb5300cd11cd1e690cabdbc4e525ff9f6452de479def22c2ab = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9865219cb24d7ccb5300cd11cd1e690cabdbc4e525ff9f6452de479def22c2ab->enter($__internal_9865219cb24d7ccb5300cd11cd1e690cabdbc4e525ff9f6452de479def22c2ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 141)->display($context);
        
        $__internal_9865219cb24d7ccb5300cd11cd1e690cabdbc4e525ff9f6452de479def22c2ab->leave($__internal_9865219cb24d7ccb5300cd11cd1e690cabdbc4e525ff9f6452de479def22c2ab_prof);

        
        $__internal_85f45fc40c64d8c03753a92101232c540a9d93702d11b4ca99efedc2fd547624->leave($__internal_85f45fc40c64d8c03753a92101232c540a9d93702d11b4ca99efedc2fd547624_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  226 => 141,  217 => 140,  200 => 137,  191 => 136,  51 => 4,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block head %}
    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "@Twig/Exception/exception_full.html.twig", "/media/www-dev/private/Simulator/Back/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}
