{{-- Side Navigation --}}
<div class="col-md-2">
    <div class="sidebar content-box" style="display: block;">
        <ul class="nav">
            <!-- Main menu -->
            <li class="current"><a href="{{route('admin.index')}}"><i class="glyphicon glyphicon-home"></i>
                    Dashboard</a></li>
            <li class="submenu">
                <a href="#">
                    <i class="glyphicon glyphicon-list"></i> Stock
                    <span class="caret pull-right"></span>
                </a>
                <!-- Sub menu -->
                <ul>
                    <li><a href="{{route('stock.index')}}">Stock Listing</a></li>
                </ul>
                <ul>
                    <li><a href="{{route('stock.create')}}">Add stock</a></li>
                </ul>
            </li>
            <li class="submenu">
                <a href="#">
                    <i class="glyphicon glyphicon-list"></i> Product Categories
                    <span class="caret pull-right"></span>
                </a>
                <!-- Sub menu -->
                <ul>
                    <li><a href="{{route('product.index')}}">Categories</a></li>
                </ul>
                <ul>
                    <li><a href="{{route('product.create')}}">Add Category</a></li>
                </ul>
            </li>
            <li class="submenu">
                <a href="#">
                    <i class="glyphicon glyphicon-list"></i> Product Items
                    <span class="caret pull-right"></span>
                </a>
                <!-- Sub menu -->
                <ul>
                    <li><a href="{{route('productItem.index')}}">Product Items</a></li>
                </ul>
                <ul>
                    <li><a href="{{route('productItem.create')}}">Add Item</a></li>
                </ul>
            </li>
            <li>
                <a href="{{route('sorting.index')}}">
                    <i class="glyphicon glyphicon-list"></i> Sortings
                    {{--  <span class="caret pull-right"></span>  --}}
                </a>
            </li>
        </ul>
    </div>
</div> <!-- ADMIN SIDE NAV-->