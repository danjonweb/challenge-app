<?php
class Ajax extends AbstractController {

  public function search() {
    $model = new AppModel();
    $data = $model->ajaxSearch();
    $this->renderFragment("_search_results.twig", $data);
  }
  
  public function similar() {
    $model = new AppModel();
    $data = $model->ajaxGetSimilar();
    $this->renderFragment("_similar_results.twig", $data);
  }
  
  public function count() {
    $model = new AppModel();
    $data = $model->ajaxGetCount();
    header('Content-Type: application/json');
    echo json_encode([
      "count" => $data
    ]);
  }
  
}
?>