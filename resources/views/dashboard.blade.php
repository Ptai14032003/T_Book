@extends('templates.layout_admin')
@section('content')
<div class="header">
    <div class="left">
        <h1>Dashboard</h1>
        <ul class="breadcrumb">
            <li><a href="#">
                    Dashboard
                </a></li>
            /
            <li><a href="#" class="active">Shop</a></li>
        </ul>
    </div>

</div>

<!-- Insights -->
<ul class="insights">
    <li>
        <i class='bx bx-calendar-check'></i>
        <span class="info">
            <h3>
                1,074
            </h3>
            <p>Paid Order</p>
        </span>
    </li>
    <li><i class='bx bx-group'></i>
        <span class="info">
            <h3>
                3,944
            </h3>
            <p>New User</p>
        </span>
    </li>
    <li><i class='bx bx-book-alt'></i>
        <span class="info">
            <h3>
                14,721
            </h3>
            <p>Books Sold</p>
        </span>
    </li>
    <li><i class='bx bx-dollar-circle'></i>
        <span class="info">
            <h3>
                $6,742
            </h3>
            <p>Total Sales</p>
        </span>
    </li>
</ul>
<!-- End of Insights -->

<div class="bottom-data">
    <!-- New Users -->
    <div class="orders">
        <div class="header">
            <i class='bx bx-group'></i>
            <h3>Recently Registered Users</h3>
            <i class='bx bx-filter'></i>
            <i class='bx bx-plus'></i>
        </div>
        <table>
            <thead>
                <tr>
                    <th>User Name</th>
                    <th>Image</th>
                    <th>Birthday</th>
                    <th>Phone Number</th>
                    <th>Gender</th>
                    <th>Created at</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>
                        <p>John Doe</p>
                    </td>
                    <td>
                        <img src="images/profile-1.jpg">
                    </td>
                    <td>14-03-2003</td>
                    <td>0787131644</td>
                    <td>Nam</td>
                    <td>04-10-2023</td>
                </tr>
                <tr>
                    <td>
                        <p>John Doe</p>
                    </td>
                    <td>
                        <img src="images/profile-1.jpg">
                    </td>
                    <td>14-03-2003</td>
                    <td>0787131644</td>
                    <td>Nam</td>
                    <td>04-10-2023</td>
                </tr>
                <tr>
                    <td>
                        <p>John Doe</p>
                    </td>
                    <td>
                        <img src="images/profile-1.jpg">
                    </td>
                    <td>14-03-2003</td>
                    <td>0787131644</td>
                    <td>Nam</td>
                    <td>04-10-2023</td>
                </tr>
            </tbody>
        </table>
    </div>

    <!-- End of New Users-->
    <div class="orders">
        <div class="header">
            <i class='bx bx-receipt'></i>
            <h3>Recent Orders</h3>
            <i class='bx bx-filter'></i>
            <i class='bx bx-search'></i>
        </div>
        <table>
            <thead>
                <tr>
                    <th>User</th>
                    <th>Order Date</th>
                    <th>Status</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>
                        <img src="images/profile-1.jpg">
                        <p>John Doe</p>
                    </td>
                    <td>14-08-2023</td>
                    <td><span class="status completed">Completed</span></td>
                </tr>
                <tr>
                    <td>
                        <img src="images/profile-1.jpg">
                        <p>John Doe</p>
                    </td>
                    <td>14-08-2023</td>
                    <td><span class="status pending">Pending</span></td>
                </tr>
                <tr>
                    <td>
                        <img src="images/profile-1.jpg">
                        <p>John Doe</p>
                    </td>
                    <td>14-08-2023</td>
                    <td><span class="status process">Processing</span></td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
@endsection