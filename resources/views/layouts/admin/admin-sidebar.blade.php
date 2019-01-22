<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <!-- Sidebar user panel -->
        <div class="user-panel">
        <div class="pull-left image">
            <img src="admin-assets/dist/img/avatar2.png" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
            <p>{{ Auth::user()->name }}</p>
            <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
        </div>
        
        <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class="sidebar-menu" data-widget="tree">
            <li class="header">MAIN NAVIGATION</li>
            <li>
                <a href="{{ route('dashboard') }}">
                    <i class="fa fa-dashboard"></i><span>Dashboard</span>
                </a>
            </li>
             <li class="treeview">
                <a href="#">
                    <i class="fa fa-book"></i>
                    <span>Manager Post</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                <li><a href="{{ route('post.index') }}"><i class="fa fa-circle-o"></i>All Posts</a></li>
                <li><a href="{{ route('post.add') }}"><i class="fa fa-circle-o"></i> New Post</a></li>
                <li><a href="{{ route('post.category') }}"><i class="fa fa-circle-o"></i>Category</a></li>
                <li><a href="{{ route('post.category.edit', ['id' => -1]) }}"><i class="fa fa-circle-o"></i>New Category</a></li>
                </ul>
                <ul class="treeview-menu"></ul>
            </li>
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-cubes"></i>
                    <span>Manager TEST</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                <li><a href="{{ route('test.index') }}"><i class="fa fa-circle-o"></i>Test</a></li>
                <li><a href="{{ route('part1.index') }}"><i class="fa fa-circle-o"></i>Part1: Photo</a></li>
                <li><a href="{{ route('part2.index') }}"><i class="fa fa-circle-o"></i>Part2: Qu-Reponse</a></li>
                <li><a href="{{ route('part3.index') }}"><i class="fa fa-circle-o"></i>Part3: Short talk</a></li>
                <li><a href="{{ route('part4.index') }}"><i class="fa fa-circle-o"></i>Part4: Short talk</a></li>
                <li><a href="{{ route('part5.index') }}"><i class="fa fa-circle-o"></i>Part 5: Incomplete sentence</a></li>
                <li><a href="{{ route('part6.index') }}"><i class="fa fa-circle-o"></i>Part6: Text completion</a></li>
                <li><a href="{{ route('part7.index') }}"><i class="fa fa-circle-o"></i>Part7: Reading comprehen</a></li>
                </ul>
            </li>
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-fw fa-user-secret"></i>
                    <span>Manager User</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                <li><a href="{{ route('user.index') }}"><i class="fa fa-circle-o"></i>All Users</a></li>
                <li><a href="{{ route('user.account') }}"><i class="fa fa-circle-o"></i>Account</a></li>
                </ul>
                <ul class="treeview-menu"></ul>
            </li>
           
        </ul>
    </section>
    <!-- /.sidebar -->
    </aside>