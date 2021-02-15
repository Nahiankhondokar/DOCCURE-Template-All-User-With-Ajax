<!-- Sidebar -->
<div class="sidebar" id="sidebar">
    <div class="sidebar-inner slimscroll">
        <div id="sidebar-menu" class="sidebar-menu">
            <ul>
                <li class="menu-title"> 
                    <span>Main</span>
                </li>
                <li class="active"> 
                    <a href="{{ route('home') }}"><i class="fe fe-home"></i> <span>Dashboard</span></a>
                </li>
                
                <li> 
                    <a href="{{ route('role.index') }}"><i class="fe fe-user"></i> <span>User Role</span></a>
                </li>
               
               
                <li class="submenu">
                    <a href="#"><i class="fe fe-document"></i> <span> Team</span> <span class="menu-arrow"></span></a>
                    <ul style="display: none;">
                        <li><a href="{{ route('users.index') }}">Students</a></li>
                        <li><a href="{{ route('admin.index') }}">Admins</a></li>
                    </ul>
                </li>

                <li> 
                    <a href="settings.html"><i class="fe fe-vector"></i> <span>Settings</span></a>
                </li>
            </ul>
        </div>
    </div>
</div>
<!-- /Sidebar -->