<!--- Sidemenu -->
<div id="sidebar-menu">
    <!-- Left Menu Start -->
    <ul class="metismenu list-unstyled" id="side-menu">
        <li class="menu-title">Dashboard</li>

        <li>
            <a href="javascript: void(0);" class="has-arrow">
                <i class="fas fa-exclamation-triangle"></i>
                <span> Users </span>
            </a>
            <ul class="sub-menu" aria-expanded="false">
                <li><a href="{{route("users.index")}}">View all</a></li>
                <li><a href="{{route("users.create")}}">Add New User</a></li>
            </ul>
        </li>

        <li>
            <a href="javascript: void(0);" class="has-arrow">
                <i class="fas fa-exclamation-triangle"></i>
                <span> Instructors </span>
            </a>
            <ul class="sub-menu" aria-expanded="false">
                <li><a href="{{route("instructors.index")}}">View all</a></li>
                <li><a href="{{route("instructors.create")}}">Add New Instructor</a></li>
            </ul>
        </li>

        <li>
            <a href="javascript: void(0);" class="has-arrow">
                <i class="fas fa-exclamation-triangle"></i>
                <span> Courses </span>
            </a>
            <ul class="sub-menu" aria-expanded="false">
                <li><a href="{{route("courses.index")}}">View all</a></li>
                <li><a href="{{route("courses.create")}}">Add New Course</a></li>
            </ul>
        </li>

        <li>
            <a href="javascript: void(0);" class="has-arrow">
                <i class="fas fa-exclamation-triangle"></i>
                <span> Blogs </span>
            </a>
            <ul class="sub-menu" aria-expanded="false">
                <li><a href="{{route("blogs.index")}}">View all</a></li>
                <li><a href="{{route("blogs.create")}}">Add New Blog</a></li>
            </ul>
        </li>
        <li>
            <a href="javascript: void(0);" class="has-arrow">
                <i class="fas fa-exclamation-triangle"></i>
                <span> Slider </span>
            </a>
            <ul class="sub-menu" aria-expanded="false">
                <li><a href="{{route("blogs.index")}}">View all</a></li>
                <li><a href="{{route("blogs.create")}}">Add New Blog</a></li>
            </ul>
        </li>

    </ul>
</div>
<!-- Sidebar -->
