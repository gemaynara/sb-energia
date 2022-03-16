<div class="fixed-sidebar-left">
    <ul class="nav navbar-nav side-nav nicescroll-bar">
        @if(!auth()->user()->is_admin)
            <li>
                <a href="{{route('home')}}">
                    <div class="pull-left"><i class="ti-money mr-20"></i><span class="right-nav-text">Faturas</span>
                    </div>
                    <div class="clearfix"></div>
                </a>
            </li>
        @else
            <li>
                <a href="{{route('home')}}">
                    <div class="pull-left"><i class="ti-dashboard mr-20"></i><span
                            class="right-nav-text">Dashboard</span>
                    </div>
                    <div class="clearfix"></div>
                </a>
            </li>
            <li>
                <a href="javascript:void(0);" data-toggle="collapse" data-target="#ecom_dr">
                    <div class="pull-left"><i class="ti-money  mr-20"></i><span
                            class="right-nav-text">Controle</span></div>
                    <div class="pull-right"><i class="ti-angle-down"></i></div>
                    <div class="clearfix"></div>
                </a>
                <ul id="ecom_dr" class="collapse collapse-level-1">
                    <li>
                        <a href="{{route('clients.index')}}">Clientes</a>
                    </li>
                    <li>
                        <a href="{{route('distributors.index')}}">Distribuidoras de Energia</a>
                    </li>

                </ul>
            </li>


            <li>
                <a href="javascript:void(0);" data-toggle="collapse" data-target="#ui_dr">
                    <div class="pull-left"><i class="ti-layout-grid3  mr-20"></i><span
                            class="right-nav-text">Gestão</span></div>
                    <div class="pull-right"><i class="ti-angle-down "></i></div>
                    <div class="clearfix"></div>
                </a>
                <ul id="ui_dr" class="collapse collapse-level-1">
                    <li>
                        <a href="panels-wells.html">Faturas</a>
                    </li>

                </ul>
            </li>
    </ul>
    @endif
</div>
