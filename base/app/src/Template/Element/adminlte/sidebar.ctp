
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
      <p>Gilmar Pimenta</p>
      <!-- Status -->
      <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
    </div>
  </div>

  <!-- search form (Optional) -->
  <form action="#" method="get" class="sidebar-form">
    <div class="input-group">
      <input type="text" name="q" class="form-control" placeholder="Pesquisar...">
          <span class="input-group-btn">
            <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
            </button>
          </span>
    </div>
  </form>
  <!-- /.search form -->

  <!-- Sidebar Menu -->
  <ul class="sidebar-menu">
    <li class="header">SIGNUS ADMIN</li>
    <!-- Optionally, you can add icons to the links -->
    <li class="active"><a href="#"><i class="fa fa-link"></i> <span>Link</span></a></li>
    <li><a href="/"><i class="fa fa-link"></i> <span>Signus.site</span></a></li>
    <li class="treeview">
      <a href="/admin"><i class="fa fa-link"></i> <span>Signus.AdministraÇão</span> <i class="fa fa-angle-left pull-right"></i></a>
      <ul class="treeview-menu">
        <li><a href="/admin/pages">paginas</a></li>    
        <li><a href="/admin/posts">posts</a></li>
        <li><a href="/admin/images">imagens</a></li>
        <li><a href="/admin/messages">mensagens</a></li>
        <li><a href="/admin/comments">comentarios</a></li>
      </ul>
    </li>
  </ul>
  <!-- /.sidebar-menu -->
</section>
<!-- /.sidebar -->
