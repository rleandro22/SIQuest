<?php

/* @WebProfiler/Collector/ajax.html.twig */
class __TwigTemplate_b1d68c0682b1b309e5c564ade24441f2b52885e9fb8b9bb04aa589aef4a00c09 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/ajax.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
<<<<<<< HEAD:app/cache/dev/twig/b/1/b1d68c0682b1b309e5c564ade24441f2b52885e9fb8b9bb04aa589aef4a00c09.php
        $__internal_ae5e74234e0b9e0b160a1e5ced0fd6687919702557530dd24d24e71ae4def5da = $this->env->getExtension("native_profiler");
        $__internal_ae5e74234e0b9e0b160a1e5ced0fd6687919702557530dd24d24e71ae4def5da->enter($__internal_ae5e74234e0b9e0b160a1e5ced0fd6687919702557530dd24d24e71ae4def5da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ae5e74234e0b9e0b160a1e5ced0fd6687919702557530dd24d24e71ae4def5da->leave($__internal_ae5e74234e0b9e0b160a1e5ced0fd6687919702557530dd24d24e71ae4def5da_prof);
=======
        $__internal_3adf94f5fbcbd6f278ffbfc99a478c3e31cd40e411d7c1d6c0acd03c678dbddf = $this->env->getExtension("native_profiler");
        $__internal_3adf94f5fbcbd6f278ffbfc99a478c3e31cd40e411d7c1d6c0acd03c678dbddf->enter($__internal_3adf94f5fbcbd6f278ffbfc99a478c3e31cd40e411d7c1d6c0acd03c678dbddf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3adf94f5fbcbd6f278ffbfc99a478c3e31cd40e411d7c1d6c0acd03c678dbddf->leave($__internal_3adf94f5fbcbd6f278ffbfc99a478c3e31cd40e411d7c1d6c0acd03c678dbddf_prof);
>>>>>>> d671686f5ac93e485bbb1702dd91ca1ea7fd73dc:app/cache/dev/twig/7/7/7711229b558562518249f4b799fbff0409918c22c638a9387a1b05127173d441.php

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
<<<<<<< HEAD:app/cache/dev/twig/b/1/b1d68c0682b1b309e5c564ade24441f2b52885e9fb8b9bb04aa589aef4a00c09.php
        $__internal_1dfa860bb757044ec793ea2e55c05a6abda423719054cbe2c4c497e50040a68f = $this->env->getExtension("native_profiler");
        $__internal_1dfa860bb757044ec793ea2e55c05a6abda423719054cbe2c4c497e50040a68f->enter($__internal_1dfa860bb757044ec793ea2e55c05a6abda423719054cbe2c4c497e50040a68f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));
=======
        $__internal_1641ecd5acd0a210f7cb721e45231fe2a05d549ce5ac3283effc374870f94420 = $this->env->getExtension("native_profiler");
        $__internal_1641ecd5acd0a210f7cb721e45231fe2a05d549ce5ac3283effc374870f94420->enter($__internal_1641ecd5acd0a210f7cb721e45231fe2a05d549ce5ac3283effc374870f94420_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));
>>>>>>> d671686f5ac93e485bbb1702dd91ca1ea7fd73dc:app/cache/dev/twig/7/7/7711229b558562518249f4b799fbff0409918c22c638a9387a1b05127173d441.php

        // line 4
        echo "    ";
        $context["icon"] = ('' === $tmp = "        <span>
            <svg width=\"24\" height=\"28\" xmlns=\"http://www.w3.org/2000/svg\" version=\"1.1\" x=\"0px\" y=\"0px\" viewBox=\"0 0 24 28\" enable-background=\"new 0 0 24 28\" xml:space=\"preserve\"><polygon fill=\"#3F3F3F\" points=\"18.4,3.8 12.8,9.4 16.3,9.4 16.3,21.1 14.1,21.1 9.9,25.3 16.3,25.3 20.5,25.3 20.5,21.1 20.5,9.4 23.9,9.4\"/><polygon fill=\"#3F3F3F\" points=\"5.6,25.3 11.2,19.7 7.7,19.7 7.7,8 9.9,8 14.1,3.8 7.7,3.8 3.5,3.8 3.5,8 3.5,19.7 0.1,19.7\"/></svg>
            <span class=\"sf-toolbar-ajax-requests\">0</span>
        </span>
    ") ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 10
        echo "    ";
        $context["text"] = ('' === $tmp = "        <div class=\"sf-toolbar-info-piece\">
            <b>AJAX requests</b>
            <span class=\"sf-toolbar-ajax-info\"></span>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    ") ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 29
        echo "    ";
        $this->loadTemplate("@WebProfiler/Profiler/toolbar_item.html.twig", "@WebProfiler/Collector/ajax.html.twig", 29)->display(array_merge($context, array("link" => false)));
        
<<<<<<< HEAD:app/cache/dev/twig/b/1/b1d68c0682b1b309e5c564ade24441f2b52885e9fb8b9bb04aa589aef4a00c09.php
        $__internal_1dfa860bb757044ec793ea2e55c05a6abda423719054cbe2c4c497e50040a68f->leave($__internal_1dfa860bb757044ec793ea2e55c05a6abda423719054cbe2c4c497e50040a68f_prof);
=======
        $__internal_1641ecd5acd0a210f7cb721e45231fe2a05d549ce5ac3283effc374870f94420->leave($__internal_1641ecd5acd0a210f7cb721e45231fe2a05d549ce5ac3283effc374870f94420_prof);
>>>>>>> d671686f5ac93e485bbb1702dd91ca1ea7fd73dc:app/cache/dev/twig/7/7/7711229b558562518249f4b799fbff0409918c22c638a9387a1b05127173d441.php

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/ajax.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  67 => 29,  47 => 10,  40 => 4,  34 => 3,  11 => 1,);
    }
}
