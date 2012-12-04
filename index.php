<?php
$lang = substr($_SERVER["HTTP_ACCEPT_LANGUAGE"], 0, 2);
if ($lang == "pt") {
  include('index.br.html');
} else {
  include('index.en.html');
}
?>
