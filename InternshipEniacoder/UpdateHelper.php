<?php
   class UpdateHelper
   {
       private $score;

       public function __construct()
       {
           if(isset($_GET['newscore']))
             $this->score = $_GET['newscore'];
       }

       public function getScore()
       {
           if (!$this->score)
              return '';
           else
              return $this->score;  
       }

   }
?>   