
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <div class="sidebar">

        <!-- Brand Logo -->
        <a href="index3.html" class="brand-link">
            <i class="fa fa-bars"></i>
        <span class="brand-text font-weight-light"></span>
        </a>
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            @foreach ($menus as $menu)
                @include('backend.partials.menu_item',['item'=>$menu])
            @endforeach

        </ul>  
    </div>   
</aside>    
