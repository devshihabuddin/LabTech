<div id="left-sidebar" class="sidebar">
        <div class="sidebar-scroll">
            <div class="user-account">
                <img src="{{asset('backend/assets/images/xs/avatar5.jpg')}}" class="rounded-circle user-photo" alt="User Profile Picture">
                <div class="dropdown">
                    <span>Welcome,</span>
                    
                    <a href="javascript:void(0);" class="dropdown-toggle user-name"><strong>{{ucfirst(auth()->user()->username)}}</strong></a>
                    
                </div>
            </div>
                
            <!-- Tab panes -->
            <div class="tab-content p-l-0 p-r-0">
                <div class="tab-pane active" id="menu">
                    <nav id="left-sidebar-nav" class="sidebar-nav">
                        <ul id="main-menu" class="metismenu">                            
                            <li class="active">
                                <a href="{{route('home')}}"><i class="icon-home"></i> <span>Dashboard</span></a>
                            </li>
                           
                            <li>
                                <a href="#App" class="has-arrow"><i class="icon-picture"></i> <span>Sliders Management</span></a>
                                <ul>
                                    <li><a href="{{route('sliders.index')}}">All Sliders</a></li>
                                    <li><a href="{{route('sliders.create')}}">Add Slider</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="#App" class="has-arrow"><i class="icon-list"></i> <span>Category Management</span></a>
                                <ul>
                                    <li><a href="{{route('category.index')}}">All Category</a></li>
                                    <li><a href="{{route('category.create')}}">Add Category</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="#App" class="has-arrow"><i class="icon-list"></i><span>Sub-Category Manage</span></a>
                                <ul>
                                    <li><a href="{{route('subcategory.index')}}">All Sub-Category</a></li>
                                    <li><a href="{{route('subcategory.create')}}">Add Sub-Category</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="#App" class="has-arrow"><i class="icon-briefcase"></i> <span>Products Management</span></a>
                                <ul>
                                    <li><a href="{{route('products.index')}}">All Products</a></li>
                                    <li><a href="{{route('products.create')}}">Add Product</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="#App" class="has-arrow"><i class="icon-briefcase"></i> <span>Gallery Management</span></a>
                                <ul>
                                    <li><a href="{{route('gallery.index')}}">All Gallery</a></li>
                                    <li><a href="{{route('gallery.create')}}">Add Gallery</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="#App" class="has-arrow"><i class="icon-handbag"></i> <span>Client Management</span></a>
                                <ul>
                                    <li><a href="{{route('clients.index')}}">All Client</a></li>
                                    <li><a href="{{route('clients.create')}}">Add CLient</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="{{route('clientmessage.index')}}" class="has-arrow"><i class="icon-handbag"></i> <span>Client Messages</span></a>
                            </li>
                            <li>
                                <a href="#App" class="has-arrow"><i class="icon-handbag"></i> <span>Footer Contact</span></a>
                                <ul>
                                    <li><a href="{{route('footercontact.index')}}">All Footer Contact</a></li>
                                    <li><a href="{{route('footercontact.create')}}">Add Footer Contact</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="#App" class="has-arrow"><i class="icon-handbag"></i> <span> Traning Management</span></a>
                                <ul>
                                    <li><a href="{{route('traning.index')}}">All Traning</a></li>
                                    <li><a href="{{route('traning.create')}}">Add Traning</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="#App" class="has-arrow"><i class="icon-handbag"></i> <span> Contact Us Page</span></a>
                                <ul>
                                    <li><a href="{{route('contactpage.index')}}">All Contact</a></li>
                                    <li><a href="{{route('contactpage.create')}}">Add Contact</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="#App" class="has-arrow"><i class="icon-info"></i> <span>About Us</span></a>
                                <ul>
                                    <li><a href="{{route('abouts.index')}}">About Us</a></li>
                                    <li><a href="{{route('ceotalks.index')}}">CEO Talks</a></li>
                                </ul>
                            </li>
                            <!-- <li>
                                <a href="{{route('abouts.index')}}"><i class="icon-info"></i> <span>About Us</span></a>
                            </li> -->
                            <li>
                                <a href="#App" class="has-arrow"><i class="icon-user"></i> <span>General Setting</span></a>
                                <ul>
                                    <li><a href="{{route('settings.create')}}">Add Setting</a></li>
                                    <li><a href="{{route('settings.index')}}">All Setting</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="#App" class="has-arrow"><i class="icon-user"></i> <span>User Management</span></a>
                                <ul>
                                    <li><a href="{{route('user.index')}}">All User</a></li>
                                    <li><a href="{{route('user.create')}}">Create User</a></li>
                                </ul>
                            </li>
                            
                    </ul>
                </div>    
            </div>          
        </div>
    </div>