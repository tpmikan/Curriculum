<?php
class ABC{
  
  public function gradeCalculation($day){
  
    $today = date("Ymd");
    $birthday = date($day);
    $base_day = date('Y',strtotime($birthday)) . date('md',strtotime('0000-04-02'));
    $date = $base_day - $birthday; 
    $criteria = 0;
    
    if ($date > 0){
      $criteria = date('Y',strtotime($birthday)) . date('md',strtotime('0000-04-01'));
    } elseif ($date <= 0) {
      $criteria = date('Y',strtotime($birthday. "+1 year")) . date('md',strtotime('0000-04-01'));
    }
    
    $base_year = number_format(floor(($today - $criteria)/10000));
    
    if ($base_year <= 5){
      $base_year = 5;
    } elseif ($base_year >= 18){
      $base_year = 18;
    } 
    
    $test = $today - $criteria;
    
    return $base_year;
  }
  
  
}
  echo gradeCalculation(20200307);

?>