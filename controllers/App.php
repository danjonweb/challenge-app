<?php
class App extends AbstractController {
  
  // Default action, called by executeAction in parent
  public function index() {
    // Create the model, call this action, and insert the view with the model
    $model = new AppModel();
    $data = $model->index($this);
    $this->insertView($data);
  }
  
}
?>