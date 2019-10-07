<?php if ($categoryType == 'side-bar' || $categoryType == 'both') { ?>
<aside class="side-bar">
  <h2 class="side-bar-menu-title">
    CATEGORIAS
  </h2>
  <nav>
    <h3 class="outline">
      Menu de categorias
    </h3>
    <ul class="side-bar-menu">
      <li class="side-bar-menu-item has-sub" title="#exemplo">
        <a title="Título de teste"><i class="fa fa-angle-right side-bar-menu-item-ico" aria-hidden="true"></i>Título de teste</a>
        <div id="exemplo" class="sub-menu">
          <ul class="sub-menu-list">
            <li class="sub-menu-list-item has-sub" title="#exemplo2">
              <a title="Título de teste"><i class="fa fa-angle-right side-bar-menu-item-ico" aria-hidden="true"></i>Título de teste</a>
              <div id="exemplo2" class="sub-menu">
                <ul class="sub-menu-list">
                  <li class="sub-menu-list-item">
                    <a href="categoria.php" title="Título de teste">Título de teste</a>
                  </li>
                  <li class="sub-menu-list-item">
                    <a href="categoria.php" title="Título de teste">Título de teste</a>
                  </li>
                  <li class="sub-menu-list-item">
                    <a href="categoria.php" title="Título de teste">Título de teste</a>
                  </li>
                  <li class="sub-menu-list-item">
                    <a href="categoria.php" title="Título de teste">Título de teste</a>
                  </li>
                </ul>
              </div>
            </li>
            <li class="sub-menu-list-item">
              <a href="categoria.php" title="Título de teste">Título de teste</a>
            </li>
            <li class="sub-menu-list-item">
              <a href="categoria.php" title="Título de teste">Título de teste</a>
            </li>
          </ul>
        </div>
      </li>
      <li class="side-bar-menu-item has-sub" title="#exemplo3">
        <a title="Título de teste"><i class="fa fa-angle-right side-bar-menu-item-ico" aria-hidden="true"></i>Título de teste 2</a>
        <div id="exemplo3" class="sub-menu">
          <ul class="sub-menu-list">
            <li class="sub-menu-list-item has-sub" title="#exemplo4">
              <a title="Título de teste"><i class="fa fa-angle-right side-bar-menu-item-ico" aria-hidden="true"></i>Título de teste</a>
              <div id="exemplo4" class="sub-menu">
                <ul class="sub-menu-list">
                  <li class="sub-menu-list-item">
                    <a href="categoria.php" title="Título de teste">Título de teste</a>
                  </li>
                  <li class="sub-menu-list-item">
                    <a href="categoria.php" title="Título de teste">Título de teste</a>
                  </li>
                  <li class="sub-menu-list-item">
                    <a href="categoria.php" title="Título de teste">Título de teste</a>
                  </li>
                  <li class="sub-menu-list-item">
                    <a href="categoria.php" title="Título de teste">Título de teste</a>
                  </li>
                </ul>
              </div>
            </li>
            <li class="sub-menu-list-item">
              <a href="categoria.php" title="Título de teste">Título de teste</a>
            </li>
            <li class="sub-menu-list-item">
              <a href="categoria.php" title="Título de teste">Título de teste</a>
            </li>
          </ul>
        </div>
      </li>
      <li class="side-bar-menu-item">
        <a href="categoria.php" title="Título de teste">Título de teste</a>
      </li>
      <li class="side-bar-menu-item">
        <a href="categoria.php" title="Título de teste">Título de teste</a>
      </li>
      <li class="side-bar-menu-item">
        <a href="categoria.php" title="Título de teste">Título de teste</a>
      </li>
      <li class="side-bar-menu-item">
        <a href="categoria.php" title="Título de teste">Título de teste</a>
      </li>
      <li class="side-bar-menu-item">
        <a href="categoria.php" title="Título de teste">Título de teste</a>
      </li>
    </ul>
  </nav>

  <figure onclick="opentab('#')" class="side-banner clearfix">
    <img src="http://via.placeholder.com/300x400?text=Banner Lateral" title="Banner Lateral" alt="Banner Lateral"/>
  </figure>

</aside>
<?php }; ?>