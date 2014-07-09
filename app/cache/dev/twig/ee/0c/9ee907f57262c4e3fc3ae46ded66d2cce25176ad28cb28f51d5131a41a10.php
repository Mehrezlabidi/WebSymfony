<?php

/* MyAppEspritBundle:Menu:send.html.twig */
class __TwigTemplate_ee0c9ee907f57262c4e3fc3ae46ded66d2cce25176ad28cb28f51d5131a41a10 extends Twig_Template
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
        // line 2
        echo "
";
        // line 4
        echo "  





<link rel=\"stylesheet\" type=\"text/css\" media=\"screen\" href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/myappesprit/css/login-box.css"), "html", null, true);
        echo "\"/> 




<div style=\"padding: 100px 0 0 450px;\">
    <div id=\"login-box\">
        <H2>Menu</H2>

<div style=\"padding: 2px 0 0 40px;\">
        <form role=\"form\" method=\"post\" action='";
        // line 20
        echo $this->env->getExtension('routing')->getPath("my_app_esprit_menu");
        echo "'>
            <ul>
                  
                <div id=\"login-box-name\" style=\"margin-top:10px;\"><b>Position:</b>";
        // line 23
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "position"), 'widget');
        echo "  </div> 
   


            </br> </br> </br> </br> </br> </br>  

                   <div id=\"login-box-name\"><b>Title:</b>";
        // line 29
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "title"), 'widget');
        echo " </div> 
                       

            <input type=\"hidden\" name=\"name\" value=\"submit\">";
        // line 32
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "_token"), 'widget');
        echo "
                 


            </br> </br> </br>  </br> </br> </br> 
         &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  <button type=\"submit\"  value=\"Login\" class=\"action\">Login</button>
         &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <button type=\"reset\" class=\"\">Reset</button> 
       
            </ul>
            
        </form>
      </div>
    
    
    
    </div>
</div>


















<!--
<form role=\"form\" method=\"post\" action='";
        // line 68
        echo $this->env->getExtension('routing')->getPath("my_app_esprit_menu");
        echo "'>
        <ul>
        
        <li>
                <label for=\"Position\">Position:</label>
                 ";
        // line 73
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "position"), 'widget');
        echo "
        </li>
         <li>
                <label for=\"name\">Title:</label>
                 ";
        // line 77
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "title"), 'widget');
        echo "
        </li>
         
             <input type=\"hidden\" name=\"name\" value=\"submit\">
                 ";
        // line 81
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "_token"), 'widget');
        echo "
       
       
        
     
          
               <button type=\"submit\" class=\"action\">Submit</button>   
                 <button type=\"reset\" class=\"right\">Reset</button> 
                
         
          </ul>
</form>


-->
";
    }

    public function getTemplateName()
    {
        return "MyAppEspritBundle:Menu:send.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  125 => 81,  118 => 77,  111 => 73,  103 => 68,  64 => 32,  58 => 29,  49 => 23,  43 => 20,  30 => 10,  22 => 4,  19 => 2,);
    }
}
