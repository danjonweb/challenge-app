<?php
class AppModel extends AbstractModel {
  
  public function index($app) {
    // No data to pass to template
    return [];
  }
  
  public function ajaxSearch() {
    $post = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
    
    if (isset($post['q']) && strlen($post['q']) > 0) {
      $q = $post['q'];
      $this->db->query("SELECT record_id, first_name, last_name, gender, TIMESTAMPDIFF(YEAR, birthday, CURDATE()) AS age, favorite_color, favorite_movie FROM students WHERE record_id LIKE CONCAT(?, '%') OR first_name LIKE CONCAT('%', ?, '%') OR last_name LIKE CONCAT('%', ?, '%') ORDER BY lower(last_name), lower(first_name) ASC");
      $this->db->bind('sss', [$q, $q, $q]);
      $results = $this->db->getResults();
      for ($i = 0; $i < count($results); $i++) {
        $results[$i]['record_id'] = $this->highlight($results[$i]['record_id'], $q);
        $results[$i]['first_name'] = $this->highlight($results[$i]['first_name'], $q);
        $results[$i]['last_name'] = $this->highlight($results[$i]['last_name'], $q);
        $results[$i]['background_color'] = COLORS[$results[$i]['favorite_color']];
      }
      return ['students' => $results];
    } else {
      return [];
    }
  }
  
  public function ajaxGetCount() {
    $results = $this->querySimilar();
    if ($results !== null) {
      return count($results);
    } else {
      return 0;
    }
  }
  
  public function ajaxGetSimilar() {
    $results = $this->querySimilar();
    if ($results !== null) {
      for ($i = 0; $i < count($results); $i++) {
        $results[$i]['background_color'] = COLORS[$results[$i]['favorite_color']];
      }
      return ['students' => $results];
    } else {
      return [];
    }
  }
  
  private function querySimilar($rid = null) {
    $post = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
    $results = null;
    if ($rid != null || (isset($post['rid']) && strlen($post['rid']) > 0)) {
      $record_id = $rid == null ? $post['rid'] : $rid;
      $this->db->query("SELECT * FROM (SELECT record_id, first_name, last_name, gender, TIMESTAMPDIFF(YEAR, birthday, CURDATE()) AS age, favorite_color, favorite_movie FROM students) Q1 WHERE Q1.age < (SELECT TIMESTAMPDIFF(YEAR, birthday, CURDATE()) FROM students WHERE record_id = ?) AND (Q1.favorite_color = (SELECT favorite_color FROM students WHERE record_id = ?) OR Q1.favorite_movie = (SELECT favorite_movie FROM students WHERE record_id = ?)) ORDER BY lower(last_name), lower(first_name) ASC;");
      $this->db->bind('sss', [$record_id, $record_id, $record_id]);
      $results = $this->db->getResults();
    }
    return $results;
  }
  
  private function highlight($haystack, $needle) {
    return preg_replace("/".preg_quote($needle)."/ui", '<span class="text-highlight">$0</span>', $haystack);
  }
  
}

?>