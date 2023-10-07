@php
    $id = Auth::user()->id;
    $userid = App\Models\User::find($id);
    $status = $userid->status;
@endphp

<div class="left-side-menu">

    <div class="h-100" data-simplebar>

        <!-- User box -->
        <div class="user-box text-center">
            <img src="assets/images/users/user-1.jpg" alt="user-img" title="Mat Helme" class="rounded-circle avatar-md">
            <div class="dropdown">
                <a href="javascript: void(0);" class="text-dark dropdown-toggle h5 mt-2 mb-1 d-block"
                    data-bs-toggle="dropdown">Geneva Kennedy</a>
                <div class="dropdown-menu user-pro-dropdown">

                    <!-- item-->
                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                        <i class="fe-user me-1"></i>
                        <span>My Account</span>
                    </a>

                    <!-- item-->
                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                        <i class="fe-settings me-1"></i>
                        <span>Settings</span>
                    </a>

                    <!-- item-->
                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                        <i class="fe-lock me-1"></i>
                        <span>Lock Screen</span>
                    </a>

                    <!-- item-->
                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                        <i class="fe-log-out me-1"></i>
                        <span>Logout</span>
                    </a>

                </div>
            </div>
            <p class="text-muted">Admin Head</p>
        </div>

        <!--- Sidemenu -->
        <div id="sidebar-menu">

            <ul id="side-menu">

                <li class="menu-title">Navigation</li>

                <li>
                <li>
                    <a href="{{ route('admin.dashboard') }}">Dashboard</a>
                </li>
                </li>

                <li class="menu-title mt-2">All Menu</li>

                @if ($status == 'active')
                    {{-- Category --}}
                    <li>
                        <a href="#category" data-bs-toggle="collapse">
                            <i class="icon-layers"></i>
                            <span> Category </span>
                            <span class="menu-arrow"></span>
                        </a>
                        <div class="collapse" id="category">
                            <ul class="nav-second-level">
                                <li>
                                    <a href="{{ route('all.category') }}">All Category</a>
                                </li>
                                <li>
                                    <a href="{{ route('add.category') }}">Add Category</a>
                                </li>
                            </ul>
                        </div>
                    </li>

                    {{-- Sub - Category --}}
                    <li>
                        <a href="#sub_category" data-bs-toggle="collapse">
                            <i class="icon-layers"></i>
                            <span> Sub-Category </span>
                            <span class="menu-arrow"></span>
                        </a>
                        <div class="collapse" id="sub_category">
                            <ul class="nav-second-level">
                                <li>
                                    <a href="{{ route('all.subcategory') }}">All Sub Category</a>
                                </li>
                                <li>
                                    <a href="{{ route('add.subcategory') }}">Add Sub Category</a>
                                </li>
                            </ul>
                        </div>
                    </li>

                    {{-- Setting --}}
                    <li>
                        <a href="#setting" data-bs-toggle="collapse">
                            <i class="icon-layers"></i>
                            <span> Admim </span>
                            <span class="menu-arrow"></span>
                        </a>
                        <div class="collapse" id="setting">
                            <ul class="nav-second-level">
                                <li>
                                    <a href="{{ route('all.admin') }}">All Admin</a>
                                </li>
                                <li>
                                    <a href="{{ route('add.admin') }}">Add Admin</a>
                                </li>
                            </ul>
                        </div>
                    </li>

                    {{--  banner  --}}
                    <li>
                        <a href="#banner" data-bs-toggle="collapse">
                            <i class="mdi mdi-cart-outline"></i>
                            <span> Banner Setting </span>
                            <span class="menu-arrow"></span>
                        </a>
                        <div class="collapse" id="banner">
                            <ul class="nav-second-level">
                                <li>
                                    <a href="{{ route('all.banners') }}">All Banner</a>
                                </li>


                            </ul>
                        </div>
                    </li>

                    {{-- News Post --}}
                    <li>
                        <a href="#post" data-bs-toggle="collapse">
                            <i class="icon-layers"></i>
                            <span>News Post</span>
                            <span class="menu-arrow"></span>
                        </a>
                        <div class="collapse" id="post">
                            <ul class="nav-second-level">
                                <li>
                                    <a href="{{ route('all.news.post') }}">All News Post</a>
                                </li>
                                <li>
                                    <a href="{{ route('add.news.post') }}">Add News Post</a>
                                </li>
                            </ul>
                        </div>
                    </li>

                    {{-- News Post --}}
                    <li>
                        <a href="#photo" data-bs-toggle="collapse">
                            <i class="icon-layers"></i>
                            <span>Photo</span>
                            <span class="menu-arrow"></span>
                        </a>
                        <div class="collapse" id="photo">
                            <ul class="nav-second-level">
                                <li>
                                    <a href="{{ route('all.photo.gallery') }}">All photo</a>
                                </li>
                                <li>
                                    <a href="{{ route('add.news.post') }}">Add photo</a>
                                </li>
                            </ul>
                        </div>
                    </li>

                    {{--  Video Setting  --}}
                    <li>
                        <a href="#video" data-bs-toggle="collapse">
                            <i class="mdi mdi-email-multiple-outline"></i>
                            <span> Video Setting </span>
                            <span class="menu-arrow"></span>
                        </a>
                        <div class="collapse" id="video">
                            <ul class="nav-second-level">
                                <li>
                                    <a href="{{ route('all.video.gallery') }}">Video Gallery</a>
                                </li>

                            </ul>
                        </div>
                    </li>

                    {{-- live_tv --}}
                    <li>
                        <a href="#live_tv" data-bs-toggle="collapse">
                            <i class="mdi mdi-email-multiple-outline"></i>
                            <span> Live Tv Setting </span>
                            <span class="menu-arrow"></span>
                        </a>
                        <div class="collapse" id="live_tv">
                            <ul class="nav-second-level">
                                <li>
                                    <a href="{{ route('update.live.tv') }}">Update Live TV</a>
                                </li>

                            </ul>
                        </div>
                    </li>

                    {{-- Review Setting --}}
                    <li>
                        <a href="#review" data-bs-toggle="collapse">
                            <i class="mdi mdi-email-multiple-outline"></i>
                            <span> Review Setting </span>
                            <span class="menu-arrow"></span>
                        </a>
                        <div class="collapse" id="review">
                            <ul class="nav-second-level">
                                <li>
                                    <a href="{{ route('pending.review') }}">Pending Review</a>
                                </li>

                                <li>
                                    <a href="{{ route('approve.review') }}">Approve Review</a>
                                </li>

                            </ul>
                        </div>
                    </li>

                    {{-- seo --}}
                    <li>
                        <a href="#seo" data-bs-toggle="collapse">
                            <i class="mdi mdi-email-multiple-outline"></i>
                            <span> Seo Setting </span>
                            <span class="menu-arrow"></span>
                        </a>
                        <div class="collapse" id="seo">
                            <ul class="nav-second-level">
                                <li>
                                    <a href="{{ route('seo.setting') }}">Update Seo </a>
                                </li>



                            </ul>
                        </div>
                    </li>

                    {{-- permission --}}

                    <li>
                        <a href="#permission" data-bs-toggle="collapse">
                            <i class="mdi mdi-text-box-multiple-outline"></i>
                            <span> Roles And Permission </span>
                            <span class="menu-arrow"></span>
                        </a>
                        <div class="collapse" id="permission">
                            <ul class="nav-second-level">
                                <li>
                                    <a href="{{ route('all.permission') }}">All Permission</a>
                                </li>
                                <li>
                                    <a href="{{ route('all.roles') }}">All Roles</a>
                                </li>

                            </ul>
                        </div>
                    </li>
                @else
                @endif




            </ul>
        </div>
        </li>
        </ul>

    </div>
    <!-- End Sidebar -->

    <div class="clearfix"></div>

</div>
<!-- Sidebar -left -->

</div>
