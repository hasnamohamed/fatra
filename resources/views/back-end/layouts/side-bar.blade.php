
<div class="sidebar" data-color="purple" data-background-color="black" data-image="/assets/img/sidebar-2.jpg">
    <!--
    Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger"

    Tip 2: you can also add an image using data-image tag
-->
    <div class="logo">
        <a href="http://www.creative-tim.com" class="simple-text logo-normal">
            Fatura Blog
        </a>
    </div>
    <div class="sidebar-wrapper">
        <ul class="nav">
            <li class="nav-item active  ">
                <a class="nav-link" href="{{route('admin.home')}}">
                    <i class="material-icons">dashboard</i>
                    <p>Dashboard</p>
                </a>
            </li>
            <li class="nav-item active  ">
                <a class="nav-link" href="{{route('users.index')}}">
                    <i class="material-icons">groups</i>
                    <p>Users</p>
                </a>
            </li>
            <li class="nav-item active  ">
                <a class="nav-link" href="{{route('posts.index')}}">
                    <i class="material-icons">receipt_long</i>
                    <p>Posts</p>
                </a>
            </li>
            <!-- your sidebar here -->
        </ul>
    </div>
</div>
