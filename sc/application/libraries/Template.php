<?php
/**
 *
 * @author		Alex
 */

// Little class to operate custom templates/views

class Template {
    private $ci;
    private $template_name;
    
    public function __construct () {
        $this->ci =& get_instance();
    }

    public function load($tpl_view, $body_view = null, $data = null) {
        $this->template_name = $tpl_view;
        $data['body'] = '';

        if (!is_null($body_view)) {
            $body_filespec = APPPATH . 'views/' . $body_view . '.php';
            if (file_exists($body_filespec)) {
                $view_path = "views/{$body_view}";
                $data['body'] = $this->ci->load->view($body_view, $data, TRUE);
            }
        }

        $data['css'] = $this->css();
        $data['js'] = $this->js();
        $this->ci->load->view('templates/layout', $data);
    }

    private function css () {
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

    private function js () {
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