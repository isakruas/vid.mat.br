<?php
/**
 * MathJax
 * 
 * @package MathJax
 * @author mutoo
 * @version 1.0.0
 * @link http://blog.mutoo.im/mathjax-plugin.html
 */
class MathJax implements Typecho_Plugin_Interface
{
    /**
     * 激活插件方法,如果激活失败,直接抛出异常
     * 
     * @access public
     * @return void
     * @throws Typecho_Plugin_Exception
     */
    public static function activate()
    {
        Typecho_Plugin::factory('Widget_Archive')->footer = array('MathJax', 'footer');
    }
    
    /**
     * 禁用插件方法,如果禁用失败,直接抛出异常
     * 
     * @static
     * @access public
     * @return void
     * @throws Typecho_Plugin_Exception
     */
    public static function deactivate()
    {}
    
    /**
     * 获取插件配置面板
     * 
     * @access public
     * @param Typecho_Widget_Helper_Form $form 配置面板
     * @return void
     */
    public static function config(Typecho_Widget_Helper_Form $form){}
    
    /**
     * 个人用户的配置面板
     * 
     * @access public
     * @param Typecho_Widget_Helper_Form $form
     * @return void
     */
    public static function personalConfig(Typecho_Widget_Helper_Form $form){}
    
    /**
     * 输出尾部js
     * 
     * @access public
     * @param unknown $footer
     * @return unknown
     */
    public static function footer() {
        echo '<script type="text/x-mathjax-config">MathJax.Hub.Config({tex2jax: {inlineMath: [[\'$\',\'$\'], [\'\\\\(\',\'\\\\)\']]}});</script><script type="text/javascript" src="http://cdn.mathjax.org/mathjax/latest/MathJax.js?config=TeX-AMS-MML_HTMLorMML"></script><script type="text/javascript" >function btn(id) { if(document.getElementById(id+"_r").style.display == "block"){ document.getElementById(id+"_r").style.display = "none"; document.getElementById(id).innerHTML = "Ver resolução"; } else { document.getElementById(id+"_r").style.display = "block"; document.getElementById(id).innerHTML = "Ocultar resolução"; } } function btn_v(id) { if(document.getElementById(id+"_r").style.display == "block"){ document.getElementById(id+"_r").style.display = "none"; document.getElementById(id).innerHTML = "Ver vídeo de exemplo"; } else { document.getElementById(id+"_r").style.display = "block"; document.getElementById(id).innerHTML = "Ocultar vídeo de exemplo"; } } function prt(url) { window.location.href = url; } function btn2(id) { switch (id.substr(0, 1)) { case "r": if(document.getElementById(id+"_").style.display == "block"){ document.getElementById(id+"_").style.display = "none"; document.getElementById(id).innerHTML = "SOLUÇÃO"; } else { document.getElementById(id+"_").style.display = "block"; document.getElementById(id).innerHTML = "OCULTAR SOLUÇÃO"; } break; case "d": if(document.getElementById(id+"_").style.display == "block"){ document.getElementById(id+"_").style.display = "none"; document.getElementById(id).innerHTML = "DICA"; } else { document.getElementById(id+"_").style.display = "block"; document.getElementById(id).innerHTML = "OCULTAR DICA"; } break; case "v": if(document.getElementById(id+"_").style.display == "block"){ document.getElementById(id+"_").style.display = "none"; document.getElementById(id).innerHTML = "VIDEOAULA"; } else { document.getElementById(id+"_").style.display = "block"; document.getElementById(id).innerHTML = "OCULTAR VIDEOAULA"; } break; } }</script>';
    }
}
 