<?php

class App
{
  protected $controller = 'Home';
  protected $method = 'index';
  protected $param = [];
  public function __construct()
  {
    $url = $this->parseURL();
    
    // controller
    if(file_exists('../app/controllers/' . $url[0] . '.php'))
    {
      $this->controller = $url[0]; // mengambil controller dari url
      unset($url[0]); // menghilangkan controller dari url untuk mengambil parameter (param)
    }
    require_once '../app/controllers/' . $this->controller . '.php';
    $this->controller = new $this->controller;

    // method
    if(isset($url[1]))
    {
      if (method_exists($this->controller, $url[1]))
      {
        $this->method = $url[1];
        unset($url[1]);
      }
    }

    // param
    if(!empty($url))
    {
      $this->param = array_values($url);
    }
    
    // menjalankan controller, method dan mengirimkan parameter jika ada
    call_user_func_array([$this->controller, $this->method], $this->param);
  }

  public function parseURL(){
    if(isset($_GET['url']))
    {
      $url = rtrim($_GET['url'], '/');
      $url = filter_var($url, FILTER_SANITIZE_URL);
      $url = explode('/', $url); 
      return $url;
    }
    else
    {
			$url[0] = $this->controller;
			return $url;
		}
  }
}