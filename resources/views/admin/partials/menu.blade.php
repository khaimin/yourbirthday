<aside class="left-side sidebar-offcanvas">
                        <!-- sidebar: style can be found in sidebar.less -->
                        <section class="sidebar">
                            <!-- Sidebar user panel -->
                            <div class="user-panel">
                                <div class="pull-left image">
                                    <img src="{{ url('public/admin/img/26115.jpg') }}" class="img-circle" alt="User Image" />
                                </div>
                                <div class="pull-left info">
                                    <p>Hello, {{Auth::user()->name}}</p>

                                    <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
                                </div>
                            </div>
                            <!-- form tim kiem -->
                            <form action="#" method="get" class="sidebar-form">
                                <div class="input-group">
                                    <input type="text" name="q" class="form-control" placeholder="Search..."/>
                                    <span class="input-group-btn">
                                        <button type='submit' name='seach' id='search-btn' class="btn btn-flat"><i class="fa fa-search"></i></button>
                                    </span>
                                </div>
                            </form>
                            <!-- /.search form -->
                            <!-- sidebar menu: : style can be found in sidebar.less -->
                            <ul class="sidebar-menu">
                                <li class="active">
                                    <a href="{{ route('admin.index') }}">
                                        <i class="fa fa-dashboard"></i> <span>Dashboard</span>
                                    </a>
                                </li>
                                @if(Auth::user()->rule==1)
                                <li>
                                    <a href="{{ route('admin.loaisanpham.index') }}">
                                        <i class="fa fa-gavel"></i> <span>Loại sản phẩm</span>
                                    </a>
                                </li>
                                @endif
                                <li>
                                    <a href="{{ route('admin.sanpham.index') }}">
                                        <i class="fa fa-globe"></i> <span>Sản phẩm</span>
                                    </a>
                                </li>
                                @if(Auth::user()->rule==1)
                                <li>
                                    <a href="simple.html">
                                        <i class="fa fa-glass"></i> <span>Bài viết</span>
                                    </a>
                                </li>
                                @endif
                            </ul>
                        </section>
                        <!-- /.sidebar -->
                        
                    </aside>