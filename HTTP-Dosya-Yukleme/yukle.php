<?php
if(move_uploaded_file($_FILES['dosya']['tmp_name'], $_FILES['dosya']['name']))
  {
    echo "Dosya başarıyla yüklendi.\n";
  } else {
    echo "Dosya yükleme başarısız!\n";
  }

 ?>
