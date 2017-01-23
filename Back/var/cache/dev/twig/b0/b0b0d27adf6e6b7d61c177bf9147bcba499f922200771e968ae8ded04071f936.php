<?php

/* default/index.html.twig */
class __TwigTemplate_bd927b425e6923e87817fb1c97ccba12537f09f51d22c189878d025c9c08ac23 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "default/index.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'stylesheets' => array($this, 'block_stylesheets'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_6aa95b423a4ff75b2311552fea2bca9e64de5d6731938536840759c482ffeb4d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6aa95b423a4ff75b2311552fea2bca9e64de5d6731938536840759c482ffeb4d->enter($__internal_6aa95b423a4ff75b2311552fea2bca9e64de5d6731938536840759c482ffeb4d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/index.html.twig"));

        $__internal_3984b0c2939ead4bc3f8be318a5ad5cebb5476dd18bee3a250d181b1974e404a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3984b0c2939ead4bc3f8be318a5ad5cebb5476dd18bee3a250d181b1974e404a->enter($__internal_3984b0c2939ead4bc3f8be318a5ad5cebb5476dd18bee3a250d181b1974e404a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6aa95b423a4ff75b2311552fea2bca9e64de5d6731938536840759c482ffeb4d->leave($__internal_6aa95b423a4ff75b2311552fea2bca9e64de5d6731938536840759c482ffeb4d_prof);

        
        $__internal_3984b0c2939ead4bc3f8be318a5ad5cebb5476dd18bee3a250d181b1974e404a->leave($__internal_3984b0c2939ead4bc3f8be318a5ad5cebb5476dd18bee3a250d181b1974e404a_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_7db5bc23b7929a3f576c0573fdc07dcafa2870266074a2d1a46adf969001871f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7db5bc23b7929a3f576c0573fdc07dcafa2870266074a2d1a46adf969001871f->enter($__internal_7db5bc23b7929a3f576c0573fdc07dcafa2870266074a2d1a46adf969001871f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_27ee88f19ec42cde5697aee41557d797a6262251ada92499adcd4a40fd7a954d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_27ee88f19ec42cde5697aee41557d797a6262251ada92499adcd4a40fd7a954d->enter($__internal_27ee88f19ec42cde5697aee41557d797a6262251ada92499adcd4a40fd7a954d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <div id=\"wrapper\">
        <div id=\"container\">
            <div>
                <h1>Investissement</h1>
                <table border=\"1\" cellpadding=\"10\" cellspacing=\"1\" width=\"100%\">
                    <tr>
                        <td>Prix de d'achat FAI</td>
                        <td>";
        // line 11
        echo twig_escape_filter($this->env, (isset($context["prix_achat"]) ? $context["prix_achat"] : $this->getContext($context, "prix_achat")), "html", null, true);
        echo "€</td>
                    </tr>
                    <tr>
                        <td>Fraix de notaire</td>
                        <td>";
        // line 15
        echo twig_escape_filter($this->env, (isset($context["frais_notaire"]) ? $context["frais_notaire"] : $this->getContext($context, "frais_notaire")), "html", null, true);
        echo "€</td>
                    </tr>
                    <tr>
                        <td>Prix des travaux</td>
                        <td>";
        // line 19
        echo twig_escape_filter($this->env, (isset($context["montant_travaux"]) ? $context["montant_travaux"] : $this->getContext($context, "montant_travaux")), "html", null, true);
        echo "€</td>
                    </tr>
                    <tr>
                        <td>Prix des meubles</td>
                        <td>";
        // line 23
        echo twig_escape_filter($this->env, (isset($context["prix_meubles"]) ? $context["prix_meubles"] : $this->getContext($context, "prix_meubles")), "html", null, true);
        echo "€</td>
                    </tr>
                    <tr>
                        <td>Apport personnel</td>
                        <td>";
        // line 27
        echo twig_escape_filter($this->env, (isset($context["apport"]) ? $context["apport"] : $this->getContext($context, "apport")), "html", null, true);
        echo "€</td>
                    </tr>
                    <tr>
                        <th>Somme à emprunter</th>
                        <th>";
        // line 31
        echo twig_escape_filter($this->env, (isset($context["emprunt"]) ? $context["emprunt"] : $this->getContext($context, "emprunt")), "html", null, true);
        echo "€</th>
                    </tr>
                </table>
            </div>

            <div>
                <h1>Financement</h1>
                <table border=\"1\" cellpadding=\"10\" cellspacing=\"1\" width=\"100%\">
                    <tr>
                        <td>Durée du crédit</td>
                        <td>";
        // line 41
        echo twig_escape_filter($this->env, (isset($context["duree"]) ? $context["duree"] : $this->getContext($context, "duree")), "html", null, true);
        echo " mois</td>
                    </tr>
                    <tr>
                        <td>Taux crédit</td>
                        <td>";
        // line 45
        echo twig_escape_filter($this->env, (isset($context["taux"]) ? $context["taux"] : $this->getContext($context, "taux")), "html", null, true);
        echo "%</td>
                    </tr>
                    <tr>
                        <td>Taux d'assurance crédit</td>
                        <td>";
        // line 49
        echo twig_escape_filter($this->env, (isset($context["taux_assurance"]) ? $context["taux_assurance"] : $this->getContext($context, "taux_assurance")), "html", null, true);
        echo "%</td>
                    </tr>
                    <tr>
                        <th>Mensualité crédit (hors assurance)</th>
                        <th>";
        // line 53
        echo twig_escape_filter($this->env, (isset($context["credit_sa"]) ? $context["credit_sa"] : $this->getContext($context, "credit_sa")), "html", null, true);
        echo "€</th>
                    </tr>
                    <tr>
                        <th>Mensualité crédit (avec assurance)</th>
                        <th>";
        // line 57
        echo twig_escape_filter($this->env, (isset($context["credit_aa"]) ? $context["credit_aa"] : $this->getContext($context, "credit_aa")), "html", null, true);
        echo "€</th>
                    </tr>
                </table>
            </div>

            <div>
                <h1>Recettes</h1>
                <table border=\"1\" cellpadding=\"10\" cellspacing=\"1\" width=\"100%\">
                    <tr>
                        <td>Loyer brut mensuel</td>
                        <td>";
        // line 67
        echo twig_escape_filter($this->env, (isset($context["loyer_brut"]) ? $context["loyer_brut"] : $this->getContext($context, "loyer_brut")), "html", null, true);
        echo "€</td>
                    </tr>
                    <tr>
                        <td>Loyer au m<sup>2</sup></td>
                        <td>";
        // line 71
        echo twig_escape_filter($this->env, (isset($context["loyer_m2"]) ? $context["loyer_m2"] : $this->getContext($context, "loyer_m2")), "html", null, true);
        echo "€</td>
                    </tr>
                    <tr>
                        <td>Nombre de loyers / an</td>
                        <td>";
        // line 75
        echo twig_escape_filter($this->env, (isset($context["nombre_loyers"]) ? $context["nombre_loyers"] : $this->getContext($context, "nombre_loyers")), "html", null, true);
        echo "</td>
                    </tr>
                    <tr>
                        <th>Total</th>
                        <th>";
        // line 79
        echo twig_escape_filter($this->env, (isset($context["recettes"]) ? $context["recettes"] : $this->getContext($context, "recettes")), "html", null, true);
        echo "€</th>
                    </tr>
                </table>
            </div>

            <div>
                <h1>Charges</h1>
                <table border=\"1\" cellpadding=\"10\" cellspacing=\"1\" width=\"100%\">
                    <tr>
                        <td>Charges de coproprietés</td>
                        <td>";
        // line 89
        echo twig_escape_filter($this->env, (isset($context["charges_copro"]) ? $context["charges_copro"] : $this->getContext($context, "charges_copro")), "html", null, true);
        echo "€</td>
                    </tr>
                    <tr>
                        <td>Frais de gestion</td>
                        <td>";
        // line 93
        echo twig_escape_filter($this->env, (isset($context["frais_gestion"]) ? $context["frais_gestion"] : $this->getContext($context, "frais_gestion")), "html", null, true);
        echo "€</td>
                    </tr>
                    <tr>
                        <td>Frais d'entretien</td>
                        <td>";
        // line 97
        echo twig_escape_filter($this->env, (isset($context["frais_renovation"]) ? $context["frais_renovation"] : $this->getContext($context, "frais_renovation")), "html", null, true);
        echo "€</td>
                    </tr>
                    <tr>
                        <td>Assurance Garantie Risque Loyer</td>
                        <td>";
        // line 101
        echo twig_escape_filter($this->env, (isset($context["assu_grl"]) ? $context["assu_grl"] : $this->getContext($context, "assu_grl")), "html", null, true);
        echo "€</td>
                    </tr>
                    <tr>
                        <td>Assurance Propietaire Non Occupant</td>
                        <td>";
        // line 105
        echo twig_escape_filter($this->env, (isset($context["assu_pno"]) ? $context["assu_pno"] : $this->getContext($context, "assu_pno")), "html", null, true);
        echo "€</td>
                    </tr>
                    <tr>
                        <td>Taxe foncière</td>
                        <td>";
        // line 109
        echo twig_escape_filter($this->env, (isset($context["taxe_fonciere"]) ? $context["taxe_fonciere"] : $this->getContext($context, "taxe_fonciere")), "html", null, true);
        echo "€</td>
                    </tr>
                    <tr>
                        <td>Crédit annuel</td>
                        <td>";
        // line 113
        echo twig_escape_filter($this->env, (isset($context["credit_annuel"]) ? $context["credit_annuel"] : $this->getContext($context, "credit_annuel")), "html", null, true);
        echo "€</td>
                    </tr>
                    <tr>
                        <th>Total</th>
                        <th>";
        // line 117
        echo twig_escape_filter($this->env, (isset($context["charges"]) ? $context["charges"] : $this->getContext($context, "charges")), "html", null, true);
        echo "€</th>
                    </tr>
                </table>
            </div>

            <div>
                <h1>Impots</h1>
                <table border=\"1\" cellpadding=\"10\" cellspacing=\"1\" width=\"100%\">
                    <tr>
                        <th></th>
                        <th>Régime Micro BIC</th>
                        <th>Régime Réel</th>
                    </tr>
                    <tr>
                        <td>Recettes</td>
                        <td>";
        // line 132
        echo twig_escape_filter($this->env, (isset($context["recettes"]) ? $context["recettes"] : $this->getContext($context, "recettes")), "html", null, true);
        echo "€</td>
                        <td>";
        // line 133
        echo twig_escape_filter($this->env, (isset($context["recettes"]) ? $context["recettes"] : $this->getContext($context, "recettes")), "html", null, true);
        echo "€</td>
                    </tr>
                     <tr>
                        <td>Ammortissement du bien</td>
                        <td> - </td>
                        <td>";
        // line 138
        echo twig_escape_filter($this->env, (isset($context["ammortissement_bien"]) ? $context["ammortissement_bien"] : $this->getContext($context, "ammortissement_bien")), "html", null, true);
        echo "€</td>
                    </tr>
                    <tr>
                        <td>Ammortissement des meubles</td>
                        <td> - </td>
                        <td>";
        // line 143
        echo twig_escape_filter($this->env, (isset($context["ammortissement_meubles"]) ? $context["ammortissement_meubles"] : $this->getContext($context, "ammortissement_meubles")), "html", null, true);
        echo "€</td>
                    </tr>
                    <tr>
                        <td>Intérêt d'emprunt</td>
                        <td> - </td>
                        <td>";
        // line 148
        echo twig_escape_filter($this->env, (isset($context["interet_emprunt"]) ? $context["interet_emprunt"] : $this->getContext($context, "interet_emprunt")), "html", null, true);
        echo "€</td>
                    </tr>
                    <tr>
                        <td>Autres charges</td>
                        <td> - </td>
                        <td>";
        // line 153
        echo twig_escape_filter($this->env, (isset($context["charges_imposables"]) ? $context["charges_imposables"] : $this->getContext($context, "charges_imposables")), "html", null, true);
        echo "€</td>
                    </tr>
                    <tr>
                        <td>Abattement 50%</td>
                        <td>";
        // line 157
        echo twig_escape_filter($this->env, (isset($context["abattement"]) ? $context["abattement"] : $this->getContext($context, "abattement")), "html", null, true);
        echo "€</td>
                        <td> - </td>
                    </tr>
                    <tr>
                        <td>Total des charges</td>
                        <td>";
        // line 162
        echo twig_escape_filter($this->env, (isset($context["total_charges_bic"]) ? $context["total_charges_bic"] : $this->getContext($context, "total_charges_bic")), "html", null, true);
        echo "€</td>
                        <td>";
        // line 163
        echo twig_escape_filter($this->env, (isset($context["total_charges_reel"]) ? $context["total_charges_reel"] : $this->getContext($context, "total_charges_reel")), "html", null, true);
        echo "€</td>
                    </tr>
                    <tr>
                        <td>Résultats</td>
                        <td>";
        // line 167
        echo twig_escape_filter($this->env, (isset($context["resultat_bic"]) ? $context["resultat_bic"] : $this->getContext($context, "resultat_bic")), "html", null, true);
        echo "€</td>
                        <td>";
        // line 168
        echo twig_escape_filter($this->env, (isset($context["resultat_reel"]) ? $context["resultat_reel"] : $this->getContext($context, "resultat_reel")), "html", null, true);
        echo "€</td>
                    </tr>
                    <tr>
                        <th>Impôts + CSG</th>
                        <th>";
        // line 172
        echo twig_escape_filter($this->env, (isset($context["impot_bic"]) ? $context["impot_bic"] : $this->getContext($context, "impot_bic")), "html", null, true);
        echo "€</th>
                        <th>";
        // line 173
        echo twig_escape_filter($this->env, (isset($context["impot_reel"]) ? $context["impot_reel"] : $this->getContext($context, "impot_reel")), "html", null, true);
        echo "€</th>
                    </tr>
                </table>
            </div>
        </div>
    </div>
";
        
        $__internal_27ee88f19ec42cde5697aee41557d797a6262251ada92499adcd4a40fd7a954d->leave($__internal_27ee88f19ec42cde5697aee41557d797a6262251ada92499adcd4a40fd7a954d_prof);

        
        $__internal_7db5bc23b7929a3f576c0573fdc07dcafa2870266074a2d1a46adf969001871f->leave($__internal_7db5bc23b7929a3f576c0573fdc07dcafa2870266074a2d1a46adf969001871f_prof);

    }

    // line 181
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_93d6acdc29b3e5bd134963c720cba9bc7c207da4bb042fbfeb7366ef1bc25572 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_93d6acdc29b3e5bd134963c720cba9bc7c207da4bb042fbfeb7366ef1bc25572->enter($__internal_93d6acdc29b3e5bd134963c720cba9bc7c207da4bb042fbfeb7366ef1bc25572_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_21c6b1dc82f34accb880a209452c3f870ff4215111b624b312042cebd4ff3c45 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_21c6b1dc82f34accb880a209452c3f870ff4215111b624b312042cebd4ff3c45->enter($__internal_21c6b1dc82f34accb880a209452c3f870ff4215111b624b312042cebd4ff3c45_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 182
        echo "    <style>
        body { background: #F5F5F5; font: 18px/1.5 sans-serif; }
        h1, h2 { line-height: 1.2; margin: 0 0 .5em; }
        h1 { font-size: 36px; }
        h2 { font-size: 21px; margin-bottom: 1em; }
        p { margin: 0 0 1em 0; }
        a { color: #0000F0; }
        a:hover { text-decoration: none; }
        code { background: #F5F5F5; max-width: 100px; padding: 2px 6px; word-wrap: break-word; }
        #wrapper { background: #FFF; margin: 1em auto; max-width: 800px; width: 95%; }
        #container { padding: 2em; }
        #welcome, #status { margin-bottom: 2em; }
        #welcome h1 span { display: block; font-size: 75%; }
        #icon-status, #icon-book { float: left; height: 64px; margin-right: 1em; margin-top: -4px; width: 64px; }
        #icon-book { display: none; }

        @media (min-width: 768px) {
            #wrapper { width: 80%; margin: 2em auto; }
            #icon-book { display: inline-block; }
            #status a, #next a { display: block; }

            @-webkit-keyframes fade-in { 0% { opacity: 0; } 100% { opacity: 1; } }
            @keyframes fade-in { 0% { opacity: 0; } 100% { opacity: 1; } }
            .sf-toolbar { opacity: 0; -webkit-animation: fade-in 1s .2s forwards; animation: fade-in 1s .2s forwards;}
        }
    </style>
";
        
        $__internal_21c6b1dc82f34accb880a209452c3f870ff4215111b624b312042cebd4ff3c45->leave($__internal_21c6b1dc82f34accb880a209452c3f870ff4215111b624b312042cebd4ff3c45_prof);

        
        $__internal_93d6acdc29b3e5bd134963c720cba9bc7c207da4bb042fbfeb7366ef1bc25572->leave($__internal_93d6acdc29b3e5bd134963c720cba9bc7c207da4bb042fbfeb7366ef1bc25572_prof);

    }

    public function getTemplateName()
    {
        return "default/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  352 => 182,  343 => 181,  326 => 173,  322 => 172,  315 => 168,  311 => 167,  304 => 163,  300 => 162,  292 => 157,  285 => 153,  277 => 148,  269 => 143,  261 => 138,  253 => 133,  249 => 132,  231 => 117,  224 => 113,  217 => 109,  210 => 105,  203 => 101,  196 => 97,  189 => 93,  182 => 89,  169 => 79,  162 => 75,  155 => 71,  148 => 67,  135 => 57,  128 => 53,  121 => 49,  114 => 45,  107 => 41,  94 => 31,  87 => 27,  80 => 23,  73 => 19,  66 => 15,  59 => 11,  50 => 4,  41 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block body %}
    <div id=\"wrapper\">
        <div id=\"container\">
            <div>
                <h1>Investissement</h1>
                <table border=\"1\" cellpadding=\"10\" cellspacing=\"1\" width=\"100%\">
                    <tr>
                        <td>Prix de d'achat FAI</td>
                        <td>{{ prix_achat }}€</td>
                    </tr>
                    <tr>
                        <td>Fraix de notaire</td>
                        <td>{{ frais_notaire }}€</td>
                    </tr>
                    <tr>
                        <td>Prix des travaux</td>
                        <td>{{ montant_travaux }}€</td>
                    </tr>
                    <tr>
                        <td>Prix des meubles</td>
                        <td>{{ prix_meubles }}€</td>
                    </tr>
                    <tr>
                        <td>Apport personnel</td>
                        <td>{{ apport }}€</td>
                    </tr>
                    <tr>
                        <th>Somme à emprunter</th>
                        <th>{{ emprunt }}€</th>
                    </tr>
                </table>
            </div>

            <div>
                <h1>Financement</h1>
                <table border=\"1\" cellpadding=\"10\" cellspacing=\"1\" width=\"100%\">
                    <tr>
                        <td>Durée du crédit</td>
                        <td>{{ duree }} mois</td>
                    </tr>
                    <tr>
                        <td>Taux crédit</td>
                        <td>{{ taux }}%</td>
                    </tr>
                    <tr>
                        <td>Taux d'assurance crédit</td>
                        <td>{{ taux_assurance }}%</td>
                    </tr>
                    <tr>
                        <th>Mensualité crédit (hors assurance)</th>
                        <th>{{ credit_sa }}€</th>
                    </tr>
                    <tr>
                        <th>Mensualité crédit (avec assurance)</th>
                        <th>{{ credit_aa }}€</th>
                    </tr>
                </table>
            </div>

            <div>
                <h1>Recettes</h1>
                <table border=\"1\" cellpadding=\"10\" cellspacing=\"1\" width=\"100%\">
                    <tr>
                        <td>Loyer brut mensuel</td>
                        <td>{{ loyer_brut }}€</td>
                    </tr>
                    <tr>
                        <td>Loyer au m<sup>2</sup></td>
                        <td>{{ loyer_m2 }}€</td>
                    </tr>
                    <tr>
                        <td>Nombre de loyers / an</td>
                        <td>{{ nombre_loyers }}</td>
                    </tr>
                    <tr>
                        <th>Total</th>
                        <th>{{ recettes }}€</th>
                    </tr>
                </table>
            </div>

            <div>
                <h1>Charges</h1>
                <table border=\"1\" cellpadding=\"10\" cellspacing=\"1\" width=\"100%\">
                    <tr>
                        <td>Charges de coproprietés</td>
                        <td>{{ charges_copro }}€</td>
                    </tr>
                    <tr>
                        <td>Frais de gestion</td>
                        <td>{{ frais_gestion }}€</td>
                    </tr>
                    <tr>
                        <td>Frais d'entretien</td>
                        <td>{{ frais_renovation }}€</td>
                    </tr>
                    <tr>
                        <td>Assurance Garantie Risque Loyer</td>
                        <td>{{ assu_grl }}€</td>
                    </tr>
                    <tr>
                        <td>Assurance Propietaire Non Occupant</td>
                        <td>{{ assu_pno }}€</td>
                    </tr>
                    <tr>
                        <td>Taxe foncière</td>
                        <td>{{ taxe_fonciere }}€</td>
                    </tr>
                    <tr>
                        <td>Crédit annuel</td>
                        <td>{{ credit_annuel }}€</td>
                    </tr>
                    <tr>
                        <th>Total</th>
                        <th>{{ charges }}€</th>
                    </tr>
                </table>
            </div>

            <div>
                <h1>Impots</h1>
                <table border=\"1\" cellpadding=\"10\" cellspacing=\"1\" width=\"100%\">
                    <tr>
                        <th></th>
                        <th>Régime Micro BIC</th>
                        <th>Régime Réel</th>
                    </tr>
                    <tr>
                        <td>Recettes</td>
                        <td>{{ recettes }}€</td>
                        <td>{{ recettes }}€</td>
                    </tr>
                     <tr>
                        <td>Ammortissement du bien</td>
                        <td> - </td>
                        <td>{{ ammortissement_bien }}€</td>
                    </tr>
                    <tr>
                        <td>Ammortissement des meubles</td>
                        <td> - </td>
                        <td>{{ ammortissement_meubles }}€</td>
                    </tr>
                    <tr>
                        <td>Intérêt d'emprunt</td>
                        <td> - </td>
                        <td>{{ interet_emprunt }}€</td>
                    </tr>
                    <tr>
                        <td>Autres charges</td>
                        <td> - </td>
                        <td>{{ charges_imposables }}€</td>
                    </tr>
                    <tr>
                        <td>Abattement 50%</td>
                        <td>{{ abattement }}€</td>
                        <td> - </td>
                    </tr>
                    <tr>
                        <td>Total des charges</td>
                        <td>{{ total_charges_bic }}€</td>
                        <td>{{ total_charges_reel }}€</td>
                    </tr>
                    <tr>
                        <td>Résultats</td>
                        <td>{{ resultat_bic }}€</td>
                        <td>{{ resultat_reel }}€</td>
                    </tr>
                    <tr>
                        <th>Impôts + CSG</th>
                        <th>{{ impot_bic }}€</th>
                        <th>{{ impot_reel }}€</th>
                    </tr>
                </table>
            </div>
        </div>
    </div>
{% endblock %}

{% block stylesheets %}
    <style>
        body { background: #F5F5F5; font: 18px/1.5 sans-serif; }
        h1, h2 { line-height: 1.2; margin: 0 0 .5em; }
        h1 { font-size: 36px; }
        h2 { font-size: 21px; margin-bottom: 1em; }
        p { margin: 0 0 1em 0; }
        a { color: #0000F0; }
        a:hover { text-decoration: none; }
        code { background: #F5F5F5; max-width: 100px; padding: 2px 6px; word-wrap: break-word; }
        #wrapper { background: #FFF; margin: 1em auto; max-width: 800px; width: 95%; }
        #container { padding: 2em; }
        #welcome, #status { margin-bottom: 2em; }
        #welcome h1 span { display: block; font-size: 75%; }
        #icon-status, #icon-book { float: left; height: 64px; margin-right: 1em; margin-top: -4px; width: 64px; }
        #icon-book { display: none; }

        @media (min-width: 768px) {
            #wrapper { width: 80%; margin: 2em auto; }
            #icon-book { display: inline-block; }
            #status a, #next a { display: block; }

            @-webkit-keyframes fade-in { 0% { opacity: 0; } 100% { opacity: 1; } }
            @keyframes fade-in { 0% { opacity: 0; } 100% { opacity: 1; } }
            .sf-toolbar { opacity: 0; -webkit-animation: fade-in 1s .2s forwards; animation: fade-in 1s .2s forwards;}
        }
    </style>
{% endblock %}
", "default/index.html.twig", "/var/www/html/Back/app/Resources/views/default/index.html.twig");
    }
}
