<ul class="sidebar navbar-nav">
        <li class="nav-item">
          <a class="nav-link" href="<?php echo e(route('admin.home')); ?>">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span>
          </a>
        </li>
        <?php if(Auth::User()->akses == 'admin'): ?>
        <li class="nav-item">
          <a class="nav-link" href="<?php echo e(route('admin.user')); ?>">
            <i class="fas fa-fw fa-users"></i>
            <span>User</span>
          </a>
        </li>
        <?php endif; ?>
  </ul>














