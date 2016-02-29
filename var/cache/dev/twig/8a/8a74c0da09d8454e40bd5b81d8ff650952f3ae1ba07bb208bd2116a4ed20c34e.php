<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_0a16629f25521703f316af498cf562816b115516a2e2a7746ee72f4b850de7f1 extends Twig_Template
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
        $__internal_b550d6d0127bf645f5f287e03e6956fdf32db89664c3f60e345e9e027913c313 = $this->env->getExtension("native_profiler");
        $__internal_b550d6d0127bf645f5f287e03e6956fdf32db89664c3f60e345e9e027913c313->enter($__internal_b550d6d0127bf645f5f287e03e6956fdf32db89664c3f60e345e9e027913c313_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b550d6d0127bf645f5f287e03e6956fdf32db89664c3f60e345e9e027913c313->leave($__internal_b550d6d0127bf645f5f287e03e6956fdf32db89664c3f60e345e9e027913c313_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_bf2b31dc93fd0b6dc73ca24be8c45ee262924c400a35c07be69b25a2b9763c91 = $this->env->getExtension("native_profiler");
        $__internal_bf2b31dc93fd0b6dc73ca24be8c45ee262924c400a35c07be69b25a2b9763c91->enter($__internal_bf2b31dc93fd0b6dc73ca24be8c45ee262924c400a35c07be69b25a2b9763c91_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_bf2b31dc93fd0b6dc73ca24be8c45ee262924c400a35c07be69b25a2b9763c91->leave($__internal_bf2b31dc93fd0b6dc73ca24be8c45ee262924c400a35c07be69b25a2b9763c91_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_8c2fa32b11de5050805e15105be193486b1fc28aed503a1a39051bf8f35df353 = $this->env->getExtension("native_profiler");
        $__internal_8c2fa32b11de5050805e15105be193486b1fc28aed503a1a39051bf8f35df353->enter($__internal_8c2fa32b11de5050805e15105be193486b1fc28aed503a1a39051bf8f35df353_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_8c2fa32b11de5050805e15105be193486b1fc28aed503a1a39051bf8f35df353->leave($__internal_8c2fa32b11de5050805e15105be193486b1fc28aed503a1a39051bf8f35df353_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_e9175243727fa012a6563497981a45c459329d7244b2e4608986194850a06f77 = $this->env->getExtension("native_profiler");
        $__internal_e9175243727fa012a6563497981a45c459329d7244b2e4608986194850a06f77->enter($__internal_e9175243727fa012a6563497981a45c459329d7244b2e4608986194850a06f77_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_e9175243727fa012a6563497981a45c459329d7244b2e4608986194850a06f77->leave($__internal_e9175243727fa012a6563497981a45c459329d7244b2e4608986194850a06f77_prof);

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
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     <link href="{{ absolute_url(asset('bundles/framework/css/exception.css')) }}" rel="stylesheet" type="text/css" media="all" />*/
/* {% endblock %}*/
/* */
/* {% block title %}*/
/*     {{ exception.message }} ({{ status_code }} {{ status_text }})*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     {% include '@Twig/Exception/exception.html.twig' %}*/
/* {% endblock %}*/
/* */
