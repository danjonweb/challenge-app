<?php

abstract class AbstractController {
  protected $request;
  protected $action;
  protected $id;
  
  protected $twig = null;
  
  public function __construct($action, $request, $id=null) {  
    $this->action = $action;
    $this->request = $request;
    $this->id = $id;
    
    $loader = new \Twig\Loader\FilesystemLoader('views');
    $this->twig = new \Twig\Environment($loader, [
      'cache' => 'cache/',
      'debug' => true
    ]);
    
  }
  
  public function executeAction() {
    return $this->{$this->action}();
  }
  
  protected function insertView($data) {
    $view = get_class($this) . '.' . $this->action . '.twig';
    $this->twig->display($view, $data);
  }
  
  protected function renderFragment($fragment, $data) {
    $this->twig->display($fragment, $data);
  }
  
}
?>