  <!-- Menu Start -->
  <div class="menu-container flex-grow-1">
    <ul id="menu" class="menu">
        <li>
            <a href="{{ route('admin.dashboard') }}">
                <i data-cs-icon="shop" class="icon" data-cs-size="18"></i>
                <span class="label">Dashboard</span>
            </a>
        </li>
        <li>
            <a href="#categories" data-href="">
                <i data-cs-icon="cupcake" class="icon" data-cs-size="18"></i>
                <span class="label">Categories</span>
            </a>
            <ul id="categories">
                <li>
                    <a href="{{ route('category.index') }}">
                        <span class="label">List</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('category.create') }}">
                        <span class="label">Add New</span>
                    </a>
                </li>
            </ul>
        </li>
        <li>
            <a href="#products" data-href="">
                <i data-cs-icon="cupcake" class="icon" data-cs-size="18"></i>
                <span class="label">Products</span>
            </a>
            <ul id="products">
                <li>
                    <a href="{{ route('products.index') }}">
                        <span class="label">List</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('products.create') }}">
                        <span class="label">Add New</span>
                    </a>
                </li>
            </ul>
        </li>
        <li>
            <a href="#orders" data-href="Orders.html">
                <i data-cs-icon="cart" class="icon" data-cs-size="18"></i>
                <span class="label">Orders</span>
            </a>
            <ul id="orders">
                <li>
                    <a href="{{ route('admin.orderlist') }}">
                        <span class="label">List</span>
                    </a>
                </li>
                {{-- <li>
                    <a href="Orders.Detail.html">
                        <span class="label">Detail</span>
                    </a>
                </li> --}}
            </ul>
        </li>
        <li>
            <a href="#customers" data-href="Customers.html">
                <i data-cs-icon="user" class="icon" data-cs-size="18"></i>
                <span class="label">Customers</span>
            </a>
            <ul id="customers">
                <li>
                    <a href="{{ route('admin.customerlist') }}">
                        <span class="label">List</span>
                    </a>
                </li>
                {{-- <li>
                    <a href="Customers.Detail.html">
                        <span class="label">Detail</span>
                    </a>
                </li> --}}
            </ul>
        </li>
        <li>
            <a href="#testimonials" data-href="">
                <i data-cs-icon="user" class="icon" data-cs-size="18"></i>
                <span class="label">Testimonial</span>
            </a>
            <ul id="testimonials">
                <li>
                    <a href="{{ route('testimonial.index') }}">
                        <span class="label">List</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('testimonial.create') }}">
                        <span class="label">Add New</span>
                    </a>
                </li>
            </ul>
        </li>
        <li>
            <a href="#storefront" data-href="Storefront.html">
                <i data-cs-icon="screen" class="icon" data-cs-size="18"></i>
                <span class="label">Storefront</span>
            </a>
            <ul id="storefront">
                <li>
                    <a href="Storefront.Home.html">
                        <span class="label">Home</span>
                    </a>
                </li>
                <li>
                    <a href="Storefront.Filters.html">
                        <span class="label">Filters</span>
                    </a>
                </li>
                <li>
                    <a href="Storefront.Categories.html">
                        <span class="label">Categories</span>
                    </a>
                </li>
                <li>
                    <a href="Storefront.Detail.html">
                        <span class="label">Detail</span>
                    </a>
                </li>
                <li>
                    <a href="Storefront.Cart.html">
                        <span class="label">Cart</span>
                    </a>
                </li>
                <li>
                    <a href="Storefront.Checkout.html">
                        <span class="label">Checkout</span>
                    </a>
                </li>
                <li>
                    <a href="Storefront.Invoice.html">
                        <span class="label">Invoice</span>
                    </a>
                </li>
            </ul>
        </li>
        <li>
            {{-- <a href="{{ route('token.index') }}" data-href="">
                <i data-cs-icon="user" class="icon" data-cs-size="18"></i>
                <span class="label">Token</span>
            </a>
            <ul id="Token">
                <li>
                    <a href="{{ route('token.index') }}">
                        <span class="label">List</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('token.create') }}">
                        <span class="label">Add New</span>
                    </a>
                </li>
            </ul> --}}
            {{-- <a href="{{ route('token.create') }}">
                <i data-cs-icon="tag" class="icon" data-cs-size="18"></i>
                <span class="label">Token</span>
            </a> --}}
        </li>
        <li>
            <a href="{{ route('coupon.index') }}">
                <i data-cs-icon="tag" class="icon" data-cs-size="18"></i>
                <span class="label">Coupon Discount</span>
            </a>
        </li>
        <li>
            <a href="{{ route('coupon2.index') }}">
                <i data-cs-icon="tag" class="icon" data-cs-size="18"></i>
                <span class="label">Token</span>
            </a>
        </li>
        <li>
            <a href="Settings.html">
                <i data-cs-icon="gear" class="icon" data-cs-size="18"></i>
                <span class="label">Settings</span>
            </a>
        </li>
    </ul>
</div>
<!-- Menu End -->
