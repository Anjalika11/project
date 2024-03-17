@extends('layout.layout')
@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card card-default">
                <div class="card-header">
                    <h2>Products Inventory</h2>
                    <div class="dropdown">
                        <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown"
                            aria-haspopup="true" aria-expanded="false">
                            Action
                        </a>

                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuLink">
                            <a class="dropdown-item" href="#">Setup-Loan</a>

                        </div>
                    </div>
                </div>
                <div class="card-body" style="overflow-x: auto; -webkit-overflow-x: auto;">
                    <table id="example" class="table table-hover table-product" style="width: 100%; ">
                        <thead>
                            <tr>
                                <th></th>
                                <th class="font_size">Product Name</th>
                                <th>ID</th>
                                <th>Qty</th>
                                <th>Variants</th>
                                <th>Committed</th>
                                <th>Daily Sale</th>
                                <th>Variants</th>
                                <th>Committed</th>
                                <th>Daily Sale</th>
                                <th>Variants</th>
                                <th>Committed</th>
                                <th>Daily Sale</th>
                                <th>Sold</th>
                                <th>In Stock</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="py-0">
                                    <img src="images/products/products-xs-01.jpg" alt="Product Image" />
                                </td>
                                <td>Coach Swagger</td>
                                <td>24541</td>
                                <td>27</td>
                                <td>1</td>
                                <td>2</td>
                                <td>27</td>
                                <td>1</td>
                                <td>2</td>
                                <td>27</td>
                                <td>1</td>
                                <td>2</td>
                                <td>
                                    <div id="tbl-chart-01"></div>
                                </td>
                                <td>4</td>
                                <td>18</td>
                                <td>
                                    <div class="dropdown">
                                        <a class="dropdown-toggle icon-burger-mini" href="#" role="button"
                                            id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true"
                                            aria-expanded="false">
                                        </a>

                                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuLink">
                                            <a class="dropdown-item" href="#">Action</a>
                                            <a class="dropdown-item" href="#">Another action</a>
                                            <a class="dropdown-item" href="#">Something else here</a>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td class="py-0">
                                    <img src="images/products/products-xs-01.jpg" alt="Product Image" />
                                </td>
                                <td>Coach Swagger</td>
                                <td>24541</td>
                                <td>27</td>
                                <td>1</td>
                                <td>2</td>
                                <td>27</td>
                                <td>1</td>
                                <td>2</td>
                                <td>27</td>
                                <td>1</td>
                                <td>2</td>
                                <td>
                                    <div id="tbl-chart-01"></div>
                                </td>
                                <td>4</td>
                                <td>18</td>
                                <td>
                                    <div class="dropdown">
                                        <a class="dropdown-toggle icon-burger-mini" href="#" role="button"
                                            id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true"
                                            aria-expanded="false">
                                        </a>

                                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuLink">
                                            <a class="dropdown-item" href="#">Action</a>
                                            <a class="dropdown-item" href="#">Another action</a>
                                            <a class="dropdown-item" href="#">Something else here</a>
                                        </div>
                                    </div>
                                </td>
                            </tr>

                            <tr>
                                <td class="py-0">
                                    <img src="images/products/products-xs-01.jpg" alt="Product Image" />
                                </td>
                                <td>Coach Swagger</td>
                                <td>24541</td>
                                <td>27</td>
                                <td>1</td>
                                <td>2</td>
                                <td>27</td>
                                <td>1</td>
                                <td>2</td>
                                <td>27</td>
                                <td>1</td>
                                <td>2</td>
                                <td>
                                    <div id="tbl-chart-01"></div>
                                </td>
                                <td>4</td>
                                <td>18</td>
                                <td>
                                    <div class="dropdown">
                                        <a class="dropdown-toggle icon-burger-mini" href="#" role="button"
                                            id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true"
                                            aria-expanded="false">
                                        </a>

                                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuLink">
                                            <a class="dropdown-item" href="#">Action</a>
                                            <a class="dropdown-item" href="#">Another action</a>
                                            <a class="dropdown-item" href="#">Something else here</a>
                                        </div>
                                    </div>
                                </td>
                            </tr>

                            <tr>
                                <td class="py-0">
                                    <img src="images/products/products-xs-01.jpg" alt="Product Image" />
                                </td>
                                <td>Coach Swagger</td>
                                <td>24541</td>
                                <td>27</td>
                                <td>1</td>
                                <td>2</td>
                                <td>27</td>
                                <td>1</td>
                                <td>2</td>
                                <td>27</td>
                                <td>1</td>
                                <td>2</td>
                                <td>
                                    <div id="tbl-chart-01"></div>
                                </td>
                                <td>4</td>
                                <td>18</td>
                                <td>
                                    <div class="dropdown">
                                        <a class="dropdown-toggle icon-burger-mini" href="#" role="button"
                                            id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true"
                                            aria-expanded="false">
                                        </a>

                                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuLink">
                                            <a class="dropdown-item" href="#">Action</a>
                                            <a class="dropdown-item" href="#">Another action</a>
                                            <a class="dropdown-item" href="#">Something else here</a>
                                        </div>
                                    </div>
                                </td>
                            </tr>

                            <tr>
                                <td class="py-0">
                                    <img src="images/products/products-xs-01.jpg" alt="Product Image" />
                                </td>
                                <td>Coach Swagger</td>
                                <td>24541</td>
                                <td>27</td>
                                <td>1</td>
                                <td>2</td>
                                <td>27</td>
                                <td>1</td>
                                <td>2</td>
                                <td>27</td>
                                <td>1</td>
                                <td>2</td>
                                <td>
                                    <div id="tbl-chart-01"></div>
                                </td>
                                <td>4</td>
                                <td>18</td>
                                <td>
                                    <div class="dropdown">
                                        <a class="dropdown-toggle icon-burger-mini" href="#" role="button"
                                            id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true"
                                            aria-expanded="false">
                                        </a>

                                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuLink">
                                            <a class="dropdown-item" href="#">Action</a>
                                            <a class="dropdown-item" href="#">Another action</a>
                                            <a class="dropdown-item" href="#">Something else here</a>
                                        </div>
                                    </div>
                                </td>
                            </tr>

                            <tr>
                                <td class="py-0">
                                    <img src="images/products/products-xs-01.jpg" alt="Product Image" />
                                </td>
                                <td>Coach Swagger</td>
                                <td>24541</td>
                                <td>27</td>
                                <td>1</td>
                                <td>2</td>
                                <td>27</td>
                                <td>1</td>
                                <td>2</td>
                                <td>27</td>
                                <td>1</td>
                                <td>2</td>
                                <td>
                                    <div id="tbl-chart-01"></div>
                                </td>
                                <td>4</td>
                                <td>18</td>
                                <td>
                                    <div class="dropdown">
                                        <a class="dropdown-toggle icon-burger-mini" href="#" role="button"
                                            id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true"
                                            aria-expanded="false">
                                        </a>

                                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuLink">
                                            <a class="dropdown-item" href="#">Action</a>
                                            <a class="dropdown-item" href="#">Another action</a>
                                            <a class="dropdown-item" href="#">Something else here</a>
                                        </div>
                                    </div>
                                </td>
                            </tr>


                            <tr>
                                <td class="py-0">
                                    <img src="images/products/products-xs-02.jpg" alt="Product Image" />
                                </td>
                                <td>Toddler Shoes, Gucci Watch</td>
                                <td>24542</td>
                                <td>18</td>
                                <td>7</td>
                                <td>5</td>
                                <td>27</td>
                                <td>1</td>
                                <td>2</td>
                                <td>27</td>
                                <td>1</td>
                                <td>2</td>
                                <td>
                                    <div id="tbl-chart-02"></div>
                                </td>
                                <td>1</td>
                                <td>14</td>
                                <td>
                                    <div class="dropdown">
                                        <a class="dropdown-toggle icon-burger-mini" href="#" role="button"
                                            id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true"
                                            aria-expanded="false">
                                        </a>

                                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuLink">
                                            <a class="dropdown-item" href="#">Action</a>
                                            <a class="dropdown-item" href="#">Another action</a>
                                            <a class="dropdown-item" href="#">Something else here</a>
                                        </div>
                                    </div>
                                </td>
                            </tr>


                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
@include('layout.footerlink')
<script>
    $(document).ready(function() {
        $('#example').DataTable({
            dom: "<'row'<'col-sm-12 col-md-4'l><'col-sm-12 col-md-4'B><'col-sm-12 col-md-4'f>>" +
                "<'row'<'col-sm-12'tr>>" +
                "<'row'<'col-sm-12 col-md-5'i><'col-sm-12 col-md-7'p>>",
            buttons: [
                'copy', 'csv', 'excel', 'pdf', 'print'
            ],
            responsive: true,
            processing: true,
            scrollX: true,
        });
    });
</script>
