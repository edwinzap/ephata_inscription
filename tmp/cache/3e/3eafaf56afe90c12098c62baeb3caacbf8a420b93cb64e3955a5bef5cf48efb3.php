<?php

/* pages/home.twig */
class __TwigTemplate_3be7f152df1a4ede01a44b39d4ddffdc1366cf664a54a6a64fd9f0480d4db28a extends Twig_Template
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
        // line 1
        echo "Salut les gens !
";
    }

    public function getTemplateName()
    {
        return "pages/home.twig";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "pages/home.twig", "C:\\xampp\\htdocs\\ephata_inscription\\app\\views\\pages\\home.twig");
    }
}
