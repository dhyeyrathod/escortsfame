<aside class="app-sidebar">
    <div class="app-sidebar__user">
        <img class="app-sidebar__user-avatar" src="https://s3.amazonaws.com/uifaces/faces/twitter/jsa/48.jpg" alt="User Image">
        <div>
            <p class="app-sidebar__user-name">John Doe</p>
            <p class="app-sidebar__user-designation">Frontend Developer</p>
        </div>
    </div>
    <ul class="app-menu">
        <li><a class="app-menu__item active" href="<?= base_url('Admin/Dashboard') ?>"><i class="app-menu__icon fa fa-dashboard"></i><span class="app-menu__label">Dashboard</span></a></li>
        <li class="treeview">
            <a class="app-menu__item" href="#" data-toggle="treeview"><i class="app-menu__icon fa fa-laptop"></i><span class="app-menu__label">Escorts Profile</span><i class="treeview-indicator fa fa-angle-right"></i></a>
            <ul class="treeview-menu">
                <li><a class="treeview-item" href="<?= base_url('Admin/Profile/add_new') ?>"><i class="icon fa fa-circle-o"></i> Add New Profile </a></li> 
                <li><a class="treeview-item" href="<?= base_url('Admin/Profile/profileList') ?>"><i class="icon fa fa-circle-o"></i>Profile List</a></li>
            </ul>
        </li>
        <li class="treeview">
            <a class="app-menu__item" href="#" data-toggle="treeview"><i class="app-menu__icon fa fa-laptop"></i><span class="app-menu__label">Banner</span><i class="treeview-indicator fa fa-angle-right"></i></a>
            <ul class="treeview-menu">
                <li><a class="treeview-item" href="<?= base_url('Admin/Banner/add_new_banner') ?>"><i class="icon fa fa-circle-o"></i>Add New Banner</a></li>
            </ul>
        </li>
    </ul>
    
</aside>