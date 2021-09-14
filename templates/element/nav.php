<?php
 
  $a_name = $this->request->getParam('action');

?>
<nav class="navbar navbar-expand-lg navbar-light ">

<div class="collapse navbar-collapse" id="navbarNav">
  <ul class="navbar-nav mx-auto">

  <li class=<?= $a_name == 'index' ? 'bg-warning' : '' ?>>
        <a class="nav-link" href=<?= $this->Url->build(['controller' => 'blogs', 'action' => 'index']); ?>>Home</a>
    </li>
    <li class=<?= $a_name == 'about' ? 'bg-warning' : '' ?>>
        <a class="nav-link" href=<?= $this->Url->build(['controller' => 'blogs', 'action' => 'about']); ?>>About</a>
    </li>
    <li class=<?= $a_name == 'contact' ? 'bg-warning' : '' ?>>
        <a class="nav-link" href=<?= $this->Url->build(['controller' => 'blogs', 'action' => 'contact']); ?>>Contact</a>
    </li>

  </ul>
</div>

</nav>