<?php
/**
 *
 * @author		Alex
 */

// class to operate custom templates/views

class Template {
    private $ci;
    private $template_name;
  	// constructor that instantiates CodeIgniter instance  
    public function __construct () {
        $this->ci =& get_instance();
    }

	/**
 	* Function load  is meant to load  templates and attach css and js if needed to the specific template
	*
 	*/
	
    public function load($tpl_view, $body_view = null, $data = null) {
        $this->template_name = $tpl_view;
		// building data array to pass into view
        $data['body'] = '';

        if (!is_null($body_view)) {
            $body_filespec = APPPATH . 'views/' . $body_view . '.php';
            if (file_exists($body_filespec)) {
                $view_path = "views/{$body_view}";
                $data['body'] = $this->ci->load->view($body_view, $data, TRUE);
            }
        }
		// here we are attaching js and css
        $data['css'] = $this->css();
        $data['js'] = $this->js();
		// let CodeIgniter to load template
        $this->ci->load->view('templates/layout', $data);
    }

	/**
 	* private Function css is meant to assit load function to attach css to the specific template
	*
 	*/
    private function css() {
        $file_spec = APPPATH . "views/templates/css_{$this->template_name}.php";
        $result = '';

        if (file_exists($file_spec)) {
            ob_start();
            include($file_spec);
            $result = ob_get_contents();
            ob_end_clean();
        }

        return $result;
    }

	/**
 	* private Function js is meant to assit load function to attach js to the specific template
	*
 	*/
    private function js() {
        $file_spec = APPPATH . "views/templates/js_{$this->template_name}.php";
        $result = '';

        if (file_exists($file_spec)) {
            ob_start();
            include($file_spec);
            $result = ob_get_contents();
            ob_end_clean();
        }

        return $result;
    }
}