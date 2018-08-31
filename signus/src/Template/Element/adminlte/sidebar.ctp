
<!-- sidebar: style can be found in sidebar.less -->
<section class="sidebar">

  <!-- Sidebar user panel (optional) -->
  <div class="user-panel">
    <div class="pull-left image">
      <?php
            echo $this->Html->image(
                'TwitterBootstrap.user2-160x160.jpg',
                ['class'=>'img-circle',  "alt"=>"User Image"]
            );
        ?>
    </div>
    <div class="pull-left info">
      <p>Alexander Pierce</p>
      <!-- Status -->
      <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
    </div>
  </div>

  <!-- search form (Optional) -->
  <form action="#" method="get" class="sidebar-form">
    <div class="input-group">
      <input type="text" name="q" class="form-control" placeholder="Search...">
          <span class="input-group-btn">
            <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
            </button>
          </span>
    </div>
  </form>
  <!-- /.search form -->

  <!-- Sidebar Menu -->
  <ul class="sidebar-menu">
    <li class="header">HEADER</li>
    <!-- Optionally, you can add icons to the links -->
    <li class="active"><a href="/"><i class="fa fa-link"></i> <span>Paginas Estaticas</span></a></li>
    <li><a href="/access/users"><i class="fa fa-link"></i> <span>Access</span></a></li>
    <li class="treeview">
      <a href="#"><i class="fa fa-link"></i> <span>Administração</span> <i class="fa fa-angle-left pull-right"></i></a>
      <ul class="treeview-menu">
        <li class="active"><a href="/pages"><i class="fa fa-link"></i> <span>Paginas</span></a></li>
        <li><a href="/articles"><i class="fa fa-link"></i> <span>Artigos</span></a></li>
        <li><a href="/comments"><i class="fa fa-link"></i> <span>Comentarios</span></a></li>
        <li><a href="/access/groups"><i class="fa fa-link"></i> <span>Grupos</span></a></li>
        <li><a href="/images"><i class="fa fa-link"></i> <span>Imagens</span></a></li>
        <li><a href="/messages"><i class="fa fa-link"></i> <span>Mensagens</span></a></li>
        <li><a href="/plans"><i class="fa fa-link"></i> <span>Planos</span></a></li>
        <li><a href="/access/users"><i class="fa fa-link"></i> <span>Usuarios</span></a></li>
      </ul>
    </li>
  </ul>
  <!-- /.sidebar-menu -->
</section>
<!-- /.sidebar -->
