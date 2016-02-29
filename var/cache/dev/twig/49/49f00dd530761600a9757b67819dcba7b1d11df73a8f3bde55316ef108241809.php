<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_730bd54c72d0f008a52430b787001293fc2ed64099dd7fc29a4fb58d1b6bad78 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_19c8085788b8996756ccb3b435892a854a50f0613f65e3e490b8ddb85cd954de = $this->env->getExtension("native_profiler");
        $__internal_19c8085788b8996756ccb3b435892a854a50f0613f65e3e490b8ddb85cd954de->enter($__internal_19c8085788b8996756ccb3b435892a854a50f0613f65e3e490b8ddb85cd954de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_19c8085788b8996756ccb3b435892a854a50f0613f65e3e490b8ddb85cd954de->leave($__internal_19c8085788b8996756ccb3b435892a854a50f0613f65e3e490b8ddb85cd954de_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_2edce049bf9bd1269307b4c84abc5f9258758475183b0e6c37fa71442e77be91 = $this->env->getExtension("native_profiler");
        $__internal_2edce049bf9bd1269307b4c84abc5f9258758475183b0e6c37fa71442e77be91->enter($__internal_2edce049bf9bd1269307b4c84abc5f9258758475183b0e6c37fa71442e77be91_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_2edce049bf9bd1269307b4c84abc5f9258758475183b0e6c37fa71442e77be91->leave($__internal_2edce049bf9bd1269307b4c84abc5f9258758475183b0e6c37fa71442e77be91_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_066eb2034ea06931e903fb557037a05ca9db019780f862d476bb6606551cfafc = $this->env->getExtension("native_profiler");
        $__internal_066eb2034ea06931e903fb557037a05ca9db019780f862d476bb6606551cfafc->enter($__internal_066eb2034ea06931e903fb557037a05ca9db019780f862d476bb6606551cfafc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_066eb2034ea06931e903fb557037a05ca9db019780f862d476bb6606551cfafc->leave($__internal_066eb2034ea06931e903fb557037a05ca9db019780f862d476bb6606551cfafc_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_62cd5902eae14b17501e27dbc0e0eb44c8e6e23ec8d7d09ab01b24c7547ce13d = $this->env->getExtension("native_profiler");
        $__internal_62cd5902eae14b17501e27dbc0e0eb44c8e6e23ec8d7d09ab01b24c7547ce13d->enter($__internal_62cd5902eae14b17501e27dbc0e0eb44c8e6e23ec8d7d09ab01b24c7547ce13d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_62cd5902eae14b17501e27dbc0e0eb44c8e6e23ec8d7d09ab01b24c7547ce13d->leave($__internal_62cd5902eae14b17501e27dbc0e0eb44c8e6e23ec8d7d09ab01b24c7547ce13d_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block toolbar %}{% endblock %}*/
/* */
/* {% block menu %}*/
/* <span class="label">*/
/*     <span class="icon">{{ include('@WebProfiler/Icon/router.svg') }}</span>*/
/*     <strong>Routing</strong>*/
/* </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     {{ render(path('_profiler_router', { token: token })) }}*/
/* {% endblock %}*/
/* */
