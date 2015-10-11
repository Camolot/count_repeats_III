<?php

    class Count
    {
      function contains($search_word, $sentence)
      {
          return strpos($sentence, $search_word) !== false;
      }
      // return ucfirst(1);
    }
?>
